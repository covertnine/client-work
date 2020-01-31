<?php
/**
 * Megamenu theme export from plugin functionality
 *
 * @package c9
 */
function megamenu_add_theme_c9_work_1580446435($themes) {
    $themes["c9_work_1580446435"] = array(
        'title' => 'C9 Work',
        'container_background_from' => 'rgba(34, 34, 34, 0)',
        'container_background_to' => 'rgba(34, 34, 34, 0)',
        'arrow_up' => 'disabled',
        'arrow_down' => 'disabled',
        'arrow_left' => 'disabled',
        'arrow_right' => 'disabled',
        'menu_item_align' => 'center',
        'menu_item_background_hover_from' => 'rgba(51, 51, 51, 0)',
        'menu_item_background_hover_to' => 'rgba(51, 51, 51, 0)',
        'menu_item_link_height' => '42px',
        'menu_item_link_weight' => 'bold',
        'menu_item_link_text_transform' => 'uppercase',
        'menu_item_link_text_align' => 'center',
        'menu_item_link_color_hover' => 'rgb(221, 221, 221)',
        'menu_item_link_weight_hover' => 'bold',
        'menu_item_link_padding_left' => '0px',
        'menu_item_link_padding_right' => '0px',
        'panel_background_from' => 'rgb(255, 255, 255)',
        'panel_background_to' => 'rgb(255, 255, 255)',
        'panel_font_size' => '14px',
        'panel_font_color' => '#666',
        'panel_font_family' => 'inherit',
        'panel_second_level_font_color' => 'rgb(18, 18, 18)',
        'panel_second_level_font_color_hover' => '#555',
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
        'panel_third_level_font_color' => '#666',
        'panel_third_level_font_color_hover' => '#666',
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
        'flyout_link_color' => 'rgb(18, 18, 18)',
        'flyout_link_color_hover' => '#666',
        'flyout_link_family' => 'inherit',
        'flyout_link_text_transform' => 'uppercase',
        'responsive_breakpoint' => '667px',
        'line_height' => '1',
        'transitions' => 'on',
        'resets' => 'on',
        'mobile_columns' => '2',
        'toggle_background_from' => 'rgba(34, 34, 34, 0)',
        'toggle_background_to' => 'rgba(34, 34, 34, 0)',
        'toggle_bar_height' => '45px',
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
        'mobile_menu_item_link_color' => 'rgb(18, 18, 18)',
        'mobile_menu_item_link_text_align' => 'left',
        'mobile_menu_item_link_color_hover' => 'rgb(0, 0, 0)',
        'mobile_menu_item_background_hover_from' => 'rgb(240, 240, 240)',
        'mobile_menu_item_background_hover_to' => 'rgb(240, 240, 240)',
        'custom_css' => '/* necessary to get it working with the theme */
.c9 .navbar #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link .mega-indicator {
	display: none;
}

.c9 #mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-item>a.mega-menu-link {
	line-height: 1.3;
}

.c9 #mega-menu-wrap-primary #mega-menu-primary a:after,
.c9 #mega-menu-wrap-primary:after,
.c9 #mega-menu-wrap-primary #mega-menu-primary a.mega-menu-link:after {
	display: block;
}

.c9 #mega-menu-wrap-primary #mega-menu-primary li.mega-menu-item a.mega-menu-link:before {
	margin-right: 0px;
}

.c9 .mega-menu-link {letter-spacing: 1px;}

.c9 .mega-menu-link:hover, .c9 .mega-menu-link:focus {
	color: #16181b;
	background-color: #f8f9fa;
}',
    );
    return $themes;
}
add_filter("megamenu_themes", "megamenu_add_theme_c9_work_1580446435");
