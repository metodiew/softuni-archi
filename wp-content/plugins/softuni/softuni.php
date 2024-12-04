<?php
/*
 * Plugin Name: SoftUni
 * Version: 0.1
 * Description: This is going to be our main plugin for the course
 */

if ( ! defined( 'SOFTUNI_PLUGIN_VERSION' ) ) {
    define( 'SOFTUNI_PLUGIN_VERSION', '0.1' );
}

if ( ! defined( 'SOFTUNI_PLUGIN_ASSETS_URL' ) ) {
    define( 'SOFTUNI_PLUGIN_ASSETS_URL',  plugin_dir_url( __FILE__ ) . 'assets' );
}

require 'includes/cpt-portfolio.php';
require 'includes/cpt-testimonial.php';
require 'includes/functions.php';
require 'includes/options-page.php';