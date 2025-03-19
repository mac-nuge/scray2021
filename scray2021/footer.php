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
