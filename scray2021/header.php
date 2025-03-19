<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<!-- MN - Favicon inclusion check-->

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.ico">

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<divnk rel="profile" href="https://gmpg.org/xfn/11">


<!-- helps show a brief loader so that you don't see unstyled page before css stylesheet -->

	<style>
		/* This only works with JavaScript, 
		   if it's not present, don't show loader */
		.no-js #loader { display: none;  }
		.js #loader { display: block; position: absolute; left: 100px; top: 0; }
	</style>
	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	
	
	<script src="https://github.com/Modernizr/Modernizr/raw/master/modernizr.js"></script>
	<script>
		// Wait for window load
		$(window).load(function() {
			// Animate loader off screen
			$("#loader").animate({
				top: -200
			}, 1500);
		});
	</script>	

<!-- -->


	<?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header>

<!-- additional header content, customised for different single templates -->

<?php 

// extract the category slug

			if ( is_single() ) {
				$cats =  get_the_category();
				$cat = $cats[0];
			} else {
				$cat = get_category( get_query_var( 'cat' ) );
			}
			$cat_slug = $cat->slug;

// insert the category slug to let them know which template to get

get_template_part( 'header-templates/header', $cat_slug ); 

?>

	<nav>
		
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'secondary-menu',
					'items_wrap'	=> '<ul class="navmenu2nd">%3$s</ul>'
				)
			);
			?>
	</nav><!-- #site-navigation -->


</header><!-- #masthead -->

