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
<header class="fixed top-0 w-full z-50 pt-safe bg-primary shadow-md text-warm-white" style="background-color: rgb(214, 40, 40);">
    <!-- Announcement Bar -->
    <aside class="bg-primary-container text-sale-yellow py-1 px-4 flex items-center justify-center overflow-hidden" style="background-color: rgb(214, 40, 40); border-bottom: 1px solid rgb(255, 255, 255);">
        <span class="font-label-badge text-label-badge uppercase tracking-wider text-center truncate font-extrabold">
            <?php echo esc_html( fluff_get_option('fluff_announcement_text', '50% OFF ON SECOND ITEM // CLEARANCE SALE') ); ?>
        </span>
    </aside>

    <!-- Main Navigation Strip -->
    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex items-center justify-between relative">
        <!-- Brand Logo & Mobile Drawer Trigger -->
        <div class="flex items-center gap-3 z-10">
            <button aria-label="Open Menu" data-action="open-menu" class="w-10 h-10 flex items-center justify-center text-warm-white hover:text-sale-yellow transition-colors">
                <svg class="w-6 h-6 stroke-current" fill="none" stroke-width="1.5" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </button>
            <button aria-label="Search" data-action="open-search" class="w-10 h-10 flex items-center justify-center text-warm-white hover:text-sale-yellow transition-colors">
                <svg class="w-5 h-5 stroke-current" fill="none" stroke-width="1.5" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path>
                </svg>
            </button>
        </div>

        <!-- Center Logo (Mobile & Desktop) -->
        <div class="absolute left-1/2 -translate-x-1/2 flex items-center justify-center pointer-events-auto">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center justify-center">
                <?php if ( has_custom_logo() ) : ?>
                    <div class="max-h-9 max-w-[160px] flex items-center overflow-hidden">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else : ?>
                    <span class="font-extrabold text-[24px] tracking-tight text-warm-white hover:text-sale-yellow transition-colors font-headline-lg-mobile uppercase">Fluff</span>
                <?php endif; ?>
            </a>
        </div>

        <!-- Desktop Navigation Links (PC Enhancement) -->
        <nav class="hidden lg:flex items-center gap-6 font-label-md text-xs uppercase tracking-wider font-bold text-warm-white z-10 ml-auto mr-4">
            <a href="#new-drops" class="hover:text-sale-yellow transition-colors py-1">New Arrivals</a>
            <a href="#satin-section" class="hover:text-sale-yellow transition-colors py-1">Satin Shorts</a>
            <a href="#patterned-section" class="hover:text-sale-yellow transition-colors py-1">Everyday &amp; Patterned</a>
            <a href="#isdal-section" class="hover:text-sale-yellow transition-colors py-1">Isdal Family</a>
            <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="hover:text-sale-yellow transition-colors py-1">Sizing Guide</a>
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/') ); ?>" class="text-sale-yellow hover:underline transition-colors py-1 flex items-center gap-1">
                Shop All <span class="material-symbols-outlined text-[16px]">chevron_right</span>
            </a>
        </nav>

        <!-- Header Actions -->
        <div class="flex items-center gap-2 z-10">
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : '#' ); ?>" aria-label="User Account" class="w-10 h-10 flex items-center justify-center text-warm-white hover:text-sale-yellow transition-colors">
                <svg class="w-5 h-5 stroke-current" fill="none" stroke-width="1.5" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
                </svg>
            </a>
            <button aria-label="Shopping Bag" data-action="open-cart" class="relative w-10 h-10 flex items-center justify-center text-warm-white hover:text-sale-yellow transition-colors">
                <svg class="w-5 h-5 stroke-current" fill="none" stroke-width="1.5" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25c-.669 0-1.189-.578-1.119-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"></path>
                </svg>
                <?php
                $cart_count = ( function_exists('WC') && WC()->cart ) ? WC()->cart->get_cart_contents_count() : 1;
                ?>
                <span class="fluff-cart-count-badge absolute top-1.5 right-1.5 flex items-center justify-center w-4 h-4 bg-sale-yellow text-on-background font-label-badge text-[9px] rounded-full font-bold">
                    <?php echo esc_html( $cart_count > 0 ? $cart_count : '1' ); ?>
                </span>
            </button>
        </div>
    </div>
</header>

<!-- Main Container -->
<main class="flex flex-col relative w-full pt-28 pb-28 md:pb-12 bg-surface min-h-screen">
