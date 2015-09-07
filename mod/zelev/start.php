<?php
 
function zelev_template_init() {
    // Extend system CSS with our own styles
    
	//elgg_extend_view('page/elements/elgg','page/elements/header_logo');
	//elgg_extend_view('page/elements/elgg','page/elements/sidebar');
	//elgg_extend_view('css/elements/elgg','css/elements/layout');
	elgg_unregister_menu_item('topbar', 'elgg_logo');
	
	
	$logo_url = elgg_get_site_url() . "mod/zelev/zelev_files/logo.png";
	elgg_register_menu_item('topbar', array(
		'name' => 'my_logo',
		'href' => '/',
		'text' => "<img src=\"$logo_url\" alt=\"My logo\" width=\"275\" height=\"45\" />",
		'priority' => 1,
		'link_class' => 'elgg-topbar-logo',
	));
	//
	if(!elgg_is_admin_logged_in()){

    elgg_unregister_page_handler('activity');

    }
	
	
    // Replace the default index page
   register_plugin_hook('index','system','zelev_index');
	
	
	    elgg_unregister_plugin_hook_handler('prepare', 'menu:site', 'elgg_site_menu_setup');
    elgg_unregister_menu_item('site', 'file');
elgg_unregister_menu_item('site', 'bookmarks');
elgg_unregister_menu_item('site', 'reportedcontent');
elgg_unregister_menu_item('site', 'izap-contest');
elgg_unregister_menu_item('site', 'activity');
elgg_unregister_menu_item('site', 'groups');

	$item_1 = new ElggMenuItem('homw', elgg_echo('Inicio'), '/');
	elgg_register_menu_item('site', $item_1);
		$user = elgg_get_logged_in_user_entity();
		if ($user) {
	

	$url = "groups/member/$user->username";
			$item = new ElggMenuItem('groups:member', elgg_echo('groups:yours'), $url);
			elgg_register_menu_item('site', $item);
	
		}
}
 
function zelev_index() {
    if (!include_once(dirname(dirname(__FILE__)) . "/zelev/index.php"))
        return false;
 
    return true;
}
 
// register for the init, system event when our plugin start.php is loaded
elgg_register_event_handler('init','system','zelev_template_init');
?>