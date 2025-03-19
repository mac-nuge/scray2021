<?php get_header(); ?>
			
<main>



<div class="postcontainer">

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
		

<div class="post">
	
	
				<div class="cat-date"><?php the_time('Y M j'); ?></div>
				<div class="cat-title">
					<strong>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_title(); ?>
						</a>
					</strong>
				</div>
	
				<!-- <div class="cat-block" id="post-<?php // the_ID(); ?>">
						<?php // the_excerpt(); ?><br/><br/>
				</div> -->
	
</div>

		
<?php endwhile; ?>

</div>

<!-- add content here that isn't looped -->

<!-- <div class="imagecontainer">
	
	<img src="http://macnguyen.com/notready/images/finks.jpg" style="grid-column: 3/9; grid-row: 3;">

</div> -->


<?php else : ?>

<!-- add fallback content if nothing exists -->

		
<?php endif; ?>

</main>
		


<?php get_footer(); ?>