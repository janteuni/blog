<?php

get_header(); ?>

<section id="primary">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php comments_template( '', true ); ?>

	<?php endwhile; // end of the loop. ?>

</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>