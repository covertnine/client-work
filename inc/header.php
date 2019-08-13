<div id="wrapper-navbar" class="header-navbar" itemscope itemtype="http://schema.org/WebSite">

    <a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e('Skip to content', 'cortextoo'); ?></a>

    <nav class="navbar navbar-expand-lg navbar-light">

        <div class="container-fluid">
            <?php

            // get custom logo, if not set, use customizer logo, if that's not set, show text of site title
            $c9Logo = get_option('cortex_branding', '');
            $c9SiteName = get_bloginfo('name');

            if (!empty($c9Logo['logo'])) {
                ?>
            <a href="<?php echo get_home_url(); ?>" title="<?php echo $c9SiteName . __(' Homepage', 'cortextoo'); ?>" class="navbar-brand custom-logo-link c9-custom-logo">
                <img src="<?= $c9Logo['logo']; ?>" class="c9-home-logo img-fluid c9-custom-logo" alt="<?php echo $c9SiteName . __(' Logo', 'cortextoo'); ?>" />
            </a>
            <?php
            } else {
                the_custom_logo();
            }
            ?>

            <div class="navbar-small-buttons">
                <div class="nav-search">
                    <a href="#" class="btn-nav-search">
                        <i class="fa fa-search"></i>
                        <span class="sr-only"><?php __('Search', 'cortextoo'); ?></span>
                    </a>
                </div>
            </div><!-- .navbar-small-buttons-->

            <!-- The WordPress Menu goes here -->
            <?php wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'container_class' => 'collapse navbar-collapse justify-content-center navbar-expand-md',
                    'container_id'    => 'navbarNavDropdown',
                    'menu_class'      => 'navbar-nav nav nav-fill justify-content-between',
                    'fallback_cb'     => '',
                    'menu_id'         => 'main-menu',
                    'depth'           => 2,
                    'walker'          => new cortextoo_WP_Bootstrap_Navwalker(),
                )
            ); ?>

        </div><!-- .container -->

    </nav><!-- .site-navigation -->
</div><!-- .header-navbar-->