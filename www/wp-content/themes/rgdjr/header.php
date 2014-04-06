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
<?php
if ( is_front_page() || is_home()) {
	?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css" type="text/css" media="all" /><?php
}
?>
</head>

<body <?php body_class(); ?>>

	<header id="header">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
				title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
				rel="home"><?php bloginfo('name'); ?></a></h1>
			<h2 class="site-description"><?php bloginfo('description'); ?></h2>
		</hgroup>
	</header>

	<div id="page">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<!-- <h3 class="menu-toggle"><?php _e('Menu', 'rgdjr'); ?></h3> -->
			<?php wp_nav_menu(array(
				'theme_location' => 'primary',
				'menu_class' => 'nav-menu'
			)); ?>
			<div class="clear-both"></div>
		</nav>
		<div id="main" class="wrapper">