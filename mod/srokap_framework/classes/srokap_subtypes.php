<?php
class srokap_subtypes {
	/**
	 * @var array
	 */
	private static $subtypes = array();
	
	/**
	 * @param int $subtype_id
	 * @param string $subtype
	 */
	static function registerSubtype($subtype_id, $subtype) {
		self::$subtypes[$subtype_id] = $subtype;
	}
	
	/**
	 * @param int $subtype_id
	 * @return stirng|false
	 */
	static function getSubtypeName($subtype_id) {
		if (isset(self::$subtypes[$subtype_id])) {
			return self::$subtypes[$subtype_id];
		}
		return false;
	}
}