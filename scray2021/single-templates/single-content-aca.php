<main>	

<!-- start the loop -->


		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
	
		<div class="datecontainer">
				<div class="date"> <b><?php the_time('j M Y'); ?> </b> </div>
			</div>

	
			<div class="titlecontainer">
				<div class="title">
					<b>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_title(); ?>
						</a>
					</b>
				</div>
			</div>

<!-- actual post content -->

			<div class="blockcontainer" id="post-<?php the_ID(); ?>">
					
					<?php the_content(); ?>
						
			</div>
	
		<?php endwhile; ?>

<!--end of the loop-->

		<?php else : ?>
	
		<div class="post">
			<h2>
				<a href="<?php get_home_url(); ?>">No posts. Go back.</a>
			</h2>
		</div>
	
		<?php endif; ?>




</main>
