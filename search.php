<?php

get_header(); ?>

<section id="primary" role="main" class="fs-row">
    <div class="fs-cell fs-sm-full fs-lg-8">
        <?php if ( have_posts() ) : ?>

            <header class="archive-header">
                <h1 class="archive-title"><?php printf( __( 'Résultats: %s', 'ananas' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </header>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php
                    get_template_part( 'content');
                ?>

            <?php endwhile; ?>

            <?php get_template_part( 'inc/pagination' ); ?>

        <?php else : ?>

            <?php get_template_part( 'content', 'none' ); ?>

        <?php endif; ?>
    </div>
</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>