<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ananas
 */
?>

<article>
	<header>
		<h1><?php _e( 'Nothing Found', 'ananas' ); ?></h1>
	</header><!-- .entry-header -->

	<div>
		<?php if ( is_archive() ) : ?>
		
			<p><?php _e( 'There are no published posts for this archive. Try searching using keywords instead.', 'ananas' ); ?></p>
			<?php get_search_form(); ?>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'No matches were found for your search terms. Please try again with different keywords.', 'ananas' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps a search would help?', 'ananas' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .entry-content -->
</article>