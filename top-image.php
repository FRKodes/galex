<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<div class="container-fluid top-image" style="background: transparent url(<?php echo $url; ?>) no-repeat center center;background-size:cover;">
	<img class="inner-image-page" src="<?php the_field('page_image') ?> " alt="<?php the_title() ?>">
</div>