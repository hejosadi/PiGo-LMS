<?php
/**
 * Answers widget edit view
 */

if (!isset($vars['entity']->num_display)) {
	$vars['entity']->num_display = 4;
}

$params = array(
	'name' => 'params[num_display]',
	'value' => $vars['entity']->num_display,
	'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
);
$num_dropdown = elgg_view('input/dropdown', $params);

?>
<div>
	<?php echo elgg_echo('answers:widget:numbertodisplay'); ?>:
	<?php echo $num_dropdown; ?>
</div>

<?php

if (!isset($vars['entity']->content_type)) {
	$vars['entity']->content_type = 'site';
}

//added by Jon - fix for wrong widget reference to 'mine'
if (elgg_instanceof(elgg_get_page_owner_entity(), 'group')) {

	$mine=elgg_echo('groups:group');
} else {
	$mine=elgg_echo('mine');
}

$params = array(
	'name' => 'params[content_type]',
	'value' => $vars['entity']->content_type,
	'options_values' => array(
		'site' => elgg_echo('site'),
		'mine' => $mine,
		'friends' => elgg_echo('friends'),
	),
);
$type_dropdown = elgg_view('input/dropdown', $params);

?>
<div>
	<?php echo elgg_echo('answers:widget:type'); ?>:
	<?php echo $type_dropdown; ?>
</div>
