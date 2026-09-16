<?php
/**
 * FLUFF Sleepwear Theme Functions & Setup
 * 
 * Crafted for FLUFF Sleepwear (vitaldc.com)
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
    wp_enqueue_style( 'fluff-google-fonts-bodoni-moda', 'https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,600;0,6..96,700;1,6..96,600;1,6..96,700&display=swap', array(), null );
    wp_enqueue_style( 'fluff-google-fonts-cinzel', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap', array(), null );
    wp_enqueue_style( 'fluff-material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array(), null );

    wp_enqueue_script( 'fluff-tailwind-cdn', 'https://cdn.tailwindcss.com', array(), '3.4.0', false );

    // Exact Brand Palette Configured in Tailwind
    $tailwind_config = "
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                colors: {
                    'header-bg': '#1F2F4F',
                    'header-text': '#D4B586',
                    'primary': '#1F2F4F',
                    'primary-container': '#2D4671',
                    'on-primary': '#ffffff',
                    'on-primary-container': '#F8F6EF',
                    'primary-fixed': '#B7C7D9',
                    'primary-fixed-dim': '#647A96',
                    'terracotta-rich': '#1F2F4F',
                    'sale-yellow': '#D4B586',
                    'blush-tint': '#F8F6EF',
                    'warm-white': '#FFFFFF',
                    'cream-canvas': '#F8F6EF',
                    'soft-sand': '#F0EDE4',
                    'charcoal-muted': '#53627A',
                    'surface': '#F8F6EF',
                    'surface-bright': '#FFFFFF',
                    'surface-dim': '#EAE7DE',
                    'surface-container': '#F0EDE4',
                    'surface-container-low': '#F5F3EB',
                    'surface-container-lowest': '#FFFFFF',
                    'surface-container-high': '#EAE6DB',
                    'surface-container-highest': '#E2DDD1',
                    'surface-variant': '#E8E4D8',
                    'on-surface': '#1F2F4F',
                    'on-surface-variant': '#43526E',
                    'inverse-surface': '#1F2F4F',
                    'inverse-on-surface': '#F8F6EF',
                    'inverse-primary': '#B7C7D9',
                    'secondary': '#647A96',
                    'on-secondary': '#ffffff',
                    'secondary-container': '#D8B4C1',
                    'on-secondary-container': '#1F2F4F',
                    'secondary-fixed': '#D8B4C1',
                    'secondary-fixed-dim': '#647A96',
                    'tertiary': '#D4B586',
                    'tertiary-container': '#F0EDE4',
                    'tertiary-fixed': '#D4B586',
                    'tertiary-fixed-dim': '#C4A576',
                    'outline': '#AA9B8C',
                    'outline-variant': '#B7C7D9',
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
                    'logo': ['Bodoni Moda', 'Didot', 'Bodoni MT', 'serif'],
                    'logo-sub': ['Cinzel', 'serif'],
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

    $css_version = file_exists( get_stylesheet_directory() . '/style.css' ) ? filemtime( get_stylesheet_directory() . '/style.css' ) : '1.0.1';
    $js_version  = file_exists( get_template_directory() . '/assets/js/fluff-theme.js' ) ? filemtime( get_template_directory() . '/assets/js/fluff-theme.js' ) : '1.0.1';

    wp_enqueue_style( 'fluff-theme-style', get_stylesheet_uri(), array(), $css_version );
    wp_enqueue_script( 'fluff-theme-js', get_template_directory_uri() . '/assets/js/fluff-theme.js', array(), $js_version, true );
}
add_action( 'wp_enqueue_scripts', 'fluff_scripts' );

/**
 * Dynamic WooCommerce AJAX Cart Count Fragment
 */
function fluff_woocommerce_cart_count_fragment( $fragments ) {
    ob_start();
    $count = ( function_exists('WC') && WC()->cart ) ? WC()->cart->get_cart_contents_count() : 0;
    ?>
    <span class="fluff-cart-count-badge absolute -top-1 -right-1 flex items-center justify-center min-w-[20px] h-5 px-1 rounded-full font-extrabold text-[11px] leading-none shadow-sm" style="background-color: #1D1D1B !important; color: #F8ECF0 !important;">
        <?php echo esc_html( $count > 0 ? $count : '0' ); ?>
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
    $product_id = 0;
    if ( is_object( $product ) && method_exists( $product, 'get_id' ) ) {
        $product_id = $product->get_id();
    } elseif ( is_numeric( $product ) ) {
        $product_id = (int) $product;
    }
    if ( ! $product_id ) return 'ready';
    $meta = get_post_meta( $product_id, '_fluff_stock_type', true );
    if ( $meta ) return $meta;
    return ( $product_id % 2 === 0 ) ? 'ready' : 'preorder';
}

/**
 * Stock Type Alias Helper (Guarantees backward compatibility)
 */
function fluff_get_product_stock_type( $product ) {
    return fluff_get_product_origin( $product );
}

/**
 * Fallback Sample Products Data Helper (16 distinct products for 4 front-page sections)
 */
