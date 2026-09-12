<?php
/**
 * FLUFF Sleepwear Theme Functions & Setup
 * 
 * Designed & Developed by Mostafa Saad (vitaldc.com)
 * 
 * @package FLUFF
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Helper to get theme mod options with fallback default.
 */
function fluff_get_option( $key, $default = '' ) {
    return get_theme_mod( $key, $default );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function fluff_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'fluff' ),
        'footer'  => __( 'Footer Navigation', 'fluff' ),
    ) );

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 600,
        'single_image_width'    => 800,
        'product_grid'          => array(
            'default_columns' => 2,
            'min_columns'     => 1,
            'max_columns'     => 4,
        ),
    ) );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'fluff_setup' );

/**
 * Register Live Theme Variables in WordPress Customizer
 */
function fluff_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'fluff_live_settings', array(
        'title'    => __( 'FLUFF Live Store Variables', 'fluff' ),
        'priority' => 30,
    ) );

    // WhatsApp Concierge Number
    $wp_customize->add_setting( 'fluff_whatsapp', array(
        'default'           => '201000000000',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'fluff_whatsapp', array(
        'label'       => __( 'WhatsApp Concierge Phone (with country code)', 'fluff' ),
        'section'     => 'fluff_live_settings',
        'type'        => 'text',
    ) );

    // Top Announcement Text
    $wp_customize->add_setting( 'fluff_announcement_text', array(
        'default'           => 'Rest • Dream • Belong | Cairo & Istanbul Express Delivery | Free Sterling Gift on orders over 1500 EGP',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'fluff_announcement_text', array(
        'label'       => __( 'Header Announcement Bar Text', 'fluff' ),
        'section'     => 'fluff_live_settings',
        'type'        => 'text',
    ) );

    // Cairo Delivery Days
    $wp_customize->add_setting( 'fluff_cairo_delivery', array(
        'default'           => '2–4 business days',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'fluff_cairo_delivery', array(
        'label'       => __( 'Cairo Delivery Timeframe', 'fluff' ),
        'section'     => 'fluff_live_settings',
        'type'        => 'text',
    ) );

    // Istanbul Delivery Days
    $wp_customize->add_setting( 'fluff_istanbul_delivery', array(
        'default'           => '10–12 business days',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'fluff_istanbul_delivery', array(
        'label'       => __( 'Istanbul Pre-Order Delivery Timeframe', 'fluff' ),
        'section'     => 'fluff_live_settings',
        'type'        => 'text',
    ) );

    // Complimentary Gift Name
    $wp_customize->add_setting( 'fluff_gift_title', array(
        'default'           => 'Solid 925 Sterling Crescent Moon Pendant',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'fluff_gift_title', array(
        'label'       => __( 'Complimentary Gift Title', 'fluff' ),
        'section'     => 'fluff_live_settings',
        'type'        => 'text',
    ) );
}
add_action( 'customize_register', 'fluff_customize_register' );

/**
 * Enqueue scripts and styles.
 */
function fluff_scripts() {
    wp_enqueue_style( 'fluff-google-fonts-manrope', 'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap', array(), null );
    wp_enqueue_style( 'fluff-google-fonts-playfair', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;1,500&display=swap', array(), null );
    wp_enqueue_style( 'fluff-material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array(), null );

    wp_enqueue_script( 'fluff-tailwind-cdn', 'https://cdn.tailwindcss.com', array(), '3.4.0', false );

    $tailwind_config = "
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                colors: {
                    'secondary-container': '#fedeb2',
                    'tertiary-fixed': '#fddbd3',
                    'secondary-fixed-dim': '#e0c298',
                    'on-primary': '#ffffff',
                    'primary': '#021229',
                    'on-background': '#1c1c18',
                    'on-tertiary': '#ffffff',
                    'surface-variant': '#e6e2dc',
                    'on-error': '#ffffff',
                    'on-surface-variant': '#44474d',
                    'secondary': '#725b38',
                    'surface-bright': '#fdf9f3',
                    'inverse-surface': '#31302d',
                    'on-tertiary-fixed': '#291712',
                    'on-secondary-fixed': '#281800',
                    'surface-container-lowest': '#ffffff',
                    'on-secondary-container': '#78603e',
                    'background': '#fdf9f3',
                    'on-tertiary-fixed-variant': '#58413c',
                    'on-primary-container': '#808eab',
                    'error': '#ba1a1a',
                    'surface-container': '#f1ede7',
                    'primary-container': '#18273f',
                    'on-secondary-fixed-variant': '#584323',
                    'error-container': '#ffdad6',
                    'surface-container-high': '#ebe8e2',
                    'tertiary': '#1e0e09',
                    'surface-dim': '#dddad4',
                    'outline': '#75777e',
                    'inverse-primary': '#b8c7e6',
                    'on-surface': '#1c1c18',
                    'on-error-container': '#93000a',
                    'primary-fixed-dim': '#b8c7e6',
                    'surface-container-highest': '#e6e2dc',
                    'surface': '#fdf9f3',
                    'on-tertiary-container': '#a48780',
                    'tertiary-container': '#35221d',
                    'on-primary-fixed': '#0c1c33',
                    'secondary-fixed': '#fedeb2',
                    'outline-variant': '#c5c6ce',
                    'on-primary-fixed-variant': '#394761',
                    'tertiary-fixed-dim': '#e0bfb7',
                    'surface-container-low': '#f7f3ed',
                    'surface-tint': '#505f7a',
                    'on-secondary': '#ffffff',
                    'primary-fixed': '#d6e3ff',
                    'inverse-on-surface': '#f4f0ea'
                },
                fontFamily: {
                    'body-lg': ['Manrope', 'sans-serif'],
                    'label-caps': ['Manrope', 'sans-serif'],
                    'label-md': ['Manrope', 'sans-serif'],
                    'headline-md': ['Playfair Display', 'serif'],
                    'display-hero-mobile': ['Playfair Display', 'serif'],
                    'body-sm': ['Manrope', 'sans-serif'],
                    'arabic-sub': ['Manrope', 'sans-serif'],
                    'headline-sm': ['Playfair Display', 'serif'],
                    'display-hero': ['Playfair Display', 'serif'],
                    'headline-lg-mobile': ['Playfair Display', 'serif'],
                    'headline-lg': ['Playfair Display', 'serif'],
                    'body-md': ['Manrope', 'sans-serif']
                },
                spacing: {
                    'space-md': '1.25rem',
                    'space-lg': '2rem',
                    'space-xs': '0.375rem',
                    'margin-mobile': '1rem',
                    'space-sm': '0.75rem',
                    'space-xl': '3.25rem',
                    'gutter': '1.25rem',
                    'gutter-mobile': '0.75rem',
                    'margin': '2rem'
                }
            }
        }
    };
    ";
    wp_add_inline_script( 'fluff-tailwind-cdn', $tailwind_config, 'before' );

    wp_enqueue_style( 'fluff-theme-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_script( 'fluff-theme-js', get_template_directory_uri() . '/assets/js/fluff-theme.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'fluff_scripts' );

/**
 * Dynamic WooCommerce AJAX Cart Count Fragment
 */
function fluff_woocommerce_cart_count_fragment( $fragments ) {
    ob_start();
    $count = WC()->cart ? WC()->cart->get_cart_contents_count() : 0;
    ?>
    <span class="fluff-cart-count-badge bg-secondary text-on-secondary text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center -top-1 -right-1 absolute">
        <?php echo esc_html( $count ); ?>
    </span>
    <?php
    $fragments['.fluff-cart-count-badge'] = ob_get_clean();
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'fluff_woocommerce_cart_count_fragment' );

/**
 * Determine Stock Origin (Ready Stock Cairo vs Istanbul Pre-Order)
 */
function fluff_get_product_origin( $product ) {
    if ( ! $product ) return 'ready';
    $meta = get_post_meta( $product->get_id(), '_fluff_stock_type', true );
    if ( $meta ) return $meta;
    return ( $product->get_id() % 2 === 0 ) ? 'ready' : 'preorder';
}

/**
 * Fallback Sample Products Data Helper
 */
function fluff_get_sample_products() {
    return array(
        array(
            'id'           => 101,
            'name'         => 'S01 Istanbul Blossom Set',
            'arabic_name'  => 'طقم بيجامة قطن تركي مضلع فاخر بتطريز الكرز الوردي',
            'price'        => 1350,
            'regular_price'=> 1650,
            'stock_type'   => 'preorder',
            'badge'        => 'Pre-Order • Istanbul',
            'delivery'     => fluff_get_option('fluff_istanbul_delivery', '10-12 Days from Istanbul'),
            'rating'       => '4.95',
            'reviews_count'=> 42,
            'category'     => 'Winter Ribbed',
            'fabric'       => '100% Turkish Ribbed Cotton',
            'image'        => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCuwfI3EExIhQr-dG-9Dkn2xafcNeRJKorDBABE-77YXDX7HSFYYyQxgo1uBPTMzDCQ26o4knS-8D_kNHxsaBsijVRuJbKPyJ8A2X1y5k0ynaKmQSjPAInpGcE3hpypDQC4CIz2lF88xFmm6VOzjG-z1EyWd90tTgC9sCM8ypGKcsT0IBLilQMDRTzxeyq6suPGIXJBBEshUubURbgugFg4M5VAiNa8my9_Eaa8U8y5yl9BUPnVhkOpJQ',
            'fabric_thumb' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuABYr5oGJKTfjmStIIief-QWqVSNZAItQWof64WAc68f0MSE-t8yFzO2QNYQyyaUkXrjBIkkbTHbTbBjDgGb3P28FXfw8jZ_Vl8FxyQoJ-SR6JrY_lfNkIMCGW9Y0fuNLVDHDEQj7GuXzsxUcTuZIO7KOBz95EL725icBGnWX_l93YvklQGhZVdk30Vaakqacdx1smKNf8xNUAbVgqjoZ-BEZrPPy4HGJzuLP1pqXeMuzwrU-CdXfdPlA'
        ),
        array(
            'id'           => 102,
            'name'         => 'S02 Cairo Velvet Lounge Set',
            'arabic_name'  => 'طقم المخمل الفاخر متوفر بالمخزون بالقاهرة',
            'price'        => 1480,
            'regular_price'=> 1750,
            'stock_type'   => 'ready',
            'badge'        => 'Ready Stock • Cairo',
            'delivery'     => fluff_get_option('fluff_cairo_delivery', '2-4 Days Cairo Express'),
            'rating'       => '5.0',
            'reviews_count'=> 29,
            'category'     => 'Ready Stock',
            'fabric'       => 'Plush Velvet Knit',
            'image'        => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD3wn6bHyBbqJ1a8J3kTP7N5efe-ZaHSyLzj8lb45Dw1iA9sVThBHYeh96lDMY0gnFTFpR_VpBQ5p96LzySzbRXxdJeO9fNg3YKKWH2K5-YAv9SVF-f1ynKJ0-IuvK3SqHOBAY_WHRUEyVi1uG0nGn4XRG70lRH6v5A3dVD8D0xMPIdWHUY690QuEuokadkBuX0y0HLN9LKFdIyuibS9r4pXU986s1zfLA4Rad63FMrZsmwJk1fS_pZAg',
            'fabric_thumb' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuABYr5oGJKTfjmStIIief-QWqVSNZAItQWof64WAc68f0MSE-t8yFzO2QNYQyyaUkXrjBIkkbTHbTbBjDgGb3P28FXfw8jZ_Vl8FxyQoJ-SR6JrY_lfNkIMCGW9Y0fuNLVDHDEQj7GuXzsxUcTuZIO7KOBz95EL725icBGnWX_l93YvklQGhZVdk30Vaakqacdx1smKNf8xNUAbVgqjoZ-BEZrPPy4HGJzuLP1pqXeMuzwrU-CdXfdPlA'
        ),
        array(
            'id'           => 103,
            'name'         => 'S03 Bosphorus Silk Kimono Robe',
            'arabic_name'  => 'روب الحرير التركي بتطريز القمر الذهبي',
            'price'        => 1950,
            'regular_price'=> 2300,
            'stock_type'   => 'preorder',
            'badge'        => 'Pre-Order • Istanbul',
            'delivery'     => fluff_get_option('fluff_istanbul_delivery', '10-12 Days from Istanbul'),
            'rating'       => '4.90',
            'reviews_count'=> 18,
            'category'     => 'Silk & Satin',
            'fabric'       => 'Pure Mulberry Silk Touch',
            'image'        => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCuwfI3EExIhQr-dG-9Dkn2xafcNeRJKorDBABE-77YXDX7HSFYYyQxgo1uBPTMzDCQ26o4knS-8D_kNHxsaBsijVRuJbKPyJ8A2X1y5k0ynaKmQSjPAInpGcE3hpypDQC4CIz2lF88xFmm6VOzjG-z1EyWd90tTgC9sCM8ypGKcsT0IBLilQMDRTzxeyq6suPGIXJBBEshUubURbgugFg4M5VAiNa8my9_Eaa8U8y5yl9BUPnVhkOpJQ',
            'fabric_thumb' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuABYr5oGJKTfjmStIIief-QWqVSNZAItQWof64WAc68f0MSE-t8yFzO2QNYQyyaUkXrjBIkkbTHbTbBjDgGb3P28FXfw8jZ_Vl8FxyQoJ-SR6JrY_lfNkIMCGW9Y0fuNLVDHDEQj7GuXzsxUcTuZIO7KOBz95EL725icBGnWX_l93YvklQGhZVdk30Vaakqacdx1smKNf8xNUAbVgqjoZ-BEZrPPy4HGJzuLP1pqXeMuzwrU-CdXfdPlA'
        ),
        array(
            'id'           => 104,
            'name'         => 'S04 Moonlight Ribbed Sleep Set',
            'arabic_name'  => 'طقم النوم المضلع خفيف الوزن - شحن فورى',
            'price'        => 1200,
            'regular_price'=> 1400,
            'stock_type'   => 'ready',
            'badge'        => 'Ready Stock • Cairo',
            'delivery'     => fluff_get_option('fluff_cairo_delivery', '2-4 Days Cairo Express'),
            'rating'       => '4.88',
            'reviews_count'=> 56,
            'category'     => 'Summer Cotton',
            'fabric'       => 'Organic Breathable Cotton',
            'image'        => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD3wn6bHyBbqJ1a8J3kTP7N5efe-ZaHSyLzj8lb45Dw1iA9sVThBHYeh96lDMY0gnFTFpR_VpBQ5p96LzySzbRXxdJeO9fNg3YKKWH2K5-YAv9SVF-f1ynKJ0-IuvK3SqHOBAY_WHRUEyVi1uG0nGn4XRG70lRH6v5A3dVD8D0xMPIdWHUY690QuEuokadkBuX0y0HLN9LKFdIyuibS9r4pXU986s1zfLA4Rad63FMrZsmwJk1fS_pZAg',
            'fabric_thumb' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuABYr5oGJKTfjmStIIief-QWqVSNZAItQWof64WAc68f0MSE-t8yFzO2QNYQyyaUkXrjBIkkbTHbTbBjDgGb3P28FXfw8jZ_Vl8FxyQoJ-SR6JrY_lfNkIMCGW9Y0fuNLVDHDEQj7GuXzsxUcTuZIO7KOBz95EL725icBGnWX_l93YvklQGhZVdk30Vaakqacdx1smKNf8xNUAbVgqjoZ-BEZrPPy4HGJzuLP1pqXeMuzwrU-CdXfdPlA'
        ),
    );
}
