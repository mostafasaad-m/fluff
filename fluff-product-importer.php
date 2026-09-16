<?php
/**
 * FLUFF Sleepwear - Product & Variation Importer / Synchronizer
 *
 * This script imports/synchronizes the 20 curated FLUFF variable products
 * and their 100 size variations (XS, S, M, L, XL) directly into WooCommerce.
 *
 * Usage:
 * 1. Via WP-CLI:
 *    wp eval-file fluff-product-importer.php
 * 2. Or via Browser (Logged-in Administrator):
 *    Navigate to: https://your-site.com/?fluff_run_importer=fluff_sync_2026
 *
 * @package FLUFF
 */

// If accessed directly from browser without WordPress loaded
if ( ! defined( 'ABSPATH' ) ) {
    // Attempt to locate wp-load.php
    $wp_load_paths = array(
        __DIR__ . '/wp-load.php',
        dirname( __DIR__ ) . '/wp-load.php',
        dirname( dirname( __DIR__ ) ) . '/wp-load.php',
        dirname( dirname( dirname( __DIR__ ) ) ) . '/wp-load.php',
        dirname( dirname( dirname( dirname( __DIR__ ) ) ) ) . '/wp-load.php',
    );
    foreach ( $wp_load_paths as $path ) {
        if ( file_exists( $path ) ) {
            require_once $path;
            break;
        }
    }
}

if ( ! defined( 'ABSPATH' ) ) {
    die( "Error: WordPress environment (wp-load.php) could not be located. Run this file via WP-CLI: wp eval-file fluff-product-importer.php\n" );
}

// Security check for web requests
if ( php_sapi_name() !== 'cli' ) {
    $secret_key = 'fluff_sync_2026';
    $given_key  = isset( $_GET['fluff_run_importer'] ) ? sanitize_text_field( $_GET['fluff_run_importer'] ) : '';
    if ( $given_key !== $secret_key && ! current_user_can( 'manage_woocommerce' ) ) {
        wp_die( 'Access denied. You must be a store administrator or pass the valid key: ?fluff_run_importer=' . esc_html( $secret_key ) );
    }
}

// Ensure WooCommerce is active
if ( ! class_exists( 'WooCommerce' ) ) {
    die( "Error: WooCommerce is not active on this site.\n" );
}

/**
 * Main Importer Execution
 */