function fluff_get_sample_products() {
    return array(
        // Section 1: Featured & Hot Releases (101-104)
        array(
            'id'           => 101,
            'name'         => 'Heavenly Stripes Set (Ladies) - Olive',
            'arabic_name'  => 'طقم البيجامة المقلمة الفاخر - زيتوني',
            'price'        => 1499,
            'regular_price'=> 1999,
            'stock_type'   => 'ready',
            'badge'        => '50% OFF 2ND',
            'delivery'     => fluff_get_option('fluff_cairo_delivery', '2-4 Days Cairo Express'),
            'rating'       => '5.0',
            'reviews_count'=> 34,
            'category'     => "Women's Loungewear",
            'fabric'       => 'Organic Breathable Cotton',
            'image'        => 'https://lh3.googleusercontent.com/aida/AEtjO1VwCeG0fQNpeA4O0djAQOvl7HREfBTeW5_LuJmMdi8G3DNl0G5cgsBzeoP5vE2ubOk5fJ2NiE9BvK-GWiUQ9hiUXjffnzvv3sF4gxMR2jq7oIMp3jHd_AdjcKRzHgMZMBw2CHhp-8zgbcwbTSsSTheLindjCQjB5SqTjlU9JUOIKxoWgye8WEGZ8kmfW2jzROuxRBT5_KnmEgb4-7ScHRSrYv_sVIUPY2014OmI3_LFiVsmlUksZNZ0OD2h',
        ),
        array(
            'id'           => 102,
            'name'         => 'Heavenly Stripe Set (Men) - Baby Blue',
            'arabic_name'  => 'طقم البيجامة المقلمة الرجالي المريح - أزرق سماوي',
            'price'        => 1499,
            'regular_price'=> 1850,
            'stock_type'   => 'ready',
            'badge'        => 'COUPLES PAIR',
            'delivery'     => fluff_get_option('fluff_cairo_delivery', '2-4 Days Cairo Express'),
            'rating'       => '4.95',
            'reviews_count'=> 28,
            'category'     => "Men's Relaxed Fit",
            'fabric'       => 'Soft Turkish Cotton',
            'image'        => 'https://lh3.googleusercontent.com/aida/AEtjO1Xt8iTmQBIsTUqH1cH3QjUba-6evLhtfSDtZs3w0Zkt0POrAOyQX_HfhB5hNnQKK5aqlvcNKZSGdBMNBh2IHmCWdIw0C3V3oc--d00G9H5jhozsouPTtTHPaUmGuOovWAiKJEImb1OchbROMwEyMnq7x5xRqWVVg4Pmgp5XN-D-C2LoTvAy_PeTIf28HYrkiGVzzRdWrtUVnPf0v2BgVqjQdYIIFni-rz05-L8NsCWxbjXDbEBp2ljtTQI',
        ),
        array(
            'id'           => 103,
            'name'         => 'Serenity Stripe Short Set Blue',
            'arabic_name'  => 'طقم شورت بيجامة قطن ناعم مقلم - أزرق',
            'price'        => 1299,
            'regular_price'=> 1599,
            'stock_type'   => 'preorder',
            'badge'        => 'BESTSELLER',
            'delivery'     => fluff_get_option('fluff_istanbul_delivery', '10-12 Days from Istanbul'),
            'rating'       => '4.92',
            'reviews_count'=> 41,
            'category'     => 'Cotton Short Set',
            'fabric'       => 'Combed Cotton Rib',
            'image'        => 'https://lh3.googleusercontent.com/aida/AEtjO1WsztWbC7LnZvHfwf9yG0LjwCHnYp8zr3memxfq3YFqj0alRImyzYhB-l8-VEHRpmCIQQyd9gsOQfmVHesPDnzUULcavi_Pkm3BUbxrvB6d-Ecqi1aBwniv3dKsB60rswMJ1gT4QXQSy9iqao17423I60MbYVkKzeNuVGYsch3HLvaW0-tsK5xy1ZybIlu-BiDwSXWwURg_OXYJ6T1C_0wZ2ObgR4E2ra5LDw_PNy6GnFtyrFfVax4AIYWx',
        ),
        array(
            'id'           => 104,
            'name'         => 'Dots PJ 3 Pieces Set',
            'arabic_name'  => 'طقم نوم 3 قطع بنقشة منقطة هادئة',
            'price'        => 1549,
            'regular_price'=> 1899,
            'stock_type'   => 'ready',
            'badge'        => '3-PIECE VALUE',
            'delivery'     => fluff_get_option('fluff_cairo_delivery', '2-4 Days Cairo Express'),
            'rating'       => '4.98',
            'reviews_count'=> 53,
            'category'     => 'Full Loungewear Trio',
            'fabric'       => 'Premium Cotton Modal',
            'image'        => 'https://lh3.googleusercontent.com/aida/AEtjO1WPXewYZN1Zq8Yg0wyounPitnYkQPlfs7Gq15JjGg3Sd3SCXtfRxRtjYlp95CJEt3-T9CVBWm3nZzhadYyPz6BlhydxNlPl_Zh5smhHVnicLMFci5zyh4ogEIyUfEUBhrkAzGbFNHT2SckxP-St6syOhhk_TMzgENyjPZiOPSbkknbbNdzGpKgDYRjhuiqaYILjZP_nXP1VFnPXyaWsOgVFSxsiMWiDfykQb3Tah4Lx7J9lsrrqgqPaGCeT',
        ),

        // Section 2: Satin Shorts & Glossy Silks (105-108)
        array(
            'id'           => 105,
            'name'         => 'Bows Satin Pyjama Short Set',
            'arabic_name'  => 'طقم شورت ستان ناعم بفيونكات أنيقة',
            'price'        => 1249,
            'regular_price'=> 1500,
            'stock_type'   => 'ready',
            'badge'        => 'TRENDING',
            'delivery'     => fluff_get_option('fluff_cairo_delivery', '2-4 Days Cairo Express'),
            'rating'       => '4.89',
            'reviews_count'=> 38,
            'category'     => 'Satin Shorts',
            'fabric'       => 'Non-Pilling Mulberry Silk Touch',
            'image'        => 'https://lh3.googleusercontent.com/aida/AEtjO1WPPZkBI_R2AAGWi3YWayPjm9ZspL2ac17jUmVbpFqCdrIkGmtU5SxRiuX-f5-UGiu_BvBjU_pTTm87_miz_bzfrUkZ-okjeFkCRLX7rtRMp_9sDBFFaDCXphaGjnD0Xd99--r0JX-j6UQDdsaSZIZYckU3LimGxcBSYFNiTfUgLKV-aRsC5ROf7GMJE-JekKgNYuHYM3N_pcx6sCViMv1JW3p5JQrhfYNwqYUOM1lFFfvGz8iE1qtiLvqF',
        ),
        array(
            'id'           => 106,
            'name'         => 'Zebra Satin Pyjama Short Set',
            'arabic_name'  => 'طقم شورت ستان بنقشة الزيبرا الحريرية',
            'price'        => 1249,
            'regular_price'=> 1500,
            'stock_type'   => 'preorder',
            'badge'        => 'WILD SILK',
            'delivery'     => fluff_get_option('fluff_istanbul_delivery', '10-12 Days from Istanbul'),
            'rating'       => '4.91',
            'reviews_count'=> 27,
            'category'     => 'Satin Shorts',
            'fabric'       => 'Smooth Luster Satin',
            'image'        => 'https://lh3.googleusercontent.com/aida/AEtjO1X1kO5qIrnleN2sbhJ_-wglyBgzXbIeep--lxuWX8wajBQJSGTWIWqA4GSwwYR-gHjXIAKB_oAmdJbyqDsHPlyo-A9NIIbWNlX0uOsmO7wQaXXSCVFtWBB-LPRgTLAAjS6GNwNLe7p8tz3dAbMhkX0kz91lHZ4MDtQvjN3LX_kmaSFdL_6YXq9qsjy5Mgnqfze-gKCJ_jIGvhUTtHSQ5SwLLVZ62-ETKblTp44_KhHPKUNmbcaxM6Rg8_OK',
        ),
        array(
            'id'           => 107,
            'name'         => 'Red Hearts Satin Pyjama Short Set',
            'arabic_name'  => 'طقم شورت ستان قلوب حمراء رومانسي',
            'price'        => 1249,
            'regular_price'=> 1500,
            'stock_type'   => 'ready',
            'badge'        => 'LOVER EDIT',
            'delivery'     => fluff_get_option('fluff_cairo_delivery', '2-4 Days Cairo Express'),
            'rating'       => '5.0',
            'reviews_count'=> 62,
            'category'     => 'Satin Shorts',
            'fabric'       => 'Featherlight Satin Drape',
            'image'        => 'https://lh3.googleusercontent.com/aida/AEtjO1V2YvKFWDhfpJAa8_Qcck_cMhcUmPE9PoCqoxoeeKSVSsGS0aewrIIab7Edcl5Q1sdMxbIVFRpBe8-IK3PiywuQ0jXT5OwPV0QMYnmM0Ri_AsSH2KeuSobuxuI1aPrgWszV6oqjHbA408MH_WfFX1kjrQ6toebduM-tWTUZHMaAQkifrit6kIiYPEZ1nFkLlkfupZTiiKiwvGKluHZMDu58DKTtNmwvpwRXSBLyW-3VtEVw1VF4EzgYQGc',
        ),
        array(
            'id'           => 108,
            'name'         => 'Champagne Silk Lace Cami Set',
            'arabic_name'  => 'طقم كامي ستان دانتيل بلون الشمبانيا الفاخر',
            'price'        => 1350,
            'regular_price'=> 1600,
            'stock_type'   => 'preorder',
            'badge'        => 'SLOW LUXURY',
            'delivery'     => fluff_get_option('fluff_istanbul_delivery', '10-12 Days from Istanbul'),
            'rating'       => '4.96',
            'reviews_count'=> 19,
            'category'     => 'Silk & Satin',
            'fabric'       => 'Mulberry Silk & French Lace',
            'image'        => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCuwfI3EExIhQr-dG-9Dkn2xafcNeRJKorDBABE-77YXDX7HSFYYyQxgo1uBPTMzDCQ26o4knS-8D_kNHxsaBsijVRuJbKPyJ8A2X1y5k0ynaKmQSjPAInpGcE3hpypDQC4CIz2lF88xFmm6VOzjG-z1EyWd90tTgC9sCM8ypGKcsT0IBLilQMDRTzxeyq6suPGIXJBBEshUubURbgugFg4M5VAiNa8my9_Eaa8U8y5yl9BUPnVhkOpJQ',
        ),

        // Section 3: Everyday & Patterned (109-112)
        array(
            'id'           => 109,
            'name'         => 'Everyday Check Set Red',
            'arabic_name'  => 'طقم بيجامة كروهات يومية قطن ناعم - أحمر',
            'price'        => 1349,
            'regular_price'=> 1600,
            'stock_type'   => 'ready',
            'badge'        => 'CLASSIC CHECK',
            'delivery'     => fluff_get_option('fluff_cairo_delivery', '2-4 Days Cairo Express'),
            'rating'       => '4.87',
            'reviews_count'=> 45,
            'category'     => 'Patterned Cotton',
            'fabric'       => '100% Breathable Cotton',
            'image'        => 'https://lh3.googleusercontent.com/aida/AEtjO1UV79PZn6ChU5aSYe_e1oeSy8_917VS3XsEuLF1KZQaN3ZSZJS5LbhacDetMSZ_E4Gn3RBVHlqc5gJruY32C4EV8uXa3OT1wYjhj1zn3wD_kny1pD83-itXwag3uH2I9gXImiFdoh1rfnDCjPnM4pSiJ_6gVfj7nZJyRHAWXOHpyb1NI3rxBbEh2qvY-qsnd85x_UH7jk_n3FcKMWaTOd1GPtI0Sm5K08eUb66gGaWKEMAUVXzxAsI1Ykzp',
        ),
        array(
            'id'           => 110,
            'name'         => 'Pillow Talk PJ Lavender',
            'arabic_name'  => 'طقم الاسترخاء الليلي بلون اللافندر الهادئ',
            'price'        => 1349,
            'regular_price'=> 1600,
            'stock_type'   => 'preorder',
            'badge'        => 'COZY MODAL',
            'delivery'     => fluff_get_option('fluff_istanbul_delivery', '10-12 Days from Istanbul'),
            'rating'       => '4.93',
            'reviews_count'=> 31,
            'category'     => 'Modal Loungewear',
            'fabric'       => 'Micro-Modal Touch Knit',
            'image'        => 'https://lh3.googleusercontent.com/aida/AEtjO1WbpwaU9rpcQI6q4LdI9xASfcKjKfGcbteE2z100BQuWDVBIrSM6EC-CS-Hn0sxEE5IKCjHaY3LpqVdMDk2KztjkKynAFiZSs5Ow0SURx08roHAF0TO13ddL8caRJc7QoMHoFktlkv0rEaGBn0ecxJvQ9eQ2ryc6xNsG4HkORX-tIS_2HgkOWagVeZiSrFTYm5JyO6pRJH49_L05IGR6Wm9nwTXcbq7yzIn65wEJdqoTqPX_6gFYxv5zMPl',
        ),
        array(
            'id'           => 111,
            'name'         => 'Stars PJ 3 Pieces Set Navy',
            'arabic_name'  => 'طقم النجوم 3 قطع كحلي مع روب فاخر',
            'price'        => 1549,
            'regular_price'=> 1800,
            'stock_type'   => 'ready',
            'badge'        => 'TRIO SET',
            'delivery'     => fluff_get_option('fluff_cairo_delivery', '2-4 Days Cairo Express'),
            'rating'       => '4.97',
            'reviews_count'=> 58,
            'category'     => 'Trio Collection',
            'fabric'       => 'Brushed Turkish Cotton',
            'image'        => 'https://lh3.googleusercontent.com/aida/AEtjO1WqdMVkKM8AnKJoSM14TGIX5rIi1_gW7_ku2tN12mohAqgq-PnRgE4bdOdfBVbssZEMhTNkaljxsbCR1UmC-pQXK1dp9gaFzD_ZaOiye_L-nveYTxv4NHrAuaqF7nc-0HCRTl3_oVvoCErzZiiG2WFvAhxil8RMzRr8gGk32JG70hIZb3MM3COa4tLOxcwc4yTOM4m0hMKFtcvAcBcTnPbBuTeiY_Ch6HnDUkfgO2yU8Mcip447I3kMkF14',
        ),
        array(
            'id'           => 112,
            'name'         => 'Pastel Whisper Cotton Short Set',
            'arabic_name'  => 'طقم شورت صيفي باستيل خفيف الوزن',
            'price'        => 1150,
            'regular_price'=> 1390,
            'stock_type'   => 'ready',
            'badge'        => 'PURE COTTON',
            'delivery'     => fluff_get_option('fluff_cairo_delivery', '2-4 Days Cairo Express'),
            'rating'       => '4.85',
            'reviews_count'=> 22,
            'category'     => 'Summer Cotton',
            'fabric'       => '100% Breathable Cotton',
            'image'        => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD3wn6bHyBbqJ1a8J3kTP7N5efe-ZaHSyLzj8lb45Dw1iA9sVThBHYeh96lDMY0gnFTFpR_VpBQ5p96LzySzbRXxdJeO9fNg3YKKWH2K5-YAv9SVF-f1ynKJ0-IuvK3SqHOBAY_WHRUEyVi1uG0nGn4XRG70lRH6v5A3dVD8D0xMPIdWHUY690QuEuokadkBuX0y0HLN9LKFdIyuibS9r4pXU986s1zfLA4Rad63FMrZsmwJk1fS_pZAg',
        ),

        // Section 4: Winter Ribbed & Curated Sleepwear (113-116)
        array(
            'id'           => 113,
            'name'         => 'Istanbul Blossom Ribbed Set',
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
        ),
        array(
            'id'           => 114,
            'name'         => 'Cairo Velvet Lounge Set',
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
        ),
        array(
            'id'           => 115,
            'name'         => 'Bosphorus Silk Kimono Robe',
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
        ),
        array(
            'id'           => 116,
            'name'         => 'Moonlight Ribbed Sleep Set',
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
        ),
    );
}

