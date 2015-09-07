<?php
/**
 * Upload groups. Processes the uploaded file and prints a report of the cerated files.
 *
 * @package upload_groups
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jaakko Naakka / Mediamaisteri Group
 * @copyright Mediamaisteri Group 2009
 * @link http://www.mediamaisteri.com/
 */

$upload = new UploadGroups();

elgg_push_context('admin');

/// Get the input from the form or hidden fields
$encoding  = get_input('encoding');
$delimiter = get_input('delimiter');
$confirm   = get_input('confirm', false);

/// Set the parameters
$upload->setEncoding($encoding);
$upload->setDelimiter($delimiter);

if(!$confirm) {
	/// Open the file
	if(! $upload->openFile('csvfile')){
		forward("admin/groups/upload");
	}

	/// Process the file
	if(! $upload->processFile()){
		forward("admin/groups/upload");
	}

	/// Check the groups
	$upload->checkGroups();
	/// Print the processed groups for confirmation
	$body = $upload->getConfirmationReport();
	$title = elgg_view_title(elgg_echo('upload_groups:process_report'));
/// Create the groups and print the report
}else{
	/// Create the groups
	$upload->createGroups($_POST);
	/// Everything was fine -> Display the creation report
	$body = $upload->getCreationReport();
	$title = elgg_view_title(elgg_echo('upload_groups:creation_report'));
}

elgg_pop_context();

header('Content-type: text/html');
print $body;
exit;