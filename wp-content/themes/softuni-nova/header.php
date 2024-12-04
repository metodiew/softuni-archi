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

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/assets/img/blog-page-title-bg.jpg);">
      <div class="container">
        <h1><?php echo get_the_title(); ?></h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Home', 'softuni' ); ?></a></li>
            <li class="current"><?php echo get_the_title(); ?></li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->