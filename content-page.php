
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div>
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'ananas' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
