<?php
/**
 * Template Name: Home
 *
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Galex
 * @since Galex 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="main-banner">
				<div></div>
			</div>

			<div class="container brands">
				<div class="block-unity col-sm-12"><a href=""><img src="/wp-content/themes/galex/images/galex-diversiones.jpg" alt=""></a></div>
				<div class="block-unity col-sm-12"><a href=""><img src="/wp-content/themes/galex/images/galex-kids.jpg" alt=""></a></div>
				<div class="block-unity col-sm-12"><a href=""><img src="/wp-content/themes/galex/images/galex-bowl.jpg" alt=""></a></div>
			</div>

			<div class="promos-banner">
				<div></div>
			</div>

			<div class="place">
				<div class="section-title"><img src="/wp-content/themes/galex/images/cerca-mobile.png" alt="Galex cerca de tí"></div>
				<div class="place-carousel">
					<div class="item">
						<div class="image"><img src="/wp-content/themes/galex/images/carousel-place.jpg" alt="carousel-place"></div>
						<p class="title">Plaza Lomas, Chedraui Tonalá.</p>
						<div class="info">
							<div class="address">Río Nilo #345</div>
							<div class="city">Tlaquepaque Jalisco.</div>
							<div class="phone">33 44 55 66 77</div>
							<div class="schedule">Lunes a Domingo 11 - 22 Hrs.</div>
							<a class="view-more" href="#">Ver más de esta sucursal</a>
						</div>
					</div>
				</div>
				<div class="find-branches"><a href="#">Encuentra más sucursales</a></div>
			</div>

			<div class="newsletter">
				<div class="title"><img src="/wp-content/themes/galex/images/newslletter.png" alt="newslletter image"></div>
				<form action="">
					<div class="form-group"><input type="text" placeholder="Correo electrónico" name="email" class="form-control"></div>
					<div class="submit-line"><input type="submit" value="Suscribirme!" class="btn btn-primary"></div>
				</form>
			</div>
		
		<?php if ( have_posts() ) : ?>
			
			<?php the_content() ?>
			
		<?php endif;?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
