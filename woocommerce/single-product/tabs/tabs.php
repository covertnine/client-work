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
 * @version 2.4.0
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
$tabs = apply_filters('woocommerce_product_tabs', array());

if (!empty($tabs)) : ?>

<div class="woocommerce-tabs wc-tabs-wrapper c9-horizontal-tabs">
    <ul class="tabs wc-tabs nav nav-tabs d-flex justify-content-end" role="tablist">
        <?php foreach ($tabs as $key => $tab) : ?>
        <li class="<?php echo esc_attr($key); ?>_tab nav-item" id="tab-title-<?php echo esc_attr($key); ?>" role="tab" aria-controls="tab-<?php echo esc_attr($key); ?>">
            <a href="#tab-<?php echo esc_attr($key); ?>" class="nav-link"><?php echo apply_filters('woocommerce_product_' . $key . '_tab_title', esc_html($tab['title']), $key); ?></a>
        </li>
        <?php endforeach; ?>
        <li class="nav-item" id="tab-title-specs"><a href="#tab-tab-specs" class="nav-link" role="tab" data-toggle="tab">Specs</a></li>
        <li class="nav-item" id="tab-title-fit-sizing"><a href="#tab-tab-fit-sizing" class="nav-link" role="tab" data-toggle="tab">Fit &amp; Sizing</a></li>
    </ul>
    <div class="c9-tabs-content tab-content">
        <?php foreach ($tabs as $key => $tab) : ?>
        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr($key); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr($key); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr($key); ?>">
            <?php if (isset($tab['callback'])) {
                        call_user_func($tab['callback'], $key, $tab);
                    } ?>
        </div>
        <?php endforeach; ?>
        <div class="woocommerce-Tabs-panel c9-horizontal-tabs-tab tab-pane fade panel entry-content wc-tab" role="tabpanel" id="tab-tab-specs" aria-labelledby="tab-title-specs">
            [specs]
        </div>
        <div class="woocommerce-Tabs-panel c9-horizontal-tabs-tab tab-pane fade panel entry-content wc-tab" role="tabpanel" id="tab-tab-fit-sizing" aria-labelledby="tab-title-fit-sizing">
            [fit+sizing]
        </div>
    </div>

</div>

<?php endif; ?>