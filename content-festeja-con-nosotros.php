<div class="container brands">
	<div class="brands-container">
		<?php
		$my_query = new WP_Query('post_type=boton_top');
		while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class="block-unity">
				<a href="#<?php strtolower(the_title()); ?>"><img class="back-image" src="<?php the_field('imagen_normal') ?>" alt="<?php the_title() ?>"></a>
				<a href="#<?php strtolower(the_title()); ?>" class="logo-brand"><img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/logo-galex-<?php the_title() ?>.png" alt="<?php the_title() ?>"></a>
			</div><?php
		endwhile;  wp_reset_query();
		?>
	</div>
</div>

<div class="container banners-container festeja">
	<img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/loading.gif" widt="100" alt="Loading..." class="loading hidden">
	<div class="main-banner festeja diversiones"><?php include('banners-festeja-diversiones.php'); ?></div>
	<div class="main-banner festeja kids hidden" id="main-banner-2"><?php include('banners-festeja-kids.php'); ?></div>
	<div class="main-banner festeja bowl hidden" id="main-banner-3"><?php include('banners-festeja-bowl.php'); ?></div>
</div>

<div class="container all-content">
	<div class="col-xs-12"><?php the_content(); ?></div>
</div>