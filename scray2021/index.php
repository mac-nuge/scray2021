<?php get_header(); ?>

	<div id="wrapper">
		
		<div id="container">
			
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			
			<div class="post">
				<p>
					<strong>
						<div class="date">
							<?php the_time('Y M j'); ?>
						</div>
						
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_title(); ?>
						</a>
					</strong>
				</p>
			
			<?php endwhile; ?>
			
			<div class="nav">
				<?php posts_nav_link(' | ','-','+'); ?>
			</div>
			
			<?php else : ?>
			
			<div class="post">
				<h2>
					<a href="
						<?php bloginfo('url'); ?>">Come back to me.
					</a>
				</h2>
			</div>
			
			<?php endif; ?>
		
		</div>
	</div>


<?php get_footer(); ?>