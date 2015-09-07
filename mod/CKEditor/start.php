<?php

function ckeditor_init() {

	global $CONFIG;	
	elgg_register_plugin_hook_handler('delete', 'user', 'Remove_files_when_user_isDel');
        elgg_extend_view('metatags','CKEditor/js/javascript');
        elgg_register_page_handler('CKEditorupload', 'uploadCK');
        elgg_register_page_handler('CKEditorView', 'viewCK');

}

function uploadCK($page, $identifier,$obj) {    
    $funcNum2 = get_Input('CKEditorFuncNum', 'CKEditorFuncNum');
    $file = new ElggFile();
$filestorename = strtolower(time().$_FILES['upload']['name']);
$file->setFilename($filestorename);
$file->setMimeType($_FILES['upload']['type']);
$file->owner_guid = elgg_get_logged_in_user_guid();
$file->subtype = "file";
$file->originalfilename = $filestorename;

$file->access_id = ACCESS_PUBLIC;

$file->open("write");
$file->write(get_uploaded_file('upload'));
$file->close();

$result = $file->save();

if ($result)
{
	$master = get_resized_image_from_existing_file($file->getFilenameOnFilestore(),550,550);

	if ($master !== false)
	{
		$_SESSION['UPLOAD_DATA']['file_save'] = "started";
		$filehandler = new ElggFile();
		$filehandler->setFilename($filestorename);
		$filehandler->setMimeType($_FILES['upload']['type']);
		$filehandler->owner_guid = $user->guid;
		$filehandler->subtype = "file";
		$filehandler->originalfilename =$filestorename;
		$filehandler->access_id = ACCESS_PUBLIC;
		$filehandler->open("write");
		$filehandler->write($master);
		$filehandler->close();
		$filehandler->save();
		// Dev URL
		$url = elgg_get_site_url().'CKEditorView?file_guid='.$filehandler->guid;
		//Production URL
                //$url ='/CKEditorView?file_guid='.$filehandler->guid;
		echo '<script type="text/javascript">
		window.parent.CKEDITOR.tools.callFunction('.$funcNum2.', "'.$url.'","");
		</script>';
		exit();

	}
	else
	{

		echo '<script type="text/javascript">
		window.parent.CKEDITOR.tools.callFunction('.$funcNum2.', "","");
		</script>';
		exit();
	}
}
    return true;
}



function viewCK($page, $identifier,$obj) {    
        include_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
	$file_guid = (int) get_input('file_guid');
	$file = get_entity($file_guid);	
	$readfile = new ElggFile();
	$readfile->owner_guid = $file->owner_guid;
	$readfile->setFilename($file->originalfilename);
	$filename = $readfile->getFilenameOnFilestore();
	$handle = fopen($filename, "r");
	$contents = fread($handle, filesize($filename));
	fclose($handle);
	$mime = $file->getMimeType();
	$expires = 14 * 60*60*24;
	header("Content-Type: $mime");
	header("Content-Length: " . strlen($contents));
	header("Cache-Control: public", true);
	header("Pragma: public", true);
	header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $expires) . ' GMT', true);	
	echo $contents;
	return true;
    
}


function ckeditor_pagesetup()
{
	if (get_context() == 'admin' && isadminloggedin()) {
		global $CONFIG;
		add_submenu_item(elgg_echo('ckeditor:admin_title'), $CONFIG->wwwroot . 'mod/CKEditor/admin.php');
	}
}

function Remove_files_when_user_isDel($hook, $entity_type, $returnvalue, $params)
{
	global $CONFIG;

	delete_orphaned_metastrings();
	$tables = get_db_tables();
	foreach ($tables as $table) {
		echo sprintf(elgg_echo('garbagecollector:optimize'), $table);
			
		if (optimize_table($table)!==false)
		echo elgg_echo('garbagecollector:ok');
		else
		echo elgg_echo('garbagecollector:error');

		echo "\n";
	}


}


elgg_register_event_handler('init','system','ckeditor_init');
//elgg_register_event_handler('pagesetup','system','ckeditor_pagesetup');
?>
