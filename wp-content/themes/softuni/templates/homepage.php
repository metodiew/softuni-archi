<?php
/**
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

<?php get_template_part( 'partials/about', 'section' ); ?>

<?php get_template_part( 'partials/portfolio', 'section' ); ?>

<?php get_template_part( 'partials/services', 'section' ); ?>

<?php get_template_part( 'partials/subscribe', 'section' ); ?>

<?php // @TODO: move to a template ?>
<?php softuni_display_latest_posts( 3 ); ?>

<?php get_template_part( 'partials/contact', 'section' ); ?>

<?php get_template_part( 'partials/testimonial', 'section' ); ?>

<?php get_footer(); ?>