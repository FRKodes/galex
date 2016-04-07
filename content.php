<div class="container brands">
	<div class="brands-container">
		<?php
		$my_query = new WP_Query('post_type=boton_top');
		while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class="block-unity">
				<a href="#<?php strtolower(the_title()); ?>"><img class="back-image" src="<?php the_field('imagen_normal') ?>" alt="<?php the_title() ?>"></a>
				<a href="#<?php strtolower(the_title()); ?>" class="logo-brand"><img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/logo-galex.png" alt="<?php the_title() ?>"></a>
			</div><?php
		endwhile;  wp_reset_query();
		?>
	</div>
</div>

<div class="container banners-container interiores">
	<div class="main-banner unidad interiores diversiones"><?php include('banners-diversiones.php'); ?></div>
	<div class="main-banner unidad interiores kids" id="main-banner-2"><?php include('banners-kids.php'); ?></div>
	<div class="main-banner unidad interiores bowl" id="main-banner-3"><?php include('banners-bowl.php'); ?></div>
</div>

<div class="container all-content">
	
	<div class="col-xs-12 unidad_text text-diversiones"><?php the_content(); ?></div>
	<div class="col-xs-12 unidad_text text-kids hidden"><?php the_field('descripcion_kids'); ?></div>
	<div class="col-xs-12 unidad_text text-bowl hidden"><?php the_field('descripcion_bowls'); ?></div>

</div>