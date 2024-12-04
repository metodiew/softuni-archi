<?php

if ( ! defined( 'SOFTUNI_NOVA_VER' ) ) {
	define( 'SOFTUNI_NOVA_VER', '1.0.0' );
}

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

add_post_type_support( 'excerpt', array() );

add_action( 'wp_enqueue_scripts', 'softuni_enqueue_assets' );
function softuni_enqueue_assets() {

    // Vendor CSS Files
    wp_enqueue_style( 'vendor-bootstrap-min', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), SOFTUNI_NOVA_VER );
    wp_enqueue_style( 'vendor-bootstrap-icons', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), SOFTUNI_NOVA_VER );
    wp_enqueue_style( 'vendor-aos', get_stylesheet_directory_uri() . '/assets/vendor/aos/aos.css', array(), SOFTUNI_NOVA_VER );
    wp_enqueue_style( 'vendor-glightbox', get_stylesheet_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), SOFTUNI_NOVA_VER );
    wp_enqueue_style( 'vendor-swiper-bundle', get_stylesheet_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), SOFTUNI_NOVA_VER );

    // Load all CSS files
	wp_enqueue_style( 'softuni-nova-main-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), SOFTUNI_NOVA_VER );

    // Load all JavaScript files
    wp_enqueue_script( 'plugins-js', get_stylesheet_directory_uri() . '/js/plugins.js', array( 'jquery' ), SOFTUNI_NOVA_VER, array( 'in_footer' => true ) );
	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ), SOFTUNI_NOVA_VER, array( 'in_footer' => true ) );
}

/**
 * Register our navigation menus
 *
 * @return void
 */
function softuni_register_nav_menus() {
    register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'softuni_register_nav_menus', 0 );