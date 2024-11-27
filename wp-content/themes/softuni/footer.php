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

    <?php wp_footer(); ?>
</body>

</html>