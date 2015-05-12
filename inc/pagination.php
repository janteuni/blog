<?php 
/**
 * Archive pagination
 *
 * @package ananas
 */
?>
<nav class="nav-below">
	<div class="nav-previous"><?php next_posts_link( __( '<', 'ananas' ) ); ?></div>
	<div class="nav-next"><?php previous_posts_link( __( '>', 'ananas' ) ); ?></div>
</nav><!-- #nav-above -->