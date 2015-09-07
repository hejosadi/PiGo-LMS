<?php
 
function tweet_me_init() {
    // Extend system CSS with our own styles
    	elgg_unregister_menu_item('topbar', 'elgg_logo');

	
	
	
    // Replace the default index page
    //register_plugin_hook('index','system','new_index');
	
	
		 /**
     * BOOTSTRAP CSS
     */
    $css_url = 'mod/tweet_me/vendors/bootstrap/css/';
    elgg_register_css('bootstrap-css',            $css_url.'bootstrap.min.css', 1);
    elgg_register_css('bootstrap-responsive-css', $css_url.'bootstrap-responsive.min.css', 1);

    elgg_load_css('bootstrap-css');
    elgg_load_css('bootstrap-responsive-css');

    /**
     * jQuery & BOOTSTRAP JS
     */
    $js_url = 'mod/tweet_me/vendors/bootstrap/js/';
    elgg_register_js('bootstrap-js',  $js_url.'bootstrap.min.js', 'footer');
    
    elgg_register_js('jquery', 'mod/tweet_me/vendors/jquery/jquery-1.7.1.min.js', 'head');
 
    elgg_load_js('jquery');
    elgg_load_js('bootstrap-js');

    /**
     * INTERNAL CSS
     */
    elgg_register_simplecache_view('css/tweet_me/css/misc');
    $url = elgg_get_simplecache_url('css', 'tweet_me/css/misc');
    elgg_register_css('glee-theme-draft-one:misc', $url);
    elgg_load_css('glee-theme-draft-one:misc');

    /**
     * INTERNAL JS
     */
    elgg_register_simplecache_view('js/tweet_me/workarounds');
    $url = elgg_get_simplecache_url('js', 'tweet_me/workarounds');
    elgg_register_js('glee-theme-draft-one:workarounds', $url, 'footer');
    elgg_load_js('glee-theme-draft-one:workarounds');

	
	
	

	
 }
 
function new_index() {
    if (!include_once(dirname(dirname(__FILE__)) . "/tweet_me/index.php"))
        return false;
 
    return true;
}
 
// register for the init, system event when our plugin start.php is loaded
elgg_register_event_handler('init','system','tweet_me_init');


?>