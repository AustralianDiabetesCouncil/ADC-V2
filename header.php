<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php if ( is_search() ) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/build/style.css">
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style/build/ie.css" />
	<![endif]-->

	<script src="<?php echo get_template_directory_uri(); ?>/js/build/modernizr-respond.min.js"></script>
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="page_wrap">

		<header id="header">

			<a class="logo" href="<?php echo get_bloginfo('home'); ?>"><?php echo get_bloginfo('home'); ?></a>

			<div class="header_wrap">

				<div id="taskbar">
					
					<div class="search">

						<div class="search-wrap">
							<form id="search-form" action="http://www.australiandiabetescouncil.com/search-results">
								<label for="q" id="search-label" class="screen-reader">Search</label>
								<input aria-labelledby="search-label" id="q" type="search" name="q" class="search-field" placeholder="Search the ADC network" value="">
								<span class="search-icon"></span>
								<input type="submit" id="search-button" value="Search" class="button search-button btn btn-primary">
							</form>
						</div>

					</div><?php // .search ?>

					<div class="action_links">

						<p class="freephone">Call Now: 1300 342 238</p>

						<div class="btn-group">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Membership <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="https://australiandiabetescouncil.wufoo.com/forms/w7x3k1/">Become a Member</a>
								</li>
								<li>
									<a href="https://australiandiabetescouncil.wufoo.com/forms/z7x3w1/">Renew Membership</a>
								</li>
								<li>
									<a href="https://australiandiabetescouncil.wufoo.com/forms/z7x3s5/">Change Membership Details</a>
								</li>
								<li>
									<a href="http://www.australiandiabetescouncil.com/membership/fees">Membership Fees</a>
								</li>
							</ul>
						</div>

						<button type="button" class="btn btn-success">Donate</button>

					</div><?php // action_links ?>

				</div><?php // #taskbar ?>

				<div class="main_navigation_wrap">

					<nav id="main_navigation" role="navigation">

						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

					</nav>

				</div><?php // .main_navigation_wrap ?>

			</div><?php // header_wrap ?>

		</header>

		<?php if ( is_front_page() ) { ?>

		<?php include_once('inc/carousel.php'); ?>

		<?php } ?>

		<div role="main">