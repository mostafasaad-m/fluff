<?php
/**
 * WooCommerce Fallback Template Wrapper
 * 
 * @package FLUFF
 */

get_header(); ?>

<div class="px-margin-mobile py-6 max-w-6xl mx-auto">
    <?php woocommerce_content(); ?>
</div>

<?php get_footer(); ?>
