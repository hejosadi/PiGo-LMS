<?php
/**
 * Elgg roles plugin language pack
 *
 * @package ElggRoles
 */

$english = array(
	
	'item:object:role' => 'Roles',

	'user:set:role' => 'Role settings',
	
	'roles:role:VISITOR_ROLE' => 'Visitor',
	'roles:role:DEFAULT_ROLE' => 'Member',
	'roles:role:ADMIN_ROLE' => 'Administrator',
	'roles:role:NO_ROLE' => 'No specific role',

	'user:role:label' => 'Select role',

	'user:role:success' => 'User role has been successfully updated',
	'user:role:fail' => 'Could not update user role. Please try again later.',
	
	'roles:page:denied' => 'Sorry, but you do not have the necessary privileges to view that page.',
	'roles:action:denied' => 'No cuenta con los privilegios suficiente para realizar esta accion',

);

add_translation("en", $english);
