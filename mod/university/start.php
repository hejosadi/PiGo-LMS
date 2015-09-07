<?php
 
function university_pigo_init() {
    // Extend system CSS with our own styles
    
	
	
    // Replace the default index page
   register_plugin_hook('index','system','university_index');
	
	
			

	
	
}
 
function university_index() {
    if (!include_once(dirname(dirname(__FILE__)) . "/university/index.php"))
        return false;
 
    return true;
}
 
// register for the init, system event when our plugin start.php is loaded
elgg_register_event_handler('init','system','university_pigo_init');
?>