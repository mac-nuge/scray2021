<?php get_header(); ?>

<div id="wrapper">

<!-- repeating list pulling from a spreadsheet -->

				<!-- Building certain variables straight into the html -->
				<?php $csv = array();
if(($handle = fopen(get_template_directory_uri() . '/tables/contacts.csv', "r")) !== FALSE) 
{while(($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
{$csv[] = $data;}} fclose($handle);

for ($r=1; $r < count($csv); $r++) {  //mn: csv is the array, not "data", which is just a blob
echo "


				<p>
					<b>first</b> name, 
					<p style='color: blue'>" . $csv[$r][0] . "</p> and then second name " . $csv[$r][1] . " is also " . $csv[$r][2] . " years of age 
				</p>
				<br/> 
				

				\n"; // use full stops/periods to concatenate
}?>




			
				<div id="container">
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					<div class="post">
						<p>
							<strong>
								<a href="
									<?php the_permalink(); ?>" title="
									<?php the_title(); ?>">
									<?php the_title(); ?>
								</a>
							</strong>
						</p>
						<p>
							<div class="post" id="post-
								<?php the_ID(); ?>">
								<?php the_content(); ?>
								<br/>
								<br/>
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