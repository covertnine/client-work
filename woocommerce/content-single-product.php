<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

?>
<div class="cortextoo">
    <?php
    /**
     * Hook: woocommerce_before_single_product.
     *
     * @hooked wc_print_notices - 10
     */
    do_action('woocommerce_before_single_product');

    if (post_password_required()) {
        echo get_the_password_form(); // WPCS: XSS ok.
        return;
    }
    ?>
    <div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
        <div class="entry-content">
            <div class="container">

                <?php
                /**
                 * Hook: woocommerce_before_single_product_summary.
                 *
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */
                do_action('woocommerce_before_single_product_summary');
                ?>

                <div class="summary entry-summary">
                    <?php
                    /**
                     * Hook: woocommerce_single_product_summary.
                     *
                     * @hooked woocommerce_template_single_title - 5
                     * @hooked woocommerce_template_single_rating - 10
                     * @hooked woocommerce_template_single_price - 10
                     * @hooked woocommerce_template_single_excerpt - 20
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     * @hooked woocommerce_template_single_meta - 40
                     * @hooked woocommerce_template_single_sharing - 50
                     * @hooked WC_Structured_Data::generate_product_data() - 60
                     */
                    do_action('woocommerce_single_product_summary');
                    ?>
                </div>

                <div class="wl-product-info">
                    <?php
                    // check if the repeater field has rows of data
                    if (have_rows('glove_colors')) :
                        ?>
                    Colors
                    <div class="box-colors"><?php

                                                // loop through the rows of data
                                                while (have_rows('glove_colors')) : the_row(); ?>
                        <span class="product-color-box" style="background-color: <?php the_sub_field('glove_color'); ?>"></span>
                        <?php

                            endwhile;
                            ?>
                    </div>
                    <?php
                    endif;
                    ?>
                    <?php

                    // vars	
                    $glove_sizes = get_field('glove_sizes');


                    // check
                    if ($glove_sizes) : ?>
                    <span class="sizes-available-label">Sizes Available</span>
                    <ul class="product-sizes">
                        <?php foreach ($glove_sizes as $size) : ?>
                        <li class="product-size"><?php echo $size; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>

                    <a href="/wp-content/uploads/2019/08/wells-lamont-glove-size-guide.jpg" title="Size Guide" class="product-size-link cortex-popup">Review Size Guide</a>
                    <div class="where-to-buy">
                        <a href="/where-to-buy" title="Where to buy" class="btn">Where to Buy</a>
                    </div>
                </div>

                <?php
                /**
                 * Hook: woocommerce_after_single_product_summary.
                 *
                 * @hooked woocommerce_output_product_data_tabs - 10
                 * @hooked woocommerce_upsell_display - 15
                 * @hooked woocommerce_output_related_products - 20
                 */
                do_action('woocommerce_after_single_product_summary');
                ?>
            </div>
        </div>
    </div>
    <?php do_action('woocommerce_after_single_product'); ?>
</div>