<?php include('top-image.php'); ?>

<div class="container all-content">
	<?php the_content();
	if ($post->post_name == "contacto") {
		require('form-contact.php');
	}else{
		require('form-join-the-team.php');
	}?>
</div>