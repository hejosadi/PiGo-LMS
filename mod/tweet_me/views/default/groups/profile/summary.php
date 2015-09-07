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
<head>
	
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="<?php echo elgg_get_site_url(); ?>mod/tweet_me/parallax/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo elgg_get_site_url(); ?>mod/tweet_me/parallax/css/style.css" />
		<script type="text/javascript" src="<?php echo elgg_get_site_url(); ?>mod/tweet_me/parallax/js/modernizr.custom.04022.js"></script>
		
    </head>

<div class="groups-profile clearfix elgg-image-blocks">
	<div class="elgg-image">
		<div class="groups-profile-icon" align="center">
			<center>
				<div class="sp-slideshow">
			
				<input id="button-1" type="radio" name="radio-set" class="sp-selector-1" checked="checked" />
				<label for="button-1" class="button-label-1"></label>
				
			
				
				
				
				
				<div class="sp-content">
					<div class="sp-parallax-bg"></div>
					<ul class="sp-slider clearfix">
						<li><img <?php echo elgg_view_entity_icon($group, 'master'); ?>/></li>
						<li><a href="<?php echo elgg_get_site_url(); ?>discussion/owner/<?php echo $group->guid; ?>"><img src="<?php echo elgg_get_site_url(); ?>mod/tweet_me/parallax/images/image2.png" alt="image02" /></a></li>
						<li><a href="<?php echo elgg_get_site_url(); ?>challenge/list/<?php echo $group->guid; ?>/group:<?php echo $group->guid; ?>/"><img src="<?php echo elgg_get_site_url(); ?>mod/tweet_me/parallax/images/image3.png" alt="image03" /></a></li>

					</ul>
				</div><!-- sp-content -->
				
			</div><!-- sp-slideshow -->
			<?php
				// we don't force icons to be square so don't set width/height
			//	echo elgg_view_entity_icon($group, 'master', array(
			//		'href' => '',
			//		'width' => '520',
			//		'height' => '346',
			//		'align' =>'center',
			//	)); 
			//
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

