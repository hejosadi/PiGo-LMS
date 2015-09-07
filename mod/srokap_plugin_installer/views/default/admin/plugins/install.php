<?php
elgg_load_js('ui.plugins.installer');
elgg_load_js('lightbox');
elgg_load_css('lightbox');
if (function_exists('elgg_require_js')) {
	elgg_require_js('uri.js');
} else {
	elgg_load_js('uri.js');
}
		
$body = elgg_view_form('plugins/install/search', array(
	'action' => 'admin/plugins/install',
	'method' => 'get',
	'disable_security' => true,
));
echo elgg_view_module('main', elgg_echo('srokap_plugin_installer:search'), $body);

echo '<br/>';

$body = elgg_view('plugins/install/search/results', array());
echo elgg_view_module('aside', elgg_echo('srokap_plugin_installer:results'), $body, array(
	'id' => 'plugins-install-search-results',
));

echo elgg_view('graphics/ajax_loader', array('id' => 'plugins-install-search-loader'));
