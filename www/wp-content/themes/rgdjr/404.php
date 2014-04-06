<?php


get_header(); ?>

	<div id="primary" class="content-area">

		<header class="page-header">
			<h1 class="page-title"><?php _e('Not Found', 'rgdjr'); ?></h1>
		</header>

		<div class="page-content">
			<p><?php _e('This is not the page you\'re looking for.', 'rgdjr'); ?></p>

			<?php get_search_form(); ?>
		</div>

	</div>

<?php

get_footer();