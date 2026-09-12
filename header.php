<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-surface text-on-surface flex flex-col min-h-full selection:bg-secondary-container selection:text-on-secondary-container' ); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<!-- Global Fixed Top Navigation Header -->
<header class="fixed top-0 w-full z-50 pt-safe bg-surface/85 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
    <!-- Announcement Bar (Live Managed via Customizer) -->
    <div class="bg-primary-container text-surface px-margin-mobile py-1 text-center overflow-hidden">
        <p class="font-label-caps text-label-caps text-surface uppercase tracking-widest truncate">
            <?php echo esc_html( fluff_get_option('fluff_announcement_text', 'Rest • Dream • Belong | Cairo & Istanbul Express Delivery | Free Sterling Gift on orders over 1500 EGP') ); ?>
        </p>
    </div>

    <!-- Main Navigation Strip -->
    <div class="h-16 px-gutter-mobile flex items-center justify-between gap-2">
        <div class="flex items-center gap-1 shrink-0">
            <button aria-label="Open Menu" class="w-11 h-11 flex items-center justify-center text-on-surface hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-[24px]">menu</span>
            </button>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-1">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <img alt="<?php bloginfo( 'name' ); ?> Logo" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1UkM_8BjdjT_W6Zr62fRkIE-uPuPvGnGe-lm7OOCZhcsUQmI_5C8Qx0c0Bq6gQJRLkmMi396-88mjrFY0UMERqK4-aD2UCS_tyfA3QBjMvczEmw6egtGNvlg8ctNbpu6sykNhHHdZwxSD5ueybo4IEwWXLWQNn1LwBsgKoNHjGTBiHiW4XUcu0uWdcsTHbQWd4OBigdxHr1yZfsEj-FqBGxQjIj0sI-CkvWdkQAingbjl_d543zYpC6eZSs"/>
                    <span class="font-headline-sm text-headline-sm text-primary tracking-tight font-medium ml-1 hidden xs:inline"><?php bloginfo( 'name' ); ?></span>
                <?php endif; ?>
            </a>
        </div>

        <div class="flex-1 px-1 text-center">
            <span class="font-headline-sm text-headline-sm text-primary truncate block">
                <?php
                if ( is_front_page() ) {
                    echo 'Home';
                } elseif ( function_exists('is_shop') && is_shop() ) {
                    echo 'Shop Catalog';
                } elseif ( is_page() || is_single() ) {
                    single_post_title();
                } else {
                    bloginfo( 'name' );
                }
                ?>
            </span>
        </div>

        <div class="flex items-center gap-1 shrink-0">
            <button aria-label="Search" data-action="open-search" class="w-11 h-11 flex items-center justify-center text-on-surface hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-[22px]">search</span>
            </button>
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" aria-label="Wishlist" class="w-11 h-11 flex items-center justify-center text-on-surface hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-[22px]">favorite</span>
            </a>
            <button aria-label="Cart" data-action="open-cart" class="w-11 h-11 flex items-center justify-center text-on-surface hover:text-primary transition-colors relative">
                <span class="material-symbols-outlined text-[22px]">shopping_bag</span>
                <?php
                $cart_count = ( function_exists('WC') && WC()->cart ) ? WC()->cart->get_cart_contents_count() : 0;
                ?>
                <span class="fluff-cart-count-badge bg-secondary text-on-secondary text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center -top-1 -right-1 absolute">
                    <?php echo esc_html( $cart_count ); ?>
                </span>
            </button>
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : '#' ); ?>" class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-on-primary ml-1" aria-label="Account">
                <span class="material-symbols-outlined text-[18px]">person</span>
            </a>
        </div>
    </div>
</header>

<!-- Main Container -->
<main class="flex flex-col relative w-full pt-24 pb-32 bg-surface min-h-screen">
