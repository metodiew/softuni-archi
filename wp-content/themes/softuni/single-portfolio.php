<?php get_header(); ?>

<?php
$portfolio_address = get_post_meta( get_the_ID(), 'portfolio_address', true );
$portfolio_like = get_post_meta( get_the_ID(), 'votes', true );

// @TODO: add a few more ACF fields for address, map, contact details, etc
?>

<section id="about" class="scrollspy-section padding-xlarge">
    <div class="container">
        <div class="row">

            <div class="col-md-10">

                <div class="section-header">
                    <h2 class="section-title"><?php echo get_the_title(); ?></h2>
                </div>
            </div>

            <div class="col-md-2">
                <a href="#" class="like" id="portfolio-<?php echo get_the_ID(); ?>" data-id="<?php echo get_the_ID(); ?>">Like (<?php echo $portfolio_like ?> likes)</a>
            </div>

        </div>

        <div class="row">

        <?php
        // TODO: add a check for making the single post full with if there is no image
        ?>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="col-md-6">
                    <figure class="jarallax-keep-img">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'jarallax-img single-image', 'title' => 'Feature image']); ?>
                    </figure>
                </div>
            <?php endif; ?>

            <div class="col-md-6 description text-lead">
                <?php the_content(); ?>
            </div>

            <div class="col-md-3">
                <?php
                if ( ! empty( $portfolio_address ) ) {
                    echo '<div>';
                        echo 'The Address of the Portfolio Item is: ' . esc_attr( $portfolio_address );
                    echo '</div>';
                }
                ?>
            </div>

        </div>

    </div>
</section>

<?php // endif; ?>

<?php softuni_display_latest_posts( 3 ); ?>

<?php get_footer(); ?>