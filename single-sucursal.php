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
			<div class="row">			
				<div class="detail-carousel">
					<?php if (get_field('imagen_1')) { ?><div class="item"><img src="<?php the_field('imagen_1') ?>" alt="<?php the_title() ?> <?php the_field('imagen_1') ?>"></div> <?php } ?>
					<?php if (get_field('imagen_2')) { ?><div class="item"><img src="<?php the_field('imagen_2') ?>" alt="<?php the_title() ?> <?php the_field('imagen_2') ?>"></div> <?php } ?>
					<?php if (get_field('imagen_3')) { ?><div class="item"><img src="<?php the_field('imagen_3') ?>" alt="<?php the_title() ?> <?php the_field('imagen_3') ?>"></div> <?php } ?>
					<?php if (get_field('imagen_4')) { ?><div class="item"><img src="<?php the_field('imagen_4') ?>" alt="<?php the_title() ?> <?php the_field('imagen_4') ?>"></div> <?php } ?>
					<?php if (get_field('imagen_5')) { ?><div class="item"><img src="<?php the_field('imagen_5') ?>" alt="<?php the_title() ?> <?php the_field('imagen_5') ?>"></div> <?php } ?>
				</div>
			</div>		
			<h1><?php the_title()?></h1>
			<div class="info">
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
				<a href="#" class="btn btn-primary">Ver mapa</a>
				<a href="<?php echo get_permalink ( 37 ) ?>" class="btn btn-primary pin">Buscar más sucursales</a>
			</div>
		</div>
			
		<?php endif;?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>