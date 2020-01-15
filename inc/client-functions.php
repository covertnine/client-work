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

		wp_enqueue_style( 'client-styles', get_template_directory_uri() . '/client/client-assets/dist/client.min.css', array( 'c9-styles' ) );
		wp_enqueue_script( 'client-scripts', get_template_directory_uri() . '/client/client-assets/custom-client.js', array( 'jquery', 'smooth-state' ), true );

		//some examples of extending scripts
		//wp_enqueue_script( 'smooth-state', get_template_directory_uri() . '/client/client-assets/vendor/jquery.smoothState.min.js', array( 'jquery' ), true );
		//wp_enqueue_style( 'c9-megamenu', get_template_directory_uri() . '/client/client-assets/vendor/megamenu.css', array( 'c9-styles' ) );

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

add_action( 'after_setup_theme', 'c9_client_setup' );
if ( ! function_exists( 'c9_client_setup' ) ) {
	/**
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	function c9_client_setup() {
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);
	}
}

add_action( 'after_setup_theme', 'c9_add_woocommerce_support' );
if ( ! function_exists( 'c9_add_woocommerce_support')) {
	/**
	 * Enable support for WooCommerce
	 */
	function c9_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
	}
}

// $path defaults to 'woocommerce/' (in client folder)
add_filter('woocommerce_template_path', function () {
    return 'client/woocommerce/';
});


// change woocommerce thumbnail image size
add_filter('woocommerce_get_image_size_gallery_thumbnail', 'c9_override_woocommerce_image_size_gallery_thumbnail');
function c9_override_woocommerce_image_size_gallery_thumbnail($size)
{
    // Gallery thumbnails: proportional, max width 200px
    return array(
        'width'  => 85,
        'height' => 85,
        'crop'   => 0,
    );
}



add_filter('woocommerce_gallery_thumbnail_size', function ($size) {
    return 'woocommerce_thumbnail';
});




/** * Change number of products that are displayed per page (shop page) */
add_filter('loop_shop_per_page', 'c9_loop_shop_per_page', 40);
function c9_loop_shop_per_page($cols) {

    // $cols contains the current number of products per page based on the value stored on Options -> Reading 
    // Return the number of products you wanna show per page. 
    $cols = 40;
    return $cols;
}

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