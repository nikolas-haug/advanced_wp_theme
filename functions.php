<?php

// Theme support
function advanced_theme_support() {
    // Nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    ));
}
add_action( 'after_setup_theme', 'advanced_theme_support' );

// Enqueue theme stylesheets and scripts
function advanced_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'advanced_theme_scripts' );

