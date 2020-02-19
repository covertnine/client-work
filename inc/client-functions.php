<?php
//functions for client specifics

/****************************************************************************************/
/***************************** load client scripts for frontend styling
/****************************************************************************************/
/**
 * Client-specific functionality
 *
 * @package c9
 */

if ( ! function_exists( 'client_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function client_scripts() {

		//wp_enqueue_style( 'c9-megamenu', get_template_directory_uri() . '/client/client-assets/vendor/megamenu.css', array( 'c9-styles' ) );
		wp_enqueue_style( 'client-fonts', 'https://fonts.googleapis.com/css?family=Abel|Bebas+Neue|Lobster&display=swap', array( 'c9-styles' ) );
		wp_enqueue_style( 'client-styles', get_template_directory_uri() . '/client/client-assets/dist/client.min.css', array( 'c9-styles' ) );
		wp_enqueue_script( 'client-scripts', get_template_directory_uri() . '/client/client-assets/custom-client.js', array( 'jquery' ), true );

		//some examples of extending scripts
		//wp_enqueue_script( 'smooth-state', get_template_directory_uri() . '/client/client-assets/vendor/jquery.smoothState.min.js', array( 'jquery' ), true );

	}
} // endif function_exists( 'client_scripts' ).
add_action( 'wp_enqueue_scripts', 'client_scripts', 20 );

if ( ! function_exists( 'c9_client_editor_style' ) ) {
	/**
	 * Add client compiled files to gutenberg editor.
	 */
	function c9_client_editor_style() {
		wp_enqueue_style( 'c9-client-styles', get_template_directory_uri() . '/client/client-assets/dist/client.min.css' );
		wp_enqueue_style( 'c9-client-editor-styles', get_template_directory_uri() . '/client/client-assets/dist/client-editor.min.css' );
	}
	add_action( 'enqueue_block_editor_assets', 'c9_client_editor_style', 99999999 );
} //end if function exists


/****************************************************************************************/
/******** Sets up colors and post types and custom styles for core blocks
/****************************************************************************************/
include( "client-setup.php" );

/****************************************************************************************/
/* C9 Work Admin Settings */
/****************************************************************************************/
require_once( "admin-settings.php" );

if ( ! function_exists( 'c9_hide_font_setting' ) ) {
	/**
	 * Hide admin setting for font cause we already set those in CSS
	 */
	function c9_hide_font_setting() {
		wp_enqueue_style( 'c9-client-admin-styles', get_template_directory_uri() . '/client/client-assets/dist/client-admin.css' );
	}
	add_action( 'admin_print_styles', 'c9_hide_font_setting', 999);
} //end if function exists

/****************************************************************************************/
/******** Woocommerce Specific Functionality
/****************************************************************************************/
include( "woocommerce.php" );

/****************************************************************************************/
/******** Adding filter to look for client folder templates before child theme templates
/****************************************************************************************/
add_filter( 'template_include', function( $template ) {
  $path = explode('/', $template );
  $template_chosen = end( $path );
  $grandchild_template = get_template_directory() . '/client/' . $template_chosen;
  if ( file_exists( $grandchild_template  ) ) {
     	$template = $grandchild_template;
  }
  return $template;
});

/****************************************************************************************/
/***************************** Adding Mega Menu styles
/****************************************************************************************/
include( "megamenu-styles.php" );

/****************************************************************************************/
/***************************** nav search form
/****************************************************************************************/
add_filter('wp_nav_menu_items', 'c9_nav_add_search_form', 10, 2);
function c9_nav_add_search_form($items, $args)
{
    if ($args->theme_location == 'primary')
        $items .= '<li class="search"><form role="search" method="get" id="searchform" action="' . home_url('/') . '"><label class="sr-only">Search Site</label><input type="text" value="" placeholder="Search" name="s" id="s" /><input type="submit" id="searchsubmit" value="' . esc_attr__('Search') . '" class="invisible sr-only"/></form></li>';
    return $items;
}
