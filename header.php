<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package banco_t2
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>
<?php 
    $theme = get_theme_mod('color_options','navy_blue');
    $logo = get_custom_logo();
    $is_home = ( is_front_page() ||  is_home() ) ? true : false;
?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="theme_<?php echo $theme?>">
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'banco_t2' ); ?></a>
    <header id="masthead" class="site-header wrapper" role="banner">
        <div class="container clear">
            <div class="logo">
                <?php if($logo) { ?>
                    <?php echo $logo; ?>
                <?php } else { ?>
                    <a class="siteLogo" href="<?php bloginfo('url'); ?>">
                        <span><?php bloginfo('name'); ?></span>
                    </a>
                <?php } ?>
            </div>
            
            <span class="burger" id="mobile-menu"><span></span></span>
            <nav id="site-navigation" class="main-navigation move-right" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            </nav><!-- #site-navigation -->
            <nav id="site-navigation-mobile" class="main-navigation move-right" role="navigation">
                <div class="navi-inner clear"><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?></div>
            </nav><!-- #site-navigation -->
       </div><!-- container -->
    </header><!-- #masthead -->
    <div id="content" class="site-content wrapper">
        <div class="site-inner clear <?php echo ($is_home) ? 'fullwidth':'container'; ?>">
            
