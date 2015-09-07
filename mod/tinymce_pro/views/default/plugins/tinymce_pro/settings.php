<?php
$image_data_path = $vars['entity']->image_data_path;

?>

<p>
  <b>Enter the path where the images will be stored. Path to upload target folder, relative to domain name. NO TRAILING SLASH!
  If network is installed in a subfolder, data path has to be "/elgg/mod/tinymce/images"
  </b>

<?php

echo elgg_view('input/text', array(
    'name'  => 'params[image_data_path]',
    'value' => $image_data_path,
));


 ?>
</p>