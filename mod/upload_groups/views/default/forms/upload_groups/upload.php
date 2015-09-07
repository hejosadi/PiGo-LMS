<?php

/**
 * Upload groups upload form view.
 *
 * @package upload_groups
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jaakko Naakka / Mediamaisteri Group
 * @copyright Mediamaisteri Group 2009
 * @link http://www.mediamaisteri.com/
 */

?>
<?php echo elgg_echo('upload_groups:upload_help'); ?>
<p class="code">
name; subtype; description<br>
test_group; municipality; this is a test municipality<br>
test_group2; ; ;<br>
</p>

<?php 
/// Diaplay the file selction
echo '<h4>' . elgg_echo('upload_groups:choose_file') . '</h4>';
echo elgg_view('input/file', array('name' => 'csvfile'));
echo '<br />';

/// Display encoding pull down
$options = array('UTF8', 'ISO-8859-1');
echo '<h4>' . elgg_echo('upload_groups:encoding') . '</h4>';
echo elgg_view('input/dropdown', array('options' => $options, 'name' => 'encoding'));
echo '<br />';

/// Display delimiter pull down
$options = array(',', ';', ':', '|');
echo '<h4>' . elgg_echo('upload_groups:delimiter') . '</h4>';
echo elgg_view('input/dropdown', array('options' => $options, 'name' => 'delimiter'));
echo '<br />';

/// Display submit button
echo elgg_view('input/submit', array('value' => elgg_echo('next')));
