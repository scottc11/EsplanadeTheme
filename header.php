<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">


		<!-- Link framework CSS files here -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/frameworks/normalize.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/frameworks/boilerplate.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/frameworks/bootstrap-3.3.7/css/bootstrap.min.css">

		<!-- Link all external fonts here -->
		<link href="https://fonts.googleapis.com/css?family=Alegreya+SC:400,400i,700" rel="stylesheet">

		<!-- Link the main style.css here -->

		<!-- Link additional CSS files here -->



		<?php wp_head(); ?>

	</head>


	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div>

			<!-- header -->
			<header class="container margin-top-20" role="banner">

					<div class="row">
						<!-- logo -->
						<div class="col-xs-12 text-align-center">
							<a class="header-logo"href="<?php echo home_url(); ?>">
								<div class="logo-container">
									<h1>Esplanade</h1>
									<hr>
									<h3 class="margin-none">Cleaners & Alterations</h3>
								</div>
							</a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<!-- <nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav> -->
						<!-- /nav -->
					</div>

			</header>
			<!-- /header -->
