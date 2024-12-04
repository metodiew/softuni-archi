<?php get_header(); ?>

<?php
$portfolio_id = get_the_ID();
$portfolio_fields = get_fields( $portfolio_id );

$slider_images = array(
  'img_01' => $portfolio_fields['image_1'],
  'img_02' => $portfolio_fields['image_2'],
  'img_03' => $portfolio_fields['image_3'],
);

$portfolio_like = get_post_meta( $portfolio_id, 'votes', true );
?>

  <!-- Page Title -->
  <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/portfolio-page-title-bg.jpg);">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo home_url( '/' ) ?>"><?php _e( 'Home', 'softuni' ); ?></a></li>
          <li class="current">Portfolio Details</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Portfolio Details Section -->
  <section id="portfolio-details" class="portfolio-details section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

      <?php if ( ! empty( $slider_images ) && is_array( $slider_images ) ) : ?>

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper init-swiper">

            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>

            <div class="swiper-wrapper align-items-center">

            <?php foreach ( $slider_images as $slide ): ?>

                <div class="swiper-slide">
                  <img src="<?php echo esc_url( $slide )?>" >
                </div>

              <?php endforeach; ?>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      <?php endif; ?>

        <div class="col-lg-4">
          <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
            <h3>Project information</h3>
            <ul>
              <?php if ( ! empty( $portfolio_fields['category'] ) ) : ?>
                <li><strong><?php _e( 'Category', 'softuni' ); ?></strong>: <?php echo esc_attr( $portfolio_fields['category'] ); ?></li>
              <?php endif; ?>

              <?php if ( ! empty( $portfolio_fields['client'] ) ) : ?>
                <li><strong><?php _e( 'Client', 'softuni' ); ?></strong>: <?php echo esc_attr( $portfolio_fields['client'] ); ?></li>
              <?php endif; ?>

              <?php if ( ! empty( $portfolio_fields['project_date'] ) ) : ?>
                <li><strong><?php _e( 'Project date', 'softuni' ); ?></strong>: <?php echo esc_attr( $portfolio_fields['project_date'] ); ?></li>
              <?php endif; ?>

              <?php if ( ! empty( $portfolio_fields['url'] ) ) : ?>
                <li><strong><?php _e( 'Project URL', 'softuni' ); ?></strong>: <a href="<?php echo esc_url( $portfolio_fields['url'] ); ?>"><?php echo esc_attr( $portfolio_fields['url'] ); ?></a></li>
              <?php endif; ?>
            </ul>

            <a href="#" class="like" id="portfolio-<?php echo get_the_ID(); ?>" data-id="<?php echo get_the_ID(); ?>">Like (<?php echo $portfolio_like ?> likes)</a>
          </div>
          <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
            <?php the_content(); ?>
          </div>
        </div>

      </div>

    </div>

  </section><!-- /Portfolio Details Section -->

<?php get_footer(); ?>