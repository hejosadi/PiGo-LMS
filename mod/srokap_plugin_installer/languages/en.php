<?php
$english = array(
	//srokap_plugin_installer
	'admin:plugins:install' => 'Install new plugins',
	'srokap_plugin_installer:search' => 'Search',
	'srokap_plugin_installer:search:q:placeholder' => 'Title/Description',
	'srokap_plugin_installer:search:category' => 'Category',
	'srokap_plugin_installer:search:category:all' => 'All',
	'srokap_plugin_installer:results' => 'Results',
	'srokap_plugin_installer:download' => 'Download',
	'srokap_plugin_installer:direct_download' => 'Direct download',
	'srokap_plugin_installer:install' => 'Install',
	'srokap_plugin_installer:reinstall' => 'Reinstall',
	'srokap_plugin_installer:package' => 'Package contents',
	'srokap_plugin_installer:latest_version' => 'Latest version: <strong>%s</strong>',
	'srokap_plugin_installer:version' => 'Version: <strong>%s</strong>',
	'srokap_plugin_installer:unknown' => '(Unknown)',
	'srokap_plugin_installer:created' => 'Created %s',
	'srokap_plugin_installer:no_description' => '(No description)',
	'srokap_plugin_installer:possibly_broken' => 'This plugin download page appears to be broken. You may experience problems while downloading.',
	'srokap_plugin_installer:plugin:details_link' => 'Load details',
	'srokap_plugin_installer:plugin:details_error' => 'There was error while getting plugin details. Try viewing <a href="%s" target="_blank">plugin page</a> manually.',
	'srokap_plugin_installer:search:showmore' => 'Show more',
	'srokap_plugin_installer:time_taken' => 'Time taken: %.3fs',
	
	'srokap_plugin_installer:ftp:connection' => 'FTP connection',
	'srokap_plugin_installer:ftp:connection:ok' => 'Connection successfull. Detected system type: %s',
	'srokap_plugin_installer:ftp:connection:fail' => 'Connection to host failed',
	'srokap_plugin_installer:ftp:connection:fail:login' => 'Login failed',
	'srokap_plugin_installer:ftp:no_module' => 'FTP module appears to be missing',
	
	'srokap_plugin_installer:settings:ftp' => 'FTP settings',
	'srokap_plugin_installer:settings:ftp_host' => 'Host',
	'srokap_plugin_installer:settings:ftp_port' => 'Port',
	'srokap_plugin_installer:settings:ftp_username' => 'Username',
	'srokap_plugin_installer:settings:ftp_password' => 'Password',
	'srokap_plugin_installer:settings:ftp_timeout' => 'Timeout in seconds',
	'srokap_plugin_installer:settings:ftp_secure' => 'SSL connection (NOT SFTP!)',
	'srokap_plugin_installer:settings:ftp_secure:description' => 'This option is only available if both the ftp module and the OpenSSL support is built statically into php, this means that on Windows this function will be undefined in the official PHP builds. To make this function available on Windows you must compile your own PHP binaries.',
	
	'srokap_plugin_installer:error:cannot_read_package' => 'Cannot read downloaded package from: <strong>%s</strong>',
	
	'action:plugin:download:error:param' => 'Invalid parameter provided',
	'action:plugin:download:error:no_download_url' => 'Unable to determine download URL for this plugin. Try downloading manually from <a href="%s">community page</a>.',
	'action:plugin:fetch:ok' => 'Package downloaded successfully',
	'action:plugin:fetch:error:param' => 'Invalid parameter provided',
	'action:plugin:install:ok' => 'Package installed successfully',
	'action:plugin:install:error:param' => 'Invalid parameter provided',
	
	'search:sort:by:relevance' => 'Relevance',
	'search:sort:by:created' => 'Created time',
	'search:sort:by:updated' => 'Updated time',
		
	'srokap_plugin_installer:best_root' => 'Best matching plugin root path: <strong>%s</strong>',
	'srokap_plugin_installer:no_root' => 'Unable to find valid plugin root in the package.',
	'srokap_plugin_installer:confirm:dir_exists' => "Target directory exists, during installation you will LOOSE ALL CONTENT in\n %s directory!\nThis change cannot be undone! Do you really want to proceed?",
	
	'srokap_plugin_installer:search:stats:query' => 'Search query: <strong>%s</strong>',
	'srokap_plugin_installer:search:stats:category' => 'Category: <strong>%s</strong>',
	'srokap_plugin_installer:search:stats:sort' => 'Order by: <strong>%s</strong>',
	'srokap_plugin_installer:search:stats:time' => 'Time taken: <strong>%ss</strong>',
);

add_translation('en', $english);
