<?php
admin_gatekeeper();

$query = get_input('q');
$category = get_input('category', '');
$sort = get_input('sort', 'created');
$order = get_input('order');
$limit = get_input('limit', 10);
$offset = get_input('offset', 0);
$noStats = get_input('no_stats', false);

$mt = microtime(true);
$batch = srokap_plugin::getPluginsSearchBatch(array(
	'q' => $query,
	'category' => $category,
	'sort' => $sort,
	'order' => $order,
	'limit' => $limit,
	'offset' => $offset,
));

$cnt = 0;
$results = array();
foreach($batch as $plugin) {
	$results[] = $plugin;
	$cnt++;
	if ($cnt>=$limit) {
		break;
	}
}

$options = array(
	'limit' => 0,
	'full_view' => false,
	'list_type_toggle' => false,
	'pagination' => false,
);
$list = elgg_view_entity_list($results, $options);

$time = microtime(true)-$mt;

if (!$noStats) {
	echo '<p class="stats">';
	if ($query) {
		echo elgg_echo('srokap_plugin_installer:search:stats:query', array($query)).'<br/>';
	}
	if ($category) {
		$categories = srokap_plugin::getCategories();
		$catName = isset($categories[$category]) ? $categories[$category] : $category;
		echo elgg_echo('srokap_plugin_installer:search:stats:category', array($catName)).'<br/>';
	}
	if ($sort) {
		echo elgg_echo('srokap_plugin_installer:search:stats:sort', array(elgg_echo('search:sort:by:'.$sort))).'<br/>';
	}
	echo elgg_echo('srokap_plugin_installer:search:stats:time', array(sprintf("%.2f", $time)));
	echo '</p>';
}

if (!$cnt) {
	echo '<p>'.elgg_echo('notfound').'</p>';
} else {
	echo $list;
}

//show more button
if ($cnt==$limit) {
	$params = new stdClass();
	$params->limit = $limit;
	$params->offset = $offset + $limit;
	
	echo '<p class="mtm">'.elgg_view('output/url', array(
		'href' => '#',
		'text' => elgg_echo('srokap_plugin_installer:search:showmore'),
		'class' => 'elgg-button elgg-button-action list-load-more',
		'data-params' => json_encode($params),
	)).'</p>';
}
