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
    <aside class="bg-[#1F2F4F] text-[#F8F6EF] py-1.5 px-4 flex items-center justify-center overflow-hidden border-b border-[#D4B586]/30">
        <span class="font-label-caps text-label-caps text-[#D4B586] uppercase tracking-widest text-center truncate font-bold text-xs">
            <?php echo esc_html( fluff_get_option('fluff_announcement_text', '50% OFF ON SECOND ITEM // CLEARANCE SALE • CAIRO & ISTANBUL EXPRESS DELIVERY') ); ?>
        </span>
    </aside>

    <!-- Main Navigation Strip -->
    <div class="h-16 max-w-7xl mx-auto px-4 md:px-8 flex items-center justify-between gap-3">
        <!-- Brand Logo & Menu Trigger -->
        <div class="flex items-center gap-2 shrink-0">
            <button aria-label="Open Menu" class="w-10 h-10 flex items-center justify-center text-[#1F2F4F] hover:text-[#D4B586] transition-colors rounded-full active:bg-[#B7C7D9]/20">
                <span class="material-symbols-outlined text-[24px]">menu</span>
            </button>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-1.5 max-h-9 overflow-hidden">
                <?php if ( has_custom_logo() ) : ?>
                    <div class="max-h-9 max-w-[160px] flex items-center overflow-hidden">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else : ?>
                    <img alt="<?php bloginfo( 'name' ); ?> Logo" class="h-8 max-h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1UkM_8BjdjT_W6Zr62fRkIE-uPuPvGnGe-lm7OOCZhcsUQmI_5C8Qx0c0Bq6gQJRLkmMi396-88mjrFY0UMERqK4-aD2UCS_tyfA3QBjMvczEmw6egtGNvlg8ctNbpu6sykNhHHdZwxSD5ueybo4IEwWXLWQNn1LwBsgKoNHjGTBiHiW4XUcu0uWdcsTHbQWd4OBigdxHr1yZfsEj-FqBGxQjIj0sI-CkvWdkQAingbjl_d543zYpC6eZSs"/>
                    <span class="font-headline-sm text-base md:text-lg text-[#1F2F4F] tracking-wider uppercase font-bold hidden xs:inline">FLUFF</span>
                <?php endif; ?>
            </a>
        </div>

        <!-- Center Header Page Title Badge -->
        <div class="flex-1 px-2 text-center flex items-center justify-center">
            <span class="header-title-badge font-headline-sm text-xs md:text-sm text-[#1F2F4F] font-bold truncate inline-block max-w-[200px] sm:max-w-xs px-3 py-1 bg-[#F4F0E6] rounded-full border border-[#B7C7D9]/40">
                <?php
                if ( is_front_page() ) {
                    echo 'FLUFF Sleepwear';
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
            <button aria-label="Search" data-action="open-search" class="w-10 h-10 flex items-center justify-center text-[#1F2F4F] hover:text-[#D4B586] transition-colors rounded-full">
                <span class="material-symbols-outlined text-[22px]">search</span>
            </button>
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" aria-label="Wishlist" class="w-10 h-10 flex items-center justify-center text-[#1F2F4F] hover:text-[#D4B586] transition-colors rounded-full relative">
                <span class="material-symbols-outlined text-[22px]">favorite</span>
                <span class="bg-[#D8B4C1] text-[#1F2F4F] text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center -top-0.5 -right-0.5 absolute shadow-sm">3</span>
            </a>
            <button aria-label="Cart" data-action="open-cart" class="w-10 h-10 flex items-center justify-center text-[#1F2F4F] hover:text-[#D4B586] transition-colors relative rounded-full">
                <span class="material-symbols-outlined text-[22px]">shopping_bag</span>
                <?php
                $cart_count = ( function_exists('WC') && WC()->cart ) ? WC()->cart->get_cart_contents_count() : 2;
                ?>
                <span class="fluff-cart-count-badge bg-[#D4B586] text-[#1F2F4F] text-[10px] font-bold w-4.5 h-4.5 rounded-full flex items-center justify-center -top-0.5 -right-0.5 absolute shadow-sm">
                    <?php echo esc_html( $cart_count > 0 ? $cart_count : '2' ); ?>
                </span>
            </button>
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : '#' ); ?>" class="w-8.5 h-8.5 rounded-full bg-[#1F2F4F] flex items-center justify-center text-white ml-1 shadow-sm hover:bg-[#D4B586] hover:text-[#1F2F4F] transition-all" aria-label="Account">
                <span class="material-symbols-outlined text-[18px]">person</span>
            </a>
        </div>
    </div>
</header>

<!-- Main Container -->
<main class="flex flex-col relative w-full pt-24 pb-32 bg-[#F8F6EF] min-h-screen">
