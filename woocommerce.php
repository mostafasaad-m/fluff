<?php
/**
 * WooCommerce Template Router
 * 
 * Ensures custom theme templates in /woocommerce/ are loaded.
 * 
 * @package FLUFF
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( is_singular( 'product' ) ) {
    wc_get_template( 'single-product.php' );
} elseif ( is_shop() || is_product_taxonomy() ) {
    wc_get_template( 'archive-product.php' );
} else {
    get_header( 'shop' );
    ?>
    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <?php woocommerce_content(); ?>
    </div>
    <?php
    get_footer( 'shop' );
}
