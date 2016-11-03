<!DOCTYPE html>
<html>
<head>
<?php wp_head() ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
<title><?php bloginfo('title'); ?></title>
</head>
<body>
<div id="banner">
    <img src="images/web-header.jpg" alt="banner">
</div>
<nav>
<?php wp_nav_menu() ?>
</nav>