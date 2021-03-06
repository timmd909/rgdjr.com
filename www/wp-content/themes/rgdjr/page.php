<?php
	if (is_home()) {
		get_header('welcome');
	} else if (is_front_page()) {
		get_header('welcome');
	} else {
		get_header();
	}
?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('content', 'page'); ?>
				<?php
					// comments_template('', true);
				?>
			<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
	// get_sidebar();
	get_footer();
?>
