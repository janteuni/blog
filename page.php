<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 *
 * @package ananas
 */

get_header(); ?>
<div class="fs-row">
    <section id="primary" role="main" class="fs-cell fs-sm-full fs-lg-8">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>

    </section><!-- #primary -->
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>