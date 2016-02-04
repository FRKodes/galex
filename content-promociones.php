<?php //include('top-image.php'); ?>

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

<div class="container banners-container promos">
	<div class="main-banner promos diversiones"><?php include('banners-promos-diversiones.php'); ?></div>
	<div class="main-banner promos kids" id="main-banner-2"><?php include('banners-promos-kids.php'); ?></div>
	<div class="main-banner promos bowl" id="main-banner-3"><?php include('banners-promos-bowl.php'); ?></div>
</div>
