<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php the_title(); ?></title>

  <!-- Favicons -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body class="blog-details-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="<?php echo home_url( '/' ); ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt=""> -->
        <h1 class="sitename"><?php echo get_bloginfo( 'name' ); ?></h1>
      </a>

      <?php
      // WordPress Menu
      $menu_args = array(
        'menu' => 'primary-menu',
        'menu_id' => 'navmenu',
        'menu_class' => 'navmenu',
        'container' => 'nav',
        'container_class' => 'navmenu',
        'theme_location' => 'primary',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      );

      if ( has_nav_menu( 'primary' ) ) {
        wp_nav_menu( $menu_args );
      }
      ?>

  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-xl-4">
            <h1 data-aos="fade-up">Focus On What Matters</h1>
            <blockquote data-aos="fade-up" data-aos-delay="100">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cum recusandae eum laboriosam voluptatem repudiandae odio, vel exercitationem officiis provident minima. </p>
            </blockquote>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->