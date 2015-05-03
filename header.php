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
    
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    
    <!-- favicon & links -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- stylesheets are enqueued via functions.php -->

    <!-- all other scripts are enqueued via functions.php -->


    <?php // Lets other plugins and files tie into our theme's <head>:
    wp_head(); ?>
</head>
 
<body class="fs-grid">
	<div id="page">
		<header role="banner" class="fs-row">
            <div class="fs-cell fs-all-full">
                ICI LE HEADER
            </div>
            <div class="fs-cell fs-all-full">
                <nav role="navigation">
                    ICI LA NAV
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </nav><!-- #access -->
            </div>

		</header><!-- #branding -->


		<div id="main">