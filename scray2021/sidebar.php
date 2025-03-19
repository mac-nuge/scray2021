
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

get_template_part( 'sidebar-templates/sidebar-content', $cat_slug ); 

?>