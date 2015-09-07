<?php
class SrokapForm {

	/**
	 * @var array
	 */
	protected $fields;

	/**
	 * @var array
	 */
	protected $options;

	/**
	 * @param array $fields
	 */
	public function __construct($fields = array(), $options = array()) {
		$this->fields = $fields;
		$this->options = $options;
	}

	/**
	 * @param ElggPlugin $plugin
	 * @return string
	 */
	public function outputPluginSettingsForm($plugin) {
		$translationPrefix = elgg_extract('translationPrefix', $this->options);
		$result = '<div>';
		foreach ($this->fields as $name => $field) {
			$result .= '<div class="mbm">';
			$result .= '<label>' . elgg_echo($translationPrefix . $name) . '</label> ';
			$description = elgg_extract('description', $field);
			if ($description) {
				$result .= '<div class="mbs">' . $description . '</div> ';
			}
			$params = $field;
			$type = elgg_extract('type', $field);
			$params['name'] = "params[$name]";
			if ($plugin) {
				$params['value'] = $plugin->$name;
			}
			if (!isset($params['value']) || $params['value'] === null) {
				$params['value'] = elgg_extract('default', $field);
			}
			$result .= elgg_view('input/' . $type, $params);
			$result .= '</div>';
		}
		$result .= '</div>';
		return $result;
	}

}