<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <div class="site-title">
                <div class="title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </div>
                <div class="menu">
                    <button id="primary-menu" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </button>
                </div>
            </div>
            <div class="img-header">
                <img class="logo-header" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png'); ?> "alt="logo du film">
                <img class="flower-header" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/flower.png'); ?> " alt="image de fleur décorative">
                <img class="random-flower-header" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/random_flower.png'); ?> " alt="image de fleur décorative">
                <img class="sunflower-header" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Sunflower.png'); ?> " alt="image de fleur décorative">
                <img class="orchid-header" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/orchid.png'); ?> " alt="image de fleur décorative">
                <img class="hibiscus-footer-header" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hibiscus_footer.png'); ?> " alt="image de fleur décorative">
                <img class="jaakuna-header" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Jaakuna.png'); ?>" alt="image de Jaakuna le chat">
                <img class="Kawaneko-header" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Kawaneko.png'); ?>" alt="image de Kaweneko le chat">
                <img class="orenjiiro-header" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Orenjiiro.png'); ?>" alt="image de Orenjiiro le chat">
                <ul>
                    <li><a href="#story">Histoire</a></li>
                    <li><a href="#characters">Personnages</a></li>
                    <li><a href="#place">Lieu</a></li>
                    <li><a href="#studio">Studio Koukaki</a></li>
                </ul>
                <p>Studio Koukaki</p>
            </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