/**
 * Safe Helper to extract numeric product ID from WC_Product, WP_Post, array, or scalar ID.
 */
function fluff_extract_product_id( $item ) {
    if ( is_object( $item ) ) {
        if ( method_exists( $item, 'get_id' ) ) {
            return (int) $item->get_id();
        }
        if ( isset( $item->ID ) ) {
            return (int) $item->ID;
        }
    }
    if ( is_numeric( $item ) ) {
        return (int) $item;
    }
    if ( is_array( $item ) && isset( $item['id'] ) ) {
        return (int) $item['id'];
    }
    return 0;
}

/**
 * Get products for a front-page section with deduplication.
 *
 * @param string $section   Section identifier ('featured', 'satin', 'patterned', 'winter').
 * @param array  &$used_ids Reference to array of already displayed product IDs across sections.
 * @param int    $limit     Maximum number of products to return.
 * @return array Array of WC_Product objects or fallback product arrays.
 */
function fluff_get_section_products( $section = 'featured', &$used_ids = array(), $limit = 6 ) {
    if ( ! is_array( $used_ids ) ) {
        $used_ids = array();
    }

    $products = array();

    if ( function_exists( 'wc_get_products' ) ) {
        $base_exclude = $used_ids;

        try {
            // Map front-page section to specific _fluff_homepage_view collection
            $homepage_map = array(
                'featured'         => 'Romantic Details',
                'new-drops'        => 'Romantic Details',
                'romantic'         => 'Romantic Details',
                'romantic-details' => 'Romantic Details',
                'satin'            => 'Soft Lounge',
                'soft-lounge'      => 'Soft Lounge',
                'patterned'        => 'Seasonal Edit',
                'everyday'         => 'Seasonal Edit',
                'seasonal'         => 'Seasonal Edit',
                'seasonal-edit'    => 'Seasonal Edit',
                'winter'           => 'Cotton Essentials',
                'cotton-essentials'=> 'Cotton Essentials',
                'cozy'             => 'Cotton Essentials',
                'prints'           => 'Prints & Florals',
                'prints-florals'   => 'Prints & Florals',
                'ribbed'           => 'Ribbed Comfort',
            );

            $target_hp_view = isset( $homepage_map[ $section ] ) ? $homepage_map[ $section ] : ( in_array( $section, array( 'Romantic Details', 'Soft Lounge', 'Seasonal Edit', 'Cotton Essentials', 'Prints & Florals', 'Ribbed Comfort' ), true ) ? $section : '' );

            if ( ! empty( $target_hp_view ) ) {
                $hp_args = array(
                    'status'     => 'publish',
                    'limit'      => $limit,
                    'exclude'    => $base_exclude,
                    'meta_key'   => '_fluff_homepage_view',
                    'meta_value' => $target_hp_view,
                    'orderby'    => 'menu_order date',
                    'order'      => 'DESC',
                );
                $found = wc_get_products( $hp_args );
                if ( ! empty( $found ) && is_array( $found ) ) {
                    $products = $found;
                }
            }

            // If no homepage meta match found or section is generic, fallback to category/attribute queries
            if ( empty( $products ) ) {
                switch ( $section ) {
                    case 'featured':
                    case 'new-drops':
                    case 'romantic':
                    case 'romantic-details':
                        $args = array(
                            'status'   => 'publish',
                            'limit'    => $limit,
                            'featured' => true,
                            'exclude'  => $base_exclude,
                            'orderby'  => 'date',
                            'order'    => 'DESC',
                        );
                        $found = wc_get_products( $args );
                        if ( ! empty( $found ) && is_array( $found ) ) {
                            $products = $found;
                        }
                        break;

                    case 'satin':
                    case 'soft-lounge':
                        $args = array(
                            'status'   => 'publish',
                            'limit'    => $limit,
                            'category' => array( 'satin', 'satin-shorts', 'silk', 'silk-satin', 'satin-pyjamas', 'pajama-pants-set' ),
                            'exclude'  => $base_exclude,
                        );
                        $found = wc_get_products( $args );
                        if ( ! empty( $found ) && is_array( $found ) ) {
                            $products = $found;
                        }
                        break;

                    case 'patterned':
                    case 'everyday':
                    case 'seasonal':
                    case 'seasonal-edit':
                        $args = array(
                            'status'   => 'publish',
                            'limit'    => $limit,
                            'category' => array( 'everyday', 'patterned', 'cotton', 'summer-cotton', 'pyjamas', 'pajama-pants-set' ),
                            'exclude'  => $base_exclude,
                        );
                        $found = wc_get_products( $args );
                        if ( ! empty( $found ) && is_array( $found ) ) {
                            $products = $found;
                        }
                        break;

                    case 'winter':
                    case 'cozy':
                    case 'cotton-essentials':
                    default:
                        $args = array(
                            'status'   => 'publish',
                            'limit'    => $limit,
                            'category' => array( 'winter', 'winter-ribbed', 'robes', 'loungewear', 'cotton', 'pajama-pants-set' ),
                            'exclude'  => $base_exclude,
                        );
                        $found = wc_get_products( $args );
                        if ( ! empty( $found ) && is_array( $found ) ) {
                            $products = $found;
                        }
                        break;
                }
            }

            // If fewer than requested, backfill with newest published products
            if ( count( $products ) < $limit ) {
                $current_ids = array_filter( array_map( 'fluff_extract_product_id', $products ) );
                $exclude     = array_unique( array_merge( $base_exclude, $current_ids ) );
                $needed      = $limit - count( $products );
                $backfill    = wc_get_products( array(
                    'status'  => 'publish',
                    'limit'   => $needed,
                    'exclude' => $exclude,
                    'orderby' => 'date',
                    'order'   => 'DESC',
                ) );
                if ( ! empty( $backfill ) && is_array( $backfill ) ) {
                    $products = array_merge( $products, $backfill );
                }
            }
        } catch ( Exception $e ) {
            $products = array();
        }

        // Record used product IDs to guarantee zero repetition across sections
        if ( ! empty( $products ) ) {
            foreach ( $products as $prod ) {
                $p_id = fluff_extract_product_id( $prod );
                if ( $p_id ) {
                    $used_ids[] = $p_id;
                }
            }
            return $products;
        }
    }

    // Fallback sample products if WooCommerce returns no items
    $all_samples = fluff_get_sample_products();
    $offset_map = array(
        'featured'  => 0,
        'new-drops' => 0,
        'satin'     => 4,
        'patterned' => 8,
        'everyday'  => 8,
        'winter'    => 12,
        'cozy'      => 12,
    );
    $offset = isset( $offset_map[ $section ] ) ? $offset_map[ $section ] : 0;
    $slice = array_slice( $all_samples, $offset, $limit );
    foreach ( $slice as $item ) {
        $p_id = fluff_extract_product_id( $item );
        if ( $p_id ) {
            $used_ids[] = $p_id;
        }
    }
    return $slice;
}

