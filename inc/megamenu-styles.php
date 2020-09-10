<?php
/**
 * Megamenu theme export from plugin functionality
 *
 * @package c9
 */
function c9_megamenu_override_default_theme($value) {
  // change 'primary' to your menu location ID
  if ( !isset($value['primary']['theme']) ) {
    $value['primary']['theme'] = 'c9_work_1599764917';
  }

  return $value;
}
add_filter('default_option_megamenu_settings', 'c9_megamenu_override_default_theme');

function c9_megamenu_add_theme_c9_work_1599764917($themes) {
    $themes["c9_work_1599764917"] = array(
        'title' => 'C9 Work',
        'container_background_from' => 'rgba(34, 34, 34, 0)',
        'container_background_to' => 'rgba(34, 34, 34, 0)',
        'container_padding_left' => '0',
        'container_padding_right' => '0',
        'container_padding_top' => '0',
        'container_padding_bottom' => '0',
        'arrow_up' => 'disabled',
        'arrow_down' => 'disabled',
        'arrow_left' => 'disabled',
        'arrow_right' => 'disabled',
        'menu_item_align' => 'center',
        'menu_item_background_hover_from' => 'rgba(51, 51, 51, 0)',
        'menu_item_background_hover_to' => 'rgba(51, 51, 51, 0)',
        'menu_item_link_height' => '42px',
        'menu_item_link_color' => 'rgb(92, 92, 92)',
        'menu_item_link_weight' => 'bold',
        'menu_item_link_text_transform' => 'uppercase',
        'menu_item_link_text_align' => 'center',
        'menu_item_link_color_hover' => 'rgb(0, 0, 0)',
        'menu_item_link_weight_hover' => 'bold',
        'menu_item_link_padding_left' => '0px',
        'menu_item_link_padding_right' => '0px',
        'panel_background_from' => 'rgb(255, 255, 255)',
        'panel_background_to' => 'rgb(255, 255, 255)',
        'panel_font_size' => '14px',
        'panel_font_color' => '#5c5c5c',
        'panel_font_family' => 'inherit',
        'panel_second_level_font_color' => 'rgb(92, 92, 92)',
        'panel_second_level_font_color_hover' => 'rgb(0, 0, 0)',
        'panel_second_level_text_transform' => 'uppercase',
        'panel_second_level_font' => 'inherit',
        'panel_second_level_font_size' => '14px',
        'panel_second_level_font_weight' => 'bold',
        'panel_second_level_font_weight_hover' => 'bold',
        'panel_second_level_text_decoration' => 'none',
        'panel_second_level_text_decoration_hover' => 'none',
        'panel_second_level_padding_left' => '8px',
        'panel_second_level_padding_right' => '8px',
        'panel_second_level_padding_top' => '10px',
        'panel_second_level_padding_bottom' => '10px',
        'panel_second_level_margin_left' => '6px',
        'panel_second_level_margin_right' => '6px',
        'panel_third_level_font_color' => '#5c5c5c',
        'panel_third_level_font_color_hover' => 'rgb(18, 18, 18)',
        'panel_third_level_font' => 'inherit',
        'panel_third_level_font_size' => '14px',
        'flyout_width' => '235px',
        'flyout_menu_background_from' => 'rgb(255, 255, 255)',
        'flyout_menu_background_to' => 'rgb(255, 255, 255)',
        'flyout_padding_top' => '5px',
        'flyout_padding_right' => '5px',
        'flyout_padding_bottom' => '5px',
        'flyout_padding_left' => '5px',
        'flyout_link_padding_left' => '8px',
        'flyout_link_padding_right' => '8px',
        'flyout_link_padding_top' => '10px',
        'flyout_link_padding_bottom' => '10px',
        'flyout_link_weight' => 'bold',
        'flyout_link_weight_hover' => 'bold',
        'flyout_link_height' => '14px',
        'flyout_background_from' => 'rgb(255, 255, 255)',
        'flyout_background_to' => 'rgb(255, 255, 255)',
        'flyout_link_size' => '14px',
        'flyout_link_color' => 'rgb(92, 92, 92)',
        'flyout_link_color_hover' => '#000000',
        'flyout_link_family' => 'inherit',
        'flyout_link_text_transform' => 'uppercase',
        'responsive_breakpoint' => '991px',
        'line_height' => '1',
        'transitions' => 'on',
        'resets' => 'on',
        'mobile_columns' => '2',
        'toggle_background_from' => 'rgba(34, 34, 34, 0)',
        'toggle_background_to' => 'rgba(34, 34, 34, 0)',
        'toggle_bar_height' => '42px',
        'toggle_bar_border_radius_top_left' => '0',
        'toggle_bar_border_radius_top_right' => '0',
        'toggle_bar_border_radius_bottom_left' => '0',
        'toggle_bar_border_radius_bottom_right' => '0',
        'mobile_menu_padding_top' => '5px',
        'mobile_menu_padding_bottom' => '10px',
        'mobile_menu_item_height' => '14px',
        'mobile_menu_force_width' => 'on',
        'mobile_background_from' => 'rgb(255, 255, 255)',
        'mobile_background_to' => 'rgb(255, 255, 255)',
        'mobile_menu_item_link_font_size' => '14px',
        'mobile_menu_item_link_color' => 'rgb(92, 92, 92)',
        'mobile_menu_item_link_text_align' => 'left',
        'mobile_menu_item_link_color_hover' => 'rgb(0, 0, 0)',
        'mobile_menu_item_background_hover_from' => 'rgb(240, 240, 240)',
        'mobile_menu_item_background_hover_to' => 'rgb(240, 240, 240)',
        'custom_css' => '/* additional CSS for Mega Menu compatibility with C9 Work Theme */
.c9 .navbar #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link .mega-indicator {
	display: none;
}

#mega-menu-wrap-primary .mega-menu-toggle .mega-toggle-block-1 .mega-toggle-label,
#mega-menu-wrap-primary .mega-menu-toggle .mega-toggle-block-1:after {
	font-weight: 700;
	letter-spacing: 1px;
}

