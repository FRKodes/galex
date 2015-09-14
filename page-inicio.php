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
				<div class="item"><img src="/wp-content/themes/galex/images/fam.png" alt=""></div>
				<div class="item"><img src="/wp-content/themes/galex/images/fam.png" alt=""></div>
			</div>

			<div class="container-fluid brands">
				<div class="block-unity">
					<a href="diversiones-galex"><img src="/wp-content/themes/galex/images/galex-diversiones.jpg" alt=""></a>
					<a href="diversiones-galex" class="logo-brand"><img src="/wp-content/themes/galex/images/logo-galex.png" alt=""></a>
				</div>
				<div class="block-unity">
					<a href="galex-kids"><img src="/wp-content/themes/galex/images/galex-kids.jpg" alt=""></a>
					<a href="galex-kids" class="logo-brand"><img src="/wp-content/themes/galex/images/kids.png" alt=""></a>
				</div>
				<div class="block-unity">
					<a href="galex-bowl"><img src="/wp-content/themes/galex/images/galex-bowl.jpg" alt="Galex Bowl"></a>
					<a href="galex-bowl" class="logo-brand"><img src="/wp-content/themes/galex/images/logo-galex-bowl.png" alt="logo galex bowl"></a>
				</div>
			</div>

			<div class="promos-banner">
				<div class="item">
					<div class="title"><img src="/wp-content/themes/galex/images/vive-la-experiencia.png" alt=""></div>
					<div class="top">
						<ul>
							<li class="parallax-layer"><img src="/wp-content/themes/galex/images/teddy.png" alt=""></li>
							<li class="parallax-layer"><img src="/wp-content/themes/galex/images/ticket1.png" alt=""></li>
							<li class="parallax-layer"><img src="/wp-content/themes/galex/images/ticket2.png" alt=""></li>
						</ul>
					</div>
					<div class="bottom">
						<div class="slogan"><span>Siempre ganas</span></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum vel facere suscipit veniam fuga nulla, modi, vitae ducimus omnis consectetur inventore, explicabo officia reprehenderit expedita alias id eum est nihil.</p>
					</div>
				</div>
			</div>

			<div class="place">
				<div class="section-title"><img src="/wp-content/themes/galex/images/cerca-mobile.png" alt="Galex cerca de tí"></div>
				<div class="place-carousel">
					<div class="item">
						<div class="image"><img src="/wp-content/themes/galex/images/plaza-lomas.jpg" alt="carousel-place"></div>
						<p class="title">Plaza Lomas, Chedraui Tonalá.</p>
						<div class="inner-section-title"><img src="/wp-content/themes/galex/images/cerca-mobile.png" alt="Galex cerca de tí"></div>
						<div class="map-info-container">
							<div class="place-map"><img src="/wp-content/themes/galex/images/map.jpg" alt="Place Galex Map"></div>
							<div class="info">
								<div class="address">Río Nilo #345</div>
								<div class="city">Tlaquepaque Jalisco.</div>
								<div class="phone">33 44 55 66 77</div>
								<div class="schedule">Lunes a Domingo 11 - 22 Hrs.</div>
								<a class="view-more" href="#">Ver más de esta sucursal</a>
							</div>
						</div>

					</div>
				</div>
				<div class="find-branches"><a href="#">Encuentra más sucursales</a></div>
			</div>

			<div class="newsletter">
				<div class="title"><img src="/wp-content/themes/galex/images/newslletter.png" alt="newslletter image"></div>
				<form action="" method="post">
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
