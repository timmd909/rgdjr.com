<?php

/**
 * Default template for displaying content.
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

		?>
		<a class="letter" href="/<?php echo $letter ?>">
			<?php echo strtoupper($letter); ?>
		</a>

		<?php
		$letter = chr(ord($letter)+1);
	}

	?>
	</div><!-- .letter-columns -->

</article>