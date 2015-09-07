<?php

/*
 * FTP settings
*/
$title = elgg_echo('srokap_plugin_installer:ftp:connection');

$mt = microtime(true);
$ftp = srokap_plugin_installer::getFtpConnection();
try {
	if ($ftp) {
		$ftp->connect();
		$ftpLoggedIn = $ftp->isLoggedIn();
		$ftpConnected = $ftp->isConnected();
		
		if ($ftpLoggedIn) {
			$class = 'elgg-message elgg-state-success';
			$text = elgg_echo('srokap_plugin_installer:ftp:connection:ok', array($ftp->systype()));
		} else {
			$class = 'elgg-message elgg-state-error';
			if (!$ftpConnected) {
				$text = elgg_echo('srokap_plugin_installer:ftp:connection:fail');
			} else {
				$text = elgg_echo('srokap_plugin_installer:ftp:connection:fail:login');
			}
		}
		$ftp->close();
	} else {
		$class = 'elgg-message elgg-state-error';
		$text = elgg_echo('srokap_plugin_installer:ftp:no_module');
	}
} catch(RuntimeException $e) {
	$class = 'elgg-message elgg-state-error';
	$text = $e->getMessage();
}
$body = "<div class=\"$class\">$text</div>";
$body .= "<div>" . elgg_echo('srokap_plugin_installer:time_taken', array(microtime(true) - $mt)) . "</div>";
echo elgg_view_module('aside', $title, $body);

/*
 * FTP settings
 */
$title = elgg_echo('srokap_plugin_installer:settings:ftp');

/*
 * Settings form
 */
$form = new SrokapForm(array(
	'ftp_host' => array(
		'type' => 'text',
		'default' => 'localhost',
	),
	'ftp_port' => array(
		'type' => 'text',
		'default' => 21,
	),
	'ftp_username' => array(
		'type' => 'text',
	),
	'ftp_password' => array(
		'type' => 'password',
	),
	'ftp_timeout' => array(
		'type' => 'text',
		'default' => 15,
	),
	'ftp_secure' => array(
		'type' => 'dropdown',
		'options_values' => array(
			0 => elgg_echo('option:no'),
			1 => elgg_echo('option:yes'),
		),
		'description' => elgg_echo('srokap_plugin_installer:settings:ftp_secure:description'),
		'default' => 0,
	),
), array(
	'translationPrefix' => 'srokap_plugin_installer:settings:',
));
$body = $form->outputPluginSettingsForm(elgg_extract('entity', $vars));

echo elgg_view_module('aside', $title, $body);
