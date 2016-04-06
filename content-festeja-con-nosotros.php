<div class="container brands">
	<div class="brands-container">
		<div class="block-unity">
			<a href="#diversiones"><img class="back-image" src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/galex-diversiones.jpg" alt=""></a>
			<a href="#diversiones" class="logo-brand"><img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/logo-galex.png" alt=""></a>
		</div>
		<div class="block-unity">
			<a href="#kids"><img class="back-image" src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/galex-kids.jpg" alt=""></a>
			<a href="#kids" class="logo-brand"><img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/kids.png" alt=""></a>
		</div>
		<div class="block-unity">
			<a href="#bowl"><img class="back-image" src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/galex-bowl.jpg" alt="Galex Bowl"></a>
			<a href="#bowl" class="logo-brand"><img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/logo-galex-bowl.png" alt="logo galex bowl"></a>
		</div>
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