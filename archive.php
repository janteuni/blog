<?php
/**
 * Main Template File
 *
 * This file is used to display a page when nothing more specific matches a query.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ananas
 */

get_header(); ?>

<section id="primary" role="main" class="fs-row">
    <div class="fs-cell fs-sm-full fs-lg-8">

	<?php if ( have_posts() ) : ?>
		    <?php get_template_part( 'inc/archive-header' ); ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			    <?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		    <?php get_template_part( 'inc/pagination' ); ?>
	<?php else : ?>
		    <?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>

    </div>


<?php get_sidebar(); ?>
</section><!-- #primary -->
<?php get_footer(); ?>