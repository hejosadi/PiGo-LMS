<?php
/**
 * Discussion topic add/edit form body
 * 
 */

$title = elgg_extract('title', $vars, '');
$desc = elgg_extract('description', $vars, '');
$status = elgg_extract('status', $vars, '');
$tags = elgg_extract('tags', $vars, '');
$access_id = elgg_extract('access_id', $vars, ACCESS_DEFAULT);
$container_guid = elgg_extract('container_guid', $vars);
$guid = elgg_extract('guid', $vars, null);
$date_time = elgg_extract('date_time', $vars, '');
$start_time = elgg_extract('start_time', $vars, '');
$end_time = elgg_extract('end_time', $vars, '');



?>
<div>
	<label><?php echo elgg_echo('title'); ?></label><br />
	<?php echo elgg_view('input/text', array('name' => 'title', 'value' => $title)); ?>
</div>
<div>
	<label><?php echo elgg_echo('groups:topicmessage'); ?></label>
	<?php echo elgg_view('input/longtext', array('name' => 'description', 'value' => $desc)); ?>
</div>
<div>
	<label><?php echo elgg_echo('Fecha de Cierre de la Tarea:'); ?></label><br />
	<?php echo elgg_view('input/calendar', array('name' => 'date_time', 'value' => $date_time)); ?>
</div>
	
<div>
	<label><?php echo elgg_echo('Hora de Cierre de la Tarea:'); ?></label><br />
	<?php echo elgg_view('input/dropdown', array('name' => 'start_time', 'value' => $start_time,
						     'options_values' => array(
									       '7:30' => '7:30',
									       '8:00' => '8:00',
									       '8:30' => '8:30',
									       '9:00' => '9:00',
									       '9:30' => '9:30',
									       '10:00' => '10:00',
									       '10:30' => '10:30',
									       '11:00' => '11:00',
									       '11:30' => '11:30',
									       '12:00' => '12:00',
									       '13:00' => '13:00',
									       '13:30' => '13:30',
									       '14:00' => '14:00',
									       '14:30' => '14:30',
									       '15:00' => '15:00',
									       '15:30' => '15:30',
									       '16:00' => '16:00',
									       '16:30' => '16:30',
									       '17:00' => '17:00',
									       '17:30' => '17:30',
									       '18:00' => '18:00',
									       '18:30' => '18:30',
									       '19:00' => '19:00',
									       '19:30' => '19:30',
									       '20:00' => '20:00',
									       '20:30' => '20:30',
									       '21:00' => '21:00',
									       '21:30' => '21:30',
									       '22:00' => '22:00',
									       '22:30' => '22:30',
									       '23:00' => '23:00',
									       '23:30' => '23:30',
									       '00:00' => '00:00',
									       ),
						     
						     )); ?>
</div>


<div>
	<label><?php echo elgg_echo('tags'); ?></label>
	<?php echo elgg_view('input/tags', array('name' => 'tags', 'value' => $tags)); ?>
</div>
<div>
    <label><?php echo elgg_echo("groups:topicstatus"); ?></label><br />
	<?php
		echo elgg_view('input/dropdown', array(
			'name' => 'status',
			'value' => $status,
			'options_values' => array(
				'open' => elgg_echo('groups:topicopen'),
				'closed' => elgg_echo('groups:topicclosed'),
			),
		));
	?>
</div>
<div>
	<label><?php echo elgg_echo('access'); ?></label><br />
	<?php echo elgg_view('input/access', array('name' => 'access_id', 'value' => '1')); ?>
</div>
<div class="elgg-foot">
<?php

echo elgg_view('input/hidden', array('name' => 'container_guid', 'value' => $container_guid));

if ($guid) {
	echo elgg_view('input/hidden', array('name' => 'topic_guid', 'value' => $guid));
}

echo elgg_view('input/submit', array('value' => elgg_echo("save")));

?>
</div>
