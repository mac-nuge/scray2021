<main>	

<!-- start the loop -->


		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
	
		<div class="datecontainer">


			</div>

	
			<div class="titlecontainer">
				<div class="title">
					
				<?php the_title(); ?>


						<br>


						<div class="label">
							
							<a href="<?php echo get_post_meta($post->ID, 'Label Link', true); ?>" target="_blank"><?php echo get_post_meta($post->ID, 'Label', true); ?></a>
						<br>
						<?php echo get_post_meta($post->ID, 'Year', true); ?>

						</div>

						
				</div>

				<div class="thumbnail"><?php the_post_thumbnail(); ?></div>

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
