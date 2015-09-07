<?php
/**
 * Elgg topbar
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();

echo <<<HTML
<a class="brand" href="$site_url">$site->name</a>
HTML;

echo elgg_view_menu('topbar', array('sort_by' => 'priority', array('elgg-menu-hz')));


if (elgg_is_logged_in()) {
    // "logged in as [username]"
    $username = elgg_get_logged_in_user_entity()->name;
    $url = elgg_get_logged_in_user_entity()->getURL();
    
    $login_text = "<p class=\"navbar-text\">" . elgg_echo('admin:loggedin', array("<a href=\"$url\">$username</a>")) . "</p>";
}

echo <<<HTML
    <div class="pull-right">
        $login_text
    </div>
HTML;
