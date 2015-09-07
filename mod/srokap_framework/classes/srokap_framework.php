<?php
class srokap_framework {
	static function init() {
// 		elgg_register_event_handler('pagesetup', 'system', array(__CLASS__, 'pagesetup'));
		if (function_exists('elgg_require_js')) {
			elgg_register_js('uri.js', array(
				'src' => '/mod/'.__CLASS__.'/vendors/URI.js'
			));
		} else {
			elgg_register_js('uri.js', elgg_get_config('wwwroot').'mod/'.__CLASS__.'/vendors/URI.js');
		}
		
	}
	
// 	static function pagesetup() {
// 	}
	
	/**
	 * Executes system command when possible
	 * @param string $cmd
	 * @param int $return_code
	 */
	static function system_command($cmd, &$return_code) {
		
		$proc = proc_open($cmd, array(
			0 => array('pipe', 'r'),// stdin
			1 => array('pipe', 'w'),// stdout
			2 => array('pipe', 'w'),// stderr
		), $pipes);
		
		if ($proc===false) {
			throw new IOException("Error while calling proc_open");
		}
		
		$output = stream_get_contents($pipes[1]).' '.stream_get_contents($pipes[2]);
		
		$return_code = proc_close($proc);
		
		return $output;
	}
}