<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Flannel
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Loved+by+the+King' rel='stylesheet' type='text/css'>
<script src="wp-content/themes/flannel/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div id="page" class="hfeed site main_container_16">
	<div class="alpha main_grid_16 omega">
		<?php do_action( 'before' ); ?>
			<!-- Main Content Column -->
			
				<header id="masthead" class="site-header" role="banner">
					<div class="site-branding">
						
						<div class="alpha main_grid_13 omega">

							<div class="site-title">
								<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							</div>

							<div class="site-description">
								<h2><?php bloginfo( 'description' ); ?></h2>
							</div>
						
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<h3 class="menu-toggle"><?php _e( 'Menu', 'flannel' ); ?></h3>
								<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'flannel' ); ?></a>
								<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
							</nav>

						</div>
							<div class="alpha main_grid_3 omega">
								<img src="wp-content/themes/flannel/images/fl-box-large.png" alt="F.L. Site Branding Logo">
							</div>
						
					</div>


				</header><!-- #masthead -->
				<div id="content" class="site-content">