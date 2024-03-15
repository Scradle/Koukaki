<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/assets/css/style.css' );

    //import script js
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/custom-script.js', array('swiper-js','skrollr-stylesheet-js','skrollr-js'), '1.0', true );
    //import swiper
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
    //import skrollr
    wp_enqueue_script( 'skrollr-stylesheet-js', 'https://cdn.jsdelivr.net/npm/skrollr-stylesheets@1.0.0/dist/skrollr.stylesheets.min.js');
    wp_enqueue_script( 'skrollr-js', 'https://cdn.jsdelivr.net/npm/skrollr@0.6.26/dist/skrollr.min.js');
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}