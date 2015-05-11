<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'ananas' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<p class="entry-date"><?php echo get_the_date(); ?></p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'ananas' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		
		<?php the_tags( '<div class="tagcloud">' . '<span class="tag">Tag: </span>' , ' ', '</div>' ); ?>

	</footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->