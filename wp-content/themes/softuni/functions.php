<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

add_post_type_support( 'excerpt', array() );

add_action( 'wp_enqueue_scripts', 'softuni_enqueue_assets' );
function softuni_enqueue_assets() {
    // wp_enqueue_style( 'softuni', get_stylesheet_directory_uri() . '/style.css');
    // wp_enqueue_style( 'softuni', get_stylesheet_uri() );

}


function softuni_display_latest_posts( $number_of_posts = 3 ) {
    include 'latest-posts.php';
}

/**
 * Adding one more extra class to the body tag
 *
 * @param [type] $classes
 * @return void
 */
function softuni_body_class( $classes ) {
    $classes[] = 'softuni-test-class';

    return $classes;
}
add_action( 'body_class', 'softuni_body_class' );

/**
 * This is the main function to register navigation menus
 *
 * @return void
 */
function softuni_navigation_menus() {

}