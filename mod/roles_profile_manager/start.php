<?php

elgg_register_event_handler('init', 'system', 'roles_pm_init');

function roles_pm_init() {
	elgg_register_event_handler('create', 'object', 'roles_pm_event_create');
	elgg_register_event_handler('delete', 'object', 'roles_pm_event_delete');

	// Listen to profile_manager and change user role when profile type changes
	elgg_register_event_handler('all', 'metadata', 'roles_pm_profile_type_change');

	// Listen to roles and change profile type when role changes
	elgg_register_event_handler('all', 'has_role', 'roles_pm_role_change');

	// Initial setup of profile types based on existing roles
	run_function_once('roles_pm_create_profile_types_from_roles');

}

/**
 * Create a profile type and a default profile type category for a new role
 */
function roles_pm_event_create($event, $type, $entity) {

	if (!elgg_instanceof($entity, 'object', 'role')) {
		return true;
	}

	$profile_types = elgg_get_entities_from_relationship(array(
		'relationship_guid' => $entity->guid,
		'relationship' => 'roles_profile_type',
		'count' => true
	));

	if ($profile_types > 0) {
		return true;
	}
	// Create a profile type for the role
	$profile_type = new ProfileManagerCustomProfileType();
	if ($profile_type->save()) {
		$profile_type->metadata_name = "{$entity->name}_profile";
		$profile_type->metadata_label = elgg_echo('roles:pm:profile_type_label', array(elgg_echo($entity->title)));

		// Store profile type as a relationship to role
		add_entity_relationship($entity->guid, 'roles_profile_type', $profile_type->guid);

		// Create a default category for the role specific profile_type
		$category = new ProfileManagerCustomFieldCategory();
		if ($category->save()) {
			$category->metadata_name = "{$entity->name}_profile_cat";
			$category->metadata_label = elgg_echo('roles:pm:profile_type_cat_label', array(elgg_echo($entity->title)));
			$options = array(
				"type" => "object",
				"subtype" => CUSTOM_PROFILE_FIELDS_CATEGORY_SUBTYPE,
				"count" => true,
				"owner_guid" => elgg_get_site_entity()->getGUID()
			);

			$count = elgg_get_entities($options);
			$category->order = $count;

			// Store profile type default category as a relationship to role
			add_entity_relationship($entity->guid, 'roles_profile_type_cat', $category->guid);
			add_entity_relationship($profile_type->guid, CUSTOM_PROFILE_FIELDS_PROFILE_TYPE_CATEGORY_RELATIONSHIP, $category->guid);
		}

		// Assign created profile type to users with the current role
		$users = $entity->getUsers(array());
		if ($users) {
			foreach ($users as $user) {
				$user->custom_profile_type = $profile_type->guid;
			}
		}
	}

	return true;
}

/**
 * Remove profile types and categories when role is deleted
 */
function roles_pm_event_delete($event, $type, $entity) {

	if (!elgg_instanceof($entity, 'object', 'role')) {
		return true;
	}

	$options = array(
		'relationship_guid' => $entity->guid,
		'relationship' => 'roles_profile_type',
		'inverse_relationship' => false,
		'limit' => 0
	);

	$profile_types = elgg_get_entities_from_relationship($options);

	// Remove profile types
	if (is_array($profile_types)) {
		foreach ($profile_types as $type) {
			$type_guid = $type->guid;
			if ($type->delete()) {
				$meta_name = "custom_profile_type";

				// Remove corresponding profile type metadata from userobjects
				$user_options = array(
					"type" => "user",
					"limit" => false,
					"metadata_name_value_pairs" => array("name" => $meta_name, "value" => $type_guid)
				);

				if ($users = elgg_get_entities_from_metadata($user_options)) {
					foreach ($users as $user) {
						// Unset currently deleted profile type for user
						unset($user->$meta_name);
					}
				}
			}
		}
	}

	$options['relationship'] = 'roles_profile_type_cat';

	$categories = elgg_get_entities_from_relationship($options);

	// Remove default category and references to default category from fields
	if (is_array($categories)) {
		foreach ($categories as $category) {
			$field_options = array(
				"type" => "object",
				"subtype" => CUSTOM_PROFILE_FIELDS_PROFILE_SUBTYPE,
				"limit" => false,
				"owner_guid" => elgg_get_site_entity()->getGUID(),
				"metadata_name_value_pairs" => array("name" => "category_guid", "value" => $category->guid)
			);

			// remove reference to this category on related profile fields
			if ($fields = elgg_get_entities_from_metadata($field_options)) {
				foreach ($fields as $field) {
					unset($field->category_guid);
				}
			}
			$category->delete();
		}
	}

	return true;
}

function roles_pm_profile_type_change($event, $type, $metadata) {

	if ($metadata->name != 'custom_profile_type') {
		return true;
	}
	
	switch ($event) {
		case 'delete' :
			remove_entity_relationships($metadata->entity_guid, 'has_role');
			break;

		case 'create' :
		case 'update' :
			$profile_type_guid = $metadata->value;

			$roles = elgg_get_entities_from_relationship(array(
				'relationship_guid' => $profile_type_guid,
				'relationship' => 'roles_profile_type',
				'inverse_relationship' => true
					));

			$role = $roles[0];
			$user = get_entity($metadata->entity_guid);

			if (!roles_has_role($user, $role->name)) {
				roles_set_role($role, $user);
			}
			break;

		default :
			return true;
			break;
	}

	return true;
}

function roles_pm_role_change($event, $type, $relationship) {

	if ($relationship->relationship !== 'has_role') {
		return true;
	}

	$user = get_entity($relationship->guid_one);

	switch ($event) {
		case 'delete' :
			unset($user->custom_profile_type);
			break;

		case 'create' :
		case 'update' :
			$profile_types = elgg_get_entities_from_relationship(array(
				'relationship_guid' => $relationship->guid_two,
				'relationship' => 'roles_profile_type',
				'inverse_relationship' => false
					));

			$profile_type = $profile_types[0];

			if ($user->custom_profile_type != $profile_type->guid) {
				$user->custom_profile_type = $profile_type->guid;
			}
			break;

		default :
			return true;
			break;
	}

	return true;
}

function roles_pm_create_profile_types_from_roles() {
	$roles = roles_get_all_selectable_roles();
	foreach ($roles as $role) {
		roles_pm_event_create('update', 'object', $role);
	}
	return true;
}