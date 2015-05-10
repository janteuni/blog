<?php

get_header(); ?>

<section id="primary" role="main">

	<?php if ( have_posts() ) : ?>
				
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php get_template_part( 'inc/pagination' ); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>



<?php get_sidebar(); ?>
</section><!-- #primary -->
<?php get_footer(); ?>