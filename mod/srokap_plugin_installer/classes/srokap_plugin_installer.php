<?php
class srokap_plugin_installer {
	static function init() {
		elgg_register_event_handler('pagesetup', 'system', array(__CLASS__, 'pagesetup'));
		elgg_register_js('ui.plugins.installer', 'mod/'.__CLASS__.'/js/ui.plugins.installer.js');
		elgg_extend_view('css/admin', 'css/srokap_plugin_installer');
		elgg_register_ajax_view('plugins/install/search/results');
		elgg_register_ajax_view('object/remote_plugin_project/details');
		elgg_register_ajax_view('object/remote_plugin_project/package/contents');
		elgg_register_action('plugin/download', elgg_get_config('path').'mod/srokap_plugin_installer/actions/plugin/download.php', 'admin');
		elgg_register_action('plugin/fetch', elgg_get_config('path').'mod/srokap_plugin_installer/actions/plugin/fetch.php', 'admin');
		elgg_register_action('plugin/install', elgg_get_config('path').'mod/srokap_plugin_installer/actions/plugin/install.php', 'admin');
	}
	
	static function pagesetup() {
		elgg_register_menu_item('page', array(
			'name' => 'srokap_plugin_installer',
			'href' => 'admin/plugins/install/',
			'text' => elgg_echo('admin:plugins:install'),
			'context' => 'admin',
			'section' => 'configure',
			'priority' => 100,
		));
	}
	
	/**
	 * Path to data folder with trailing slash
	 * @return string
	 */
	static function getDataPath() {
		static $validated;
		$path = elgg_get_config('dataroot').'srokap_plugin_installer/';
		if (!$validated) {
			if (!self::validatePath($path)) {
				throw new IOException("Unable to create directory: ".$path);
			}
		}
		return $path;
	}
	
	/**
	 * @var int chmod mask for data dir
	 */
	static $dataPathMod = 0700;
	
	/**
	 * Create dir if not exists and check if all preconditions are correct.
	 */
	static function validatePath($path) {
		return srokap_files::createDir($path, self::$dataPathMod);
	}
	
	/**
	 * Try to determine possible plugin roots by analyzing required files and additional files.
	 * @param array $nameIndex name index got from ZPI archive
	 * @return array|bool array of dir paths sorted by best fit or false if none found 
	 */
	static function getPossiblePluginRoots($nameIndex) {
		$requiredFiles = array('start.php', 'manifest.xml');
		$additionalFiles = array('activate.php', 'deactivate.xml');
		$pointsRF = 5;
		$pointsAF = 1;
		
		$pointed = array();
		//give points for file names occurences
		foreach ($nameIndex as $path) {
			$filename = basename($path);
			$path = dirname($path);
			if (in_array($filename, $requiredFiles)) {
				$pointed[$path] += $pointsRF;
			} else if (in_array($filename, $additionalFiles)) {
				$pointed[$path] += $pointsAF;
			}
		}
		//filter entries without necessary points
		foreach ($pointed as $key => $val) {
			if ($val<count($requiredFiles)*$pointsRF) {
				unset($pointed[$key]);
			}
		}
		if (empty($pointed)) {
			return false;
		}
		//sort and return paths
		arsort($pointed);
		return array_keys($pointed);
	}
	
	static function getFtpConnection() {
		try {
			$options = array(
				'host' => elgg_get_plugin_setting('ftp_host', __CLASS__),
				'port' => elgg_get_plugin_setting('ftp_port', __CLASS__),
				'username' => elgg_get_plugin_setting('ftp_username', __CLASS__),
				'password' => elgg_get_plugin_setting('ftp_password', __CLASS__),
				'secure' => elgg_get_plugin_setting('ftp_secure', __CLASS__),
			);
			$timeout = elgg_get_plugin_setting('ftp_timeout', __CLASS__);
			if ($timeout) {
				$options['timeout'] = $timeout;
			}
			$ftp = new FtpConnection($options);
			return $ftp;
		} catch(RuntimeException $e) {
			return false;
		}
	}
}