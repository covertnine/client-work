<?php
/**
 * Woocommerce specific functionality
 *
 * @package c9
 */
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

// /**
//  * Register our sidebars and widgetized areas.
//  */
// function woocommerce_product_filter()
// {
//     register_sidebar(
//         array(
//         'name'          => 'Product Filter Header',
//         'id'            => 'wc_product_filter',
//         'before_widget' => '<div>',
//         'after_widget'  => '</div>',
//         'before_title'  => '<h2 class="filter">',
//         'after_title'   => '</h2>',
//         )
//     );
// }
// add_action('widgets_init', 'woocommerce_product_filter');


/* Customize Product Features Labels */

add_filter('woocommerce_taxonomy_args_product_tag', 'custom_wc_taxonomy_label_product_tag');
function custom_wc_taxonomy_label_product_tag( $args )
{
    $args['label'] = 'Product Feature';
    $args['labels'] = array(
        'name'                 => __('Product Features', 'woocommerce'),
        'singular_name'     => __('Product Feature', 'woocommerce'),
        'menu_name'            => _x('Features', 'Admin menu name', 'woocommerce'),
        'search_items'         => __('Search Product Features', 'woocommerce'),
        'all_items'         => __('All Product Features', 'woocommerce'),
        'parent_item'         => __('Parent Product Feature', 'woocommerce'),
        'parent_item_colon' => __('Parent Product Feature:', 'woocommerce'),
        'edit_item'         => __('Edit Product Feature', 'woocommerce'),
        'update_item'         => __('Update Product Feature', 'woocommerce'),
        'add_new_item'         => __('Add New Product Feature', 'woocommerce'),
        'new_item_name'     => __('New Product Feature Name', 'woocommerce')
    );

    return $args;
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

/* remove dialog nag */
add_filter( 'woocommerce_helper_suppress_admin_notices', '__return_true' );
