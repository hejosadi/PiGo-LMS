<?php
$data = get_input('data');
$data = base64_decode($data);
$entity = unserialize($data);

if ($entity instanceof ElggRemotePluginProject) {
	$entity->fetch();
	system_message(elgg_echo('action:plugin:fetch:ok'));
} else {
	//invalid param
	register_error(elgg_echo('action:plugin:fetch:error:param'));
}

forward(REFERER);