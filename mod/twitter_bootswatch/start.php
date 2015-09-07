<?php
/**
 * Elgg alternative bootstrap css
 * You can alter this to use any of the themes available on Bootswatch http://bootswatch.com/
 * 
 */

elgg_register_event_handler('init', 'system', 'twitter_bootswatch_init');

function twitter_bootswatch_init() {
	$bootswatch_style = elgg_get_plugin_setting('bootswatch_style', 'twitter_bootswatch');
	switch ($bootswatch_style) {
		case 'amelia':
		case 'cerulean':
		case 'cosmo':
		case 'cyborg':
		case 'flatty':
		case 'journal':
		case 'readable':
		case 'simplex':
		case 'slate':
		case 'spacelab':
		case 'spruce':
		case 'superhero':
		case 'united':
			break;
		default:
			$bootswatch_style = 'cyborg';
	}

	// Unextend the default bootstrap override css
	elgg_unextend_view('css/elgg', 'twitter_bootstrap/css');

	// Extend system CSS with our own styles
	elgg_extend_view('css/elgg', 'twitter_bootswatch/css');

	// united bootstrap
	$bootstrap_css = 'mod/twitter_bootswatch/vendors/bootstrap-'.$bootswatch_style.'.min.css';
	elgg_register_css('twitter_bootswatch_css', $bootstrap_css, 5);

	//unload default bootstrap css and load new one
	elgg_unregister_css('bootstrap_css');
	if(get_context() != 'admin'){
		elgg_load_css('twitter_bootswatch_css');
	}
}
