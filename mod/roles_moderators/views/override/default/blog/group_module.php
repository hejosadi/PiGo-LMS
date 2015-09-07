<?php

$group = elgg_get_page_owner_entity();
?>
<html lang="en">
    <head>
      
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

        <link rel="stylesheet" type="text/css" href="http://172.22.1.124/12944/mod/tweet_me/test/css/style4.css" />
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
    </head>
    <body>
        <div class="container">
           
            </br>
	    <center><p style="font-size:48px">Dashboard</p></center>
	    </br>
            <div class="content">
              
                <ul class="ca-menu">
                    <?php
		    
		    if ($vars['entity']->forum_enable == 'yes') {
	

		    ?>
		    <li>
                        <a href="<?php echo elgg_get_site_url(); ?>discussion/owner/<?php echo $group->guid; ?>">
                            <span class="ca-icon">F</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Tareas</h2>
                                <h3 class="ca-sub">de la clase</h3>
                            </div>
                        </a>
                    </li>
		    
		      <li>
                        <a href="<?php echo elgg_get_site_url(); ?>discussion/add/<?php echo $group->guid; ?>">
                            <span class="ca-icon">F</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Crear una</h2>
                                <h3 class="ca-sub">Tarea</h3>
                            </div>
                        </a>
                    </li>
                   
		   <?php
}
		   ?>
		    
		   
                   
                </ul>
            </div><!-- content -->
        </div>
	
	 <ul class="ca-menu">
		       <?php
		       
		       if ($vars['entity']->izapchallenge_enable == "yes") {
			
		       ?>
                    <li>
                        <a href="<?php echo elgg_get_site_url(); ?>challenge/list/<?php echo $group->guid; ?>/group:<?php echo $group->guid; ?>/">
                            <span class="ca-icon">H</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Examenes</h2>
                                <h3 class="ca-sub">de esta clase</h3>
                            </div>
                        </a>
                    </li>
		    
                     <li>
                        <a href="<?php echo elgg_get_site_url(); ?>challenge/add/group:<?php echo $group->guid; ?>/">
                            <span class="ca-icon">H</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Crear</h2>
                                <h3 class="ca-sub">un examen</h3>
                            </div>
                        </a>
                    </li>
		     <?php
		     
		       }
		     
		     ?>
		    </ul>
	
	 <ul class="ca-menu">
		<?php
		
if ($group->blog_enable == "yes") {
		
		?>
                    <li>
                        <a href="<?php echo elgg_get_site_url(); ?>blog/group/<?php echo $group->guid; ?>/all">
                            <span class="ca-icon">N</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Noticias</h2>
                                <h3 class="ca-sub">y anuncios de la clase</h3>
                            </div>
                        </a>
                    </li>
		    <?php
		    
		}
		    
		    ?>
		    
		    <?php

	if ($group->file_enable == "yes") { 
?>
                    <li>
                        <a href="<?php echo elgg_get_site_url(); ?>file/group/<?php echo $group->guid; ?>/all">
                            <span class="ca-icon">K</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Modulos</h2>
                                <h3 class="ca-sub">y documentos de la clase</h3>
                            </div>
                        </a>
                    </li>
		    <?php
	}
		    ?>
		    </ul>
	
 
    </body>
</html>


<?php
///**
// * Group blog module
// */
//
//$group = elgg_get_page_owner_entity();
//
//if ($group->blog_enable == "no") {
//	return true;
//}
//
//$all_link = elgg_view('output/url', array(
//	'href' => "blog/group/$group->guid/all",
//	'text' => elgg_echo('link:view:all'),
//	'is_trusted' => true,
//));
//
//elgg_push_context('widgets');
//$options = array(
//	'type' => 'object',
//	'subtype' => 'blog',
//	'container_guid' => elgg_get_page_owner_guid(),
//	'metadata_name_value_pairs' => array('name' => 'status', 'value' => 'published'),
//	'limit' => 2,
//	'full_view' => false,
//	'pagination' => false,
//);
//$content = elgg_list_entities_from_metadata($options);
//elgg_pop_context();
//
//if (!$content) {
//	$content = '<p>' . elgg_echo('blog:none') . '</p>';
//}
//
//
//
//
//	echo elgg_view('groups/profile/module', array(
//	'title' => elgg_echo('blog:group'),
//	'content' => $content,
//	'all_link' => $all_link,
//	
//));
//	
