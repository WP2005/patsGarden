<!DOCTYPE HTML>

<!--
	Filename: header.php
	Description: Common header all WP pages
	Modification History: 
-->

<html <?php language_attributes(); ?>>
	<head>
        <?php wp_head(); //lets WP loads css, plugins, etc... ?> 
        <meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?></title>
	</head>
	
	<body class="is-preload" <?php body_class(); ?>>