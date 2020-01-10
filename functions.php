<?php

// Theme support
function advanced_theme_support() {
    // Featured image support
    add_theme_support( 'post-thumbnails' );

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

// Excerpt length
function advanced_set_excerpt_length() {
    return 25;
}
add_filter( 'excerpt_length', 'advanced_set_excerpt_length' );