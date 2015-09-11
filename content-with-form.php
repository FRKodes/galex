<div class="container-fluid">
	<figure> <?php the_post_thumbnail('full'); ?> </figure>
	<div class="title-with-shadow"><?php the_title() ?></div>
</div>

<div class="container all-content">
	<?php the_content();
	if ($post->post_name == "contacto") {
		require('form-contact.php');
	}else{
		require('form-join-the-team.php');
	}?>

</div>