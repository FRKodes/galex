<?php include('top-image.php'); ?>

<div class="container all-content">
	
	<?php the_content();?>
	
	<div class="promos-container">
		<?php
		$my_query = new WP_Query('post_type=promocion');
		while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class="promo-block">
				<figure><?php the_post_thumbnail() ?></figure>
				<?php the_content() ?>
			</div><?php 
		endwhile;  wp_reset_query(); ?>
	</div>
	

</div>