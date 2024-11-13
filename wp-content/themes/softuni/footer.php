<footer id="footer">
		<div class="container">
			<div class="row">

				<?php get_sidebar( 'footer-1' ) ?>

				<?php get_sidebar( 'footer-2' ); ?>

				<?php get_sidebar( 'footer-3' ); ?>

				<?php get_sidebar( 'footer-4' ); ?>

			</div>
		</div>
	</footer>

	<div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="copyright">
						<p>© <?php echo date( 'Y' ) ?> Archi. All rights reserved.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="copyright text-right">
						<p>HTML Template by <a href="https://www.templatesjungle.com/"
								target="_blank">TemplatesJungle</a> distributed By <a href="https://themewagon.com" target="blank">ThemeWagon</a> </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.11.0.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ui-easing.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>

    <?php wp_footer(); ?>
</body>

</html>