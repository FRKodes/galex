<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Galex
 * @since Galex 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="logo-footer"><img src="<?php echo destino_final($_SERVER['HTTP_HOST']) ?>/wp-content/themes/galex/images/logo-galex.png" alt="logo diversiones galex"></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'menu_id' => 'primary-menu' ) ); ?>
			<ul class="social-links">
				<li><a target="_blank" class="icon-fb" href="https://www.facebook.com/DiversionesGalex"></a></li>
				<li><a target="_blank" class="icon-ig" href="https://instagram.com/diversionesgalex/"></a></li>
				<li><a target="_blank" class="icon-yt" href="#"></a></li>
			</ul>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->
	
	<?php
	$i = 0;
	$my_query = new WP_Query('post_type=sucursal');
	while ($my_query->have_posts()) : $my_query->the_post();
		
		$locations[$i] = array('lat' => get_field('lat'),
								'lng' => get_field('lng'),
								'title' => get_the_title(),
								'id' => get_the_ID(),
								'link' => get_the_permalink()
							);
		$i++;

	endwhile;  wp_reset_query(); ?>
	
	<input type="hidden" name="locations" value='<?php echo json_encode($locations); ?>'>
	<input type="hidden" name="featured" data-url='<?php echo $_SERVER['HTTP_HOST'] ?>/featured/?id='>
	<button id="showNearLocation"></button>

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
