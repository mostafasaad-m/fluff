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
 * Automatically create custom template pages if they do not exist yet.
 */
function fluff_auto_create_pages() {
    $pages_to_create = array(
        array(
            'title'    => 'Shipping & Luxury Packaging',
            'slug'     => 'shipping-packaging',
            'template' => 'template-shipping-packaging.php',
        ),
        array(
            'title'    => 'Sizing & Fit Advisor',
            'slug'     => 'sizing-fit-advisor',
            'template' => 'template-sizing-fit-advisor.php',
        ),
        array(
            'title'    => 'Winter Special Edit',
            'slug'     => 'category-special-collection',
            'template' => 'template-category-special.php',
        ),
    );

    foreach ( $pages_to_create as $p ) {
        $existing = get_page_by_path( $p['slug'] );
        if ( ! $existing ) {
            $page_id = wp_insert_post( array(
                'post_title'   => $p['title'],
                'post_name'    => $p['slug'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            ) );
            if ( $page_id && ! is_wp_error( $page_id ) ) {
                update_post_meta( $page_id, '_wp_page_template', $p['template'] );
            }
        } else {
            update_post_meta( $existing->ID, '_wp_page_template', $p['template'] );
        }
    }
}
add_action( 'init', 'fluff_auto_create_pages' );

/**
 * Register Live Theme Variables in WordPress Customizer
 */
function fluff_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'fluff_live_settings', array(
        'title'    => __( 'FLUFF Live Store Variables', 'fluff' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'fluff_whatsapp', array(
        'default'           => '201000000000',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'fluff_whatsapp', array(
        'label'       => __( 'WhatsApp Concierge Phone (with country code)', 'fluff' ),
        'section'     => 'fluff_live_settings',
        'type'        => 'text',
    ) );

    $wp_customize->add_setting( 'fluff_announcement_text', array(
        'default'           => 'Rest • Dream • Belong | Cairo & Istanbul Express Delivery | Free Sterling Gift on orders over 1500 EGP',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'fluff_announcement_text', array(
        'label'       => __( 'Header Announcement Bar Text', 'fluff' ),
        'section'     => 'fluff_live_settings',
        'type'        => 'text',
    ) );

    $wp_customize->add_setting( 'fluff_cairo_delivery', array(
        'default'           => '2–4 business days',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'fluff_cairo_delivery', array(
        'label'       => __( 'Cairo Delivery Timeframe', 'fluff' ),
        'section'     => 'fluff_live_settings',
        'type'        => 'text',
    ) );

    $wp_customize->add_setting( 'fluff_istanbul_delivery', array(
        'default'           => '10–12 business days',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'fluff_istanbul_delivery', array(
        'label'       => __( 'Istanbul Pre-Order Delivery Timeframe', 'fluff' ),
        'section'     => 'fluff_live_settings',
        'type'        => 'text',
    ) );

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
    wp_enqueue_style( 'fluff-google-fonts-plus-jakarta', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap', array(), null );
    wp_enqueue_style( 'fluff-google-fonts-manrope', 'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap', array(), null );
    wp_enqueue_style( 'fluff-google-fonts-playfair', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;1,500&display=swap', array(), null );
    wp_enqueue_style( 'fluff-material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array(), null );

    wp_enqueue_script( 'fluff-tailwind-cdn', 'https://cdn.tailwindcss.com', array(), '3.4.0', false );

    // Exact Brand Palette Configured in Tailwind
    $tailwind_config = "
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                colors: {
                    'header-bg': '#d62828',
                    'primary': '#a61d17',
                    'primary-container': '#c9372c',
                    'on-primary': '#ffffff',
                    'on-primary-container': '#ffecea',
                    'primary-fixed': '#ffdad5',
                    'primary-fixed-dim': '#ffb4aa',
                    'terracotta-rich': '#B3281E',
                    'sale-yellow': '#FFDE21',
                    'blush-tint': '#FDF3F0',
                    'warm-white': '#FFFFFF',
                    'cream-canvas': '#FAF7F2',
                    'soft-sand': '#EFE9DF',
                    'charcoal-muted': '#57504D',
                    'surface': '#fff8f6',
                    'surface-bright': '#fff8f6',
                    'surface-dim': '#e2d8d6',
                    'surface-container': '#f6ecea',
                    'surface-container-low': '#fcf1ef',
                    'surface-container-lowest': '#ffffff',
                    'surface-container-high': '#f0e6e4',
                    'surface-container-highest': '#eae0de',
                    'surface-variant': '#eae0de',
                    'on-surface': '#1f1b1a',
                    'on-surface-variant': '#5a413d',
                    'inverse-surface': '#352f2e',
                    'inverse-on-surface': '#f9eeec',
                    'inverse-primary': '#ffb4aa',
                    'secondary': '#6e5a55',
                    'on-secondary': '#ffffff',
                    'secondary-container': '#f9dcd6',
                    'on-secondary-container': '#75605b',
                    'secondary-fixed': '#f9dcd6',
                    'secondary-fixed-dim': '#dbc1bb',
                    'tertiary': '#6d5e00',
                    'tertiary-container': '#c5aa00',
                    'tertiary-fixed': '#ffe251',
                    'tertiary-fixed-dim': '#e4c600',
                    'outline': '#8e706c',
                    'outline-variant': '#e2beb9',
                    'error': '#ba1a1a',
                    'error-container': '#ffdad6',
                    'on-error': '#ffffff',
                    'on-error-container': '#93000a',
                    'winter-blue': '#1F2F4F',
                    'summer-mauve': '#D8B4C1',
                    'luxury-gold': '#D4B586',
                    'ready-badge': '#647A96',
                    'preorder-badge': '#D8B4C1'
                },
                fontFamily: {
                    'body-lg': ['Plus Jakarta Sans', 'Manrope', 'sans-serif'],
                    'label-badge': ['Plus Jakarta Sans', 'sans-serif'],
                    'label-caps': ['Plus Jakarta Sans', 'Manrope', 'sans-serif'],
                    'label-lg': ['Plus Jakarta Sans', 'sans-serif'],
                    'label-md': ['Plus Jakarta Sans', 'sans-serif'],
                    'headline-md': ['Plus Jakarta Sans', 'Playfair Display', 'sans-serif'],
                    'display-hero-mobile': ['Plus Jakarta Sans', 'Playfair Display', 'sans-serif'],
                    'body-sm': ['Plus Jakarta Sans', 'Manrope', 'sans-serif'],
                    'arabic-sub': ['Plus Jakarta Sans', 'Manrope', 'sans-serif'],
                    'headline-sm': ['Plus Jakarta Sans', 'Playfair Display', 'sans-serif'],
                    'display-hero': ['Plus Jakarta Sans', 'Playfair Display', 'sans-serif'],
                    'headline-lg-mobile': ['Plus Jakarta Sans', 'Playfair Display', 'sans-serif'],
                    'headline-lg': ['Plus Jakarta Sans', 'Playfair Display', 'sans-serif'],
                    'body-md': ['Plus Jakarta Sans', 'Manrope', 'sans-serif'],
                    'title-editorial': ['Plus Jakarta Sans', 'sans-serif']
                },
                fontSize: {
                    'label-badge': ['11px', { 'lineHeight': '14px', 'letterSpacing': '0.06em', 'fontWeight': '800' }],
                    'headline-lg': ['32px', { 'lineHeight': '40px', 'letterSpacing': '-0.02em', 'fontWeight': '700' }],
                    'body-lg': ['16px', { 'lineHeight': '24px', 'letterSpacing': '0', 'fontWeight': '400' }],
                    'headline-lg-mobile': ['24px', { 'lineHeight': '32px', 'letterSpacing': '-0.01em', 'fontWeight': '700' }],
                    'body-md': ['14px', { 'lineHeight': '20px', 'letterSpacing': '0', 'fontWeight': '400' }],
                    'headline-sm': ['18px', { 'lineHeight': '24px', 'letterSpacing': '0', 'fontWeight': '600' }],
                    'body-sm': ['12px', { 'lineHeight': '16px', 'letterSpacing': '0', 'fontWeight': '400' }],
                    'headline-md': ['22px', { 'lineHeight': '28px', 'letterSpacing': '-0.01em', 'fontWeight': '600' }],
                    'display-hero': ['48px', { 'lineHeight': '56px', 'letterSpacing': '-0.03em', 'fontWeight': '800' }],
                    'display-hero-mobile': ['32px', { 'lineHeight': '38px', 'letterSpacing': '-0.02em', 'fontWeight': '800' }],
                    'label-lg': ['14px', { 'lineHeight': '18px', 'letterSpacing': '0.02em', 'fontWeight': '600' }],
                    'title-editorial': ['16px', { 'lineHeight': '20px', 'letterSpacing': '0.08em', 'fontWeight': '800' }],
                    'label-md': ['12px', { 'lineHeight': '16px', 'letterSpacing': '0.04em', 'fontWeight': '700' }]
                },
                spacing: {
                    'margin-tablet': '2rem',
                    'space-2xl': '4rem',
                    'gutter-desktop': '1.5rem',
                    'space-md': '1rem',
                    'space-lg': '1.5rem',
                    'margin': '1rem',
                    'space-xl': '2.5rem',
                    'margin-desktop': '3.5rem',
                    'gutter': '1rem',
                    'gutter-mobile': '0.75rem',
                    'space-sm': '0.5rem',
                    'space-xs': '0.25rem'
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
