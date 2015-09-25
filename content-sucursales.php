<?php include('top-image.php'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="filter">
			<div class="form-group">
				<div class="styled-select">
					<select name="motivo" id="motivo">
						<option value="">Elige tu estado</option>
						<option value="Colima">Colima</option>
						<option value="Guanajuato">Guanajuato</option>
						<option value="Jalisco">Jalisco</option>
						<option value="Querétaro">Querétaro</option>
						<option value="Sinaloa">Sinaloa</option>
						<option value="Zacatecas">Zacatecas</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="styled-select">
					<select name="motivo" id="motivo">
						<option value="">Elige tu sucursal</option>
						<option value="Diversiones Galex Gran Terraza Belenes">Diversiones Galex Gran Terraza Belenes</option>
						<option value="Galex Kids Gran Plaza">Galex Kids Gran Plaza</option>
						<option value="Diversiones Galex Plaza Independencia">Diversiones Galex Plaza Independencia</option>
						<option value="Galex Bowl Plaza Caracol">Galex Bowl Plaza Caracol</option>
					</select>
				</div>
			</div>
		</div>	
	</div>
</div>

<div class="container all-content">
	
	<div class="party-title"><span>Diversiones Galex</span></div>
	<hr>
	<?php
	$my_query = new WP_Query('post_type=sucursal&unidad=diversiones');
	$cont = 0;
	while ($my_query->have_posts()) : $my_query->the_post();
		$cont++;
		$last = ($cont%3 == 0) ? 'last' : '' ;?>
		<div class="place <?php echo $last; ?>">
			<div class="title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></div>
			<figure><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail() ?></a></figure>
			<div class="info hidden-xs hidden-sm">
				<div class="address"><?php the_field('direccion') ?></div>
				<!-- <div class="city">Tlaquepaque Jalisco.</div> -->
				<div class="phone">Tels: <?php the_field('telefono') ?></div>
				<div class="schedule"><?php the_field('horario') ?></div>
				<div class="unity"><img src="<?php the_field('logo_unidad') ?>" alt="<?php the_title() ?>"></div>
				<div class="view-more"><a href="<?php the_permalink() ?>">Ver más detalles</a></div>
			</div>
		</div><?php 
	endwhile;  wp_reset_query(); ?>

	<div class="party-title"><span>Galex Kids</span></div>
	<hr>

	<?php
	$my_query = new WP_Query('post_type=sucursal&unidad=kids');
	$cont = 0;
	while ($my_query->have_posts()) : $my_query->the_post();
		$cont++;
		$last = ($cont%3 == 0) ? 'last' : '' ;?>
		<div class="place <?php echo $last; ?>">
			<div class="title"><a href="#"><?php the_title() ?></a></div>
			<figure><a href="#"><?php the_post_thumbnail() ?></a></figure>
			<div class="info hidden-xs hidden-sm">
				<div class="address"><?php the_field('direccion') ?></div>
				<!-- <div class="city">Tlaquepaque Jalisco.</div> -->
				<div class="phone">Tels: <?php the_field('telefono') ?></div>
				<div class="schedule"><?php the_field('horario') ?></div>
				<div class="unity"><img src="<?php the_field('logo_unidad') ?>" alt="<?php the_title() ?>"></div>
				<div class="view-more"><a href="#">Ver más detalles</a></div>
			</div>
		</div><?php 
	endwhile;  wp_reset_query(); ?>

	<div class="party-title"><span>Galex Bowl</span></div>
	<hr>
	
	<?php
	$my_query = new WP_Query('post_type=sucursal&unidad=bowl');
	$cont = 0;
	while ($my_query->have_posts()) : $my_query->the_post();
		$cont++;
		$last = ($cont%3 == 0) ? 'last' : '' ;?>
		<div class="place <?php echo $last; ?>">
			<div class="title"><a href="#"><?php the_title() ?></a></div>
			<figure><a href="#"><?php the_post_thumbnail() ?></a></figure>
			<div class="info hidden-xs hidden-sm">
				<div class="address"><?php the_field('direccion') ?></div>
				<!-- <div class="city">Tlaquepaque Jalisco.</div> -->
				<div class="phone">Tels: <?php the_field('telefono') ?></div>
				<div class="schedule"><?php the_field('horario') ?></div>
				<div class="unity"><img src="<?php the_field('logo_unidad') ?>" alt="<?php the_title() ?>"></div>
				<div class="view-more"><a href="#">Ver más detalles</a></div>
			</div>
		</div><?php 
	endwhile;  wp_reset_query(); ?>
	

</div>