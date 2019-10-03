<?php
require get_template_directory() . '/client/inc/client-functions.php';

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point($path)
{
    // update path
    $path = get_template_directory() . '/client/acf-json';
    // return
    return $path;
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point($paths)
{
    // remove original path (optional)
    unset($paths[0]);
    // append path
    $paths[] = get_template_directory() . '/client/acf-json';
    $paths[] = get_template_directory() . '/client/acf-json/locked';
    // return
    return $paths;
}

// $path defaults to 'woocommerce/' (in your theme folder)
add_filter(
    'woocommerce_template_path', function ($path) {
        $new_path = get_template_directory() . '/client/woocommerce/';
        return file_exists($new_path) ? 'client/woocommerce/' : $path;
    }
);

/**
 * Register our sidebars and widgetized areas.
 */
function woocommerce_product_filter()
{
    register_sidebar(
        array(
        'name'          => 'Product Filter Header',
        'id'            => 'wc_product_filter',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="filter">',
        'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'woocommerce_product_filter');

// add_action('wp_enqueue_scripts', 'product_page_enqueue_scripts');
// function product_page_enqueue_scripts()
// {
//     if (is_singular('product') || is_post_type_archive('product')) {
//         wp_enqueue_script('sumoselect', get_template_directory_uri() . '/client/client-assets/vendor/jquery.sumoselect.min.js', array('jquery'));
//         wp_enqueue_script('productpage', get_template_directory_uri() . '/client/client-assets/product-pages.js', array('sumoselect'));
//     }
// }
 
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