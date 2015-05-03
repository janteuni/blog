<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package ananas
 */

get_header(); ?>

<section id="primary" role="main">

	<article id="post-0">
		<header>
			<h1><?php _e( 'Uh oh!', 'ananas' ); ?></h1>
		</header>

		<div>
			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps a search would help?', 'ananas' ); ?></p>

			<?php get_search_form(); ?>

		</div><!-- .entry-content -->
	</article><!-- #post-0 -->

</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>?>