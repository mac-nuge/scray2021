
<!-- main to replace wrapper -->
<main>	

<div id="wrapper">

	<strong>
		<p>general writing template</p>
	</strong>

	<!-- article to replace container -->
	<article>
		
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
		
	</article>
</div>
</main>