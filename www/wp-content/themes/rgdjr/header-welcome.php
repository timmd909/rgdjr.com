<?php

/**
 * Header for RGDJR.com
 */


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta name="viewport" content="width=device-width" />
<title><?php wp_title('&mdash;', true, 'left'); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- WordPress Header -->
<?php wp_head(); ?>
<!-- / WordPress Header -->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css" type="text/css" media="all" />
<script language="JavaScript" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/home.js"></script>
</head>

<body <?php body_class(); ?>>

<h5>header home</h5>
	<header id="header">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
				title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
				rel="home"><?php bloginfo('name'); ?></a></h1>
			<h2 class="site-description"><?php bloginfo('description'); ?></h2>
			<?php rgdjr_wp_header_links(); ?>
		</hgroup>
	</header>

	<div id="page">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu(array(
				'theme_location' => 'primary',
				'menu_class' => 'nav-menu'
			)); ?>
			<div class="clear-both"></div>
		</nav>
		<div id="main" class="wrapper">