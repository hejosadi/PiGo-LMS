<?php
admin_gatekeeper();

$guid = get_input('guid');
$version = get_input('version');
$entity = ElggRemotePluginProject::getByPackage($guid, $version);

$path = $entity->getPackagePath(null, 'package');
$contents = srokap_zip::getArchiveNameIndex($path);
$possibleRoots = srokap_plugin_installer::getPossiblePluginRoots($contents);

$body = '<div class="mtm">'.elgg_echo('srokap_plugin_installer:version', array($version)).'</div>';

if ($possibleRoots!==false) {
	$body .= '<div class="mtm">'.elgg_echo('srokap_plugin_installer:best_root', array($possibleRoots[0])).' ';
	$targetPath = elgg_get_config('pluginspath').$possibleRoots[0];
	$dirExists = is_dir($targetPath);
	try {
		$url = $entity->getInstallActionURL($version, $possibleRoots[0]);
		if ($dirExists) {
			$body .= elgg_view('output/confirmlink', array(
				'href' => $url,
				'text' => elgg_echo('srokap_plugin_installer:reinstall'),
				'class' => 'elgg-button elgg-button-cancel',
				'confirm' => elgg_echo('srokap_plugin_installer:confirm:dir_exists', array($targetPath)),
			));
		} else {
			$body .= elgg_view('output/url', array(
				'href' => $url,
				'text' => elgg_echo('srokap_plugin_installer:install'),
				'class' => 'elgg-button elgg-button-submit',
			));
		}
	} catch (IOException $e) {
		//just no output
	}
	$body .= '</div>';
} else {
	$body .= '<div class="mtm">'.elgg_echo('srokap_plugin_installer:no_root').'</div>';
}

if (is_array($contents)) {
	$body .= '<pre style="max-width:100%;max-height:500px;overflow:scroll">';
	foreach ($contents as $file) {
		$body .= "$file\n";
	}
	$body .= '</pre>';
} else {
	$body .= elgg_echo('srokap_plugin_installer:error:cannot_read_package', array($path));
}

$title = $entity->title;

echo elgg_view_module('aside', $title, $body);
