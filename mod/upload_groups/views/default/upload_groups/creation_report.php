<?php

/**
 * Upload groups creation report view. Prints a nice table of all the created groups.
 *
 * @package upload_groups
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jaakko Naakka / Mediamaisteri Group
 * @copyright Mediamaisteri Group 2009
 * @link http://www.mediamaisteri.com/
 */

$headers = $vars['headers'];
$report  = $vars['report'];


?>
<div class="upload_groups_container">
<ul>
<li><?php echo elgg_echo('upload_groups:number_of_accounts'); ?>: <?php echo count($report); ?></li>
<li><?php echo elgg_echo('upload_groups:number_of_errors'); ?>: <?php echo $vars['num_of_failed']; ?></li>
</ul>
</div>

<?php 
if($report){
?>
<table id="creation_report">
<thead>
<?php 
/// Print the headers
foreach($headers as $header){
	echo '<td>' . $header . '</td>';
}
?>

</thead>

<?php 
/// Print the data
foreach($report as $row){
	echo '<tr>';
	foreach($headers as $header){
		echo '<td>' . $row[$header] . '</td>';
	}
	echo '</tr>';
}

?>

</table>

<?php 
}else{ /// ENDIF $report
	echo elgg_echo('upload_groups:no_created_groups');	
}
?>


