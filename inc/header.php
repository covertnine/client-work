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

    <a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'c9' ); ?></a>

    <nav class="navbar navbar-expand-lg">

        <div class="container-fluid">
		<?php

			// use customizer logo, if that's not set, show text of site title
			$c9_site_name = get_bloginfo( 'name' );

			if (has_custom_logo()) {
				the_custom_logo();
			} else {
				//user has not uploaded logo, use fallback default
				?>
				<?php
				if (is_home() ) { //if this is the homepage use the h1 tag
					?>
					<h1>
						<a href="<?php echo get_home_url(); ?>" title="<?php echo esc_attr( $c9_site_name . __( ' Homepage', 'c9' ) ); ?>" class="light-color-text d-none d-sm">
							<?php echo esc_html( $c9_site_name ); ?>
						</a>
					</h1>
					<?php
				} else {
					?>
					<span class="navbar-text h1 hidden-xs">
						<a href="<?php echo get_home_url(); ?>" title="<?php echo esc_attr( $c9_site_name . __( ' Homepage', 'c9' ) ); ?>" class="light-color-text d-none d-sm">
							<?php echo esc_html( $c9_site_name ); ?>
						</a>
					</span>
				<?php
				} //end of checking homepage
				?>


			<?php
			} //end of custom logo
			?>

			<?php

			$c9_dark_logo = get_theme_mod( 'c9_dark_logo', '');

			//add the dark logo if necessary and filled in for after user scrolls
			if (!empty($c9_dark_logo)) {
                ?>
            <a href="<?php echo get_home_url(); ?>" title="<?php echo esc_attr( $c9SiteName . __(' Homepage', 'c9') ); ?>" class="dark-brand custom-logo-link c9-custom-logo">
                <img src="<?php echo esc_url( $c9_dark_logo ); ?>" class="c9-home-logo img-fluid c9-custom-logo" alt="<?php echo esc_attr( $c9SiteName . __('Dark Logo', 'c9') ); ?>" />
            </a>
                <?php
			} else {
			?>
				<span class="navbar-text h1">
					<a href="<?php echo get_home_url(); ?>" title="<?php echo esc_attr( $c9_site_name . __( ' Homepage', 'c9' ) ); ?>" class="dark-color-text">
						<?php echo esc_html( $c9_site_name ); ?>
					</a>
				</span>
			<?php
			} // end checking for dark logo
			?>

            <div class="navbar-small-buttons">
                <div class="nav-search">
                    <a href="#" class="btn-nav-search">
                        <i class="fa fa-search"></i>
                        <span class="sr-only"><?php __('Search', 'c9'); ?></span>
                    </a>
				</div>
				<?php
if ( !function_exists('max_mega_menu_is_enabled') && !max_mega_menu_is_enabled('primary') && has_nav_menu('primary') ) {
				?>
                <div class="nav-toggle">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
				</div>
<?php } ?>
            </div><!-- .navbar-small-buttons-->

            <!-- The WordPress Menu goes here -->
			<?php
			if ( function_exists('max_mega_menu_is_enabled') && max_mega_menu_is_enabled('primary') ) {
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'link_before'     => '<span>',
						'link_after'	  => '</span>'
					)
				);
			} elseif ( has_nav_menu('primary') ) {
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse justify-content-center navbar-expand-md',
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
