

<?php

#region  1.THEME SUPPORT


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'scray2021_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function scray2021_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on underscores, use a find and replace
		 * to change 'underscores' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'scray2021', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'scray2021' ),
				'menu-2' => esc_html__( 'Secondary', 'scray2021' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'scray2021_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );


		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'scray2021_setup' );

#endregion
// END THEME SUPPORT


#region 2. content width
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function scray2021_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'scray2021_content_width', 640 );
}
add_action( 'after_setup_theme', 'scray2021_content_width', 0 );

#endregion
//end content-width


#region 3. enqueue scripts and styles
/**
 * Enqueue scripts and styles.
 */

 function scray2021_scripts() {


 	#region manual hacks to create slug names
/*
This first bit loads the category slug, for the post stylesheets
*/

	if ( is_single() ) {
		$cats =  get_the_category();
		$cat = $cats[0];
	} else {
		$cat = get_category( get_query_var( 'cat' ) );
	}
		$cat_slug = $cat->slug;

/*
This bit loads the page slug, which is not specific to the post 
*/
	$page_slug = get_post_field( 'post_name', $post_id );

/*
Trick to force a refresh of the CSS file - adding a random string to the stylesyheet version (not like you would ever really need to change versions right)
*/

	$rand = rand( 1, 99999999999 );


	#endregion
	// end hacks


	#region ENQUEUE CSS

	wp_enqueue_style( 'scray2021-style', get_template_directory_uri() . '/style.css', array(), $rand );

		if ( is_page() ) {
		
		wp_enqueue_style( 'scray2021-style-page', get_template_directory_uri() . '/css/page/page-' . $page_slug . '-style.css', array(),  $rand );

		} elseif ( is_archive() ) {

			wp_enqueue_style( 'scray2021-style-cat', get_template_directory_uri() . '/css/' . $cat_slug . '/' . $cat_slug . '-style.css', array(),  $rand );
			wp_enqueue_style( 'scray2021-style-catpage', get_template_directory_uri() . '/css/' . $cat_slug . '/cat-' . $cat_slug . '-style.css', array(),  $rand );


		} else {

			wp_enqueue_style( 'scray2021-style-cat', get_template_directory_uri() . '/css/' . $cat_slug . '/' . $cat_slug . '-style.css', array(),  $rand );
			wp_enqueue_style( 'scray2021-style-catpage', get_template_directory_uri() . '/css/' . $cat_slug . '/post-' . $cat_slug . '-style.css', array(),  $rand );

		}

	#endregion
	// end ENQUEUE CSS


	#region ENQUEUE JAVASCRIPT

	wp_enqueue_script( 'scray2021-navigation', get_template_directory_uri() . '/js/navigation.js', array(),  $rand, true );

		if ( is_page() ) {
		
		wp_enqueue_script( 'scray2021-script-page', get_template_directory_uri() . '/js/page/page-' . $page_slug . '-script.js', array(),  $rand, true );

		} elseif ( is_archive() ) {

			wp_enqueue_script( 'scray2021-script-cat', get_template_directory_uri() . '/js/' . $cat_slug . '/' . $cat_slug . '-script.js', array(),  $rand, true );
			wp_enqueue_script( 'scray2021-script-catpage', get_template_directory_uri() . '/js/' . $cat_slug . '/cat-' . $cat_slug . '-script.js', array(),  $rand, true );


		} else {

			wp_enqueue_script( 'scray2021-script-cat', get_template_directory_uri() . '/js/' . $cat_slug . '/' . $cat_slug . '-script.js', array(),  $rand, true );
			wp_enqueue_script( 'scray2021-script-catpage', get_template_directory_uri() . '/js/' . $cat_slug . '/post-' . $cat_slug . '-script.js', array(),  $rand, true );

		}


	wp_enqueue_script( 'scray2021-myScript', get_template_directory_uri() . '/js/myScript.js', array(),  $rand, true );


	#endregion
	// end ENQUEUE JAVASCRIPT


}
add_action( 'wp_enqueue_scripts', 'scray2021_scripts' );


#endregion
// end enqueue


#region 4. GET TEMPLATE DIRECTORY
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

#endregion
// end
