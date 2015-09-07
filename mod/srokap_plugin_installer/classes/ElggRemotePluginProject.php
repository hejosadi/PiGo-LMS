<?php
/**
 * This is class for logical representation of remote plugin projects. 
 * We don't expect them to be saved to DB, so save-related methods are overriden.
 */
class ElggRemotePluginProject extends ElggObject {
	
	/**
	 * @var int|null cache for plugin project guid
	 * @see ElggRemotePluginProject::getGUID()
	 */
	private $guid;
	
	/**
	 * @var int|null cache for plugin project latest version
	 * @see ElggRemotePluginProject::getLatestVersion()
	 */
	private $version;
	
	/**
	 * Extracts serialized entity from downloaded package.
	 * @param int $guid
	 * @param string $version
	 * @return ElggRemotePluginProject
	 */
	static function getByPackage($guid, $version) {
		$path = self::_getPackageBasePath($guid, $version).'entity';
		$entity = unserialize(file_get_contents($path));
		if (!($entity instanceof ElggRemotePluginProject)) {
			throw new InvalidArgumentException("Unable to find package for parameters: $guid, $version");
		}
		return $entity;
	}
	
	/**
	 * @see ElggObject::initializeAttributes()
	 */
	protected function initializeAttributes() {
		parent::initializeAttributes();

		$this->attributes['subtype'] = "remote_plugin_project";
		$this->attributes['access_id'] = ACCESS_PUBLIC;
	}
	
	/**
	 * @see ElggEntity::getURL()
	 */
	public function getURL() {
		return $this->rssGuid;
	}
	
	/**
	 * Careful, this returns REMOTE guid, not local one.
	 * @return int|bool plugin project guid or false on failure
	 */
	public function getGUID() {
		if ($this->guid!==null) {
			return $this->guid;
		}
		$this->guid = false;
		if (preg_match('#'.srokap_plugin::getCommunityPageURL().'plugins/([0-9]*)/#', $this->rssGuid, $matches)) {
			$this->guid = $matches[1];
		}
		return $this->guid;
	}
	
	/**
	 * Extracts latest version from rss url
	 */
	public function getLatestVersion() {
		if ($this->version!==null) {
			return $this->version;
		}
		$this->version = false;
		if (preg_match('#'.srokap_plugin::getCommunityPageURL().'plugins/[0-9]*/([^/]+)/#', $this->rssGuid, $matches)) {
			$this->version = urldecode($matches[1]);
		}
		return $this->version;
	}

	protected static function _getPackageBasePath($guid, $version) {
		$path = srokap_plugin_installer::getDataPath();
		return $path.$guid.'/'.$version.'/';
	}
	
	/**
	 * 
	 */
	public function getPackagePath($version = null, $file = '') {
		$guid = $this->getGUID();
		if ($version===null) {
			$version = $this->getLatestVersion();
		}
		return self::_getPackageBasePath($guid, $version).$file;
	}
	
	/**
	 * Download most recent version.
	 * @throws IOException
	 */
	public function fetch($version = null) {
		$url = $this->getDownloadURL();
		if ($url===false) {
			throw new IOException(elgg_echo('action:plugin:download:error:no_download_url', array($this->getURL())));
		}
		if ($version===null) {
			$version = $this->getLatestVersion();
		}
		$packagePath = $this->getPackagePath($version);
		srokap_files::createDir($packagePath);
		
		$meta = srokap_http::getUrlToFile($url, $packagePath.'package');
		if ($meta===false) {
			throw new IOException("Error while fetching plugin package from: $url");
		}
		if (file_put_contents($packagePath.'version', $this->getLatestVersion())===false) {
			throw new IOException("Error while saving version file at: $packagePath");
		}
		if (file_put_contents($packagePath.'entity', serialize($this))===false) {
			throw new IOException("Error while saving entity file at: $packagePath");
		}
		if (file_put_contents($packagePath.'metadata', serialize($meta))===false) {
			throw new IOException("Error while saving metadata file at: $packagePath");
		}
		return $packagePath;
	}
	
	/**
	 * @param string $version
	 * @param string $root
	 */
	public function install($version, $root) {
		$path = $this->getPackagePath($version, 'package');
		$pluginDir = basename($root);
		if (strpos($root, '.')!==false) {
			throw new IOException("Invalid plugin root directory: $root");
		}
		$targetDir = elgg_get_config('pluginspath').$pluginDir.'/';
		if (!srokap_zip::extractByRoot($path, $targetDir, $root)) {
			throw new IOException("Error while extracting files from archive: $path");
		}
		return true;
	}
	
