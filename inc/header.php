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

			// get custom logo, if not set, use customizer logo, if that's not set, show text of site title
			$c9_logo      = get_option( 'cortex_branding', '' );
			$c9_site_name = get_bloginfo( 'name' );

			if ( ! empty( $c9_logo['logo'] ) ) {
			?>
			<a href="<?php echo get_home_url(); ?>" title="<?php echo $c9_site_name . __( ' Homepage', 'c9' ); ?>" class="navbar-brand custom-logo-link c9-custom-logo">
				<img src="<?php echo $c9_logo['logo']; ?>" class="c9-home-logo img-fluid" alt="<?php echo $c9_site_name . __( ' Logo', 'c9' ); ?>" />
			</a>
		<?php
			} elseif (has_custom_logo()) {
				the_custom_logo();
			} else {
			?>
			<a href="<?php echo get_home_url(); ?>" title="<?php echo $c9_site_name . __( ' Homepage', 'c9' ); ?>" class="navbar-brand c9-custom-logo">
				<img src="<?php echo get_template_directory_uri() . '/assets/c9-black-text-logo.svg'; ?>" class="c9-home-logo img-fluid" alt="<?php echo $c9_site_name . __( ' Logo', 'c9' );
				?>" />
			</a>
			<?php
			}
			?>

			<?php

			if (!empty($c9Logo['dark-logo'])) {
                ?>
            <a href="<?php echo get_home_url(); ?>" title="<?php echo $c9SiteName . __(' Homepage', 'c9'); ?>" class="dark-brand custom-logo-link c9-custom-logo">
                <img src="<?php echo $c9Logo['dark-logo']; ?>" class="c9-home-logo img-fluid c9-custom-logo" alt="<?php echo $c9SiteName . __('Dark Logo', 'c9'); ?>" />

            </a>
                <?php
			}
			?>

            <div class="navbar-small-buttons">
                <div class="nav-search">
                    <a href="#" class="btn-nav-search">
                        <i class="fa fa-search"></i>
                        <span class="sr-only"><?php __('Search', 'c9'); ?></span>
                    </a>
				</div>
				<?php
if ( !function_exists('max_mega_menu_is_enabled') && !max_mega_menu_is_enabled('primary') ) {
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
