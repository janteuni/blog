<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'ananas' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<span><?php echo get_the_date(); ?></span>
	</header><!-- .entry-header -->

	<div>
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'ananas' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer>
		
		<?php the_tags( '<div>' . __( 'Tagged: ', 'ananas' ) , ', ', '</div>' ); ?>
		
		<div>
			<?php comments_popup_link( 
				 __( 'Leave a comment', 'ananas' ), 
				 __( '1 comment', 'ananas' ), 
				 __( '% comments', 'ananas' ) ); 
			?>
		</div>
	</footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->