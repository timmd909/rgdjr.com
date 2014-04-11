<?php

/**
 *
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header hide">
	<?php
		the_title('<h1 class="entry-title">', '</h1>');
	?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php

		the_content(__('Continue reading ', 'rgdjr'));

	?>
	</div>

	<div class="letter-columns">
	<div class="letter-group">
	<?php
	$letter = 'a';
	while ($letter <= 'z') {

		if ($letter != 'a' && ord($letter)%2) { ?></div><!-- .letter-group -->
		<div class="letter-group"><?php }

		$pageInfo = get_page_by_path($letter);
		$pageId = $pageInfo->ID;
		$pageTitle = $pageInfo->post_title;
		?>
		<a class="letter portrait" href="/<?php echo $letter ?>">
			<?php
				if (has_post_thumbnail($pageId)) {
					// $thumbnailId = get_post_thumbnail_id($pageId);
					echo get_the_post_thumbnail($pageId);
				}
			?>
			<span><?php echo $pageTitle; ?></span>
		</a>

		<?php
		$letter = chr(ord($letter)+1);
	}

	?>
	</div><!-- .letter-columns -->

</article>