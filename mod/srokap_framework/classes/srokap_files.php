<?php
class srokap_files {
	/**
	 * Create dir if not exists and check if all preconditions are correct.
	 * @param string $path
	 * @param int $mode
	 * @throws IOException
	 * @return boolean true on success
	 */
	static function createDir($path, $mode = 0700) {
		if (!file_exists($path) || !is_dir($path)) {
			if (!mkdir($path, $mode, true)) {
				throw new IOException("Unable to create directory: ".$path);
			}
		}
		if (!is_writable($path) || !is_readable($path)) {
			chmod($path, $mode);
			if (!is_writable($path) || !is_readable($path)) {
				throw new IOException("Unable to set correct permissions (".$mode.") to: ".$path);
			}
		}
		return true;
	}
}