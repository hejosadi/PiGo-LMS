<?php
/**
 * Elgg sidebar contents
 *
 * @uses $vars['sidebar'] Optional content that is displayed at the bottom of sidebar
 */
 
 //Add SW Social Translator
?>



</br>

<?php
echo elgg_view_menu('extras', array(
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));
if (elgg_is_logged_in()) {

if ((elgg_get_context() == 'activity')) {

		?>
	<p align="center">

		 <p align="center"><a href="<?php echo $vars['url']; ?>profile/<?php echo $_SESSION['user']->username; ?>"><img src="<?php echo $_SESSION['user']->getIconURL('large'); ?>" style="border: 1px solid #cccccc;padding:3px;" /></a></p>

		 <div style="background:#DEDEDE url(<?php echo $vars['url']; ?>mod/esperanza/css/26.png) no-repeat center left; margin-bottom: 5px; padding-left: 20px; padding-top: 5px; padding-bottom: 5px; border-bottom: 1px solid #edeff4;" id="left_menu_dashboard"><h3><a href="<?php echo $vars['url']; ?>profile/<?php echo $_SESSION['user']->username; ?>/edit">Edit Profile</a></h3></div>

      <div style="background:#DEDEDE url(<?php echo $vars['url']; ?>mod/esperanza/css/38.png) no-repeat center left; margin-bottom: 5px; padding-left: 20px; padding-top: 5px; padding-bottom: 5px; border-bottom: 1px solid #edeff4;" id="left_menu_dashboard"><h3><a href="<?php echo $vars['url']; ?>avatar/edit/<?php echo $_SESSION['user']->username; ?>/editicon" >Edit Avatar</a></h3></div>
  
      
      <div style="background:#DEDEDE url(<?php echo $vars['url']; ?>mod/esperanza/css/7.png) no-repeat center left; margin-bottom: 5px; padding-left: 20px; padding-top: 5px; padding-bottom: 5px; border-bottom: 1px solid #edeff4;" id="left_menu_dashboard"><h3><a href="<?php echo $vars['url']; ?>file/all" >Files</a></h3></div>

      <div style="background:#DEDEDE url(<?php echo $vars['url']; ?>mod/esperanza/css/24.png) no-repeat center left; margin-bottom: 5px; padding-left: 20px; padding-top: 5px; padding-bottom: 5px; border-bottom: 1px solid #edeff4;" id="left_menu_dashboard"><h3><a href="<?php echo $vars['url']; ?>blog/all" >Blog</a></h3></div>

      <div style="background:#DEDEDE url(<?php echo $vars['url']; ?>mod/esperanza/css/16.png) no-repeat center left; margin-bottom: 5px; padding-left: 20px; padding-top: 5px; padding-bottom: 5px; border-bottom: 1px solid #edeff4;" id="left_menu_dashboard"><h3><a href="<?php echo $vars['url']; ?>thewire/all/" >The Wire</a></h3></div>

      <div style="background:#DEDEDE url(<?php echo $vars['url']; ?>mod/esperanza/css/18.png) no-repeat center left; margin-bottom: 5px; padding-left: 20px; padding-top: 5px; padding-bottom: 5px; border-bottom: 1px solid #edeff4;" id="left_menu_dashboard"><h3><a href="<?php echo $vars['url']; ?>messageboard/owner/<?php echo $_SESSION['user']->username; ?>" >Message Board</a></h3></div>

      <div style="background:#DEDEDE url(<?php echo $vars['url']; ?>mod/esperanza/css/41.png) no-repeat center left; margin-bottom: 5px; padding-left: 20px; padding-top: 5px; padding-bottom: 5px; border-bottom: 1px solid #edeff4;" id="left_menu_dashboard"><h3><a href="<?php echo $vars['url']; ?>friends/<?php echo $_SESSION['user']->username; ?>" >Friends</a></h3></div>

      <div style="background:#DEDEDE url(<?php echo $vars['url']; ?>mod/esperanza/css/72.png) no-repeat center left; margin-bottom: 5px; padding-left: 20px; padding-top: 5px; padding-bottom: 5px; border-bottom: 1px solid #edeff4;" id="left_menu_dashboard"><h3><a href="<?php echo $vars['url']; ?>settings/user/<?php echo $_SESSION['user']->username; ?>" >Settings</a></h3></div>
	</br>

<?php
		echo elgg_view('page/elements/comments_block');
	

}
}
echo elgg_view('page/elements/owner_block', $vars);

echo elgg_view_menu('page', array('sort_by' => 'name'));

// optional 'sidebar' parameter
if (isset($vars['sidebar'])) {
	echo $vars['sidebar'];
}

// @todo deprecated so remove in Elgg 2.0
// optional second parameter of elgg_view_layout
if (isset($vars['area2'])) {
	echo $vars['area2'];
}

// @todo deprecated so remove in Elgg 2.0
// optional third parameter of elgg_view_layout
if (isset($vars['area3'])) {
	echo $vars['area3'];
}