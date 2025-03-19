<!doctype html>
<html <?php language_attributes(); ?>>
<head>
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


			


<p><img src="/images/404.JPG"></p>



		


<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>



<?php if(is_front_page()) : ?>

<!--nothing -->

<?php else : ?>

<footer>
	<div class="home">

	<?php
wp_nav_menu(
	array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'primary-menu',
		'items_wrap'	 => '<ul class="navmenu">%3$s</ul>'
	)
);
?>

	</div>
</footer>
	
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
