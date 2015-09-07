<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */

echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));

$powered_url = "http://www.swsocialweb.com/wp-content/uploads/2014/03/415x149logoSW.png";

echo '<div class="mts clearfloat float-alt">';

echo elgg_view('output/url', array(
	'href' => 'http://www.swsocialweb.com',
	'text' => "<img src=\"$powered_url\" alt=\"Powered by PiGo\" width=\"106\" height=\"15\" />",
	'class' => '',
	'is_trusted' => true,
));

echo '</div>';
