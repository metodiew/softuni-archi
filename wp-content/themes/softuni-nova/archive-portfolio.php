<?php get_header(); ?>

<?php
$portfolio_args = array(
  'post_type' => 'portfolio',
  'post_status' => 'publish',
  'posts_per_page' => 10
);

$portfolio_query = new WP_Query( $portfolio_args );
?>

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/portfolio-page-title-bg.jpg);">
      <div class="container">
        <h1>Portfolio</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Portfolio</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters -->

          <?php if ( $portfolio_query->have_posts() ) : ?>

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

          <?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']); ?>
              <div class="portfolio-info">
                <h4><?php the_title(); ?></h4>
                <p><?php  echo get_the_excerpt(); ?></p>
                <a href="<?php echo get_the_permalink(); ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <?php endwhile; ?>

          </div><!-- End Portfolio Container -->

          <?php endif; ?>

        </div>

      </div>

    </section><!-- /Portfolio Section -->

  <?php get_footer(); ?>