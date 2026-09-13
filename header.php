<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-surface text-on-surface font-body-md flex flex-col min-h-full antialiased selection:bg-sale-yellow selection:text-on-background' ); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<!-- Global Fixed Top Navigation Header -->
<header class="fixed top-0 w-full z-50 pt-safe bg-surface/95 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.06)] border-b border-surface-variant text-on-surface">
    <!-- Announcement Bar -->
    <aside class="bg-primary text-sale-yellow py-1.5 px-4 flex items-center justify-center overflow-hidden border-b border-white/20">
        <span class="font-label-badge text-label-badge uppercase tracking-wider text-center truncate font-extrabold">
            <?php echo esc_html( fluff_get_option('fluff_announcement_text', '50% OFF ON SECOND ITEM // CLEARANCE SALE • BUY 2 GET 1 FREE') ); ?>
        </span>
    </aside>

    <!-- Main Navigation Strip -->
    <div class="h-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between gap-4">
        <!-- Brand Logo & Mobile Trigger -->
        <div class="flex items-center gap-2 shrink-0">
            <button aria-label="Open Menu" data-action="open-menu" class="w-10 h-10 flex md:hidden items-center justify-center text-on-surface hover:text-primary transition-colors rounded-full active:bg-surface-container">
                <span class="material-symbols-outlined text-[24px]">menu</span>
            </button>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-2">
                <?php if ( has_custom_logo() ) : ?>
                    <div class="max-h-9 max-w-[160px] flex items-center overflow-hidden">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else : ?>
                    <span class="font-headline-lg-mobile md:font-headline-lg text-2xl md:text-3xl font-extrabold tracking-tight text-primary uppercase">FLUFF</span>
                <?php endif; ?>
            </a>
        </div>

        <!-- Desktop Navigation Links (PC Enhancement) -->
        <nav class="hidden md:flex items-center gap-6 lg:gap-8 font-label-md text-xs lg:text-sm uppercase tracking-wider font-bold text-on-surface">
            <a href="#new-drops" class="hover:text-primary transition-colors py-1 border-b-2 border-transparent hover:border-primary">New Arrivals</a>
            <a href="#satin-section" class="hover:text-primary transition-colors py-1 border-b-2 border-transparent hover:border-primary">Satin Shorts</a>
            <a href="#patterned-section" class="hover:text-primary transition-colors py-1 border-b-2 border-transparent hover:border-primary">Everyday &amp; Patterned</a>
            <a href="#isdal-section" class="hover:text-primary transition-colors py-1 border-b-2 border-transparent hover:border-primary">Isdal Family</a>
            <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="hover:text-primary transition-colors py-1 border-b-2 border-transparent hover:border-primary">Sizing Guide</a>
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/') ); ?>" class="text-primary hover:text-terracotta-rich transition-colors py-1 font-extrabold flex items-center gap-1">
                Shop All <span class="material-symbols-outlined text-[16px]">chevron_right</span>
            </a>
        </nav>

        <!-- Header Actions -->
        <div class="flex items-center gap-1 shrink-0">
            <button aria-label="Search" data-action="open-search" class="w-10 h-10 flex items-center justify-center text-on-surface hover:text-primary transition-colors rounded-full active:bg-surface-container">
                <span class="material-symbols-outlined text-[22px]">search</span>
            </button>
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" aria-label="Wishlist" class="w-10 h-10 flex items-center justify-center text-on-surface hover:text-primary transition-colors rounded-full relative active:bg-surface-container">
                <span class="material-symbols-outlined text-[22px]">favorite</span>
                <span class="bg-sale-yellow text-on-background text-[9px] font-extrabold w-4 h-4 rounded-full flex items-center justify-center -top-0.5 -right-0.5 absolute shadow-sm">3</span>
            </a>
            <button aria-label="Cart" data-action="open-cart" class="w-10 h-10 flex items-center justify-center text-on-surface hover:text-primary transition-colors relative rounded-full active:bg-surface-container">
                <span class="material-symbols-outlined text-[22px]">shopping_bag</span>
                <?php
                $cart_count = ( function_exists('WC') && WC()->cart ) ? WC()->cart->get_cart_contents_count() : 1;
                ?>
                <span class="fluff-cart-count-badge bg-primary text-on-primary text-[10px] font-bold w-4.5 h-4.5 rounded-full flex items-center justify-center -top-0.5 -right-0.5 absolute shadow-sm">
                    <?php echo esc_html( $cart_count > 0 ? $cart_count : '1' ); ?>
                </span>
            </button>
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : '#' ); ?>" class="w-8.5 h-8.5 rounded-full bg-surface-container text-on-surface hover:bg-primary hover:text-on-primary flex items-center justify-center ml-1 shadow-sm transition-all" aria-label="Account">
                <span class="material-symbols-outlined text-[18px]">person</span>
            </a>
        </div>
    </div>
</header>

<!-- Main Container -->
<main class="flex flex-col relative w-full pt-28 pb-28 md:pb-12 bg-surface min-h-screen">
