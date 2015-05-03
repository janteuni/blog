<?php
/**
 * Template Name: Full Width Page
 *
 * @package ananas
 */

get_header(); ?>

<section id="primary" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
	
		<?php get_template_part( 'content', 'page' ); ?>
	
	<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->

<?php get_footer(); ?>