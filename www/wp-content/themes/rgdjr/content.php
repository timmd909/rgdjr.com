<?php

/**
 * Default template for displaying content.
 *
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
	<?php
		the_title('<h1 class="entry-title">', '</h1>');
	?>
	</header><!-- .entry-header -->

	<?php if (is_search()) : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
	<?php else: ?>
		<div class="entry-content">
		<?php

			the_content(__('Continue reading ', 'rgdjr'));

		?>
		</div>
	<?php endif; ?>

</article>