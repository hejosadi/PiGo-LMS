<?php
/***************************************************
 * SW Social Web                                   *
 * Copyrights (c) 2010-2020. SW Social Web         *
 * All rights reserved                             *
 ***************************************************
 */
?>
<!--shows the thumbnail view of the user generatated quiz of a challenge-->
<div class="izap-quiz-wrapper">
  <div class="izap-quiz-title">
    <h3>
      <a href="<?php echo $vars['entity']->getUrl() ?>" >
        <?php echo $vars['entity']->title; ?>
      </a>
    </h3>
  </div>

  <div>
    <?php
    echo IzapBase::controlEntityMenu(array(
        'entity' => $vars['entity'],
        'handler' => GLOBAL_IZAP_CONTEST_QUIZ_PAGEHANDLER,
        'vars' => array($vars['entity']->container_guid, $vars['entity']->getGUID(), elgg_get_friendly_title($vars['entity']->title))
    ));
    ?>
  </div>
</div>
<div class="clearfloat"></div>