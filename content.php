<div class="container-fluid">
	<figure> <?php the_post_thumbnail('full'); ?> </figure>
	<div class="row"> <div class="inner-logo <?php echo $post->post_name; ?>"><img src="<?php the_field('logo_unidad') ?>" alt="<?php the_title() ?>"></div> </div>
</div>

<div class="container all-content">
	<div class="branches-container <?php echo $post->post_name; ?> hidden-xs">
		<div class="col bowl"><figure><img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/galex-bowl-color.jpg" alt="Galex Bowl"></figure></div>
		<div class="col diversiones"><figure><img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/galex-diversiones-color.jpg" alt="Diversiones Galex"></figure></div>
		<div class="col kids"><figure><img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/galex-kids-color.jpg" alt="Galex Kids "></figure></div>
	</div>
	<div class="col-xs-12">
		<?php the_content(); ?>
	</div>

</div>