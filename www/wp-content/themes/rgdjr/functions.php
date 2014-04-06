<?php

/**
 * RGDJR Setup.
 *
 */
function rgdjr_setup()
{
	error_log('rgdjr_setup() is starting...');

	/**
	 * Make this template available for translation.
	 *
	 * At the time of writing, this isn't used.
	 */
	// load_theme_textdomain('rgdjr', get_template_directory().'/languages');

	register_nav_menus(array(
		'primary' => __('Home page menu', 'rgdjr'),
		'inner' => __('Menu used in interior pages', 'rgdjr')
	));


	add_theme_support( 'custom-background', apply_filters( 'twentyfourteen_custom_background_args', array(
		'default-color' => 'f5f5f5',
	) ) );


	// this theme uses this in header.php
	register_nav_menus(array(
		'primary' => __('Home Page Menu', 'rgdjr'),
		'interior' => __('Interior page menu', 'rgdjr')
	));

}
add_action('after_setup_theme', 'rgdjr_setup');


function rgdjr_body_classes($classes)
{
	if (get_header_image()) {
		$classes[] = 'header-image';
	} else {
		$classes[] = 'default-header-image';
	}

	return $classes;
}
add_filter('body_class', 'rgdjr_body_classes');

function rgdjr_wp_title($title, $separator)
{
	global $paged, $page;

	if (is_feed()) return $title;

	$title = get_bloginfo('name') . ' ' . $title;

	if ($paged >= 2 || $page >= 2) {
		$title = "$title $separator Page " . $page;
	}

	return $title;
}
add_filter( 'wp_title', 'rgdjr_wp_title'); //, 10, 2 );