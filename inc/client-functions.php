<?php
//functions for client specifics

/****************************************************************************************/
/***************************** remove admin bar
/****************************************************************************************/
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

/****************************************************************************************/
/***************************** client color settings
/****************************************************************************************/
include("client-setup.php");

/****************************************************************************************/
/***************************** load client scripts for frontend styling
/****************************************************************************************/

if (!function_exists('client_scripts')) {
    /**
     * Load theme's JavaScript and CSS sources.
     */
    function client_scripts()
    {
        //wp_enqueue_style('client-type', 'https://use.typekit.net/uqa4rne.css', array('cortextoo-styles'));
        wp_enqueue_style('cortextoo-megamenu', get_stylesheet_directory_uri() . '/client/client-assets/vendor/megamenu.css', array('cortextoo-styles'));
        wp_enqueue_style('client-styles', get_stylesheet_directory_uri() . '/client/client-assets/dist/client.min.css', array('cortextoo-styles'));
        wp_enqueue_style('client-styles', get_stylesheet_directory_uri() . '/client/client-assets/dist/client-eidtor.min.css', 99999999);
        wp_enqueue_script('client-scripts', get_template_directory_uri() . '/client/client-assets/custom-client.js', array('jquery'), true);
    }
} // endif function_exists( 'client_scripts' ).
add_action('wp_enqueue_scripts', 'client_scripts', 2);

/* add client compiled files to gutenberg editor */
if (!function_exists('cortextoo_client_editor_style')) {
    function cortextoo_client_editor_style()
    {
        wp_enqueue_style('cortextoo-client-typekit-style', '//use.typekit.net/uqa4rne.css');
        wp_enqueue_style('cortextoo-client-styles', get_stylesheet_directory_uri() . '/client/client-assets/dist/client.css');
        wp_enqueue_style('cortextoo-client-editor-styles', get_stylesheet_directory_uri() . '/client/client-assets/dist/client-editor.css');
    }
    add_action('enqueue_block_editor_assets', 'cortextoo_client_editor_style', 99999999);
} //end if function exists

/****************************************************************************************/
/***************************** custom fields
/****************************************************************************************/
define('ACF_LITE', false);

/****************************************************************************************/
/***************************** nav search form
/****************************************************************************************/
add_filter('wp_nav_menu_items', 'cortextoo_add_search_form', 10, 2);
function cortextoo_add_search_form($items, $args)
{
    if ($args->theme_location == 'primary')
        $items .= '<li class="search"><form role="search" method="get" id="searchform" action="' . home_url('/') . '"><label class="sr-only">Search Site</label><input type="text" value="" placeholder="Search" name="s" id="s" /><input type="submit" id="searchsubmit" value="' . esc_attr__('Search') . '" class="hide"/></form></li>';
    return $items;
}

/****************************************************************************************/
/***************************** WooCommerce Specifics
/****************************************************************************************/
/**
 * Change number or products per row to 4
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
    function loop_columns()
    {
        return 4; // 4 products per row
    }
}
