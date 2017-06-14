<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<section class="content col-md-9">
				 <?php get_template_part('post', 'content'); ?>
				 
				 <h3 style="text-align: center;"><a href="/archives">See all Posts</a></h3>
			</section>

			<section class="sidebar col-md-3">
				<?php get_sidebar(); ?>
			</section>
		</div>

	</div>	
				
<?php get_footer(); ?>