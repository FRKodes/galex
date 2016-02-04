<?php
/**
 * Template Name: Home
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

			

			<div class="container brands">
				<div class="brands-container">
					<div class="block-unity">
						<a href="diversiones-galex"><img class="back-image" src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/galex-diversiones.jpg" alt=""></a>
						<a href="diversiones-galex" class="logo-brand"><img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/logo-galex.png" alt=""></a>
					</div>
					<div class="block-unity">
						<a href="diversiones-galex"><img class="back-image" src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/galex-kids.jpg" alt=""></a>
						<a href="diversiones-galex" class="logo-brand"><img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/kids.png" alt=""></a>
					</div>
					<div class="block-unity">
						<a href="diversiones-galex"><img class="back-image" src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/galex-bowl.jpg" alt="Galex Bowl"></a>
						<a href="diversiones-galex" class="logo-brand"><img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/logo-galex-bowl.png" alt="logo galex bowl"></a>
					</div>
				</div>
			</div>
			
			<div class="container banners-container home">
				<div class="main-banner home"><?php include('banner-principal.php'); ?></div>
			</div>
			
			
			
		<?php if ( have_posts() ) : ?>
			
			<div class="container home-text">
				<?php the_content() ?>
			</div>
			
		<?php endif;?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>