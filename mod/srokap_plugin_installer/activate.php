<?php
if (get_subtype_id('object', 'remote_plugin_project')) {
	update_subtype('object', 'remote_plugin_project', 'ElggRemotePluginProject');
} else {
	add_subtype('object', 'remote_plugin_project', 'ElggRemotePluginProject');
}
