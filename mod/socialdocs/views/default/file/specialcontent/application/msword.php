<?php
/**
 * First, get Publisher ID, URL and Setting
 */

$wordc_setting = elgg_get_plugin_setting('wordc', 'socialdocs'); 
$date = new DateTime();
$download_url = elgg_get_site_url() . "socialdocs/{$vars['entity']->getGUID()}/{$date->format('U')}";


if ($wordc_setting == 1)
{

	echo <<<HTML
		<div class="file-photo">


<iframe src="http://docs.google.com/viewer?url=$download_url&embedded=true" width="500" height="780" style="border: none;"></iframe> 



		</div>
HTML;


}
 

