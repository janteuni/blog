<?php
/**
 * Home Page
 *
 * @package ananas
 */

get_header(); ?>
<div class="fs-row">
    <section id="primary" role="main" class="fs-cell fs-sm-full fs-lg-8">

        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <a href="<?php echo get_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->
            </article><!-- #post-<?php the_ID(); ?> -->
        <?php endwhile; // end of the loop. ?>
        <?php get_template_part( 'inc/pagination' ); ?>

    </section><!-- #primary -->
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>