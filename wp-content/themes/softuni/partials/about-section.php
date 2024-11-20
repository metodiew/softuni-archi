<section id="about" class="scrollspy-section padding-xlarge">
	<div class="container">
		<div class="row">

			<div class="col-md-12">

				<div class="section-header">
					<div class="title">
						<span>who are we</span>
					</div>
					<?php if ( ! empty( $args['title'] ) ) : ?>
						<h2 class="section-title"><?php echo esc_attr( $args['title'] ); ?></h2>
					<?php endif; ?>
				</div>
			</div>

		</div>

		<div class="row">

			<?php // @TODO: use the image array from the ACF ?>
			<div class="col-md-6">
				<figure class="jarallax-keep-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/singleimage.jpg" alt="about us" class="jarallax-img single-image">
				</figure>
			</div>
			<div class="col-md-6 description text-lead">
				<?php if ( ! empty( $args['content'] ) ) : ?>
					<div class="content">
						<?php echo $args['content']; ?>
					</div>
				<?php endif; ?>

				<?php if ( ! empty( $args['cta_title'] ) && $args['cta_url'] ) : ?>
					<?php
					$new_tab = '';
					if ( ! empty( $args['cta_new_tab'] ) && $args['cta_new_tab'] == true ) {
						$new_tab = 'target="_blank"';
					}
					?>
					<div class="btn-wrap">
						<a <?php echo $new_tab; ?> href="<?php echo esc_url( $args['cta_url'] ); ?>" class="btn btn-accent btn-xlarge btn-rounded"><?php echo esc_attr( $args['cta_title'] ); ?></a>
					</div>
				<?php endif; ?>

			</div>

		</div>

	</div>
</section>