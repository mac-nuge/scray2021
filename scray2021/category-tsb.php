<?php get_header(); ?>
			
<main>


<div class="masterimage"><div><p><img src="/images/Dc.JPG"></p></div>
 </div>


 <div class="postcontainer">

<?php query_posts($query_string . '&orderby=title&order=ASC');?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
		


<div class="post">

			<div class="cat-date"><?php //the_time('Y M j'); ?></div>
			<div class="cat-title">
				<strong>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</a>
				</strong> 

				<?php echo '[' . get_post_meta($post->ID, 'Label', true) . ', '; ?><?php echo get_post_meta($post->ID, 'Year', true) . ']' ?>
			
			</div>

</div>

<?php endwhile; ?>

</div>

<!-- add content here that isn't looped -->

<?php else : ?>
		

		
<?php endif; ?>

</main>
		


<?php get_footer(); ?>