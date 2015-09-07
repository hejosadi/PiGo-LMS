<?php
class srokap_zip {
	/**
	 * Extracts whole name index from archive
	 * @param string $path
	 * @return array|false array of filepatths in archive or false on failure
	 */
	static function getArchiveNameIndex($path) {
		$result = false;
		$zip = new ZipArchive();
		if ($zip->open($path)) {
			$result = array();
			for ($i = 0; $i<$zip->numFiles; $i++) {
				$result[$i] = $zip->getNameIndex($i);
			}
		}
		$zip->close();
		return $result;
	}

	/**
	 * @param string $path
	 * @param string $targetDir
	 * @param string $root path without trailing slash
	 * @return boolean
	 */
	static function extractByRoot($path, $targetDir, $root) {
		//get items paths from within root
		$namesList = srokap_zip::getArchiveNameIndex($path);
		if ($namesList===false) {
			throw new IOException("Error while reading archive contents: $path");
		}
		foreach ($namesList as $key => $item) {
			//keep only items within root path
			if (strpos($item, $root)!==0) {
				unset($namesList[$key]);
			}
		}
		if (empty($namesList)) {
			throw new IOException("Invalid archive root path privided: $root");
		}
		
		$targetDir .= '/';
		if (!srokap_files::createDir($targetDir)) {
			throw new IOException("Unable to create target dir: $targetDir");
		}
		
		$result = false;
		$zip = new ZipArchive();
		if ($zip->open($path)) {
			foreach ($namesList as $key => $item) {
				$sufix = substr($item, strlen($root)+1);
				if ($sufix===false) {
					continue;
				}
				$path = $targetDir . $sufix;
				$dirPath = dirname($path);
				if (!empty($dirPath) && !srokap_files::createDir($dirPath)) {
					throw new IOException("Unable to create dir: ".dirname($path));
				}
				if ($item[strlen($item)-1] == '/') {
					//not a file
					continue;
				}
				$content = stream_get_contents($zip->getStream($item));
				if ($content===false) {
					throw new IOException("Error reading from archive path: $item");
				}
				if (file_put_contents($path, $content)===false) {
					throw new IOException("Error extracting file from $item to $path");
				}
			}
			$result = true;
		}
		$zip->close();
		return $result;
	}
}