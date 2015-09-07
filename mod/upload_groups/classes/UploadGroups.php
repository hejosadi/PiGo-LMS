<?php

/**
 * Upload Groups Class.
 *
 * @package upload_groups
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jaakko Naakka / Mediamaisteri Group
 * @copyright Mediamaisteri Group 2009
 * @link http://www.mediamaisteri.com/
 */
class UploadGroups {

	var $encoding;
	var $delimiter;
	var $raw_data;
	var $confirmation_report;
	var $creation_report;
	var $headers;
	var $number_of_failed_groups = 0;
	var $groups_to_confirm = NULL; /// An array containing group info from csv file
	var $groups_to_create = NULL; /// An array of groups to create

	function __construct() {

	}

	/**
	 * Set encoding of the CSV file
	 *
	 * @param $encoding
	 */
	function setEncoding($encoding) {
		$this->encoding = $encoding;
	}

	/**
	 * Set delimiter of the CSV file
	 *
	 * @param $delimiter
	 */
	function setDelimiter($delimiter) {
		$this->delimiter = $delimiter;
	}

	/**
	 * Process the file
	 *
	 * @param $file
	 * @return boolean
	 */
	function openFile($file) {
		if (!$contents = get_uploaded_file($file)) {
			register_error(elgg_echo('upload_groups:error:cannot_open_file'));
			return false;
		}

		/// Check the encoding
		if ($this->encoding == 'ISO-8859-1') {
			$contents = utf8_encode($contents);
		}

		$this->raw_data = $contents;
		return true;
	}

	/**
	 * Process group accounts from the raw data from the file
	 *
	 * @param $data
	 * @return boolean
	 */
	function processFile() {
		/// Turn the string into an array
		$rows = explode("\n", $this->raw_data);

		/// First row includes headers
		$headers = $rows[0];
		$headers = explode($this->delimiter, $headers);

		/// Trim spaces from $headers
		$headers = array_map('trim', $headers);

		/// Check that there are no empty headers. This can happen if there are delimiters at the end of the file
		foreach ($headers as $header) {
			if (!empty($header)) {
				$headers2[] = $header;
			}
		}
		$headers = $headers2;

		if (!in_array('membership', $headers)) {
			$headers[] = 'membership';
		}
		if (!in_array('visibility', $headers)) {
			$headers[] = 'visibility';
		}

		$headers = elgg_trigger_plugin_hook('import_headers', 'group', null, $headers);

		/// Add status column to the headers
		$headers[] = 'status';

		$this->headers = $headers;

		/// Check that at least groupname, name and email are provided in the headers
		if (!in_array('name', $headers)) {
			register_error(elgg_echo('upload_groups:error:wrong_csv_format'));
			return false;
		}

		/// Create a nicer array of groups for processing
		$groups = array();

		/// Go through the group rows
		for ($i = 1; $i < count($rows) - 1; $i++) {
			$rows[$i] = trim($rows[$i]);
			if (empty($rows[$i])) {
				continue;
			}
			$group_details = explode($this->delimiter, $rows[$i]);

			$group = array();
			$metadata = array();

			/// Go through group information
			foreach ($group_details as $key => $field) {
				$fieldname = trim($headers[$key]); /// Remove whitespaces
				$field = trim($field);   /// and other garbage.

				$base_entity = array('name', 'membership', 'visibility', 'subtype', 'description', 'container_guid', 'owner_guid');
				if (in_array($fieldname, $base_entity)) {
					$group[$fieldname] = $field;
				} else {
					/// Add all other fields as metadata
					$metadata[$fieldname] = $field;
				}
			}
			$group['metadata'] = $metadata;
			$groups[] = $group;
		}

		$this->groups_to_confirm = $groups;
		return true;
	}

	function checkGroups() {
		global $CONFIG;
		$final_report = array(); /// Final report of the upload process
		/// Check all the groups from $groups_to_confirm array
		foreach ($this->groups_to_confirm as $group) {

			$report = array(
				'name' => $group['name'],
				'subtype' => $group['subtype'],
				'membership' => $group['membership'],
				'visibility' => $group['visibility'],
				'description' => $group['description'],
				'container_guid' => $group['container_guid'],
				'create_group' => true
			);

			/// Process metadata
			foreach ($group['metadata'] as $key => $metadata) {
				$report[$key] = $metadata;
			}

			/// Add the group to the creation list if we can create the group
			if ($report['status'] == '') {
				$report['status'] = elgg_echo('upload_groups:statusok'); /// Set status to ok
				$this->groups_to_create[] = $group;
			} else {
				$this->number_of_failed_groups++;
			}

			$final_report[] = $report;
		}

		$this->confirmation_report = $final_report;
		return true;
	}

