<?php

/**
 * 
 * Moderators for Roles plugin
 * 
 *
 * @author Andras Szepeshazi
 * @copyright Arck Interactive, LLC 2012
 * @link http://www.arckinteractive.com/
 */

elgg_register_event_handler('init', 'system', 'students_init');

function students_init() {

	elgg_register_plugin_hook_handler('roles:config', 'role', 'students_config', 700);
}


function students_config($hook_name, $entity_type, $return_value, $params) {

	$roles = array(

'student' => array(
	'title' => 'students:role:title',
			'extends' => array(),
			'permissions' => array(
				'actions' => array(
					'groups/edit' => array('rule' => 'deny'),
					'groups/leave' => array('rule' => 'deny'),
					'event_calendar/delete' => array('rule' => 'deny'),
					'discussion/add' => array('rule' => 'deny'),

				),
				
				'pages' => array(
					'groups/add/{$self_guid}' => array('rule' => 'deny'),
					'groups/edit/{$self_guid}' => array('rule' => 'deny'),
					'blog/add/{$self_guid}' => array('rule' => 'deny'),
					'regexp(/^admin\/$/)' => array('rule' => 'deny'),
					'activity/' => array('rule' => 'deny'),
					
				),
				'menus' => array(
				'topbar::administration' => array('rule' => 'deny'),
				
					'title::add' => array(
						'rule' => 'deny',
						'context' => array('groups')
					),
					
					'izap-contest:challenge_add' => array(
						'rule' => 'deny',
						'context' => array('challenge')
					),
					
					'title::leave' => array(
						'rule' => 'deny',
						'context' => array('groups')
					),
					
					
					'title::add' => array(
						'rule' => 'deny',
						'context' => array('groups','blog')
					),
					
					
					'title::add' => array(
						'rule' => 'deny',
						'context' => array('groups','file', 'discussion', 'blog')
					),
	
				),
				'views' => array(
					                'discussion/group_module' => array(
							'rule' => 'replace',
							'view_replacement' => array(
							'location' => 'mod/students/views/override/',
							),
							),
'izap-contest/group_module' => array(
							'rule' => 'replace',
							'view_replacement' => array(
							'location' => 'mod/students/views/override/',
							),
							),





'page/layouts/widgets' => array(
							'rule' => 'replace',
							'view_replacement' => array(
							'location' => 'mod/students/views/override/',
							),
							),


				
					                'blog/group_module' => array(
							'rule' => 'replace',
							'view_replacement' => array(
							'location' => 'mod/students/views/override/',
							),
							),

  'discussion/replies' => array(
							'rule' => 'replace',
							'view_replacement' => array(
							'location' => 'mod/students/views/override/',
							),
							),
							
							
							'file/group_module' => array(
							'rule' => 'replace',
							'view_replacement' => array(
							'location' => 'mod/students/views/override/',
							),
							),
							
							
						
				),
				
			),
		),
	
		
	);

	if (!is_array($return_value)) {
		return $roles;
	} else {
		return array_merge($return_value, $roles);
	}
}

?>