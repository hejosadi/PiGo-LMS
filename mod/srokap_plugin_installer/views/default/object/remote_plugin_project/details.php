<?php
admin_gatekeeper();

$url = get_input('url');
$stats = false;

//extract stuff from html page
$content = srokap_http::getUrl($url);
//stats list html from sidebar
$pos = strpos($content, '<ul class="plugin_stats">');
if ($pos) {
	$stats = substr($content, $pos, strpos($content, '</ul>', $pos)-$pos+5);
}
//thumbnails from header
$pos = strpos($content, '<ul class="elgg-gallery elgg-plugin-screenshots float-alt">');
if ($pos) {
	$rel = 'thumbnails_'.str_replace('.', '_', microtime(true));
	$thumbnails = substr($content, $pos, strpos($content, '</ul>', $pos)-$pos+5);
	$thumbnails = str_replace('<li>', '<li class="elgg-plugin-screenshot prm ptm">', $thumbnails);
	$thumbnails = str_replace('class="elgg-plugin-screenshot"', 'class="elgg-plugin-screenshot elgg-lightbox-image" rel="'.$rel.'"', $thumbnails);
}

if ($stats) {
	echo '<div class="elgg-plugin-more">';
	echo $thumbnails;
	echo $stats;
	echo '<div class="clearfloat"></div></div>';
} else {
	echo '<p class="elgg-state-error">'.elgg_echo('srokap_plugin_installer:plugin:details_error', array($url)).'</p>';
}

