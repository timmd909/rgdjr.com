<?php
/*
 * Template Name: Welcome Page
 */
	get_header('welcome');

?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('content', 'home'); ?>
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
