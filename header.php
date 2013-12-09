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

<link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<script src="wp-content/themes/flannel/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div id="page" class="hfeed site container_24">
	<div class="alpha grid_24 omega">
		<?php do_action( 'before' ); ?>
			<div class="alpha grid_4 omega f">
				<div class="f-content">
					<p>this is the sidebar of the "F" Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
					Suscipit, rem quibusdam sapiente obcaecati unde quod sed tempore nam perspiciatis veritatis 
					laudantium quis eos non labore ullam aliquid ipsum cupiditate repellendus culpa consequatur 
					incidunt. Ex, laboriosam sit ab nostrum eaque assumenda excepturi quisquam illum eum 
					molestias. Expedita, rerum, voluptas dolore praesentium recusandae officia quidem fugit 
					veniam hic assumenda corrupti eum qui minus minima eos deserunt quaerat aspernatur modi 
					incidunt consectetur. A, aspernatur, vitae, sunt deserunt dolor aperiam animi perferendis 
					modi libero ducimus dignissimos necessitatibus quasi quia tenetur accusamus excepturi 
					molestias nam. Sed, sit nulla voluptatum nobis quasi rem magni odit dolorum.</p>
				</div>
				
			</div>

			<!-- Main Content Column -->
			
			<div class="alpha grid_16 omega f">
				<header id="masthead" class="site-header" role="banner">
					<div class="alpha grid_16 omega site-branding">
						<div class="alpha grid_6 site-title">	
							<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						</div>	
						<div class="grid_10 omega site-description">
							<h2><?php bloginfo( 'description' ); ?></h2>
						</div>
					</div>
					<nav id="site-navigation" class="alpha grid_16 omega main-navigation" role="navigation">
						<h3 class="menu-toggle"><?php _e( 'Menu', 'flannel' ); ?></h3>
						<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'flannel' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav>
				</header><!-- #masthead -->
				<div class="alpha grid_16 omega focus">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, error, veniam perspiciatis rem sequi maiores vero animi dolorum optio repellat similique aspernatur mollitia tempora molestias totam sit quaerat nostrum laborum necessitatibus voluptas fuga nemo asperiores minima eligendi officiis corrupti id.</p>
				</div>
				<div class="alpha grid_16 omega fmid">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, error, veniam perspiciatis rem sequi maiores vero animi dolorum optio repellat similique aspernatur mollitia tempora molestias totam sit quaerat nostrum laborum necessitatibus voluptas fuga nemo asperiores minima eligendi officiis corrupti id.</p>
				</div>
				<div id="content" class="site-content">