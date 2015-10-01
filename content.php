<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<div class="container-fluid top-image" style="background: transparent url(<?php echo $url; ?>) no-repeat center center;background-size:cover;">
	<img class="inner-image-page" src="<?php the_field('page_image') ?> " alt="<?php the_title() ?>">
	<div class="row"> <div class="inner-logo <?php echo $post->post_name; ?>"><img src="<?php the_field('logo_unidad') ?>" alt="<?php the_title() ?>"></div> </div>
</div>

<div class="container all-content">
	<div class="row">
		
	</div>
	<div class="col-sm-4 branches-container <?php echo $post->post_name; ?> hidden-xs">
		<div class="col bowl"><figure><img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/galex-bowl-color.jpg" alt="Galex Bowl"></figure></div>
		<div class="col diversiones"><figure><img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/galex-diversiones-color.jpg" alt="Diversiones Galex"></figure></div>
		<div class="col kids"><figure><img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/galex-kids-color.jpg" alt="Galex Kids "></figure></div>
	</div>

	<div class="col-xs-12 col-sm-8">
		<?php the_content(); ?>
		<a href="<?php echo get_permalink ( 37 ) ?>" class="btn btn-primary pin-btn col-md-6">encuentra más sucursales</a>
	</div>

</div>