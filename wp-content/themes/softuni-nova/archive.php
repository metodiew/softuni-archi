<?php get_header(); ?>

  <div class="container">
    <div class="row">

      <div class="col-lg-8">

        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">

          <div class="container">
            <div class="row gy-4">

            <?php while( have_posts() ) : the_post(); ?>

              <div class="col-lg-6">
                <article>


                  <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-img">
                      <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']); ?>
                    </div>
                  <?php endif; ?>

                  <p class="post-category"><?php the_category(); ?></p>

                  <h2 class="title">
                    <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                  </h2>

                  <div class="d-flex align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                      <p class="post-author"><?php echo get_the_author_meta( 'display_name' ); ?></p>
                      <p class="post-date">
                        <time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
                      </p>
                    </div>
                  </div>

                </article>
              </div><!-- End post list item -->

            <?php endwhile; ?>

            </div>
          </div>

        </section><!-- /Blog Posts Section -->

        <!-- Blog Pagination Section -->
        <section id="blog-pagination" class="blog-pagination section">

          <div class="container">
            <div class="d-flex justify-content-center">
              <ul>
                <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#" class="active">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li>...</li>
                <li><a href="#">10</a></li>
                <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
              </ul>
            </div>
          </div>

        </section><!-- /Blog Pagination Section -->

      </div>

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