	/**
	 * Verifies if all downloaded files exist
	 * @param string $version
	 * @return boolean
	 */
	public function isDownloaded($version = null) {
		if ($version===null) {
			$version = $this->getLatestVersion();
		}
		$packagePath = $this->getPackagePath($version);
		$files = array('package', 'version', 'entity', 'metadata');
		if (!is_dir($packagePath)) {
			return false;
		}
		foreach ($files as $file) {
			if (!is_file($packagePath.$file)) {
				return false;
			}
		}
		return true;
	}
	
	/**
	 * Checks if specified version is currenty installed.
	 * @param unknown_type $version
	 */
	public function isInstalled($version = null) {
		return false;
	}
	
	/**
	 * @return string
	 */
	private function encodeAsParam() {
		return $data = base64_encode(serialize($this));
	}
	
	/**
	 * Determining direct download URL is heavy operation, we delegate it to action.
	 */
	public function getDownloadActionURL() {
		$url = elgg_get_config('wwwroot').'action/plugin/download';
		$url = elgg_http_add_url_query_elements($url, array(
			'data' => $this->encodeAsParam(),
		));
		$url = elgg_add_action_tokens_to_url($url);
		return $url;
	}
	
	/**
	 * Determining direct install URL is heavy operation, we delegate it to action.
	 */
	public function getFetchActionURL() {
		$data = base64_encode(serialize($this));
		$url = elgg_get_config('wwwroot').'action/plugin/fetch';
		$url = elgg_http_add_url_query_elements($url, array(
			'data' => $this->encodeAsParam(),
		));
		$url = elgg_add_action_tokens_to_url($url);
		return $url;
	}
	
	/**
	 * Warning, it's high cost method. You shouldn't use it multiple times.
	 * @return srting|bool URL or false on failure
	 */
	public function getDownloadURL() {
		$result = false;
		if ($this->getGUID()) {
			$url = srokap_plugin::getCommunityPageURL().'export/default/'.$this->getGUID();
			$content = srokap_http::getUrl($url);
			if ($content) {
				//var_dump($content);
				if (preg_match('#recommended_release_guid:\s*</b>\s*([0-9]*)#', $content, $matches)) {
					$result = srokap_plugin::getCommunityPageURL().'plugins/download/'.$matches[1];
				}
			}
			//some releases don't have recommented release set..., see http://community.elgg.org/export/default/835357/
			//TODO consider replacing whole logic with this case
			if (!$result) {
				$content = srokap_http::getUrl($this->getURL());
				if ($content) {
					if (preg_match('#'.srokap_plugin::getCommunityPageURL().'plugins/download/([0-9]*)#', $content, $matches)) {
						$result = srokap_plugin::getCommunityPageURL().'plugins/download/'.$matches[1];
					}
				}
			}
		}
		return $result;
	}
	
	/**
	 * @param string $version
	 * @param string $packageRoot path to chosen plugin root in the package
	 * @throws IOException
	 * @return installation URL
	 */
	public function getInstallActionURL($version, $packageRoot) {
		$guid = $this->getGUID();
		$path = self::_getPackageBasePath($guid, $version).'entity';
		if (!file_exists($path)) {
			throw IOException("Invalid parameter or broken installation package at: $path");
		}
		$url = elgg_get_config('wwwroot').'action/plugin/install';
		$url = elgg_http_add_url_query_elements($url, array(
			'guid' => $guid,
			'version' => $version,
			'root' => $packageRoot,
		));
		$url = elgg_add_action_tokens_to_url($url);
		return $url;
	}
	
	/**
	 * Some URLs are missing version and go to redirection loop. We try to check here if URL looks fine.
	 */
	public function validateURL() {
		$url = $this->getURL();
		if (preg_match('#'.srokap_plugin::getCommunityPageURL().'plugins/([0-9]*)/([^/]+)/#', $url, $matches)) {
			return true;
		}
		return false;
	} 

	/**
	 * Overrides core functionality for read-only purposes
	 */
	public function canComment($user_guid = 0) {
		return false;
	}

	/**
	 * Overrides core functionality for read-only purposes
	 */
	public function getMetaData($name) {
		return $this->getVolatileData($name);
	}
	
	/**
	 * Overrides core functionality for read-only purposes
	 */
	public function setMetaData($name, $value, $value_type = null, $multiple = false) {
		return $this->setVolatileData($name, $value);
	}
	
	/**
	 * Overrides core functionality for read-only purposes
	 */
	public function save() {
		throw new IOException(get_class($this)." is read only and cannot be saved to DB");
	}
	
	/**
	 * Fill object with the data from RSS feed item.
	 * @param stdClass $item
	 */
	public function loadFromRss($item) {
		$this->title = (string)$item->title;
		$description = trim((string)$item->description);
		if (empty($description)) {
			$this->description = elgg_echo('srokap_plugin_installer:no_description');
		} else {
			$this->description = $description;
		}
		$this->rssGuid = (string)$item->guid;
		$this->rssLink = (string)$item->link;
		$this->attributes['time_created'] = strtotime($item->pubDate);
	}
}