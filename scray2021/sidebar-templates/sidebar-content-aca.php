<div id="sidebar">

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


</div>