.c9 .mega-menu-link {
	letter-spacing: 1px;
	line-height: 1;
}

.c9 .mega-menu-link:hover, .c9 .mega-menu-link:focus {
	color: #16181b;
	background-color: #f8f9fa;
}

.c9 #mega-menu-wrap-primary #mega-menu-primary a:after,
.c9 #mega-menu-wrap-primary:after,
.c9 #mega-menu-wrap-primary #mega-menu-primary a.mega-menu-link:after {
	display: block;
}

.c9 #mega-menu-wrap-primary #mega-menu-primary li.mega-menu-item a.mega-menu-link:before {
	margin-right: 0px;
}

.c9 #mega-menu-wrap-primary #mega-menu-primary .widget_nav_menu a {
	padding: 6px 0px;
}
#mega-menu-wrap-primary #mega-menu-primary a {
	transition: .3s opacity ease-in;
}

#mega-menu-wrap-primary #mega-menu-primary a:hover {
	opacity: .7;
}

/* change toggle button color */
@media only screen and (min-width: 668px) and (max-width: 991px) {
	#mega-menu-wrap-primary .mega-menu-toggle .mega-toggle-block-1:after,
	#mega-menu-wrap-primary .mega-menu-toggle .mega-toggle-block-1 .mega-toggle-label,
	#mega-menu-wrap-primary .mega-menu-toggle .mega-toggle-block-1:after {
		color: #fff;
	}
}

@media only screen and (max-width: 991px) {
	#mega-menu-wrap-primary .mega-menu-toggle .mega-toggle-block-0 .mega-toggle-animated-inner, #mega-menu-wrap-primary .mega-menu-toggle .mega-toggle-block-0 .mega-toggle-animated-inner::before, #mega-menu-wrap-primary .mega-menu-toggle .mega-toggle-block-0 .mega-toggle-animated-inner::after {background-color: #5c5c5c;}

	.c9 .mega-menu-link:hover span {color: #000000;}

	/* hide additional search nav item */
	.c9.mega-menu-primary #mega-menu-wrap-primary #mega-menu-primary li.search,
	.c9.mega-menu-primary .header-navbar .search {
		display: none;
	}

	.navbar-small #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item,
	.navbar-small.fixed-top #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item,
	.navbar-small.fixed-top #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link>span,
	.navbar-small #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link>span {
		line-height: 1;
		display: block;
		margin: 0px auto;
		text-align: center;
	}

	.navbar-small #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link,
	.navbar-small.fixed-top #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link,
	.navbar:not(.navbar-small) #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link>span {
		margin: 0px auto;
		display: block;
		line-height: 1;
		min-height: 40px;
		overflow: visible;
	}

	.navbar #mega-menu-wrap-primary #mega-menu-primary {
		max-height: 100vh;
		overflow-y: scroll;
	}

	.navbar:not(.navbar-small) #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>.mega-menu-link {min-height: 40px;}

	.header-navbar .nav .nav-item .nav-link:after,
	.header-navbar .nav .nav-item .nav-link:before,
	.header-navbar .nav .nav-item .nav-link>span:after,
	.header-navbar .nav .nav-item .nav-link>span:before,
	.navbar #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link:after,
	.navbar #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link:before,
	.navbar #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link>span:after,
	.navbar #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link>span:before,
	.navbar-small.fixed-top #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link:after,
	.navbar-small.fixed-top #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link:before,
	.navbar-small.fixed-top #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link>span:after,
	.navbar-small.fixed-top #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link>span:before {
		display: none;
	}

	#mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item.mega-current-menu-item>a.mega-menu-link,
	#mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item.mega-current-menu-ancestor>a.mega-menu-link,
	#mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item.mega-current-page-ancestor>a.mega-menu-link,
	#mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item.mega-toggle-on>a.mega-menu-link {
		background-color: transparent;
	}

	/* adjustments to drop down menus on mobile-based navigations so they center and go on one line.*/
	#mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item a.mega-menu-link,
	.c9 .navbar:not(.navbar-small) #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link,
	.c9 .navbar:not(.navbar-small) #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link>span {
		margin: 0px auto;
		text-align: center;
		display: block;
	}

}

/* initial menu link color on desktop screens is white and then changes to black */
@media only screen and (min-width: 992px) {
	.navbar:not(.navbar-small) #mega-menu-wrap-primary>#mega-menu-primary > li.mega-menu-item > a.mega-menu-link {
        color: #fff;
		height: auto;
		line-height: 1;
    }
		#mega-menu-wrap-primary #mega-menu-primary > li.mega-menu-item > a.mega-menu-link {
		line-height: 1;
	}
}',
    );
    return $themes;
}
add_filter("megamenu_themes", "c9_megamenu_add_theme_c9_work_1599764917");
