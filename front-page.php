<?php
/**
 * Home Page
 *
 * @package ananas
 */

get_header(); ?>

<section id="primary" role="main" class="fs-row">

<?php while ( have_posts() ) : the_post(); ?>
    <div class="fs-cell fs-sm-full fs-lg-8">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <a href="<?php echo get_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php the_content(); ?>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->
    </div>
<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>