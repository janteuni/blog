<?php
/**
 * Template Name: contact
 *
 * @package ananas
 */


get_header(); ?>
    <div class="fs-row">
        <section id="primary" role="main" class="fs-cell fs-sm-full fs-lg-8">
            <?php while ( have_posts() ) : the_post(); ?>

                <div class="contact-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->
                </div><!-- #post-<?php the_ID(); ?> -->

            <?php endwhile; // end of the loop. ?>

        </section><!-- #primary -->
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>