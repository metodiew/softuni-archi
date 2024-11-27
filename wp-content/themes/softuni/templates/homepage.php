<?php
/**
 * Template Name: Homepage
 */
?>

<?php
$about_us_fields = get_fields( get_the_ID() );
$softuni_options = get_option( 'softuni_custom_options' );
?>

<?php get_header(); ?>

<?php
if ( ! empty( $softuni_options['softuni_homepage_slider'] ) && true == $softuni_options['softuni_homepage_slider'] ) {
    get_template_part( 'partials/slider' );
}
?>

<?php get_template_part( 'partials/about', 'section', $about_us_fields ); ?>

<?php get_template_part( 'partials/portfolio', 'section' ); ?>

<?php get_template_part( 'partials/services', 'section' ); ?>

<?php get_template_part( 'partials/subscribe', 'section' ); ?>

<?php // @TODO: move to a template ?>
<?php softuni_display_latest_posts( 3 ); ?>

<?php get_template_part( 'partials/contact', 'section' ); ?>

<?php get_template_part( 'partials/testimonial', 'section' ); ?>

<?php get_footer(); ?>