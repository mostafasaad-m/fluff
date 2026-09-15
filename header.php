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
<header class="fixed top-0 w-full z-50 pt-safe shadow-md border-b" style="background-color: #1F2F4F; border-color: rgba(212, 181, 134, 0.25);">
    <!-- Announcement Bar -->
    <aside class="py-1.5 px-4 flex items-center justify-center overflow-hidden" style="background-color: #16233B; border-bottom: 1px solid rgba(212, 181, 134, 0.2);">
        <span class="font-label-badge text-label-badge uppercase tracking-wider text-center truncate font-extrabold" style="color: #D4B586 !important;">
            <?php echo esc_html( fluff_get_option('fluff_announcement_text', '50% OFF ON SECOND ITEM // CLEARANCE SALE') ); ?>
        </span>
    </aside>

    <!-- Main Navigation Strip -->
    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex items-center justify-between relative">
        <!-- Left Zone (Mobile: Drawer Toggle & Search; Desktop: Brand Logo) -->
        <div class="flex items-center gap-2 lg:gap-8 z-20">
            <!-- Mobile Menu Drawer Toggle: Strictly hidden on PC (lg:hidden) -->
            <button aria-label="Open Menu" data-action="open-menu" class="w-10 h-10 flex items-center justify-center transition-colors lg:hidden mobile-only-control hover:text-[#F8F6EF]" style="color: #fff    !important;">
                <svg class="w-6 h-6 stroke-current" fill="none" stroke-width="1.8" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </button>

            <!-- Mobile Search Toggle: Shown only on mobile left -->
            <button aria-label="Search" data-action="open-search" class="w-10 h-10 flex items-center justify-center transition-colors lg:hidden mobile-only-control hover:text-[#F8F6EF]" style="color: #fff !important;">
                <svg class="w-5 h-5 stroke-current" fill="none" stroke-width="1.8" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path>
                </svg>
            </button>

            <!-- Brand Logo for Desktop PC (Left-aligned) -->
            <div class="hidden lg:flex items-center desktop-only-nav">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center">
                    <?php if ( has_custom_logo() ) : ?>
                        <div class="max-h-9 max-w-[160px] flex items-center overflow-hidden">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else : ?>
                        <span class="font-extrabold text-[24px] tracking-tight hover:opacity-90 transition-opacity font-headline-lg-mobile uppercase" style="color: #000 !important;">Fluff</span>
                    <?php endif; ?>
                </a>
            </div>
        </div>

        <!-- Center Logo for Mobile & Tablets (< lg) -->
        <div class="lg:hidden absolute left-1/2 -translate-x-1/2 flex items-center justify-center pointer-events-auto z-10 mobile-only-control">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center justify-center">
                <?php if ( has_custom_logo() ) : ?>
                    <div class="max-h-9 max-w-[160px] flex items-center overflow-hidden">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else : ?>
                    <span class="font-extrabold text-[22px] sm:text-[24px] tracking-tight hover:opacity-90 transition-opacity font-headline-lg-mobile uppercase" style="color: #000 !important;">Fluff</span>
                <?php endif; ?>
            </a>
        </div>

        <!-- Desktop Navigation Links in Center (lg: and above) -->
        <nav class="hidden lg:flex desktop-only-nav items-center justify-center gap-4 xl:gap-7 font-label-md text-xs xl:text-sm uppercase tracking-wider font-extrabold z-10 flex-1 px-4">
            <a href="#new-drops" class="hover:text-[#F8F6EF] transition-colors py-1 whitespace-nowrap" style="color: #fff !important;">New Arrivals</a>
            <a href="#satin-section" class="hover:text-[#F8F6EF] transition-colors py-1 whitespace-nowrap" style="color: #fff !important;">Satin Shorts</a>
            <a href="#patterned-section" class="hover:text-[#F8F6EF] transition-colors py-1 whitespace-nowrap" style="color: #fff !important;">Everyday &amp; Patterned</a>
            <a href="#isdal-section" class="hover:text-[#F8F6EF] transition-colors py-1 whitespace-nowrap" style="color: #fff !important;">Isdal Family</a>
            <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="hover:text-[#F8F6EF] transition-colors py-1 whitespace-nowrap" style="color: #fff !important;">Sizing Guide</a>
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/') ); ?>" class="hover:underline transition-colors py-1 flex items-center gap-1 font-black whitespace-nowrap" style="color: #fff !important;">
                Shop All <span class="material-symbols-outlined text-[16px]" style="color: #F8F6EF !important;">chevron_right</span>
            </a>
        </nav>

        <!-- Right Header Actions (Search on PC, Account, Cart) -->
        <div class="flex items-center gap-1 sm:gap-2 z-20 shrink-0">
            <!-- Desktop Search Button (Shown on PC) -->
            <button aria-label="Search" data-action="open-search" class="hidden lg:flex desktop-only-nav w-10 h-10 items-center justify-center transition-colors hover:text-[#F8F6EF]" style="color: #fff !important;">
                <svg class="w-5 h-5 stroke-current" fill="none" stroke-width="1.8" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path>
                </svg>
            </button>

            <!-- User Account -->
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : '#' ); ?>" aria-label="User Account" class="w-10 h-10 flex items-center justify-center transition-colors hover:text-[#F8F6EF]" style="color: #fff !important;">
                <svg class="w-5 h-5 stroke-current" fill="none" stroke-width="1.8" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
                </svg>
            </a>

            <!-- Shopping Bag -->
            <button aria-label="Shopping Bag" data-action="open-cart" class="relative w-10 h-10 flex items-center justify-center transition-colors hover:text-[#F8F6EF]" style="color: #fff !important;">
                <svg class="w-5 h-5 stroke-current" fill="none" stroke-width="1.8" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25c-.669 0-1.189-.578-1.119-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"></path>
                </svg>
                <?php
                $cart_count = ( function_exists('WC') && WC()->cart ) ? WC()->cart->get_cart_contents_count() : 1;
                ?>
                <span class="fluff-cart-count-badge absolute top-1.5 right-1.5 flex items-center justify-center w-4 h-4 rounded-full font-bold" style="background-color: #D4B586 !important; color: #1F2F4F !important;">
                    <?php echo esc_html( $cart_count > 0 ? $cart_count : '1' ); ?>
                </span>
            </button>
        </div>
    </div>
</header>

<!-- Main Container -->
<main class="flex flex-col relative w-full pt-[89px] sm:pt-[91px] pb-28 lg:pb-12 bg-surface min-h-screen" style="background-color: #F8F6EF;">
