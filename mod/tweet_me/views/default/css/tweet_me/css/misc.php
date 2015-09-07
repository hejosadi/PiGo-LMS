<?php 
?>

.sidebar-nav {
	padding: 9px 0;
}

/**********************************
* Navigation
***********************************/
/* login form dropdown box */
ul.dropdown-menu > li > form.elgg-form-login {
    background-color: white;
    margin: 0;
    padding: 20px;
    
    width: 300px;
}

.breadcrumb.elgg-menu > li > a {
    display: inline-block;
}

.nav.elgg-menu.elgg-child-menu {
	padding-left:10px;
}

ul.elgg-menu-hover,
ul.elgg-menu-hover li ul {
	margin-bottom:0;
}

.elgg-menu-hover-admin li > a:hover {
    background-color: red;
    color: white;
}

.elgg-menu-admin-footer li > a:hover {
    color: black;
}

/**********************************
* Profile
***********************************/
/* override ".nav > li > a:hover" */
.profile-content-menu li > a:hover {
	background: #0054A7;
	color: white;
	text-decoration: none;
}

/**********************************
* Forms
***********************************/
label input, label textarea, label select {
    display: inline-block;
}


/**********************************
* Search
***********************************/
.elgg-search-header {
    height: 23px;
    position: absolute;
    right: 20px;
    top: 65px;
}
.elgg-search input[type=text] {
	width: 230px;
	height: 16px;
	border: 1px solid #CCC;
}