	/**
	 * createGroups Create the groups in Elgg
	 *
	 * @return boolean
	 */
	function createGroups($post_data) {
		global $CONFIG;
		$final_report = array(); /// Final report of the creation process

		$this->headers = explode(',', $post_data['header']);

		/// Create the groups from the $groups array
		for ($i = 0; $i < $post_data['num_of_groups']; $i++) {
			/// Get the group details from POST data for all headers
			foreach ($this->headers as $header) {
				$group[$header] = $post_data[$header][$i];
			}

			/// Add the basic fields to the report
			$report = array(
				'name' => $group['name'],
				'subtype' => $group['subtype'],
				'description' => $group['description'],
				'membership' => $group['membership'],
				'visibility' => $group['visibility'],
				'container_guid' => $group['container_guid']
			);

			/// Try to create the group
			try {
				$user = elgg_get_logged_in_user_entity();

				$new_group = new ElggGroup;
				$new_group->name = $group['name'];
				$new_group->subtype = $group['subtype'];
				$new_group->membership = $group['membership'];
				$new_group->container_guid = $group['container_guid'];

				$new_group->owner_guid = $user->guid;
				$new_group->access_id = $group['visibility'];
				$guid = $new_group->save();
				if ($guid) {
					elgg_set_page_owner_guid($group->guid);
					$new_group->join($user);
					add_to_river('river/group/create', 'create', $user->guid, $new_group->guid);

					if (elgg_get_plugin_setting('hidden_groups', 'groups') == 'yes') {
						$visibility = $group['visibility'];
						if ($visibility != ACCESS_PUBLIC && $visibility != ACCESS_LOGGED_IN) {
							$visibility = $new_group->group_acl;
						}

						if ($new_group->access_id != $visibility) {
							$new_group->access_id = $visibility;
							$new_group->save();
						}
					}

					/// Add all other fields as metadata
					foreach ($this->headers as $header) {
						if (in_array($header, array('name', 'subtype', 'membership', 'visibility', 'description', 'container_guid'))) {
							continue;
						}

						/// Metadata could be a comma separated list if the delimiter is something else than a comma
						if ($this->delimiter != ',' && strpos($group[$header], ',')) {
							/// Multiple tags found
							$tags = string_to_tag_array($group[$header]);
							foreach ($tags as $tag) {
								create_metadata($guid, $header, $tag, 'text', $guid, ACCESS_PRIVATE, true);
							}
						} else {
							create_metadata($guid, $header, $group[$header], 'text', $guid);
						}

						/// Add this metadata field to the report
						$report[$header] = $group[$header];
					}

					/// Add status message to the report
					$report['status'] = elgg_echo('upload_groups:success');
				}
			} catch (RegistrationException $r) {
				//register_error($r->getMessage());
				$report['status'] = '<span class="error">' . $r->getMessage() . '</span>';
				$report['password'] = ''; /// Reset password in failed cases
				$this->number_of_failed_groups++;
			}
			$final_report[] = $report;
		}
		$this->creation_report = $final_report;
		return true;
	}

	/**
	 * Get a display friendly status report of the accounts creation
	 *
	 * @return unknown_type
	 */
	public function getCreationReport() {
		$data = array('headers' => $this->headers, 'report' => $this->creation_report, 'num_of_failed' => $this->number_of_failed_groups);

		return elgg_view('upload_groups/creation_report', $data);
	}

	/**
	 * Get a display friendly status report of the accounts creation
	 *
	 * @return unknown_type
	 */
	public function getConfirmationReport() {
		$data = array('headers' => $this->headers,
			'report' => $this->confirmation_report,
			'num_of_failed' => $this->number_of_failed_groups,
			'delimiter' => $this->delimiter,
			'encoding' => $this->encoding);
		$return = elgg_view('upload_groups/confirmation_report', $data);

		return $return;
	}

	/**
	 * Returns the upload form. Uses Elgg view to do this.
	 *
	 * @param $data
	 * @return string
	 */
	function getUploadForm($data = NULL) {
		return elgg_view_form('upload_groups/upload', array(
					'enctype' => 'multipart/form-data',
					'method' => 'POST',
					'id' => 'group-upload-admin-form'
						), $data);
	}

}
