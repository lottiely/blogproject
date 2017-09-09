<?php 
/*Main Template Files*/
	get_header();
 ?>
 <div class="title_container">
	<h1><?php echo get_bloginfo( 'name' ); ?></h1>
	<p><?php echo get_bloginfo( 'description' ); ?></p>
	</div>

 <div class="content-wrapper">
	<?php
		//post loop
		
			/*if(have_posts()):
				while(have_posts()):
					the_post();
						the_content();
				endwhile;
			endif;*/

			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );

			endwhile; endif; 
		?>
</div>

<?php get_footer(); ?>