<?php

get_header(); ?>

<section id="primary" class="fs-row">

	<?php while ( have_posts() ) : the_post(); ?>
    <div class="fs-cell fs-sm-full fs-lg-8">
		<?php get_template_part( 'content', 'single' ); ?>
    </div>
	<?php endwhile; // end of the loop. ?>


<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>