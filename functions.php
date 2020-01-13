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

    // Post format support
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link') );
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

// Get top parent function
function get_top_parent() {
    global $post;
    if($post->post_parent) {
        $ancestors = get_post_ancestors( $post->ID );
        return $ancestors[0];
    }
    return $post->ID;
}

function page_is_parent() {
    global $post;

    $pages = get_pages( 'child_of='.$post->ID );
    return count($pages);
}