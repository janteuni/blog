<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package ananas
 */

get_header(); ?>

<section id="primary" role="main" class="fs-row">
    <div class="fs-cell fs-sm-full fs-lg-8">
        <article id="post-0">
            <div class="not-found">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/404.png" alt="L'âne à nageoires - not found 404"/>
                <h1>Whoops !</h1>
                <p>
                    Il n'y a rien ici, <br>mais vous pouvez <strong>faire une recherche</strong>
                </p>

                <?php get_search_form(); ?>

            </div><!-- .entry-content -->
        </article><!-- #post-0 -->
    </div>

<?php get_sidebar(); ?>
</section><!-- #primary -->
<?php get_footer(); ?>