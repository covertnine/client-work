<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package C9
 */
?>
<div id="wrapper-navbar" class="header-navbar" itemscope itemtype="http://schema.org/WebSite">

	<nav class="navbar navbar-expand-lg">

		<div class="container-fluid">
			<?php

			if (has_custom_logo()) {
				the_custom_logo();
			}
			?>

			<div class="navbar-small-buttons">
				<div class="nav-search">
					<a href="#" class="btn-nav-search">
						<i class="fa fa-search"></i>
						<span class="sr-only"><?php esc_html_e('Search', 'c9-work'); ?></span>
					</a>
				</div>
				<?php
				if (!function_exists('max_mega_menu_is_enabled')) {
				?>
					<div class="nav-toggle">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr__('Toggle Navigation', 'c9-work'); ?>">
							<i class="fa fa-bars"></i>
						</button>
					</div>
				<?php } ?>
			</div><!-- .navbar-small-buttons-->

			<!-- The WordPress Menu goes here -->
			<?php
			if (function_exists('max_mega_menu_is_enabled') && max_mega_menu_is_enabled('primary')) {
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'         => 'main-menu',
						'link_before'     => '<span>',
						'link_after'	  => '</span>'
					)
				);
			} else {
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse justify-content-center navbar-expand-lg',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav nav nav-fill justify-content-between',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'link_before'     => '<span>',
						'link_after'	  => '</span>',
						'depth'           => 2,
						'walker'          => new c9_WP_Bootstrap_Navwalker(),
					)
				);
			} ?>


		</div><!-- .container -->

	</nav><!-- .site-navigation -->
</div><!-- .header-navbar-->
