<?php
/**
 * Front Page Template - Premium WordPress Edition
 *
 * Designed & Developed for FLUFF Sleepwear
 * 
 * @package FLUFF
 */

get_header();
// Global product ID deduplicator to guarantee zero repeats across sections
$fluff_used_ids = array();
?>

<div class="flex flex-col w-full">

    <!-- Hero Promotional Campaign Section (Artisanal Slick Slider) -->
    <section class="relative w-full overflow-hidden bg-[#16233B] text-on-primary">
        <div class="relative w-full fluff-hero-slider-container group">
            <div class="fluff-hero-slick w-full" id="fluffHeroSlider">
                <!-- Slide 1: Winter Collection 1 -->
                <div class="fluff-hero-slide relative w-full overflow-hidden">
                    <a href="<?php echo esc_url( home_url( '/category-special-collection/' ) ); ?>" class="block w-full cursor-pointer relative" aria-label="Winter Collection">
                        <picture class="w-full block">
                            <source media="(min-width: 768px)" srcset="https://qamareen.vitaldc.com/wp-content/uploads/2026/09/winter-collection-pc-slider.PNG" />
                            <img alt="FLUFF Winter Collection" class="w-full h-auto object-cover block select-none" src="https://qamareen.vitaldc.com/wp-content/uploads/2026/09/winter-collection-mobile-slider.PNG" fetchpriority="high" />
                        </picture>
                    </a>
                </div>

                <!-- Slide 2: Winter Collection 2 -->
                <div class="fluff-hero-slide relative w-full overflow-hidden">
                    <a href="<?php echo esc_url( home_url( '/category-special-collection/' ) ); ?>" class="block w-full cursor-pointer relative" aria-label="Winter Collection Warmth">
                        <picture class="w-full block">
                            <source media="(min-width: 768px)" srcset="https://qamareen.vitaldc.com/wp-content/uploads/2026/09/winter-collection-pc-slider2.png" />
                            <img alt="FLUFF Winter Touch" class="w-full h-auto object-cover block select-none" src="https://qamareen.vitaldc.com/wp-content/uploads/2026/09/winter-collection-mobile-slider2.PNG" loading="lazy" />
                        </picture>
                    </a>
                </div>

                <!-- Slide 3: Winter Collection 3 -->
                <div class="fluff-hero-slide relative w-full overflow-hidden">
                    <a href="<?php echo esc_url( home_url( '/category-special-collection/' ) ); ?>" class="block w-full cursor-pointer relative" aria-label="Winter Artisanal Sleepwear">
                        <picture class="w-full block">
                            <source media="(min-width: 768px)" srcset="https://qamareen.vitaldc.com/wp-content/uploads/2026/09/winter-collection-pc-slider3.PNG" />
                            <img alt="FLUFF Artisanal Edit" class="w-full h-auto object-cover block select-none" src="https://qamareen.vitaldc.com/wp-content/uploads/2026/09/winter-collection-mobile-slider3.PNG" loading="lazy" />
                        </picture>
                    </a>
                </div>

                <!-- Slide 4: Visa Off Promo -->
                <div class="fluff-hero-slide relative w-full overflow-hidden">
                    <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/') ); ?>" class="block w-full cursor-pointer relative" aria-label="Visa 20% Discount Offer">
                        <picture class="w-full block">
                            <source media="(min-width: 768px)" srcset="https://qamareen.vitaldc.com/wp-content/uploads/2026/09/visa-off-pc-slider.PNG" />
                            <img alt="FLUFF Visa Discount Offer" class="w-full h-auto object-cover block select-none" src="https://qamareen.vitaldc.com/wp-content/uploads/2026/09/visa-off-mobile-slider.PNG" loading="lazy" />
                        </picture>
                    </a>
                </div>
            </div>

            <!-- Chic Artisanal Floating Navigation Controls -->
            <button type="button" class="fluff-slick-prev absolute left-3 sm:left-6 top-1/2 -translate-y-1/2 z-20 w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center text-white/80 hover:text-white transition-all bg-[#16233B]/40 hover:bg-[#16233B]/80 backdrop-blur-md border border-white/20 hover:border-[#D4B586] hover:scale-105 shadow-lg opacity-0 group-hover:opacity-100 focus:opacity-100" aria-label="Previous Slide">
                <span class="material-symbols-outlined text-[24px]">chevron_left</span>
            </button>
            <button type="button" class="fluff-slick-next absolute right-3 sm:right-6 top-1/2 -translate-y-1/2 z-20 w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center text-white/80 hover:text-white transition-all bg-[#16233B]/40 hover:bg-[#16233B]/80 backdrop-blur-md border border-white/20 hover:border-[#D4B586] hover:scale-105 shadow-lg opacity-0 group-hover:opacity-100 focus:opacity-100" aria-label="Next Slide">
                <span class="material-symbols-outlined text-[24px]">chevron_right</span>
            </button>
        </div>

        <!-- Clearance Urgent Moving News Ticker Bar -->
        <div class="relative w-full overflow-hidden py-2.5 border-t border-b" style="background-color: #F0EDE4; border-color: #B7C7D9; color: #1F2F4F;">
            <div class="fluff-ticker-track">
                <!-- Segment 1 -->
                <div class="flex items-center gap-6 font-label-badge text-label-badge uppercase tracking-widest font-extrabold px-3 shrink-0">
                    <span>50% OFF ON 2ND ITEM</span>
                    <span class="font-black" style="color: #647A96;">//</span>
                    <span>BUY 2 GET 1 FREE</span>
                    <span class="font-black" style="color: #647A96;">//</span>
                    <span>LIMITED QUANTITIES</span>
                    <span class="font-black" style="color: #647A96;">//</span>
                    <span>EXPRESS DELIVERY CAIRO &amp; ISTANBUL</span>
                    <span class="font-black" style="color: #647A96;">//</span>
                    <span>REST • DREAM • BELONG</span>
                    <span class="font-black" style="color: #647A96;">//</span>
                </div>
                <!-- Segment 2 (Duplicate for Seamless Infinite Marquee Loop) -->
                <div class="flex items-center gap-6 font-label-badge text-label-badge uppercase tracking-widest font-extrabold px-3 shrink-0" aria-hidden="true">
                    <span>50% OFF ON 2ND ITEM</span>
                    <span class="font-black" style="color: #647A96;">//</span>
                    <span>BUY 2 GET 1 FREE</span>
                    <span class="font-black" style="color: #647A96;">//</span>
                    <span>LIMITED QUANTITIES</span>
                    <span class="font-black" style="color: #647A96;">//</span>
                    <span>EXPRESS DELIVERY CAIRO &amp; ISTANBUL</span>
                    <span class="font-black" style="color: #647A96;">//</span>
                    <span>REST • DREAM • BELONG</span>
                    <span class="font-black" style="color: #647A96;">//</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 1: Featured New Drops (Romantic Details) -->
    <section class="py-8 md:py-12 bg-surface" id="new-drops">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-6">
                <div>
                    <span class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold block" style="color: #647A96;">ROMANTIC DETAILS</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-3xl font-extrabold tracking-tight" style="color: #1F2F4F;">New Arrivals &amp; Romantic Drops</h2>
                </div>
                <a class="font-label-md text-label-md font-bold flex items-center gap-1 hover:text-[#D4B586] transition-colors" style="color: #1F2F4F;" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>">
                    View all <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                </a>
            </div>

            <!-- 1-Row Horizontally Scrolling Product Cards (No borders, Off-white background) -->
            <div class="flex overflow-x-auto no-scrollbar gap-4 sm:gap-6 pb-4 pt-1 snap-x scroll-smooth">
                <?php
                $featured_products = fluff_get_section_products( 'romantic-details', $fluff_used_ids, 6 );
                if ( ! empty( $featured_products ) ) {
                    foreach ( $featured_products as $product ) {
                        fluff_render_product_card( $product );
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Section 2: Soft Lounge Spotlight -->
    <section class="py-8 md:py-12" id="soft-lounge-section" style="background-color: #F8F6EF;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-6">
                <div>
                    <span class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold block" style="color: #647A96;">PURE COMFORT</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-3xl font-extrabold tracking-tight" style="color: #1F2F4F;">Soft Lounge Collection</h2>
                </div>
                <a class="font-label-md text-label-md font-bold flex items-center gap-1 hover:text-[#D4B586] transition-colors" style="color: #1F2F4F;" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>">
                    View all <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                </a>
            </div>

            <!-- 1-Row Horizontally Scrolling Soft Lounge Cards -->
            <div class="flex overflow-x-auto no-scrollbar gap-4 sm:gap-6 pb-4 pt-1 snap-x scroll-smooth">
                <?php
                $soft_lounge_products = fluff_get_section_products( 'soft-lounge', $fluff_used_ids, 6 );
                if ( ! empty( $soft_lounge_products ) ) {
                    foreach ( $soft_lounge_products as $product ) {
                        fluff_render_product_card( $product );
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Section 3: Seasonal Edit & Transitional Sets -->
    <section class="py-8 md:py-12" id="seasonal-section" style="background-color: #F8F6EF;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-6">
                <div>
                    <span class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold block" style="color: #647A96;">CURATED WEATHER EDITS</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-3xl font-extrabold tracking-tight" style="color: #1F2F4F;">Seasonal Edit &amp; Sets</h2>
                </div>
                <a class="font-label-md text-label-md font-bold flex items-center gap-0.5 hover:text-[#D4B586] transition-colors" style="color: #1F2F4F;" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>">
                    See all <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                </a>
            </div>

            <!-- 1-Row Horizontally Scrolling Seasonal Cards -->
            <div class="flex overflow-x-auto no-scrollbar gap-4 sm:gap-6 pb-4 pt-1 snap-x scroll-smooth">
                <?php
                $seasonal_products = fluff_get_section_products( 'seasonal-edit', $fluff_used_ids, 6 );
                if ( ! empty( $seasonal_products ) ) {
                    foreach ( $seasonal_products as $product ) {
                        fluff_render_product_card( $product );
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Section 4: Cotton Essentials (1 Row Horizontal Scroll) -->
    <section class="py-8 md:py-12" id="cotton-section" style="background-color: #F8F6EF;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-6">
                <div>
                    <span class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold block" style="color: #647A96;">TIMELESS BASICS</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-3xl font-extrabold tracking-tight" style="color: #1F2F4F;">Cotton Essentials</h2>
                </div>
                <a class="font-label-md text-label-md font-bold flex items-center gap-1 hover:text-[#D4B586] transition-colors" style="color: #1F2F4F;" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>">
                    View all <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                </a>
            </div>

            <!-- 1-Row Horizontally Scrolling Cotton Essentials Cards -->
            <div class="flex overflow-x-auto no-scrollbar gap-4 sm:gap-6 pb-4 pt-1 snap-x scroll-smooth">
                <?php
                $cotton_products = fluff_get_section_products( 'cotton-essentials', $fluff_used_ids, 6 );
                if ( ! empty( $cotton_products ) ) {
                    foreach ( $cotton_products as $product ) {
                        fluff_render_product_card( $product );
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Special Collection: 'Isdal Family' (Desktop Enhanced Showcase) -->


    <!-- Trust Badges Bar (3 Columns on Desktop) -->
    <section class="py-8 border-t border-b" style="background-color: #F8F6EF; border-color: #B7C7D9;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 text-center">
                <div class="flex flex-col items-center p-5 bg-white border shadow-sm" style="border-color: #B7C7D9;">
                    <span class="material-symbols-outlined text-[28px]" style="color: #1F2F4F;">local_shipping</span>
                    <span class="font-label-badge text-label-badge font-extrabold mt-2 uppercase tracking-wider" style="color: #1F2F4F;">Fast Delivery</span>
                    <span class="font-body-sm text-xs mt-0.5" style="color: #647A96;">4-5 Business Days</span>
                </div>
                <div class="flex flex-col items-center p-5 bg-white border shadow-sm" style="border-color: #B7C7D9;">
                    <span class="material-symbols-outlined text-[28px]" style="color: #1F2F4F;">payments</span>
                    <span class="font-label-badge text-label-badge font-extrabold mt-2 uppercase tracking-wider" style="color: #1F2F4F;">COD Ready</span>
                    <span class="font-body-sm text-xs mt-0.5" style="color: #647A96;">Up to 20% off on Visa orders</span>
                </div>
                <div class="flex flex-col items-center p-5 bg-white border shadow-sm" style="border-color: #B7C7D9;">
                    <span class="material-symbols-outlined text-[28px]" style="color: #1F2F4F;">sync_alt</span>
                    <span class="font-label-badge text-label-badge font-extrabold mt-2 uppercase tracking-wider" style="color: #1F2F4F;">Easy Exchange</span>
                    <span class="font-body-sm text-xs mt-0.5" style="color: #647A96;">Allowed exchange if product not tampered</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter & Community Perks -->
    <section class="py-12 md:py-16" style="background-color: #F0EDE4;">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white border p-6 sm:p-10 shadow-sm text-center" style="border-color: #B7C7D9;">
                <div class="w-14 h-14 rounded-full flex items-center justify-center mx-auto mb-4 border" style="background-color: #F0EDE4; color: #1F2F4F; border-color: #B7C7D9;">
                    <span class="material-symbols-outlined text-[30px]">mark_email_unread</span>
                </div>
                <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-3xl font-extrabold tracking-tight" style="color: #1F2F4F;">
                    Join the FLUFF Club
                </h2>
                <p class="font-body-md text-body-md mt-2 mb-6 max-w-lg mx-auto" style="color: #647A96;">
                    We create pieces that feel softer, fit better, and last longer. Sign up for exclusive 50% discount codes, secret restocks, and first access to seasonal drops.
                </p>
                <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" onsubmit="handleNewsletter(event)">
                    <input class="flex-1 px-4 py-3 bg-[#F8F6EF] text-[#1F2F4F] font-body-md text-body-md placeholder-[#647A96] border border-[#B7C7D9] focus:outline-none focus:ring-2 focus:ring-[#1F2F4F]" id="emailInput" placeholder="Enter your email address" required="" type="email" />
                    <button class="py-3 px-6 font-label-lg text-label-lg font-bold shadow-md active:scale-95 transition-all shrink-0" style="background-color: #1F2F4F; color: #FFFFFF;" type="submit">
                        GET 10% OFF
                    </button>
                </form>

                <!-- Social Channels -->
                <div class="mt-8 pt-6 border-t flex flex-col items-center" style="border-color: #B7C7D9;">
                    <span class="font-label-badge text-label-badge uppercase tracking-widest font-extrabold mb-3" style="color: #647A96;">
                        FOLLOW OUR STORY
                    </span>
                    <div class="flex items-center gap-4">
                        <a aria-label="Instagram" class="w-10 h-10 rounded-full flex items-center justify-center border transition-all duration-200 hover:bg-[#1F2F4F] hover:text-white hover:scale-105" style="background-color: #F0EDE4; color: #1F2F4F; border-color: #B7C7D9;" href="https://www.instagram.com/fluff.egypt/" rel="noopener noreferrer" target="_blank">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a aria-label="TikTok" class="w-10 h-10 rounded-full flex items-center justify-center border transition-all duration-200 hover:bg-[#1F2F4F] hover:text-white hover:scale-105" style="background-color: #F0EDE4; color: #1F2F4F; border-color: #B7C7D9;" href="https://tiktok.com/@fluff.egypt/" rel="noopener noreferrer" target="_blank">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.24 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                            </svg>
                        </a>
                        <a aria-label="Facebook" class="w-10 h-10 rounded-full flex items-center justify-center border transition-all duration-200 hover:bg-[#1F2F4F] hover:text-white hover:scale-105" style="background-color: #F0EDE4; color: #1F2F4F; border-color: #B7C7D9;" href="https://www.facebook.com/fluff.egypt" rel="noopener noreferrer" target="_blank">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            
        </div>
    </section>

</div>

<?php
get_footer();
?>