function fluff_execute_product_import() {
    $is_cli = ( php_sapi_name() === 'cli' );
    $output = array();

    $log = function( $msg ) use ( $is_cli, &$output ) {
        $output[] = $msg;
        if ( $is_cli ) {
            echo $msg . "\n";
        }
    };

    $log( "==========================================================" );
    $log( " FLUFF SLEEPWEAR - PRODUCT & VARIATION SYNC" );
    $log( "==========================================================" );

    // Load JSON data
    $json_file = __DIR__ . '/fluff_products_data.json';
    if ( ! file_exists( $json_file ) ) {
        $log( "ERROR: fluff_products_data.json file not found at: " . $json_file );
        return $output;
    }

    $products_data = json_decode( file_get_contents( $json_file ), true );
    if ( empty( $products_data ) || ! is_array( $products_data ) ) {
        $log( "ERROR: Invalid or empty JSON data." );
        return $output;
    }

    $total_products   = count( $products_data );
    $total_variations = 0;
    $log( "Found " . $total_products . " products to process.\n" );

    foreach ( $products_data as $index => $item ) {
        $num         = $index + 1;
        $sku         = trim( $item['sku'] );
        $wc_sku      = ! empty( $item['wc_sku'] ) ? trim( $item['wc_sku'] ) : $sku;
        $name        = trim( $item['name'] );
        $price       = floatval( $item['price'] );
        $short_desc  = trim( $item['short_description'] );
        $description = trim( $item['description'] );
        $homepage    = trim( $item['homepage'] );
        $trendyol    = trim( $item['trendyol_url'] );
        $specs       = isset( $item['specs'] ) && is_array( $item['specs'] ) ? $item['specs'] : array();
        $stock_data  = isset( $item['stock'] ) && is_array( $item['stock'] ) ? $item['stock'] : array();
        $tags        = trim( $item['tags'] );

        $log( sprintf( "[%02d/%02d] Processing: %s (SKU: %s)", $num, $total_products, $name, $sku ) );

        // 1. Locate existing product by SKU, WC SKU, Trendyol Link, or Name
        $product_id = wc_get_product_id_by_sku( $sku );
        if ( ! $product_id && $wc_sku !== $sku ) {
            $product_id = wc_get_product_id_by_sku( $wc_sku );
        }

        if ( ! $product_id && ! empty( $trendyol ) ) {
            // Query by meta _Product_Link or _trendyol
            $matched_posts = get_posts( array(
                'post_type'      => array( 'product', 'product_variation' ),
                'posts_per_page' => 1,
                'meta_query'     => array(
                    'relation' => 'OR',
                    array(
                        'key'     => '_Product_Link',
                        'value'   => $trendyol,
                        'compare' => 'LIKE',
                    ),
                    array(
                        'key'     => '_trendyol',
                        'value'   => $trendyol,
                        'compare' => 'LIKE',
                    ),
                ),
                'fields'         => 'ids',
            ) );
            if ( ! empty( $matched_posts ) ) {
                $product_id = $matched_posts[0];
            }
        }

        if ( ! $product_id ) {
            $matched_page = get_page_by_title( $name, OBJECT, 'product' );
            if ( $matched_page ) {
                $product_id = $matched_page->ID;
            }
        }

        // 2. Ensure product exists and is a WC_Product_Variable
        if ( $product_id ) {
            $current_product = wc_get_product( $product_id );
            if ( $current_product && ! $current_product->is_type( 'variable' ) ) {
                // Convert simple product to variable
                wp_set_object_terms( $product_id, 'variable', 'product_type' );
                $log( "   -> Converted Product ID {$product_id} from Simple to Variable" );
            }
            $product = new WC_Product_Variable( $product_id );
            $log( "   -> Found existing product ID: {$product_id}" );
        } else {
            // Create new variable product
            $product = new WC_Product_Variable();
            $product->set_name( $name );
            $product->set_status( 'publish' );
            $product_id = $product->save();
            $log( "   -> Created new Variable Product ID: {$product_id}" );
        }

        // 3. Update Parent Product Details
        $product->set_name( $name );
        $product->set_sku( $wc_sku );
        $product->set_status( 'publish' );
        $product->set_catalog_visibility( 'visible' );
        $product->set_description( $description );
        $product->set_short_description( $short_desc );
        $product->set_regular_price( $price );
        $product->set_price( $price );
        $product->set_manage_stock( false ); // Stock managed at variation level
        $product->set_stock_status( 'instock' );

        // Attach Tags
        if ( ! empty( $tags ) ) {
            $tag_names = array_map( 'trim', explode( ',', $tags ) );
            wp_set_object_terms( $product_id, $tag_names, 'product_tag' );
        }

        // 4. Configure 'Size' Attribute for Variations
        $sizes = array( 'XS', 'S', 'M', 'L', 'XL' );
        $attribute = new WC_Product_Attribute();
        $attribute->set_name( 'Size' );
        $attribute->set_options( $sizes );
        $attribute->set_position( 0 );
        $attribute->set_visible( true );
        $attribute->set_variation( true );
        $product->set_attributes( array( $attribute ) );

        $product->save();

        // 5. Engrave Custom Fields & Specifications Meta
        update_post_meta( $product_id, '_fluff_homepage_view', $homepage );
        update_post_meta( $product_id, '_trendyol', $trendyol );
        update_post_meta( $product_id, '_Product_Link', $trendyol );

        // Spec bullet fields
        $spec_keys = array( 'fabric', 'set', 'fit', 'top', 'bottom', 'details', 'season', 'care' );
        foreach ( $spec_keys as $skey ) {
            $sval = isset( $specs[ $skey ] ) ? $specs[ $skey ] : '';
            update_post_meta( $product_id, '_fluff_spec_' . $skey, $sval );
        }

        // Also store full specs array for flexible theme retrieval
        update_post_meta( $product_id, '_fluff_specs_data', $specs );

        // 6. Create / Update Child Variations (XS, S, M, L, XL)
        $existing_variation_ids = $product->get_children();
        $existing_by_size       = array();

        foreach ( $existing_variation_ids as $var_id ) {
            $var_obj = wc_get_product( $var_id );
            if ( $var_obj ) {
                $var_attrs = $var_obj->get_attributes();
                $size_val  = isset( $var_attrs['size'] ) ? strtoupper( $var_attrs['size'] ) : ( isset( $var_attrs['pa_size'] ) ? strtoupper( $var_attrs['pa_size'] ) : '' );
                if ( $size_val ) {
                    $existing_by_size[ $size_val ] = $var_id;
                }
            }
        }

        $prod_variations_count = 0;
        foreach ( $sizes as $size ) {
            $stock_qty   = isset( $stock_data[ $size ] ) ? intval( $stock_data[ $size ] ) : 0;
            $is_in_stock = ( $stock_qty > 0 );
            $var_sku     = $wc_sku . '-' . $size;

            if ( isset( $existing_by_size[ $size ] ) ) {
                $variation = new WC_Product_Variation( $existing_by_size[ $size ] );
            } else {
                $variation = new WC_Product_Variation();
                $variation->set_parent_id( $product_id );
            }

            $variation->set_sku( $var_sku );
            $variation->set_regular_price( $price );
            $variation->set_price( $price );
            $variation->set_manage_stock( true );
            $variation->set_stock_quantity( $stock_qty );
            $variation->set_stock_status( $is_in_stock ? 'instock' : 'outofstock' );
            $variation->set_attributes( array( 'size' => $size ) );
            $variation->set_status( 'publish' );

            $var_id = $variation->save();
            $prod_variations_count++;
            $total_variations++;

            $log( sprintf( "      - Size %-2s: Qty = %d | Status = %-10s (Var ID: %d)", $size, $stock_qty, ( $is_in_stock ? 'In Stock' : 'Out of Stock' ), $var_id ) );
        }

        // Sync parent variable product stock & price ranges
        WC_Product_Variable::sync( $product_id );
        wc_delete_product_transients( $product_id );

        $log( "   -> Completed product {$product_id} with {$prod_variations_count} variations.\n" );
    }

    $log( "==========================================================" );
    $log( " SYNC COMPLETE SUCCESS!" );
    $log( sprintf( " Total Products Updated/Created: %d", $total_products ) );
    $log( sprintf( " Total Variations Configured:    %d", $total_variations ) );
    $log( "==========================================================" );

    return $output;
}

// Execute if run directly via CLI or web request
if ( php_sapi_name() === 'cli' || ( isset( $_GET['fluff_run_importer'] ) && $_GET['fluff_run_importer'] === 'fluff_sync_2026' ) ) {
    if ( php_sapi_name() !== 'cli' ) {
        header( 'Content-Type: text/plain; charset=utf-8' );
    }
    fluff_execute_product_import();
}
