
	</div><!-- #main -->

</div><!-- #page -->
<footer id="footer" role="contentinfo">

<div class="fs-row">
    <div class="fs-cell fs-lg-fourth fs-md-third fs-sm-half fs-xs-full">
        <h1><?php bloginfo('name'); ?></h1>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </div>
    <div class="fs-cell fs-lg-fourth fs-md-third fs-sm-half fs-xs-full">
        <h1>Les nanas</h1>
        <ul>
            <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
            <li><a href="http://laneanageoires.fr">Site officiel</a></li>
        </ul>
    </div>
    <div class="fs-cell fs-lg-fourth fs-md-third fs-sm-half fs-xs-full">
        <h1>Suivez l'Ane</h1>
        <ul class="follow-us">
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
            <li><a href="#"><i class="icon-pinterest"></i></a></li>
        </ul>
    </div>
</div>

</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>