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
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/letter.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" type="text/css" media="all" />

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50811072-1', 'rgdjr.com');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>

	<?php require(dirname(__FILE__).'/inc/header-common.php'); ?>

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