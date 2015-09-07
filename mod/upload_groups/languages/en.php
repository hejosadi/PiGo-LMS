<?php

/**
 * Elgg upload_groups plugin language file
 *
 * @package upload_groups
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jaakko Naakka / Mediamaisteri Group
 * @copyright Mediamaisteri Group 2008-2009
 * @link http://www.mediamaisteri.com/
 */
$english = array(
	'admin:groups' => 'Groups',
	'admin:groups:upload' => 'Upload Groups',
	'upload_groups:upload_groups' => 'Upload Groups',
	'upload_groups:choose_file' => 'Choose file',
	'upload_groups:encoding' => 'Choose encoding',
	'upload_groups:delimiter' => 'Choose delimiter',
	'upload_groups:yes' => 'Yes',
	'upload_groups:no' => 'No',
	'upload_groups:create_groups' => 'Create group accounts',
	'upload_groups:success' => 'Group created succesfully',
	'upload_groups:statusok' => 'Group can be created',
	'upload_groups:creation_report' => 'Created groups',
	'upload_groups:process_report' => 'Preview of Created Groups',
	'upload_groups:no_created_groups' => 'No created groups.',
	'upload_groups:number_of_accounts' => 'Total number of groups',
	'upload_groups:number_of_errors' => 'Number of errors',
	'upload_groups:submit' => 'Submit',
	'upload_groups:upload_help' => '<p>Choose a CSV file and upload it to create new groups. </p><p>The first row in the file must include information what the columns include. The only required field is name. </p><p>You can add any number of fields. All the other fields will be added as metadata for the group. If your delimiter is something else than a comma (,) a value can be a comma separated list of tags</p><p>Here is an example of a csv file:</p>',
	/*
	 * Error messages
	 * 
	 */

	'upload_groups:error:file_open_error' => 'Error opening file',
	'upload_groups:error:wrong_csv_format' => 'CSV file in wrong format',
);

add_translation("en", $english);
?>