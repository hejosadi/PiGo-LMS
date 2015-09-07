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

$powered_url3 = elgg_get_site_url() . "mod/zelev/zelev_files/icon-home-apply.png";
$powered_url = elgg_get_site_url() . "mod/zelev/zelev_files/icon-home-visit.png";
$powered_url2 = elgg_get_site_url() . "mod/zelev/zelev_files/icon-home-course.png";
$powered_url0 = elgg_get_site_url() . "mod/zelev/zelev_files/88x31.png";

echo '<div class="mts clearfloat float-alt">';
		  
		  echo elgg_view('output/url', array(
	'href' => 'http://creativecommons.org/licenses/by-nc/4.0',
	'text' => "<img src=\"$powered_url0\" alt=\"Powered by Elgg\" width=\"88\" height=\"31\" />",
	'class' => '',
	'is_trusted' => true,
));
		  
		  
echo elgg_view('output/url', array(
	'href' => 'http://elgg.org',
	'text' => "<img src=\"$powered_url\" alt=\"Powered by Elgg\" width=\"70\" height=\"77\" />",
	'class' => '',
	'is_trusted' => true,
));


echo elgg_view('output/url', array(
	'href' => 'http://elgg.org',
	'text' => "<img src=\"$powered_url2\" alt=\"Powered by Elgg\" width=\"70\" height=\"73\" />",
	'class' => '',
	'is_trusted' => true,
));

echo elgg_view('output/url', array(
	'href' => 'http://elgg.org',
	'text' => "<img src=\"$powered_url3\" alt=\"Powered by Elgg\" width=\"73\" height=\"73\" />",
	'class' => '',
	'is_trusted' => true,
));

echo '<b>PiGo LMS | All Rights Reserved</b>
       <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">
		    <br>
		  This  Website and Its Content is licensed under a
		  <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative
		  Commons Attribution-NonCommercial 4.0 International License</a>.</div>';
