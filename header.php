<?php
/**
 * The header template
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package ananas
 */
?>

<!DOCTYPE html>
 
<!--[if lt IE 9]>
<html id="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php wp_title( '-', true, 'right' ); bloginfo('name') ?></title>
    
    <!-- favicon & links -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/images/76-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/images/120-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/images/152-152.png">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- stylesheets are enqueued via functions.php -->

    <!-- all other scripts are enqueued via functions.php -->


    <?php // Lets other plugins and files tie into our theme's <head>:
    wp_head(); ?>
</head>
 
<body class="fs-grid">
	<div id="page">
		<header role="banner" class="fs-row">
            <div class="fs-cell fs-all-full relative">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="fs-xs-hide fs-sm-hide fs-md-hide">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/banner-header.png" alt="L'âne à nageoires - banniere montagnes ane"/>
                </a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="fs-lg-hide fs-xl-hide">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/small-banner.png" alt="L'âne à nageoires - banniere montagnes ane"/>
                </a>
                <nav role="navigation" class="">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </nav>
            </div>

		</header><!-- #branding -->


		<div id="main">