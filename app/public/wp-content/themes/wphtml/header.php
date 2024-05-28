<!DOCTYPE html>
<!-- La Notte - Nail Salon HTML5 Template design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DSAThemes">
	<meta name="description" content="La Notte - Nail Salon HTML5 Template">
	<meta name="keywords"
		content="DSAThemes, Beauty, Salon, Beauty Parlour, Nails, Manicure, Pedicure, Care, Health, Massage">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- SITE TITLE -->
	<title>XClusive Pempering</title>

	<!-- FAVICON AND TOUCH ICONS -->
	<link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . "/images/favicon.ico"); ?>"
		type="image/x-icon">
	<link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . "/images/favicon.ico"); ?>"
		type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152"
		href="<?php echo esc_url(get_template_directory_uri() . "/images/apple-touch-icon-152x152.png"); ?>">
	<link rel="apple-touch-icon" sizes="120x120"
		href="<?php echo esc_url(get_template_directory_uri() . "/images/apple-touch-icon-120x120.png"); ?>">
	<link rel="apple-touch-icon" sizes="76x76"
		href="<?php echo esc_url(get_template_directory_uri() . "/images/apple-touch-icon-76x76.png"); ?>">
	<link rel="apple-touch-icon"
		href="<?php echo esc_url(get_template_directory_uri() . "/images/apple-touch-icon.png"); ?>">
	<link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . "/images/apple-touch-icon.png"); ?>"
		type="image/x-icon">

	<!-- GOOGLE FONTS -->
	<link
		href="<?php echo esc_url("https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;700;800&display=swap"); ?>"
		rel="stylesheet">
	<link
		href="<?php echo esc_url("https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap"); ?>"
		rel="stylesheet">

	<!-- BOOTSTRAP CSS -->
	<link href="<?php echo esc_url(get_template_directory_uri() . "/css/bootstrap.min.css"); ?>" rel="stylesheet">

	<!-- FONT ICONS -->
	<link href="<?php echo esc_url(get_template_directory_uri() . "/css/flaticon.css"); ?>" rel="stylesheet">

	<!-- PLUGINS STYLESHEET -->
	<link href="<?php echo esc_url(get_template_directory_uri() . "/css/menu.css"); ?>" rel="stylesheet">
	<link id="effect" href="<?php echo esc_url(get_template_directory_uri() . "/css/fade-down.css"); ?>" media="all"
		rel="stylesheet">
	<link href="<?php echo esc_url(get_template_directory_uri() . "/css/magnific-popup.css"); ?>" rel="stylesheet">
	<link href="<?php echo esc_url(get_template_directory_uri() . "/css/flexslider.css"); ?>" rel="stylesheet">
	<link href="<?php echo esc_url(get_template_directory_uri() . "/css/owl.carousel.min.css"); ?>" rel="stylesheet">
	<link href="<?php echo esc_url(get_template_directory_uri() . "/css/owl.theme.default.min.css"); ?>"
		rel="stylesheet">
	<link href="<?php echo esc_url(get_template_directory_uri() . "/css/datetimepicker.min.css"); ?>" rel="stylesheet">

	<!-- TEMPLATE CSS -->
	<link href="<?php echo esc_url(get_template_directory_uri() . "/css/style.css"); ?>" rel="stylesheet">

	<!-- ON SCROLL ANIMATION -->
	<link href="<?php echo esc_url(get_template_directory_uri() . "/css/animate.css"); ?>" rel="stylesheet">

	<!-- RESPONSIVE CSS -->
	<link href="<?php echo esc_url(get_template_directory_uri() . "/css/responsive.css"); ?>" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body>

	<!-- PRELOADER SPINNER
		============================================= -->
	<div id="loading" class="rose-loading">
		<div id="loading-center">
			<div class="spinner">
				<div class="blob top"></div>
				<div class="blob bottom"></div>
				<div class="blob left"></div>
				<div class="blob move-blob"></div>
			</div>
		</div>
	</div>

	<!-- PAGE CONTENT
		============================================= -->
	<div id="page" class="page">

		<!-- HEADER
			============================================= -->
		<header id="header" class="header tra-menu navbar-light">
			<div class="header-wrapper">

				<!-- MOBILE HEADER -->
				<div class="wsmobileheader clearfix">
					<span class="smllogo"><img
							src="<?php echo esc_url(get_template_directory_uri() . "/images/logo-01.png"); ?>"
							alt="mobile-logo"></span>
					<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
					<a href="tel:123456789" class="callusbtn ico-20"><span class="flaticon-phone-call-1"></span></a>
				</div>

				<!-- NAVIGATION MENU -->
				<div class="wsmainfull menu clearfix">
					<div class="wsmainwp clearfix">

						<!-- HEADER LOGO -->
						<div class="desktoplogo"><a href="index.html" class="logo-black"><img
									src="<?php echo esc_url(get_template_directory_uri() . "/images/logo-01.png"); ?>"
									alt="header-logo"></a></div>
						<div class="desktoplogo"><a href="index.html" class="logo-white"><img
									src="<?php echo esc_url(get_template_directory_uri() . "/images/logo-white.png"); ?>"
									alt="header-logo"></a></div>


						<!-- MAIN MENU -->
						<nav class="wsmenu clearfix">
							<ul class="wsmenu-list">

								<!-- SIMPLE NAVIGATION LINK -->
								<li class="nl-simple" aria-haspopup="true"><a href="index.html">Home</a></li>

								<!-- SIMPLE NAVIGATION LINK -->
								<li class="nl-simple" aria-haspopup="true"><a href="pricing.html">Services & Prices</a>
								</li>

								<!-- SIMPLE NAVIGATION LINK -->
								<li class="nl-simple" aria-haspopup="true"><a href="gallery.html">Gallery</a></li>

								<!-- SIMPLE NAVIGATION LINK -->
								<li class="nl-simple" aria-haspopup="true"><a href="booking.html">Careers</a></li>

								<!-- DROPDOWN MENU -->
								<li class="nl-simple" aria-haspopup="true"><a href="#">FAQs </a></li>

								<!-- SIMPLE NAVIGATION LINK -->
								<li class="nl-simple" aria-haspopup="true"><a href="careers.html">Contacts</a></li>

								<!-- HEADER BUTTON -->
								<li class="nl-simple" aria-haspopup="true">
									<a href="contacts.html" class="btn rose--btn tra-white--hover last-link">Sign in</a>
								</li>

							</ul>
						</nav> <!-- END MAIN MENU -->

					</div>
				</div> <!-- END NAVIGATION MENU -->

			</div> <!-- End header-wrapper -->
		</header>