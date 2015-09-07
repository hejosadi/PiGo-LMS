srokap_plugin_installer
=======================

Plugin to search and instantly install plugins got from community.elgg.org (maybe other sources in future).

Features
--------
* AJAX search for plugins from [community.elgg.org](http://community.elgg.org) in admin panel
* Viewing basic plugin details (with thumbnails) without going to community page
* Download to Elgg installation link
* Direct manual download link
* Installation of plugins from downloaded packages with one click
* Basic packages contents inspection (list of all files)

TODOs
-----
These are near future priorities to implement:
* "Install & Enable" button
* Install to dataroot (when not having write permissins to wwwroot)
* Better detection of wwwroot writing capabilities
* Choose plugin root when multiple are availible in the package
* GZIP archives support
* Invalid plugin detection and disabling (avoid crashing admin panel with bad plugins)
* Download plugin packages downloaded to server

Wish list
---------
Would be nice to have, but not focusing on it yet:
* Implement dedicated [community plugins](https://github.com/Srokap/community_plugins) search REST API
* Support for different sources of plugins
  * Install from FTP
  * Install from Github
  * Manual upload (see. [plugin-installer](http://community.elgg.org/plugins/835357/2.1/plugin-installer))
* Consider ways of applying changes without valid plugin root (ie. language packs)
* Managing history of installations (reverting plugin install?)
* Deep package file contents inspection (viewing particular files before installation)
