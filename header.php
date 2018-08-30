<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Bulmascores
*/
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	


	<?php wp_head(); ?>
	<style>
	@import url('https://fonts.googleapis.com/css?family=Oswald:400,700');
	</style>
</head>

<body <?php body_class(); ?> >

	<!-- Navbar Menu -->
	<header id="masthead" class="site-header" >
		<div class="container">
			Language chooser goes here
		</div>
		<div class="container" style=" margin-bottom: 30px; margin-top: 10px;">
		<img src="<?php echo content_url();?>/themes/p3nd4ft4r_th3m3/assets/images/logo_upsi.png" width="1000px;"><br />
		<span class="oswald" style="font-size: 1.5em;">UNIVERSITI NO.1 PENDIDIKAN’ | ‘NO.1 EDUCATION UNIVERSITY</span>
		</div>
		<nav class="navbar" style="background-color: #3b3b3b; border-bottom: 4px solid #428000;">
			<div class="container">
				<div class="navbar-brand">
					<?php
					if ( has_custom_logo() ) {
						the_custom_logo();
					} else { ?>
						<a class="navbar-item" href="<?php echo esc_url_raw( home_url() );?>">
							<i class="fas fa-home fa-lg"></i>
						</a>
					<?php } ?>

					<div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div><!-- .navbar-brand -->

				<div id="navbarExampleTransparentExample" class="navbar-menu">
					<div class="navbar-start">
						<?php wp_nav_menu(array(
							'theme-location' => 'menu-1', //change it according to your register_nav_menus() function
							'depth' => 2,
							'container' => 'navbar-start',
							'items_wrap' => '%3$s',
							'walker' => new Bulma_Walker(),
						));
						?>
					</div>

					<div class="navbar-end">
						<div class="navbar-item">
							<div id="social-icons" class="field is-grouped">
								<a class="navbar-item" href="#"><i class="fab fa-facebook"></i></a>
								<a class="navbar-item" href="#"><i class="fab fa-twitter"></i></a>
								<a class="navbar-item" href="#"><i class="fab fa-youtube"></i></a>
							</div><!-- .field -->
						</div><!-- .navbar-item -->
					</div><!-- .navbar-end -->
				</div>


			</div><!-- .container -->
		</nav>

	</header><!-- #masthead -->
