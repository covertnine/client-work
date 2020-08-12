<?php
/**
 * Client-specific functionality
 *
 * @package c9-work
 */


/**
* Client frontend styles and scripts
*/
require_once "client-enqueue.php";

/**
* Client editor styles and scripts
*/
require_once "client-editor.php";

/**
* Sets up colors and post types and custom styles for core blocks
*/
require_once "client-setup.php";

/**
* WooCommerce Support & Functionality
*/
require_once "woocommerce.php";

/**
* Mega Menu Theme
*/
require_once "megamenu-styles.php";

/**
* Additional Customer Settings for Theme
*/
require_once "admin-settings.php";

/**
* Navigation Search Item
*/
add_filter('wp_nav_menu_items', 'c9_nav_add_search_form', 10, 2);
function c9_nav_add_search_form($items, $args)
{
	if ($args->theme_location == 'primary')
		$items .= '<li class="search"><form role="search" method="get" id="searchform" action="' . home_url('/') . '"><label class="sr-only">' . __('Search Site', 'c9-work') . '</label><input type="text" value="" placeholder="' . __('Search', 'c9-work') . '" name="s" id="s" /><input type="submit" id="searchsubmit" value="' . __('Search', 'c9-work') . '" class="invisible sr-only"/></form></li>';
	return $items;
}

/**
* Filter to allow child templates from client folder prior to child-theme
*/
add_filter('template_include', function ($template) {
	$path = explode('/', $template);
	$template_chosen = end($path);
	$grandchild_template = get_template_directory() . '/client/' . $template_chosen;
	if (file_exists($grandchild_template)) {
		$template = $grandchild_template;
	}
	return $template;
});
