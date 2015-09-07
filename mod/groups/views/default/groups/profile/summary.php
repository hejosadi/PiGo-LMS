<?php
/**
 * Group profile summary
 *
 * Icon and profile fields
 *url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png)
 * @uses $vars['group']
 */

if (!isset($vars['entity']) || !$vars['entity']) {
	echo elgg_echo('groups:notfound');
	return true;
}

$group = $vars['entity'];
$owner = $group->getOwnerEntity();

if (!$owner) {
	// not having an owner is very bad so we throw an exception
	$msg = elgg_echo('InvalidParameterException:IdNotExistForGUID', array('group owner', $group->guid));
	throw new InvalidParameterException($msg);
}

?>

			<?php
				// we don't force icons to be square so don't set width/height
				echo elgg_view_entity_icon($group, 'master', array(
					'href' => '',
					'width' => '520',
					'height' => '346',
					'align' =>'center',
				)); 
			
			?>
			<center>
		</div>
		<div class="groups-stats">
			<p style="font-size: 16px;">
				<b><?php echo elgg_echo("groups:owner"); ?>: </b>
				<?php
					echo elgg_view('output/url', array(
						'text' => $owner->name,
						'value' => $owner->getURL(),
						'is_trusted' => true,
					));
				?>
			</p>
			<p> 
				
			<?php
				echo elgg_echo('groups:members') . ": " . $group->getMembers(0, 0, TRUE);
			?>
			</p>
			
		</div>
	</div>

	<div class="groups-profile-fields elgg-body">
		<?php
			echo elgg_view('groups/profile/fields', $vars);
		?>
	</div></br>
</div>
<?php
?>

