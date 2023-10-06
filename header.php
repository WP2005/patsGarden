<!DOCTYPE HTML>

<!--
	Website: Patsfarmsgardencenter.com
	Filename: header.php
	Description: Common header all WP pages
	First released: 10.5.2023 
	Modification History: 
-->

<html <?php language_attributes(); ?>>
	<head>
        <?php wp_head(); //lets WP loads css, plugins, etc... ?> 
        <meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?></title>
	</head>
	
	<body class="is-preload" <?php body_class(); ?>>