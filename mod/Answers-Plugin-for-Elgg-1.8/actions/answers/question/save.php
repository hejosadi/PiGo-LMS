<?php
/**
 * Save a question action
 */

// Get input data
$title = get_input('title');
$description = get_input('description');
$tags = get_input('tags');
$container_guid = (int) get_input('container_guid');
$guid = (int) get_input('guid');
$access_id = get_input('access_id');

$user_guid = elgg_get_logged_in_user_guid();
if (is_null($access_id)){
	$access_id= get_default_access($user_guid);
	$sysmsg=" failed to get access id";
}
if (!can_write_to_container($user_guid, $container_guid)) {
	register_error(elgg_echo('answers:error'));
	forward(REFERER);
}

elgg_make_sticky_form('question');

// Make sure the title / description aren't blank
if (empty($title)) {
	register_error(elgg_echo('answers:question:blank'));
	forward(REFERER);
}

// Otherwise, save the question
if ($guid) {
	$question = get_entity($guid);
	$new = false;
} else {
	$question = new ElggObject();
	$question->subtype = 'question';
	$new = true;
}
$question->access_id = $access_id;
$question->title = $title;
$question->description = $description;
$question->tags = string_to_tag_array($tags);
$question->container_guid = $container_guid;

if ($question->save()) {
	elgg_clear_sticky_form('question');
	system_message(elgg_echo('answers:question:posted').$sysmsg);

	if ($new) { // only add river item when this is a new question
		add_to_river('river/object/question/create', 'create', $user_guid, $question->guid);
	}

	forward($question->getURL());
} else {
	register_error(elgg_echo('answers:error'));
	forward(REFERER);
}