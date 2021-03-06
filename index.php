<?php get_header(); ?>

	<main role="main">

		<style media="screen">

			@media only screen and (min-width : 1200px) {
				.header-background {
					background-image: url('<?php echo get_template_directory_uri(); ?>/img/backgrounds/header_photo_large.jpg');
				}
			}

			@media only screen and (max-width : 1200px) {
				.header-background {
					background-image: url('<?php echo get_template_directory_uri(); ?>/img/backgrounds/header_photo_large.jpg');
				}
			}

			@media only screen and (max-width : 992px) {
				.header-background {
					background-image: url('<?php echo get_template_directory_uri(); ?>/img/backgrounds/header_photo_medium.jpg');
				}
			}

			@media only screen and (max-width : 480px) {
				.header-background {
					background-image: url('<?php echo get_template_directory_uri(); ?>/img/backgrounds/header_photo_small_cropped.jpg');
				}
			}


		</style>

		<!-- MAIN IMAGE -->
		<section class="header-background box-shadow margin-top-40" style="" ></section>
		<!-- /MAIN IMAGE -->


		<!-- section -->
		<!-- GOOGLE REVIEWS -->
		<section class="container margin-top-40 margin-bottom-40">
			<div class="row margin-bottom-20">
				<div class="col-xs-12 text-align-center">
					<div class="slogan">
						<h2 class="margin-none">Serving the local community since 1998</h2>
						<hr>
					</div>

				</div>
			</div>

			<div class="row text-align-center">

				<div id="loader" class="spinner">
					<div class="rect1"></div>
					<div class="rect2"></div>
					<div class="rect3"></div>
					<div class="rect4"></div>
					<div class="rect5"></div>
				</div>

				<div class="reviews-container fade-out margin-top-20">

					<div class="review-button-container review-button-left hidden-xs hidden-sm col-md-1">
						<div class="review-button">
							<h2 class="vertical-center"><span class="glyphicon glyphicon-chevron-left"></span></h2>
						</div>
					</div>

					<div class="review review-left hidden-xs hidden-sm col-md-3">
						<div id="left-grad">

						</div>
						<ul class="review-rating">
							<li><span class="glyphicon glyphicon-star-empty"></span></li>
							<li><span class="glyphicon glyphicon-star-empty"></span></li>
							<li><span class="glyphicon glyphicon-star-empty"></span></li>
							<li><span class="glyphicon glyphicon-star-empty"></span></li>
							<li><span class="glyphicon glyphicon-star-empty"></span></li>
						</ul>

						<h4 class="review-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
						<hr class="review-hr">
						<h5 class="review-author">John Smith</h5>
					</div>

					<div class="review review-center col-xs-12 col-md-4">
						<ul class="review-rating">
							<li><span class="glyphicon glyphicon-star-empty"></span></li>
							<li><span class="glyphicon glyphicon-star-empty"></span></li>
							<li><span class="glyphicon glyphicon-star-empty"></span></li>
							<li><span class="glyphicon glyphicon-star-empty"></span></li>
							<li><span class="glyphicon glyphicon-star-empty"></span></li>
						</ul>

						<div class="center-review-text-container">
							<h4 class="review-text"></h4>
						</div>
						<hr class="review-hr">
						<h5 class="review-author">John Smith</h5>
						<span class="read-more-button">read more...</span>
					</div>

					<div class="review review-right hidden-xs hidden-sm col-md-3">
						<div id="right-grad">

						</div>
						<ul class="review-rating">
							<li><span class="glyphicon glyphicon-star-empty"></span></li>
							<li><span class="glyphicon glyphicon-star-empty"></span></li>
							<li><span class="glyphicon glyphicon-star-empty"></span></li>
							<li><span class="glyphicon glyphicon-star-empty"></span></li>
							<li><span class="glyphicon glyphicon-star-empty"></span></li>
						</ul>

						<h4 class="review-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
						<hr class="review-hr">
						<h5 class="review-author">John Smith</h5>
					</div>

					<div class="review-button-container review-button-right hidden-xs hidden-sm col-md-1">
						<div class="review-button">
							<h2 class="vertical-center"><span class="glyphicon glyphicon-chevron-right"></span></h2>
						</div>
					</div>

					<div class="review-button-container hidden-xs-12 hidden-md hidden-lg">
						<div class="review-button-left">
							<h2><span class="glyphicon glyphicon-chevron-left"></span></h2>
						</div>
						<div class="button-spacer">
							<h2>...</h2>
						</div>
						<div class="review-button-right">
							<h2><span class="glyphicon glyphicon-chevron-right"></span></h2>
						</div>
					</div>

				</div>
			</div>

		</section>
		<!-- /section -->

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!--          SERVICES              -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<section class="services-bg">
			<div class="container margin-top-40">

				<div class="row">

					<div class="col-xs-12 text-align-center">

						<hr>
						<hr>

						<div class="margin-top-40 underlined-header-container">
							<h2 class="margin-none">our services include</h2>
							<hr class="underline-hr">
						</div>

					</div>

				</div>

				<div class="row">

					<div class="col-xs-12 col-sm-6 col-md-4 margin-top-20">
						<div class="service-container" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/dry_cleaning.png);">
							<div class="service-text">
								<h2>Dry Cleaning</h2>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 margin-top-20">
						<div class="service-container" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/laundered_shirts.png);">
							<div class="service-text">
								<h2>Laundered Shirts</h2>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 margin-top-20">
						<div class="service-container" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/household_items.png);">
							<div class="service-text">
								<h2>Household Items</h2>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 margin-top-20">
						<div class="service-container" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/outerwear.png);">
							<div class="service-text">
								<h2>Outerwear</h2>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 margin-top-20">
						<div class="service-container" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/repairs_and_alterations.png);">
							<div class="service-text">
								<h2>Repairs & Alterations</h2>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 margin-top-20">
						<div class="service-container" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/leather_and_suede.png);">

							<div class="service-text">
								<h2>Leather & Suede</h2>
							</div>

						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!--          INFO                 -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<section class="info-bg box-shadow">
			<div class="container margin-top-40">
				<div class="row text-align-center margin-top-40">

					<div class="col-xs-12 hours-container">
						<div class="underlined-header-container">
							<h3 class="margin-none">We Are Open</h3>
							<hr class="underline-hr">
						</div>
						<h1>Monday to Friday <span class="gold-font">7AM - 7PM</span></h1>
						<h1>Saturday <span class="gold-font">9AM - 5PM</span></h1>
					</div>

				</div>
			</div>

			<div class="margin-top-40">
				<div id="google-map">

				</div>
			</div>

			<div class="container">
				<div class="row text-align-center margin-top-40 margin-bottom-40">
					<div class="col-xs-12 col-sm-6 location-container">
						<h3>You can find us at</h3>
						<h1><a class="gold-font" href="http://maps.apple.com/?q=43.646234,-79.375499">25 The Esplanade, Toronto, ON M5E 1W5</a></h1>
					</div>

					<div class="col-xs-12 col-sm-6 contact-container">
						<h3>Call Us</h3>
						<h1><a href="tel:416-777-9727" class="gold-font">416-777-9727</a></h1>
					</div>
				</div>
			</div>

		</section>


	</main>


<?php get_footer(); ?>
