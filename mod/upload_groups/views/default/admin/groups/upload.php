<?php
elgg_load_css('upload_groups.css');
elgg_load_js('jquery.form');
elgg_load_js('upload_groups.js');

$upload = new UploadGroups();

/// Get the upload form
$body = $upload->getUploadForm();

echo $body;