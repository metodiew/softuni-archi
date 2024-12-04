<?php get_header(); ?>

  <div class="container">
    <div class="row">

    <?php while( have_posts() ) : the_post(); ?>

      <div class="col-lg-8">

        <!-- Blog Details Section -->
        <section id="blog-details" class="blog-details section">
          <div class="container">

            <article class="article">

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?php the_title(); ?></h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html"><?php echo get_the_author_meta( 'display_name' ); ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">

                <?php the_content() ?>

              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <?php the_category(); ?>

                <i class="bi bi-tags"></i>
                <?php the_tags(); ?>

              </div><!-- End meta bottom -->

            </article>

          </div>
        </section><!-- /Blog Details Section -->

        <!-- Blog Author Section -->
        <section id="blog-author" class="blog-author section">

          <div class="container">
            <div class="author-container d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4><?php echo get_the_author_meta( 'display_name' ); ?></h4>
                <div class="social-links">
                  <a href="https://x.com/#"><i class="bi bi-twitter-x"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                <?php echo get_the_author_meta( 'description' ); ?>
                </p>
              </div>
            </div>
          </div>

        </section><!-- /Blog Author Section -->

      </div>

      <?php endwhile; ?>

      <div class="col-lg-4 sidebar">

        <div class="widgets-container">

          <!-- Search Widget -->
          <div class="search-widget widget-item">

            <h3 class="widget-title">Search</h3>
            <form action="">
              <input type="text">
              <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>

          </div><!--/Search Widget -->

          <!-- Categories Widget -->
          <div class="categories-widget widget-item">

            <h3 class="widget-title">Categories</h3>
            <ul class="mt-3">
              <li><a href="#">General <span>(25)</span></a></li>
              <li><a href="#">Lifestyle <span>(12)</span></a></li>
              <li><a href="#">Travel <span>(5)</span></a></li>
              <li><a href="#">Design <span>(22)</span></a></li>
              <li><a href="#">Creative <span>(8)</span></a></li>
              <li><a href="#">Educaion <span>(14)</span></a></li>
            </ul>

          </div><!--/Categories Widget -->

          <!-- Recent Posts Widget -->
          <div class="recent-posts-widget widget-item">

            <h3 class="widget-title">Recent Posts</h3>

            <div class="post-item">
              <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
              <div>
                <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
            </div><!-- End recent post item-->

            <div class="post-item">
              <img src="assets/img/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
              <div>
                <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
            </div><!-- End recent post item-->

            <div class="post-item">
              <img src="assets/img/blog/blog-recent-3.jpg" alt="" class="flex-shrink-0">
              <div>
                <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
            </div><!-- End recent post item-->

            <div class="post-item">
              <img src="assets/img/blog/blog-recent-4.jpg" alt="" class="flex-shrink-0">
              <div>
                <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
            </div><!-- End recent post item-->

            <div class="post-item">
              <img src="assets/img/blog/blog-recent-5.jpg" alt="" class="flex-shrink-0">
              <div>
                <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
            </div><!-- End recent post item-->

          </div><!--/Recent Posts Widget -->

          <!-- Tags Widget -->
          <div class="tags-widget widget-item">

            <h3 class="widget-title">Tags</h3>
            <ul>
              <li><a href="#">App</a></li>
              <li><a href="#">IT</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Mac</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Office</a></li>
              <li><a href="#">Creative</a></li>
              <li><a href="#">Studio</a></li>
              <li><a href="#">Smart</a></li>
              <li><a href="#">Tips</a></li>
              <li><a href="#">Marketing</a></li>
            </ul>

          </div><!--/Tags Widget -->

        </div>

      </div>

    </div>
  </div>

<?php get_footer(); ?>