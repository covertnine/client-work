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
add_filter('woocommerce_template_path', function ($path) {
    $new_path = get_template_directory() . '/client/woocommerce/';
    return file_exists($new_path) ? 'client/woocommerce/' : $path;
});

/**
 * Register our sidebars and widgetized areas.
 *
 */
function woocommerce_product_filter()
{
    register_sidebar(array(
        'name'          => 'Product Filter Header',
        'id'            => 'wc_product_filter',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="filter">',
        'after_title'   => '</h2>',
    ));
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
