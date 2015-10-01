<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Galex
 * @since Galex 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/galex"><span> Galex Diversiones </span> </a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'menu_id' => 'primary-menu' ) ); ?>

				<ul class="social-links-mobile">
					<li><a class="icon-fb" target="_blank" href="https://www.facebook.com/DiversionesGalex"></a></li>
					<li><a class="icon-ig" target="_blank" href="https://instagram.com/diversionesgalex/"></a></li>
					<li><a class="icon-yt" target="_blank" href="#"></a></li>
				</ul>
			</div>
			<div class="near-location">Sucursal más cercana <br>Plaza Lomas</div>
			<ul class="social-links-top">
				<li><a target="_blank" href="https://www.facebook.com/DiversionesGalex" class="icon-fb"></a></li>
				<li><a target="_blank" href="https://instagram.com/diversionesgalex/" class="icon-ig"></a></li>
				<li><a target="_blank" href="#" class="icon-yt"></a></li>
			</ul>
		</div>
	</nav>

	<div id="content" class="site-content">
