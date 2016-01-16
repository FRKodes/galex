<?php
$my_query = new WP_Query('post_type=banner&categoria=home');
while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<div class="item"><img src="<?php the_field('imagen') ?>" alt=""></div><?php
endwhile;  wp_reset_query(); ?>