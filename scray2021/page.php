<?php get_header(); ?>

	<div id="wrapper">
		
	<?php 
	
// get the page slug for Pages

	$page_slug = get_post_field( 'post_name', $post_id );
	echo $page_slug 
	
	?>

		<div id="container">
			
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			
			<div class="post">
				<p>
					<strong>
						
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_title(); ?>
						</a>
					</strong>
				</p>
								
				<p>
					<div class="post" id="post-<?php the_ID(); ?>">
							<?php the_content(); ?><br/><br/>
					</div>
				</p>
			
			</div>
			
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