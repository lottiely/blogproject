<div class="main-content-wrapper">
	<h1><?php echo get_the_title()?></h1>
	<a href=""><?php echo get_the_modified_date(); ?></a><a href="">Leave a Comment</a>
	<hr>
	<div class="blog-content">
		<?php the_content(); ?>
	</div>
	<hr>
</div>