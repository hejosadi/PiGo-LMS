<?php
/**
 * Elgg page header
 * In the default theme, the header lives between the topbar and main content area.
 */

// link back to main site.
echo elgg_view('page/elements/header_logo', $vars);

// drop-down login
echo elgg_view('core/account/login_dropdown');


// <p>
// <a class="btn btn-primary btn-large">Learn more 1 &raquo;</a>
// <a class="btn btn-primary btn-large">Learn more  2&raquo;</a>
// <a class="btn btn-primary btn-large">Learn more 3  &raquo;</a>
// </p>
