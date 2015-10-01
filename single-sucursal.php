<?php
/**
 * Detalle Sucursal
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
		<?php if ( have_posts() ) : ?>
		<div class="container-fluid sucural-detail">
			<div class="logo-title hidden-xs hidden-sm">
				<img src="<?php the_field('logo_unidad') ?> " alt="<?php the_title() ?>"> <p class="title"><?php the_title() ?></p>
			</div>
			<div class="row carousel-map">
				<div class="detail-carousel">
					<?php if (get_field('imagen_1')) { ?><div class="item"><img src="<?php the_field('imagen_1') ?>" alt="<?php the_title() ?> <?php the_field('imagen_1') ?>"></div> <?php } ?>
					<?php if (get_field('imagen_2')) { ?><div class="item"><img src="<?php the_field('imagen_2') ?>" alt="<?php the_title() ?> <?php the_field('imagen_2') ?>"></div> <?php } ?>
					<?php if (get_field('imagen_3')) { ?><div class="item"><img src="<?php the_field('imagen_3') ?>" alt="<?php the_title() ?> <?php the_field('imagen_3') ?>"></div> <?php } ?>
					<?php if (get_field('imagen_4')) { ?><div class="item"><img src="<?php the_field('imagen_4') ?>" alt="<?php the_title() ?> <?php the_field('imagen_4') ?>"></div> <?php } ?>
					<?php if (get_field('imagen_5')) { ?><div class="item"><img src="<?php the_field('imagen_5') ?>" alt="<?php the_title() ?> <?php the_field('imagen_5') ?>"></div> <?php } ?>
				</div>
				<div class="map-info-container hiddem-xs hidden-sm">
					
					<div class="place-map"><img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php the_field('lat') ?>,<?php the_field('lng') ?>&zoom=16&size=640x640&markers=icon:<?php echo img_path($_SERVER['HTTP_HOST']) ?>pin.png%7C<?php the_field('lat') ?>,<?php the_field('lng') ?>&key=AIzaSyCmlPM6Rkx643m8homNdRDD3lunx0MCPAM" alt="Place Galex Map"></div>

					<div class="info">
						<div class="address"><?php the_field('direccion') ?></div>
						<div class="phone">Teléfono(s): <?php the_field('telefono') ?></div>
						<div class="schedule"><?php the_field('horario') ?></div>
					</div>
				</div>
			</div>		
			<h1 class="hidden-md hidden-lg hiden-xl"><?php the_title()?></h1>
			<div class="info hidden-md hidden-lg hiden-xl">
				<div class="address"><?php the_field('direccion') ?></div>
				<div class="phone">Tels.: <?php the_field('telefono') ?></div>
				<div class="schedule">Horario: <?php the_field('horario') ?></div>
			</div>
			<div class="promos">
				<div class="title">Promociones vigentes:</div>
				<ul>
					<?php if (get_field('promo_1')) { ?><li class="item"><img src="<?php the_field('promo_1') ?>" alt="<?php the_title() ?> <?php the_field('promo_1') ?>"></li> <?php } ?>
					<?php if (get_field('promo_2')) { ?><li class="item"><img src="<?php the_field('promo_2') ?>" alt="<?php the_title() ?> <?php the_field('promo_2') ?>"></li> <?php } ?>
					<?php if (get_field('promo_3')) { ?><li class="item"><img src="<?php the_field('promo_3') ?>" alt="<?php the_title() ?> <?php the_field('promo_3') ?>"></li> <?php } ?>
				</ul>
			</div>
			<div class="buttons">
				<a href="#" class="btn btn-primary hidden-md hidden-lg hiden-xl">Ver mapa</a>
				<a href="<?php echo get_permalink ( 37 ) ?>" class="btn btn-primary pin">Buscar más sucursales</a>
			</div>
		</div>
			
		<?php endif;?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>