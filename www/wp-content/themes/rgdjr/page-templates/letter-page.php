<?php
/*
 * Template Name: Letter Page
 */
	get_header('letter');
?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('content', 'letter'); ?>
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
