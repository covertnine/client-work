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

			$c9work_dark_logo = get_theme_mod('c9_dark_logo', '');

			//check for custom logo upload
			if (has_custom_logo()) {

				//if a dark logo has been uploaded, add a span so we can hide it
				if (!empty($c9work_dark_logo) ) {
				?>
				<div class="c9work-dual-logo">
					<?php the_custom_logo(); ?>
				</div>
				<?php
				} else {
					the_custom_logo();
				}
			}

			// check for dark logo option if it's there show it
			if ( !empty($c9work_dark_logo) ) {
				?>
				<a href="<?php echo esc_url( home_url() ); ?>" title="<?php esc_attr( get_bloginfo('name') ); ?>" rel="home">
				<img src="<?php echo $c9work_dark_logo; ?>" alt="<?php esc_attr( get_bloginfo('name') ); ?>" class="navbar-brand c9-custom-logo c9work-dark-logo" />
			</a>
			<?php
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
