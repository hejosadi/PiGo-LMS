<?php
/**
 * Elgg Bootswatch plugin settings.
 *
 * @package ElggTwitterBootstrap
 */

$style = $vars['entity']->bootswatch_style;
if (!$style) $style = 'united';
$available = array(
	'amelia',	'cerulean',	'cosmo',	'cyborg',
	'flatly',	'journal',	'readable',	'simplex',
	'slate',	'spacelab',	'spruce',	'superhero',
	'united' );
$opts = array();
foreach($available as $s)
	$opts[$s] = ucwords($s);
?>
<div>
	<div id="bootswtach_preview"><?php
		$preview_dir = $CONFIG->url . 'mod/twitter_bootswatch/bootswatches/';
		foreach($available as $img)
			echo "<img src='{$preview_dir}{$img}.png' width='150' style='height: auto;' />"; ?>
	</div>
	<br/>
	<?php
		echo elgg_echo('twitter_bootswatch:style') . ' ';
		echo elgg_view('input/dropdown', array(
			'name' => 'params[bootswatch_style]',
			'options_values' => $opts,
			'value' => $style,
		));
	?>
</div>
