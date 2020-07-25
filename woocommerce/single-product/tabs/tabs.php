<?php

/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$c9_tabs = apply_filters('woocommerce_product_tabs', array());

if (!empty($c9_tabs)) : ?>

<div class="woocommerce-tabs wc-tabs-wrapper c9-horizontal-tabs">
    <ul class="tabs wc-tabs nav nav-tabs d-flex justify-content-end" role="tablist">
        <?php foreach ($c9_tabs as $c9_key => $c9_tab) : ?>
        <li class="<?php echo esc_attr($c9_key); ?>_tab nav-item" id="tab-title-<?php echo esc_attr($c9_key); ?>" role="tab" aria-controls="tab-<?php echo esc_attr($c9_key); ?>">
            <a href="#tab-<?php echo esc_attr($c9_key); ?>" class="nav-link"><?php echo apply_filters('woocommerce_product_' . $c9_key . '_tab_title', esc_html($c9_tab['title']), $c9_key); ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
    <div class="c9-tabs-content tab-content">
        <?php foreach ($c9_tabs as $c9_key => $c9_tab) : ?>
        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr($c9_key); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr($c9_key); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr($c9_key); ?>">
            <?php if (isset($c9_tab['callback'])) {
                        call_user_func($c9_tab['callback'], $c9_key, $c9_tab);
                    } ?>
        </div>
        <?php endforeach; ?>
    </div>
</div> <?php endif; ?>
