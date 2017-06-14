<?php get_header(); ?>
		<div class="container">
			<div class="row">
				<section class="content col-md-9">
					<article>
						<?php if( have_posts() ): ?>
						
							<?php while ( have_posts()) : the_post(); ?>
							
								<h2 class="title"><?php the_title(); ?></h2>
								<?php the_content(); ?>
								
							<?php endwhile; ?>
							
						<?php endif; ?>
					</article>
				</section>
			
				<section class="sidebar col-md-3">
					<?php get_sidebar(); ?>
				</section>
			</div>
		</div>		
				
<?php get_footer(); ?>