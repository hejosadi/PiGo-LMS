<?php
echo '<div>';
echo elgg_view('input/text', array(
	'name' => 'q',
	'placeholder' => elgg_echo('srokap_plugin_installer:search:q:placeholder'),
	'value' => get_input('q'),
	'class' => 'elgg-autofocus',
));
echo '</div>';

//category
echo '<div>';
echo '<label>'.elgg_echo('srokap_plugin_installer:search:category').'</label> ';
echo elgg_view('input/dropdown', array(
	'name' => 'category',
	'options_values' => srokap_plugin::getCategoriesOptionsValues(),
	'value' => get_input('category', ''),
));
echo '</div>';

//sorting
echo '<div>';
echo '<label>'.elgg_echo('sort').'</label> ';
echo elgg_view('input/dropdown', array(
		'name' => 'sort',
		'options_values' => array(
				'relevance' => elgg_echo('search:sort:by:relevance'),
				'created' => elgg_echo('search:sort:by:created'),
				'updated' => elgg_echo('search:sort:by:updated'),
		),
		'value' => get_input('sort', 'created'),
));
echo '</div>';
