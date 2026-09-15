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

    <!-- Hero Promotional Campaign Section -->
    <section class="relative w-full overflow-hidden bg-[#1F2F4F] text-on-primary">
        <div class="relative w-full">
            <a href="#new-drops" class="block w-full cursor-pointer relative group">
                <picture class="w-full block">
                    <!-- Desktop Viewport: Wide Hero Image (min-width: 768px) -->
                    <source media="(min-width: 768px)" srcset="<?php echo esc_url( home_url( '/wp-content/uploads/2026/09/IMG_3498.png' ) ); ?>" />
                    <!-- Mobile Viewport: Vertical Hero Image (< 768px) -->
                    <img alt="FLUFF Clearance Campaign" class="w-full h-auto object-cover block" src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/09/ChatGPT-Image-Sep-13-2026-07_19_04-PM-1-1.png' ) ); ?>" />
                </picture>

                <!-- Hero Editorial Text Overlay: Heading & Subheading each on a 30% -->
                <div class="absolute inset-0 z-10 flex flex-col justify-center items-start px-5 sm:px-10 lg:px-16 pointer-events-none">
                    <div class="flex flex-col gap-2 sm:gap-3 max-w-[90%] sm:max-w-[60%] lg:max-w-[38%] pointer-events-auto">
                        <!-- Heading on 30% overlay -->
                        <div class="inline-flex self-start py-2 px-4 sm:px-5 border border-white/20 shadow-md backdrop-blur-md transition-transform group-hover:scale-[1.01]" style="background-color: rgba(31, 47, 79, 0.30);">
                            <h1 class="text-[22px] sm:text-[30px] lg:text-[36px] font-extrabold uppercase tracking-wide leading-tight text-white m-0" style="font-family: 'Bodoni Moda', Didot, 'Bodoni MT', serif; text-shadow: 0 2px 10px rgba(0,0,0,0.5);">
                                Softer Nights
                            </h1>
                        </div>
                        <!-- Subheading on 30% overlay -->
                        <div class="inline-flex self-start py-1.5 px-3.5 sm:px-4 border border-white/15 shadow-md backdrop-blur-md transition-transform group-hover:scale-[1.01]" style="background-color: rgba(31, 47, 79, 0.30);">
                            <p class="text-xs sm:text-sm lg:text-[16px] uppercase tracking-[4px] sm:tracking-[5px] font-semibold text-[#D4B586] m-0" style="font-family: 'Cinzel', serif; text-shadow: 0 1px 6px rgba(0,0,0,0.5);">
                                Brighter Tomorrow
                            </p>
                        </div>
                    </div>
                </div>
            </a>
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

    <!-- Section 1: Featured New Drops (1 Row Horizontal Scroll) -->
    <section class="py-8 md:py-12 bg-surface" id="new-drops">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-6">
                <div>
                    <span class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold block" style="color: #647A96;">HOT RELEASES</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-3xl font-extrabold tracking-tight" style="color: #1F2F4F;">New Arrivals &amp; Featured</h2>
                </div>
                <a class="font-label-md text-label-md font-bold flex items-center gap-1 hover:text-[#D4B586] transition-colors" style="color: #1F2F4F;" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>">
                    View all <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                </a>
            </div>

            <!-- 1-Row Horizontally Scrolling Product Cards (No borders, Off-white background) -->
            <div class="flex overflow-x-auto no-scrollbar gap-4 sm:gap-6 pb-4 pt-1 snap-x scroll-smooth">
                <?php
                $featured_products = fluff_get_section_products( 'featured', $fluff_used_ids, 6 );
                if ( ! empty( $featured_products ) ) {
                    foreach ( $featured_products as $product ) {
                        fluff_render_product_card( $product );
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Editorial Feature - 'The Art of Everyday Elegance' (Enhanced PC Split Layout) -->
   

    <!-- Satin Shorts Spotlight (Responsive Desktop Grid) -->
    <section class="py-8 md:py-12" id="satin-section" style="background-color: #F8F6EF;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-6">
                <div>
                    <span class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold block" style="color: #647A96;">GLOSSY SILK TOUCH</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-3xl font-extrabold tracking-tight" style="color: #1F2F4F;">Satin Shorts</h2>
                </div>
                <span class="px-3 py-1 font-label-badge text-label-badge font-bold border" style="background-color: #D8B4C1; color: #1F2F4F; border-color: #B7C7D9;">
                    LE 1,249 FLAT PRICE
                </span>
            </div>

            <!-- 1-Row Horizontally Scrolling Satin Cards (No borders, Off-white background) -->
            <div class="flex overflow-x-auto no-scrollbar gap-4 sm:gap-6 pb-4 pt-1 snap-x scroll-smooth">
                <?php
                $satin_products = fluff_get_section_products( 'satin', $fluff_used_ids, 6 );
                if ( ! empty( $satin_products ) ) {
                    foreach ( $satin_products as $product ) {
                        fluff_render_product_card( $product );
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Section 3: Best Selling Patterned & Everyday Pyjamas -->
    <section class="py-8 md:py-12" id="patterned-section" style="background-color: #F8F6EF;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-6">
                <div>
                    <span class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold block" style="color: #647A96;">SUMMER FAVORITES</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-3xl font-extrabold tracking-tight" style="color: #1F2F4F;">Everyday &amp; Patterned</h2>
                </div>
                <a class="font-label-md text-label-md font-bold flex items-center gap-0.5 hover:text-[#D4B586] transition-colors" style="color: #1F2F4F;" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>">
                    See 24+ <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                </a>
            </div>

            <!-- 1-Row Horizontally Scrolling Patterned Cards (No borders, Off-white background) -->
            <div class="flex overflow-x-auto no-scrollbar gap-4 sm:gap-6 pb-4 pt-1 snap-x scroll-smooth">
                <?php
                $patterned_products = fluff_get_section_products( 'patterned', $fluff_used_ids, 6 );
                if ( ! empty( $patterned_products ) ) {
                    foreach ( $patterned_products as $product ) {
                        fluff_render_product_card( $product );
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Section 4: Winter & Curated Ribbed Loungewear (1 Row Horizontal Scroll) -->
    <section class="py-8 md:py-12" id="winter-section" style="background-color: #F8F6EF;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-6">
                <div>
                    <span class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold block" style="color: #647A96;">COZY LUXURY &amp; WARMTH</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-3xl font-extrabold tracking-tight" style="color: #1F2F4F;">Winter Ribbed &amp; Robes</h2>
                </div>
                <a class="font-label-md text-label-md font-bold flex items-center gap-1 hover:text-[#D4B586] transition-colors" style="color: #1F2F4F;" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>">
                    View all <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                </a>
            </div>

            <!-- 1-Row Horizontally Scrolling Winter Cards (No borders, Off-white background) -->
            <div class="flex overflow-x-auto no-scrollbar gap-4 sm:gap-6 pb-4 pt-1 snap-x scroll-smooth">
                <?php
                $winter_products = fluff_get_section_products( 'winter', $fluff_used_ids, 6 );
                if ( ! empty( $winter_products ) ) {
                    foreach ( $winter_products as $product ) {
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