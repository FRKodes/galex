<div class="container-fluid">
	<figure> <?php the_post_thumbnail('full'); ?> </figure>
	<div class="row"> <div class="inner-logo <?php echo $post->post_name; ?>"><img src="<?php the_field('logo_unidad') ?>" alt="<?php the_title() ?>"></div> </div>
</div>

<div class="container all-content">
	<?php the_content(); ?>

	<div class="find-branches"><a href="#">Encuentra sucursales de Diversiones Galex</a></div>

	<div class="branches-container <?php echo $post->post_name; ?>">
		<div class="col bowl">
			<figure><a href="#"><img src="/wp-content/themes/galex/images/galex-bowl-color.jpg" alt="Galex Bowl"></a></figure>
			<figure class="logo"><a href="#"><img src="/wp-content/themes/galex/images/logo-galex-bowl.png" alt="Logo Galex Bowl"></a></figure>
		</div>
		<div class="col diversiones">
			<figure><a href="#"><img src="/wp-content/themes/galex/images/galex-diversiones-color.jpg" alt="Diversiones Galex"></a></figure>
			<figure class="logo"><a href="#"><img src="/wp-content/themes/galex/images/logo-galex.png" alt="Logo Diversiones Galex"></a></figure>
		</div>
		<div class="col kids">
			<figure><a href="#"><img src="/wp-content/themes/galex/images/galex-kids-color.jpg" alt="Galex Kids "></a></figure>
			<figure class="logo"><a href="#"><img src="/wp-content/themes/galex/images/kids.png" alt="Logo Galex Kids "></a></figure>
		</div>
	</div>
</div>