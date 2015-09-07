<?php
/**
 * Add question form
 */

$title = elgg_extract('title', $vars, '');
$desc = elgg_extract('description', $vars, '');
$tags = elgg_extract('tags', $vars, '');
$container_guid = elgg_extract('container_guid', $vars);
$guid = elgg_extract('guid', $vars, null);

?>
<div>
	<label><?php echo elgg_echo('title'); ?></label><br />
	<?php echo elgg_view('input/text', array('name' => 'title', 'value' => $title)); ?>
</div>

<div>
	<label><?php echo elgg_echo('answers:questiondetails'); ?></label>
	<?php echo elgg_view('input/longtext', array('name' => 'description', 'value' => $desc)); ?>
</div>

<div>
	<label><?php echo elgg_echo('tags'); ?></label>
	<?php echo elgg_view('input/tags', array('name' => 'tags', 'value' => $tags)); ?>
</div>

<div>
	<label><?php echo elgg_echo('access'); ?><label>
	<?php echo elgg_view('input/access', array(
		'name' => 'access_id',
	)); ?>

</div>

<?php
	$categories = elgg_view('input/categories', $vars);
	if ($categories) {
		echo $categories;
	}
?>

<div class="elgg-foot">
	<?php
		echo elgg_view('input/hidden', array('name' => 'container_guid', 'value' => $container_guid));
		if ($guid) {
			echo elgg_view('input/hidden', array('name' => 'guid', 'value' => $guid));
		}
		echo elgg_view('input/submit', array('value' => elgg_echo("save")));
	?>
</div>