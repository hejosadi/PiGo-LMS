<?php

$entity = elgg_extract('entity', $vars);
$guid = $entity->getGUID();
$latestVersion = $entity->getLatestVersion();
$isDownloaded = $entity->isDownloaded();
// $icon = elgg_view_entity_icon($entity, 'small');

$title = elgg_view('output/url', array(
	'href' => $entity->getURL(),
	'text' => $entity->title,
	'target' => '_blank',
));

if (elgg_instanceof($entity, 'object')) {
	$metadata = elgg_view('navigation/menu/metadata', $vars);
}

$date = elgg_view_friendly_time($entity->time_created);

$subtitle = elgg_echo('srokap_plugin_installer:created', array($date));


/*
 * content
 */
$content = '';
if (!$entity->validateURL()) {
	$content .= '<p class="elgg-state-error">'.elgg_echo('srokap_plugin_installer:possibly_broken').'</p>';
}
$content .= '<div class="mbs">';
if ($latestVersion!==false) {
	$content .= elgg_echo('srokap_plugin_installer:latest_version', array($latestVersion));
} else {
	$content .= elgg_echo('srokap_plugin_installer:latest_version', array(elgg_echo('srokap_plugin_installer:unknown')));
}
$content .= '</div>';
$content .= elgg_view('output/longtext', array(
	'value' => $entity->description,
));
$content .= '<div class="pts">';
$content .= elgg_view('output/url', array(
	'href' => '#',
	'text' => elgg_echo('srokap_plugin_installer:plugin:details_link'),
	'class' => 'plugin-show-details',
	'data-url' => $entity->rssGuid,
));
$content .= '</div>';


/*
 * image alt
 */
$image_alt = '';
$image_alt .= '<div class="mtm">'.elgg_view('output/url', array(
	'href' => $entity->getFetchActionURL(),
	'text' => elgg_echo('srokap_plugin_installer:download'),
	'class' => 'elgg-button '.($isDownloaded?'elgg-button-cancel':'elgg-button-submit'),
)).'</div>';
$image_alt .= '<div class="mts">'.elgg_view('output/url', array(
	'href' => $entity->getDownloadActionURL(),
	'text' => elgg_echo('srokap_plugin_installer:direct_download'),
// 	'class' => 'elgg-button',
)).'</div>';
if ($isDownloaded) {
	$url = elgg_get_config('wwwroot').'ajax/default/object/remote_plugin_project/package/contents/';
	$url = elgg_http_add_url_query_elements($url, array(
		'guid' => $guid,
		'version' => $latestVersion,
	));
	$image_alt .= '<div class="mtm">'.elgg_view('output/url', array(
		'href' => $url,
		'text' => elgg_echo('srokap_plugin_installer:package'),
		'class' => 'elgg-button elgg-button-submit elgg-lightbox',
	)).'</div>';
}

$params = array(
	'entity' => $entity,
	'title' => $title,
	'metadata' => $metadata,
	'subtitle' => $subtitle,
	'tags' => $entity->tags,
	'content' => $content,
);
$params = $params + $vars;
$body = elgg_view('object/elements/summary', $params);

// $vars['image'] = $icon;
$vars['body'] = $body;
$vars['image_alt'] = $image_alt;
$vars['class'] = 'elgg-plugin srokap-plugin-installer elgg-state-active';
echo elgg_view('page/components/image_block', $vars);
