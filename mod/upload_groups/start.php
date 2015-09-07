<?php

/**
 * Upload groups. Create group accounts by uploading a CSV file,
 *
 * @package upload_groups
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jaakko Naakka / Mediamaisteri Group
 * @copyright Mediamaisteri Group 2009
 * @link http://www.mediamaisteri.com/
 */


/**
 * Profile init function; sets up the upload_groups functions
 *
 */
function upload_groups_init() {

	$path = elgg_get_plugins_path() . 'upload_groups/';
	
	elgg_register_classes("{$path}classes/");

	elgg_register_admin_menu_item('administer', 'upload', 'groups');

	elgg_register_action('upload_groups/upload', "{$path}actions/upload_groups/upload.php", 'admin');
	
	$css = elgg_get_simplecache_url('css', 'upload_groups/css');
	elgg_register_css('upload_groups.css', $css);

	$js = elgg_get_simplecache_url('js', 'upload_groups/js');
	elgg_register_js('upload_groups.js', $js);

}

// Make sure the profile initialisation function is called on initialisation
elgg_register_event_handler('init', 'system', 'upload_groups_init', 1);