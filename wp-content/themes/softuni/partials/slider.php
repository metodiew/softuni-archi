<?php
$slider_args = array(
    'post_type' => 'slider',
    'post_status' => 'publish',
    'posts_per_page' => 3,
);

$slider_query = get_posts( $slider_args );
?>

<?php if ( ! empty( $slider_query ) && is_array( $slider_query ) )  : ?>
    <section id="intro" class="scrollspy-section">
        <div class="main-slider">
            <?php foreach ( $slider_query as $slider ) : ?>
                <?php
                $slider_id = $slider->ID;
                $slider_image = get_field( 'slider_image', $slider_id );
                $slider_cta_url = get_field( 'cta_url', $slider_id );
                $slider_cta_tab = get_field( 'open_in_a_new_tab', $slider_id );
                ?>
                <div class="slider-item jarallax" data-speed="0.2">
                    <?php if ( ! empty( $slider_image['url'] ) ) : ?>
                        <img src="<?php echo $slider_image['url']; ?>" alt="banner" class="jarallax-img">
                    <?php endif; ?>
                    <div class="banner-content">
                        <h2 class="banner-title txt-fx"><?php echo $slider->post_title ?></h2>
                        <?php if ( ! empty( $slider_cta_url ) ) : ?>
                            <div class="btn-wrap">
                                <a href="<?php echo esc_url( $slider_cta_url ); ?>" class="btn-with-line">View Project</a>
                            </div>
                        <?php endif; ?>
                    </div><!--banner-content-->
                </div><!--slider-item-->
            <?php endforeach; ?>
        </div>

        <div class="button-container">
            <button class="prev slick-arrow">
                <i class="icon icon-chevron-thin-left"></i>
            </button>
            <button class="next slick-arrow">
                <i class="icon icon-chevron-thin-right"></i>
            </button>
        </div>
    </section>
<?php endif; ?>