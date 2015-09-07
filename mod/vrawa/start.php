<?php
 
function vrawa_template_init() {
    // Extend system CSS with our own styles
    
	//elgg_extend_view('page/elements/elgg','page/elements/header_logo');
	//elgg_extend_view('page/elements/elgg','page/elements/sidebar');
	//elgg_extend_view('css/elements/elgg','css/elements/layout');
	//elgg_unregister_menu_item('topbar', 'elgg_logo');
	//
	if(!elgg_is_admin_logged_in()){

    elgg_unregister_page_handler('activity');

    }
	
	
    // Replace the default index page
   register_plugin_hook('index','system','vrawa_index');
	
	
			

	
	
}
 
function vrawa_index() {
    if (!include_once(dirname(dirname(__FILE__)) . "/vrawa/index.php"))
        return false;
 
    return true;
}
 
// register for the init, system event when our plugin start.php is loaded
elgg_register_event_handler('init','system','vrawa_template_init');
?>