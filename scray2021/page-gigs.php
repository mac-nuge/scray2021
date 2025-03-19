<?php get_header(); ?>

<div id="wrapper">


<!-- Tooltip options for this list -->
	
<style>

div {
	width: 60%;
}


<?php $csv = array();
if(($handle = fopen(get_template_directory_uri() . '/tables/gigs.csv', "r")) !== FALSE) 
{while(($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
{$csv[] = $data;}} fclose($handle);

for ($r=1; $r < count($csv); $r++) {  //mn: csv is the array, not "data", which is just a blob
echo 

"p." . $csv[$r][0] ." {
  display: none;
  background-color: yellow;
  padding: 20px;
}

div." . $csv[$r][0] .":hover p.". $csv[$r][0] ." {
  display: block;
} \n\n";}

?>

</style>
</head>
<body>

<div>Hover over me to show the p element
  <p class="tooltip">Tada! Here I am!</p>
</div>
  <div>testing this line</div>



<!-- repeating list pulling from a spreadsheet -->

				<!-- Building certain variables straight into the html -->

<?php $csv = array();
if(($handle = fopen(get_template_directory_uri() . '/tables/gigs.csv', "r")) !== FALSE) 
{while(($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
{$csv[] = $data;}} fclose($handle);

for ($r=1; $r < count($csv); $r++) {  //mn: csv is the array, not "data", which is just a blob
echo "



				<div class='".$csv[$r][0]."'>
					<p>
					<b>". $csv[$r][2] ."</b> <p class='". $csv[$r][0] ."'>Played at " . $csv[$r][4] . ", and you can read about it <a href='#'>" . $csv[$r][4] . "</a>.</p>
					</p>
				</div>



				
\n"; // use full stops/periods to concatenate
} ?>




			
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