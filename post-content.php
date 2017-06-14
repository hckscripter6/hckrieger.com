			<?php 
			
				if( have_posts() ): 
			
					while ( have_posts()) : the_post(); ?>
				
    				<article id="post-<?php the_ID(); ?>">
    					<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php the_author(); ?></p>
    					<p><?php the_date(); ?></p>
    					<div class="content"><?php the_content(); ?></div>
        				<?php 
                		    if (comments_open() || get_comments_number()) {
                		          comments_template();
                		    }
                		?>
    				</article>

				<?php endwhile; 
				
				endif; ?>