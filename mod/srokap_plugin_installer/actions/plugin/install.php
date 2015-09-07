<?php
$guid = get_input('guid');
$version = get_input('version');
$root = get_input('root');

try {
	$entity = ElggRemotePluginProject::getByPackage($guid, $version);
	
	if ($entity instanceof ElggRemotePluginProject) {
		$entity->install($version, $root);
		system_message(elgg_echo('action:plugin:install:ok'));
	} else {
		//invalid param
		register_error(elgg_echo('action:plugin:install:error:param'));
	}
} catch(Exception $e) {
	register_error($e->getMessage());
}

forward(REFERER);