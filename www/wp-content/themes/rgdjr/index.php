<?php

/**
 * Main tmeplate file.
 *
 */

get_header(); ?>
<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php
			if (have_posts()) :
				while (have_posts()) : the_post();
					// include the post format-specific template.
					// make sure to have the content-XXX.php files in place
					// (where XXX is the post format)
					get_template_part('content', get_post_format());
				endwhile;

				// post navigation would go here...

			else:
				// no content, include "no post found" template
				 get_template_part( 'content', 'none' );
			endif;
		?>
		<div class="clear-both"></div>
		</div><!-- #content -->
	</div>

</div><!-- #main-content -->

<?php
// get_sidebar();
get_footer();