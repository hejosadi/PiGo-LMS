<?php
class srokap_plugin {
	
	/**
	 * Returns array of categories as defined in community_plugins. Must be kept up to date.
	 * Hopefully won't change that often.
	 * @see https://github.com/Elgg/community_plugins/blob/master/start.php#L122
	 * @return array
	 */
	static function getCategories() {
		// Defined plugin categories
		$plugincats = array(
			'admin' => 'Site admin',
			'user' => 'User admin',
			'authentication' => 'Authentication',
			'tools' => 'Tools',
			'spam' => 'Spam',
			'communication' => 'Communication',
			//'core' => 'Core Enhancements',
			'events' => 'Events',
			'media' => 'Media',
			'photos' => 'Photos and Images',
			'tpintegrations' => 'Third Party integrations',
			'clients' => 'Clients',
			'widgets' => 'Widgets',
			'games' => 'Games',
			'ecommerce' => 'eCommerce',
			'languages' => 'Language packs',
			'themes' => 'Themes',
			'misc' => 'Misc',
			'uncategorized' => 'Uncategorized',
		);
		return $plugincats;
	}
	
	/**
	 * @return array Options for pulldown
	 */
	static function getCategoriesOptionsValues() {
		$options_values = array('' => elgg_echo('srokap_plugin_installer:search:category:all'));
		$options_values = array_merge((array)$options_values, (array)self::getCategories());
		return $options_values;
	}
	
	static function getCommunityPageURL() {
		return 'http://www.milocker.com/support/';
	}
	
	/**
	 * Used to iterate through all community plugins
	 * @param array $options
	 * @return array|false
	 */
	static function getPluginProjects($options = array()) {
// 		$mt = microtime(true);
		$url = self::getCommunityPageURL().'plugins/search';
		$url = elgg_http_add_url_query_elements($url, array(
			'sort' => 'created',
			'view' => 'json',
			'limit' => elgg_extract('limit', $options, 10),
			'offset' => elgg_extract('offset', $options, 0),
		));
	
		list($content, $meta) = srokap_http::getUrlWithMetadata($url);
// 		var_dump(microtime(true) - $mt);
		return self::handlePluginProjectsJsonResult($content);
	}
	
	/**
	 * Used to search for community plugins using title/description
	 * @param array $options
	 * @return array|false
	 */
	static function searchPluginProjects($options = array()) {
// 		$mt = microtime(true);
		$query = elgg_extract('q', $options, '%');
		if (!$query) {
			$query = '%';
		}
		$url = self::getCommunityPageURL().'search';
		$url = elgg_http_add_url_query_elements($url, array(
			'q' => $query,
			'category' => elgg_extract('category', $options, ''),
			'sort' => elgg_extract('sort', $options, 'relevance'),
			'order' => elgg_extract('order', $options, 'desc'),
			'entity_type' => 'object',
			'entity_subtype' => 'plugin_project',
			'search_type' => 'entities',
			'view' => 'rss',
			'limit' => elgg_extract('limit', $options, 10),
			'offset' => elgg_extract('offset', $options, 0),
		));
	
		list($content, $meta) = srokap_http::getUrlWithMetadata($url);
// 		var_dump($url);
// 		var_dump(microtime(true) - $mt);
		return self::handlePluginProjectsRssResult($content);
	}

	/**
	 * Get raw structure in json and organize it to proper output for ElggBatch results
	 * @param mixed $data
	 * @return stdClass|boolean
	 */
	private static function handlePluginProjectsRssResult($data) {
		$data = simplexml_load_string($data);
		if ($data===false) {
			throw new IOException("Invalid XML structure received!");
		}
// 		var_dump($data->getDocNamespaces(), $data->getNamespaces());
		$channel = $data->xpath('channel/item');
		if (is_array($channel)) {
			$result = array();
			foreach ($channel as $item) {
// 				var_dump($item->saveXML());
				$ent = new ElggRemotePluginProject();
				$ent->loadFromRss($item);
				$result[] = $ent;
// 				$result[] = (object)array(
// 					'title' => (string)$item->title,
// 					'description' => (string)$item->description,
// 					'rssGuid' => (string)$item->guid,
// 					'rssLink' => (string)$item->link,
// 					'updatedTs' => strtotime($item->pubDate),
// 				);
			}
			return $result;
		}
		return false;
	}
	
	/**
	 * Get raw structure in json and organize it to proper output for ElggBatch results
	 * @param mixed $data
	 * @return stdClass|boolean
	 */
	private static function handlePluginProjectsJsonResult($data) {
		$data = json_decode($content);
		if (isset($data->object) && isset($data->object->plugin_project)) {
			$result = $data->object->plugin_project;
			if (isset($result[0])) {
				srokap_subtypes::registerSubtype($result[0]->subtype, 'plugin_project');
			}
			foreach ($result as $key => $val) {
				$result[$key] = self::plugin_projects_postprocess($val);
			}
			return $result;
		}
		return false;
	}
	
	static function getRemoteName() {
		return 'origin';
	}
	
	static function plugin_projects_postprocess($result) {
// 		var_dump('clbck', $result->guid);
		// 		var_dump($result, $getter, $options);die();
		$externalAttributes = array(
			'guid',
			'owner_guid',
			'container_guid',
			'time_updated',
			'site_guid',
		);
		$result = self::postprocess_attributes_rewrite($result, $externalAttributes);
	
		// 		var_dump($result);
		return $result;
	}
	
	/**
	 * @param stdClass $result
	 * @param array $externalAttributes
	 * @return stdClass
	 */
	private static function postprocess_attributes_rewrite($result, $externalAttributes) {
		$result->subtype = srokap_subtypes::getSubtypeName($result->subtype);
		foreach ($result as $key => $val) {
			if (in_array($key, $externalAttributes)) {
				unset($result->$key);
				$result->{self::getRemoteName().'/'.$key} = $val;
			}
		}
		return $result;
	}
	
	static function getPluginsSearchBatch($options = array()) {
		static $batch;
		if (!$batch) {
			$chunk_size = 50;
			$defaults = array(
				'limit' => 0,
			);
			$options = array_merge((array)$defaults, (array)$options);
			$batch = new ElggBatch(array(__CLASS__, 'searchPluginProjects'), $options, null, $chunk_size);
		}
		return $batch;
	}
}