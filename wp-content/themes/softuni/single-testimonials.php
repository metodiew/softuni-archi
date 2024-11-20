<?php get_header(); ?>

<?php
$id = get_the_ID();
$testimonial_author = get_field( 'author', $id );
$testimonial_image = get_field( 'author_image', $id );
?>

<section id="about" class="scrollspy-section padding-xlarge">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="section-header">
                    <h2 class="section-title"><?php echo get_the_title(); ?></h2>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6 description text-lead">
                <?php the_content(); ?>
            </div>

            <div class="col-md-6 description text-lead">
                <?php if ( ! empty( $testimonial_author ) ) : ?>
                    <div><?php echo esc_attr( $testimonial_author ) ?></div>
                <?php endif; ?>

                <?php if ( ! empty( $testimonial_image )) : ?>
                    <div class="testimonial-author">
                        <img src="<?php echo $testimonial_image ?>">
                    </div>
                <?php endif; ?>
            </div>

        </div>

    </div>
</section>

<?php // endif; ?>

<?php get_footer(); ?>