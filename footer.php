			<!-- footer -->
			<footer class="container margin-top-40" role="contentinfo">

				<div class="row">

					<div class="col-xs-12 col-sm-9">

						<a class="header-logo"href="<?php echo home_url(); ?>">
							<div class="logo-container text-align-center">
								<h1 class="logo-text footer-heading">Esplanade</h1>
								<hr>
								<h3 class="sub-heading">Cleaners <span class="gold-font">&</span> Alterations</h3>
							</div>
						</a>

						<!-- copyright -->
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
						</p>
						<!-- /copyright -->
					</div>


					<div class="col-xs-12 col-sm-3">
						
					</div>


				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/frameworks/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/frameworks/bootstrap-3.3.7/js/bootstrap.min.js"></script>


		<!-- Google Places and Maps API -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/google-maps-API.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpkOciDS1eWsKdDgE8OGHh7i_0NcCr8VM&libraries=places&callback=initMap" async defer></script>


		<!-- Custom Javascript files -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>


	</body>
</html>
