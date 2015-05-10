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

	<?php if ( have_posts() ) : ?>
        <div class="fs-cell fs-sm-full fs-lg-8">
		    <?php get_template_part( 'inc/archive-header' ); ?>
        </div>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
            <div class="fs-cell fs-sm-full fs-lg-8">
			    <?php get_template_part( 'content', get_post_format() ); ?>
            </div>
		<?php endwhile; ?>
        <div class="fs-cell fs-sm-full fs-lg-8">
		    <?php get_template_part( 'inc/pagination' ); ?>
        </div>
	<?php else : ?>
        <div class="fs-cell fs-sm-full fs-lg-8">
		    <?php get_template_part( 'content', 'none' ); ?>
        </div>
	<?php endif; ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>