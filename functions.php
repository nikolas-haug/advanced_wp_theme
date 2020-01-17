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

// Widget locations
function init_widgets($id) {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="block side-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Showcase',
        'id' => 'showcase',
        'before_widget' => '<div class="showcase">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Box 1',
        'id' => 'box1',
        'before_widget' => '<div class="box box1">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Box 2',
        'id' => 'box2',
        'before_widget' => '<div class="box box2">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Box 3',
        'id' => 'box3',
        'before_widget' => '<div class="box box3">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action( 'widgets_init', 'init_widgets' );

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