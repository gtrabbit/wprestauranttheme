<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mint_and_Marzipan
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/font-awesome/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lobster|Muli|Spectral" rel="stylesheet">


<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.js
"></script>
<![endif]-->


</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mint-and-marzipan' ); ?></a>

<header role="banner" class="site-header">

	<nav class="nav">

		<ul class="nav-menu">
			<a class="nav-menu-header">  <?php bloginfo('name') ?> </a>
			<div class="nav-thing"> <?php echo get_field('address') ?>
			</div>
			<div class="nav-item-holder">
			<a class="nav-menu-item" href="#menu"> <?php echo get_field('menu_title'); ?> </a>
			<a class="nav-menu-item" href="#about"> <?php echo get_field('about_title'); ?> </a>
			<a class="nav-menu-item" href="#gallery"> <?php echo get_field('gallery_title'); ?> </a>
			<a class="nav-menu-item" href="#contact"> <?php echo get_field('contact_title'); ?> </a>
			</div>
		</ul>
</nav>
</header>


	<div id="content" class="site-content">
