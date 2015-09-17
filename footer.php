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
			<ul class="social-links">
				<li><a target="_blank" class="icon-fb" href="https://www.facebook.com/DiversionesGalex"></a></li>
				<li><a target="_blank" class="icon-ig" href="https://instagram.com/diversionesgalex/"></a></li>
				<li><a target="_blank" class="icon-yt" href="#"></a></li>
			</ul>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
