<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<section class="content col-md-9">
			   <h2 class="description"><?php the_category(','); ?></h2>
			   
				   <?php get_template_part('post', 'content'); ?>
				   
			</section>

			<section class="sidebar col-md-3">
				<?php get_sidebar(); ?>
			</section
		
		</div>
	</div>	
				
<?php get_footer(); ?>