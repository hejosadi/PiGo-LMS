<?php
/* * *************************************************
 * PluginLotto.com                                 *
 * Copyrights (c) 2005-2011. iZAP                  *
 * All rights reserved                             *
 * **************************************************
 * @author iZAP Team "<support@izap.in>"
 * @link http://www.izap.in/
 * Under this agreement, No one has rights to sell this script further.
 * For more information. Contact "Tarun Jangra<tarun@izap.in>"
 * For discussion about corresponding plugins, visit http://www.pluginlotto.com/forum/
 * Follow us on http://facebook.com/PluginLotto and http://twitter.com/PluginLotto
 */

// this is the detail view page of the challenge created by current user
if ($vars['challenge_entity']->max_quizzes && $vars['challenge_entity']->total_questions < $vars['challenge_entity']->max_quizzes):
  ?>
  <div>
    <em style="color:red;">
  <?php echo elgg_echo('izap-contest:challenge:not_enough_questions') . $vars['challenge_entity']->max_quizzes . '</b>'; ?>
    </em>
  </div>
<?php endif; ?>

<?php if ($vars['challenge_entity']->quizzes): ?>
    <?php echo elgg_view('page/elements/title', array('title' => 'Related quizzes' . ' (' . $vars['challenge_entity']->total_questions . ')' . $vars['control_menu'])); ?>
  <div>
    <?php
    echo elgg_list_entities(array(
        'type' => 'object',
        'subtype' => GLOBAL_IZAP_CONTEST_QUIZ_SUBTYPE,
        'container_guid' => $vars['challenge_entity']->guid));

$options = array(
          'type' => 'object',
          'subtype' => 'izap_challenge_results',
          
          'container_guid' => $vars['challenge_entity']->guid,
          'limit' => 120,
      );
      echo elgg_echo('izap-contest:challenge:All_Results');
      $list =elgg_get_entities($options);
     # $list = elgg_list_entities($options);
      if ($list != '') {
       $checkUser =array();
        foreach($list as $list_key => $list_entity){
          if(!in_array($list_entity->owner_guid, $checkUser)){
          $UserInfo = get_user($list_entity->owner_guid);
         echo "<h3>".elgg_echo('izap-contest:challenge:InfoUser')." ".$UserInfo->username."</h3>";
         echo "<h3>".elgg_echo('usersettings:statistics:label:name').": ".$UserInfo->name."</h3>";
         echo "<h3>".elgg_echo('usersettings:statistics:label:email').": ".$UserInfo->email."</h3>";
         #usersettings:statistics:label:emai

         $options2 = array(
          'type' => 'object',
          'subtype' => 'izap_challenge_results',
           'owner_guid' => $list_entity->owner_guid,
          'container_guid' => $vars['challenge_entity']->guid,
          'limit' => 120,
      );
         $list2 =elgg_list_entities($options2);
        echo elgg_view(GLOBAL_IZAP_CONTEST_PLUGIN . '/challenge/result_listing_header');  
      echo $list2;
      array_push($checkUser, $list_entity->owner_guid);

    }
         
        }


  
      } else {
        echo '<div class="contentWrapper">' . elgg_echo('izap-contest:challenge:not_played') . '</div>';
      }


    ?>
  </div>
<?php endif;
?>
