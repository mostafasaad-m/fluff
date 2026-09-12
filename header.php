<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-[#F8F6EF] text-[#1F2F4F]/85 flex flex-col min-h-full selection:bg-[#D4B586] selection:text-[#1F2F4F]' ); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<!-- Global Fixed Top Navigation Header -->
<header class="fixed top-0 w-full z-50 pt-safe bg-[#F8F6EF]/95 backdrop-blur-xl shadow-[0_1px_8px_rgba(31,47,79,0.06)] border-b border-[#B7C7D9]/50 text-[#1F2F4F]">
    <!-- Announcement Bar -->
    <div class="bg-[#1F2F4F] text-[#F8F6EF] px-margin-mobile py-1 text-center overflow-hidden border-b border-[#D4B586]/30">
        <p class="font-label-caps text-label-caps text-[#F8F6EF] uppercase tracking-widest font-bold truncate">
            <?php echo esc_html( fluff_get_option('fluff_announcement_text', 'Rest • Dream • Belong | Cairo & Istanbul Express Delivery | Free Sterling Gift on orders over 1500 EGP') ); ?>
        </p>
    </div>

    <!-- Main Navigation Strip -->
    <div class="h-16 px-gutter-mobile flex items-center justify-between gap-2">
        <!-- Brand Logo & Menu Trigger -->
        <div class="flex items-center gap-1.5 shrink-0">
            <button aria-label="Open Menu" class="w-11 h-11 flex items-center justify-center text-[#1F2F4F] hover:text-[#D4B586] transition-colors rounded-full active:bg-[#B7C7D9]/20">
                <span class="material-symbols-outlined text-[26px]">menu</span>
            </button>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-1 max-h-9 overflow-hidden">
                <?php if ( has_custom_logo() ) : ?>
                    <div class="max-h-9 max-w-[160px] flex items-center overflow-hidden">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else : ?>
                    <img alt="<?php bloginfo( 'name' ); ?> Logo" class="h-8 max-h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1UkM_8BjdjT_W6Zr62fRkIE-uPuPvGnGe-lm7OOCZhcsUQmI_5C8Qx0c0Bq6gQJRLkmMi396-88mjrFY0UMERqK4-aD2UCS_tyfA3QBjMvczEmw6egtGNvlg8ctNbpu6sykNhHHdZwxSD5ueybo4IEwWXLWQNn1LwBsgKoNHjGTBiHiW4XUcu0uWdcsTHbQWd4OBigdxHr1yZfsEj-FqBGxQjIj0sI-CkvWdkQAingbjl_d543zYpC6eZSs"/>
                    <span class="font-headline-sm text-headline-sm text-[#1F2F4F] tracking-tight font-bold ml-1 hidden xs:inline"><?php bloginfo( 'name' ); ?></span>
                <?php endif; ?>
            </a>
        </div>

        <!-- Center Header Page Title Badge -->
        <div class="flex-1 px-1 text-center flex items-center justify-center">
            <span class="header-title-badge font-headline-sm text-headline-sm text-[#1F2F4F] font-bold truncate inline-block max-w-[220px] sm:max-w-xs">
                <?php
                if ( is_front_page() ) {
                    echo 'Home';
                } elseif ( function_exists('is_shop') && is_shop() ) {
                    echo 'Shop Catalog';
                } elseif ( is_product() ) {
                    echo 'Product Details';
                } elseif ( is_page() || is_single() ) {
                    single_post_title();
                } else {
                    bloginfo( 'name' );
                }
                ?>
            </span>
        </div>

        <!-- Header Actions -->
        <div class="flex items-center gap-1 shrink-0">
            <button aria-label="Search" data-action="open-search" class="w-11 h-11 flex items-center justify-center text-[#1F2F4F] hover:text-[#D4B586] transition-colors rounded-full">
                <span class="material-symbols-outlined text-[22px]">search</span>
            </button>
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" aria-label="Wishlist" class="w-11 h-11 flex items-center justify-center text-[#1F2F4F] hover:text-[#D4B586] transition-colors rounded-full">
                <span class="material-symbols-outlined text-[22px]">favorite</span>
            </a>
            <button aria-label="Cart" data-action="open-cart" class="w-11 h-11 flex items-center justify-center text-[#1F2F4F] hover:text-[#D4B586] transition-colors relative rounded-full">
                <span class="material-symbols-outlined text-[22px]">shopping_bag</span>
                <?php
                $cart_count = ( function_exists('WC') && WC()->cart ) ? WC()->cart->get_cart_contents_count() : 0;
                ?>
                <span class="fluff-cart-count-badge bg-[#D4B586] text-[#1F2F4F] text-[10px] font-bold w-4.5 h-4.5 rounded-full flex items-center justify-center -top-0.5 -right-0.5 absolute shadow-sm">
                    <?php echo esc_html( $cart_count ); ?>
                </span>
            </button>
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : '#' ); ?>" class="w-8.5 h-8.5 rounded-full bg-[#1F2F4F] flex items-center justify-center text-white ml-1 shadow-sm hover:bg-[#1F2F4F]/90 transition-all" aria-label="Account">
                <span class="material-symbols-outlined text-[18px]">person</span>
            </a>
        </div>
    </div>
</header>

<!-- Main Container -->
<main class="flex flex-col relative w-full pt-24 pb-32 bg-[#F8F6EF] min-h-screen">
