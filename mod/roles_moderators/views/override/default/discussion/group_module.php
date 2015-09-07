<?php
///**
// * Latest forum posts
// *
// * @uses $vars['entity']
// */
//
//if ($vars['entity']->forum_enable == 'no') {
//	return true;
//}
//
//$group = $vars['entity'];
//
//
//$all_link = elgg_view('output/url', array(
//	'href' => "discussion/owner/$group->guid",
//	'text' => elgg_echo('link:view:all'),
//	'is_trusted' => true,
//));
//
//elgg_push_context('widgets');
//$options = array(
//	'type' => 'object',
//	'subtype' => 'groupforumtopic',
//	'container_guid' => $group->getGUID(),
//	'limit' => 3,
//	'full_view' => false,
//	'pagination' => false,
//);
//$content = elgg_list_entities($options);
//elgg_pop_context();
//
//if (!$content) {
//	$content = '<p>' . elgg_echo('discussion:none') . '</p>';
//}
//
////if (elgg_is_admin_logged_in())
////{
//
//
//echo elgg_view('groups/profile/module', array(
//	'title' => elgg_echo('discussion:group'),
//	'content' => $content,
//	'all_link' => $all_link,
//
//));
//}
//else
//{
//echo elgg_view('groups/profile/module', array(
//	'title' => elgg_echo('discussion:group'),
//	'content' => $content,
//	'all_link' => $all_link,
//
//));
//}

