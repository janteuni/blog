<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ananas
 */
?>
<article>
    <div class="not-found">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/ananas-group.png" alt="ananas paper craft - L'âne à nageoires"/>
        <?php if ( is_archive() ) : ?>

            <p><?php _e( 'Il n\'y a pas de contenu pour cette archive. Essayer des mots clés à la place...', 'ananas' ); ?></p>
            <?php get_search_form(); ?>

        <?php elseif ( is_search() ) : ?>

            <p><?php _e( 'Nous n\'avons rien trouvé pour votre recherche. Essayer d\'autres mots clés.', 'ananas' ); ?></p>
            <?php get_search_form(); ?>

        <?php else : ?>

            <p><?php _e( 'Nous ne trouvons pas ce que vous cherchez. Une recherche peut vous aider ?', 'ananas' ); ?></p>
            <?php get_search_form(); ?>

        <?php endif; ?>
    </div><!-- .entry-content -->
</article>