/**
 * Render single product card matching FLUFF slow-luxury design system.
 * 1-row horizontally scrolling carousel item, borderless, off-white card.
 *
 * @param WC_Product|WP_Post|array|int $product WooCommerce Product, Post, or sample array.
 */
function fluff_render_product_card( $product ) {
    if ( ! $product ) {
        return;
    }

    // Convert post or numeric ID to WC_Product if WooCommerce is available
    if ( ( is_numeric( $product ) || ( is_object( $product ) && ! method_exists( $product, 'get_id' ) ) ) && function_exists( 'wc_get_product' ) ) {
        $wc_prod = wc_get_product( $product );
        if ( $wc_prod ) {
            $product = $wc_prod;
        }
    }

    if ( is_object( $product ) && method_exists( $product, 'get_id' ) ) {
        $id          = $product->get_id();
        $name        = method_exists( $product, 'get_name' ) ? $product->get_name() : get_the_title( $id );
        $link        = get_permalink( $id );
        $image_id    = method_exists( $product, 'get_image_id' ) ? $product->get_image_id() : 0;
        $image_url   = $image_id ? wp_get_attachment_image_url( $image_id, 'medium_large' ) : ( function_exists('wc_placeholder_img_src') ? wc_placeholder_img_src('medium_large') : '' );
        if ( empty( $image_url ) ) {
            $image_url = 'https://lh3.googleusercontent.com/aida/AEtjO1VwCeG0fQNpeA4O0djAQOvl7HREfBTeW5_LuJmMdi8G3DNl0G5cgsBzeoP5vE2ubOk5fJ2NiE9BvK-GWiUQ9hiUXjffnzvv3sF4gxMR2jq7oIMp3jHd_AdjcKRzHgMZMBw2CHhp-8zgbcwbTSsSTheLindjCQjB5SqTjlU9JUOIKxoWgye8WEGZ8kmfW2jzROuxRBT5_KnmEgb4-7ScHRSrYv_sVIUPY2014OmI3_LFiVsmlUksZNZ0OD2h';
        }
        $cats        = function_exists( 'wc_get_product_category_list' ) ? strip_tags( wc_get_product_category_list( $id, ', ' ) ) : '';
        $category    = ! empty( $cats ) ? $cats : 'FLUFF Sleepwear';

        $is_on_sale  = method_exists( $product, 'is_on_sale' ) ? $product->is_on_sale() : false;

        $price         = method_exists( $product, 'get_price' ) ? $product->get_price() : 0;
        $regular_price = method_exists( $product, 'get_regular_price' ) ? $product->get_regular_price() : 0;
        $price_display = function_exists( 'wc_price' ) ? wc_price( $price ) : 'LE ' . number_format( (float) $price, 2 );
        $regular_price_display = ( $is_on_sale && $regular_price && function_exists( 'wc_price' ) ) ? wc_price( $regular_price ) : '';
    } else {
        $id          = isset( $product['id'] ) ? $product['id'] : 0;
        $name        = isset( $product['name'] ) ? $product['name'] : 'FLUFF Set';
        $link        = '#';
        $image_url   = isset( $product['image'] ) ? $product['image'] : '';
        $category    = isset( $product['category'] ) ? $product['category'] : 'Sleepwear';

        $price         = isset( $product['price'] ) ? $product['price'] : 1249;
        $regular_price = isset( $product['regular_price'] ) ? $product['regular_price'] : 0;
        $is_on_sale    = ( $regular_price > $price );
        $price_display = 'LE ' . number_format( (float) $price, 2 );
        $regular_price_display = $is_on_sale ? 'LE ' . number_format( (float) $regular_price, 2 ) : '';
    }
    ?>
    <div class="group flex flex-col product-card-offwhite w-[250px] sm:w-[270px] md:w-[290px] shrink-0 snap-start overflow-hidden transition-all duration-300 hover:-translate-y-1" style="background-color: #F0EDE4; border: none !important;">
        <div class="relative aspect-[3/4] w-full bg-[#EAE6DB] overflow-hidden">
            <a href="<?php echo esc_url( $link ); ?>" class="block w-full h-full">
                <img alt="<?php echo esc_attr( $name ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="<?php echo esc_url( $image_url ); ?>" loading="lazy" />
            </a>
            <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center text-[#53627A] shadow active:scale-90 hover:text-[#1F2F4F] transition-transform cursor-pointer" onclick="toggleWishlist(this, '<?php echo esc_js( $name ); ?>')">
                <span class="material-symbols-outlined text-[18px]">favorite_border</span>
            </button>
        </div>
        <div class="p-3 sm:p-4 flex flex-col flex-1 justify-between">
            <div>
                <span class="font-body-sm text-body-sm block truncate" style="color: #647A96;"><?php echo esc_html( $category ); ?></span>
                <h3 class="font-body-md text-body-md font-bold line-clamp-1 mt-0.5" style="color: #1F2F4F;">
                    <a href="<?php echo esc_url( $link ); ?>" class="hover:text-[#D4B586] transition-colors">
                        <?php echo esc_html( $name ); ?>
                    </a>
                </h3>
            </div>
            <div class="mt-3">
                <div class="flex items-baseline gap-2">
                    <span class="font-label-lg text-label-lg font-extrabold" style="color: #1F2F4F;">
                        <?php echo $price_display; ?>
                    </span>
                    <?php if ( $is_on_sale && ! empty( $regular_price_display ) ) : ?>
                        <span class="font-body-sm text-body-sm line-through" style="color: #647A96;">
                            <?php echo $regular_price_display; ?>
                        </span>
                    <?php endif; ?>
                </div>
                <button class="mt-2.5 w-full py-2.5 bg-[#1F2F4F] text-white font-label-md text-label-md font-bold flex items-center justify-center gap-1.5 hover:bg-[#D4B586] hover:text-[#1F2F4F] transition-colors shadow-sm cursor-pointer" style="border: none !important;" onclick="addToCart('<?php echo esc_js( $name ); ?>')">
                    <span class="material-symbols-outlined text-[16px]">shopping_bag</span> Add to Bag
                </button>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Get structured specification bullet fields for a product.
 *
 * @param int $product_id Product post ID.
 * @return array Associative array of specifications with label and value.
 */
function fluff_get_product_specs( $product_id = 0 ) {
    if ( ! $product_id ) {
        $product_id = get_the_ID();
    }
    if ( ! $product_id ) {
        return array();
    }

    $spec_definitions = array(
        'fabric'  => array( 'label' => 'Fabric Composition', 'icon' => 'texture', 'ar' => 'نوع القماش والملمس' ),
        'set'     => array( 'label' => 'Set Pieces',        'icon' => 'layers',  'ar' => 'مكونات الطقم' ),
        'fit'     => array( 'label' => 'Silhouette & Fit',  'icon' => 'straighten', 'ar' => 'القصة والمقاس' ),
        'top'     => array( 'label' => 'Top Details',       'icon' => 'checkroom', 'ar' => 'تفاصيل القطعة العلوية' ),
        'bottom'  => array( 'label' => 'Bottom Details',    'icon' => 'dresser', 'ar' => 'تفاصيل البنطلون/الشورت' ),
        'details' => array( 'label' => 'Design Accents',    'icon' => 'palette', 'ar' => 'اللمسات والتطريز' ),
        'season'  => array( 'label' => 'Seasonality',       'icon' => 'routine', 'ar' => 'الموسم المناسب' ),
        'care'    => array( 'label' => 'Garment Care',      'icon' => 'local_laundry_service', 'ar' => 'إرشادات العناية والغسيل' ),
    );

    $specs = array();

    // Check individual meta fields first
    foreach ( $spec_definitions as $key => $def ) {
        $meta_val = get_post_meta( $product_id, '_fluff_spec_' . $key, true );
        if ( ! empty( $meta_val ) ) {
            $specs[ $key ] = array(
                'label' => $def['label'],
                'ar'    => $def['ar'],
                'icon'  => $def['icon'],
                'value' => $meta_val,
            );
        }
    }

    // Fallback to array meta or parsed description if individual fields not yet written
    if ( empty( $specs ) ) {
        $data_array = get_post_meta( $product_id, '_fluff_specs_data', true );
        if ( is_array( $data_array ) && ! empty( $data_array ) ) {
            foreach ( $data_array as $k => $v ) {
                $clean_k = strtolower( trim( $k ) );
                if ( isset( $spec_definitions[ $clean_k ] ) ) {
                    $specs[ $clean_k ] = array(
                        'label' => $spec_definitions[ $clean_k ]['label'],
                        'ar'    => $spec_definitions[ $clean_k ]['ar'],
                        'icon'  => $spec_definitions[ $clean_k ]['icon'],
                        'value' => $v,
                    );
                } else {
                    $specs[ $clean_k ] = array(
                        'label' => ucfirst( $k ),
                        'ar'    => '',
                        'icon'  => 'check_circle',
                        'value' => $v,
                    );
                }
            }
        }
    }

    return $specs;
}

/**
 * Render Engraved Specifications Table for Single Product Page.
 *
 * @param int $product_id Product post ID.
 */
function fluff_render_product_specs_table( $product_id = 0 ) {
    if ( ! $product_id ) {
        $product_id = get_the_ID();
    }
    $specs = fluff_get_product_specs( $product_id );

    if ( empty( $specs ) ) {
        // Default slow-luxury specifications for FLUFF products
        $specs = array(
            'fabric'  => array( 'label' => 'Fabric Composition', 'icon' => 'texture', 'ar' => 'نوع القماش والملمس', 'value' => '100% Organic Turkish Ribbed Cotton' ),
            'set'     => array( 'label' => 'Set Pieces',        'icon' => 'layers',  'ar' => 'مكونات الطقم',        'value' => '2-Piece Coordinated Sleepwear Set' ),
            'fit'     => array( 'label' => 'Silhouette & Fit',  'icon' => 'straighten', 'ar' => 'القصة والمقاس',    'value' => 'Relaxed Slow-Luxury Silhouette' ),
            'details' => array( 'label' => 'Design Accents',    'icon' => 'palette', 'ar' => 'اللمسات والتطريز',    'value' => 'Delicate Heart Embroidery & Signature Bow' ),
            'season'  => array( 'label' => 'Seasonality',       'icon' => 'routine', 'ar' => 'الموسم المناسب',      'value' => 'All-Season / Transitional Comfort' ),
            'care'    => array( 'label' => 'Garment Care',      'icon' => 'local_laundry_service', 'ar' => 'إرشادات العناية', 'value' => 'Machine wash cold 30°C, line dry in shade' ),
        );
    }
    ?>
    <div class="fluff-specs-engraved-table border border-[#B7C7D9] bg-white overflow-hidden shadow-sm">
        <div class="bg-[#F0EDE4] px-4 py-3 border-b border-[#B7C7D9] flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[#1F2F4F] text-[20px]">tune</span>
                <span class="font-label-badge text-xs uppercase font-extrabold tracking-wider text-[#1F2F4F]">Craft &amp; Technical Specifications</span>
            </div>
            <span class="font-arabic-sub text-xs text-[#53627A]">المواصفات الفنية المعتمدة</span>
        </div>
        <div class="divide-y divide-[#B7C7D9]/40">
            <?php foreach ( $specs as $spec_key => $spec ) : ?>
                <div class="grid grid-cols-1 sm:grid-cols-3 p-3.5 sm:p-4 hover:bg-[#F8F6EF]/60 transition-colors gap-1 sm:gap-4">
                    <div class="flex items-center gap-2 text-[#1F2F4F] font-bold text-xs sm:text-sm font-label-md">
                        <span class="material-symbols-outlined text-[#647A96] text-[18px]"><?php echo esc_attr( $spec['icon'] ); ?></span>
                        <span><?php echo esc_html( $spec['label'] ); ?></span>
                    </div>
                    <div class="sm:col-span-2 text-xs sm:text-sm text-[#53627A] flex items-center justify-between">
                        <span class="font-medium text-[#1F2F4F]"><?php echo esc_html( $spec['value'] ); ?></span>
                        <?php if ( ! empty( $spec['ar'] ) ) : ?>
                            <span class="font-arabic-sub text-[11px] text-[#647A96] hidden md:inline" dir="rtl"><?php echo esc_html( $spec['ar'] ); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
}

/**
 * Add custom "Specifications" tab to WooCommerce single product tabs.
 */
function fluff_add_specs_product_tab( $tabs ) {
    $tabs['fluff_specs'] = array(
        'title'    => __( 'Specifications & Details', 'fluff' ),
        'priority' => 15,
        'callback' => 'fluff_woocommerce_specs_tab_content',
    );
    return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'fluff_add_specs_product_tab' );

function fluff_woocommerce_specs_tab_content() {
    fluff_render_product_specs_table( get_the_ID() );
}

/**
 * Retrieve related products matching the current product's _fluff_homepage_view.
 *
 * @param int $product_id Current product ID.
 * @param int $limit      Number of related products to return.
 * @return array Array of WC_Product objects.
 */
function fluff_get_related_homepage_products( $product_id = 0, $limit = 4 ) {
    if ( ! $product_id ) {
        $product_id = get_the_ID();
    }
    if ( ! $product_id ) {
        return array();
    }

    $homepage_view = get_post_meta( $product_id, '_fluff_homepage_view', true );
    $related = array();

    if ( function_exists( 'wc_get_products' ) && ! empty( $homepage_view ) ) {
        // 1. Query products with the exact same homepage view
        $args = array(
            'status'     => 'publish',
            'limit'      => $limit,
            'exclude'    => array( $product_id ),
            'meta_key'   => '_fluff_homepage_view',
            'meta_value' => $homepage_view,
            'orderby'    => 'menu_order date',
            'order'      => 'DESC',
        );
        $found = wc_get_products( $args );
        if ( ! empty( $found ) && is_array( $found ) ) {
            $related = $found;
        }
    }

    // If fewer than limit, backfill with other published products from our live catalogue
    if ( count( $related ) < $limit && function_exists( 'wc_get_products' ) ) {
        $exclude_ids = array_merge( array( $product_id ), array_map( 'fluff_extract_product_id', $related ) );
        $needed      = $limit - count( $related );
        $backfill    = wc_get_products( array(
            'status'   => 'publish',
            'limit'    => $needed,
            'exclude'  => $exclude_ids,
            'orderby'  => 'date',
            'order'    => 'DESC',
        ) );
        if ( ! empty( $backfill ) && is_array( $backfill ) ) {
            $related = array_merge( $related, $backfill );
        }
    }

    return $related;
}

