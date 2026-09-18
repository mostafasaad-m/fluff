<?php
/**
 * FLUFF Sleepwear Theme Footer
 * Crafted for FLUFF Sleepwear (vitaldc.com)
 */

$wa_phone = fluff_get_option( 'fluff_whatsapp', '201000000000' );
$wa_url   = 'https://wa.me/' . preg_replace( '/[^0-9]/', '', $wa_phone );
?>
</main><!-- /main -->

<!-- Floating Live WhatsApp Concierge Button -->
<aside class="fixed bottom-20 lg:bottom-6 right-4 z-40 pointer-events-auto pb-safe">
    <a class="flex items-center gap-2 bg-[#25D366] text-white px-4 py-2.5 rounded-full shadow-[0_8px_24px_-2px_rgba(37,211,102,0.35)] hover:bg-[#20ba59] active:scale-95 transition-all duration-200 group" href="<?php echo esc_url( $wa_url ); ?>" rel="noopener noreferrer" target="_blank">
        <span class="material-symbols-outlined text-[20px]">chat</span>
        <span class="font-body-md text-body-md font-semibold tracking-normal text-white">Concierge</span>
        <span class="material-symbols-outlined text-[16px] transition-transform group-hover:translate-x-0.5">arrow_forward_ios</span>
    </a>
</aside>

<!-- Global Editorial Footer in Midnight Blue (#1F2F4F) -->
<footer class="bg-[#1F2F4F] text-[#F8F6EF] pt-0 pb-28 lg:pb-12 relative overflow-hidden" style="background-color: #1F2F4F; color: #F8F6EF;">
    <!-- 4-Pillar Slow-Luxury Trust Strip -->
    <div class="border-b border-t" style="background-color: #16233B; border-color: rgba(212, 181, 134, 0.2);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-7">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Pillar 1: Dual Fulfillment Hubs -->
                <div class="flex items-center gap-3.5">
                    <div class="w-12 h-12 rounded-none flex items-center justify-center shrink-0 border" style="background-color: rgba(212, 181, 134, 0.1); border-color: rgba(212, 181, 134, 0.35); color: #D4B586;">
                        <span class="material-symbols-outlined text-[24px]">local_shipping</span>
                    </div>
                    <div>
                        <h4 class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold" style="color: #D4B586;">Cairo &amp; Istanbul Express</h4>
                        <p class="text-xs mt-0.5" style="color: rgba(248, 246, 239, 0.75);">Cairo 2–4d • Istanbul Direct 10–12d</p>
                    </div>
                </div>
                <!-- Pillar 2: Fabric-Touch Window Box -->
                <div class="flex items-center gap-3.5">
                    <div class="w-12 h-12 rounded-none flex items-center justify-center shrink-0 border" style="background-color: rgba(212, 181, 134, 0.1); border-color: rgba(212, 181, 134, 0.35); color: #D4B586;">
                        <span class="material-symbols-outlined text-[24px]">redeem</span>
                    </div>
                    <div>
                        <h4 class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold" style="color: #D4B586;">Fabric-Touch Window Box</h4>
                        <p class="text-xs mt-0.5" style="color: rgba(248, 246, 239, 0.75);">Touch before unsealing • Gift-ready</p>
                    </div>
                </div>
                <!-- Pillar 3: 14-Day Exchange -->
                <div class="flex items-center gap-3.5">
                    <div class="w-12 h-12 rounded-none flex items-center justify-center shrink-0 border" style="background-color: rgba(212, 181, 134, 0.1); border-color: rgba(212, 181, 134, 0.35); color: #D4B586;">
                        <span class="material-symbols-outlined text-[24px]">published_with_changes</span>
                    </div>
                    <div>
                        <h4 class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold" style="color: #D4B586;">14-Day Doorstep Exchange</h4>
                        <p class="text-xs mt-0.5" style="color: rgba(248, 246, 239, 0.75);">Hassle-free hygienic seal exchange</p>
                    </div>
                </div>
                <!-- Pillar 4: Payment Privileges -->
                <div class="flex items-center gap-3.5">
                    <div class="w-12 h-12 rounded-none flex items-center justify-center shrink-0 border" style="background-color: rgba(212, 181, 134, 0.1); border-color: rgba(212, 181, 134, 0.35); color: #D4B586;">
                        <span class="material-symbols-outlined text-[24px]">payments</span>
                    </div>
                    <div>
                        <h4 class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold" style="color: #D4B586;">COD &amp; Visa Privileges</h4>
                        <p class="text-xs mt-0.5" style="color: rgba(248, 246, 239, 0.75);">Pay cash on delivery • Up to 20% off Visa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Editorial Links & Brand Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8">
            
            <!-- Column 1: Brand Essence & Dual Ateliers (Spans 4 cols on lg) -->
            <div class="lg:col-span-4 flex flex-col gap-4">
                <div class="flex items-center gap-3">
                    <img src="https://qamareen.vitaldc.com/wp-content/uploads/2026/09/logo-light.png" alt="<?php bloginfo('name'); ?>" class="h-8 lg:h-9 w-auto object-contain" />
                    <span class="px-2 py-0.5 font-label-badge text-[10px] uppercase font-bold tracking-widest border" style="background-color: rgba(212, 181, 134, 0.15); border-color: rgba(212, 181, 134, 0.35); color: #D4B586;">SLOW LUXURY</span>
                </div>
                <p class="font-arabic-sub text-base font-semibold" style="color: #F8F6EF;">
                    راحتك.. أحلامك.. وانتمائك | القاهرة وإسطنبول
                </p>
                <p class="font-body-sm text-sm leading-relaxed" style="color: rgba(248, 246, 239, 0.8);">
                    Thoughtfully designed sleepwear crafted between our Istanbul design ateliers and Cairo delivery hubs. Tailored with pure organic Turkish cotton, liquid touch satin, and ultra-soft ribbed knitwear for effortless everyday elegance.
                </p>

               
                <!-- Direct Concierge Button -->
                <div class="pt-2">
                    <a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2.5 px-4 py-2.5 border transition-all duration-200 hover:scale-[1.02] active:scale-95" style="background-color: rgba(37, 211, 102, 0.12); border-color: rgba(37, 211, 102, 0.4); color: #F8F6EF;">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#25D366] animate-pulse"></span>
                        <span class="font-label-md text-xs uppercase font-bold tracking-wider">WhatsApp Live Concierge</span>
                        <span class="material-symbols-outlined text-[16px]" style="color: #25D366;">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Column 2: Collections & Sleepwear (Spans 2 cols on lg) -->
            <div class="lg:col-span-2 flex flex-col gap-3 font-body-sm text-sm">
                <span class="font-label-badge text-xs uppercase tracking-widest font-extrabold pb-1 border-b" style="color: #D4B586; border-color: rgba(212, 181, 134, 0.25);">COLLECTIONS</span>
                <div class="flex flex-col gap-2.5 pt-1" style="color: rgba(248, 246, 239, 0.85);">
                    <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/') ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>All Sleepwear</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( home_url('/#new-drops') ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>New Arrivals &amp; Drops</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( home_url('/#satin-section') ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>Satin Shorts &amp; Sets</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( home_url('/#patterned-section') ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>Everyday &amp; Patterned</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( home_url('/#winter-section') ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>Winter Ribbed &amp; Robes</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( home_url('/category-special-collection/') ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>Isdal Family Collection</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/') ); ?>?stock_type=ready" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>Ready Stock (Cairo 2-4d)</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/') ); ?>?stock_type=preorder" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>Istanbul Pre-Order</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                </div>
            </div>

            <!-- Column 3: Bespoke Services & Guides (Spans 2 cols on lg) -->
            <div class="lg:col-span-2 flex flex-col gap-3 font-body-sm text-sm">
                <span class="font-label-badge text-xs uppercase tracking-widest font-extrabold pb-1 border-b" style="color: #D4B586; border-color: rgba(212, 181, 134, 0.25);">BESPOKE SERVICES</span>
                <div class="flex flex-col gap-2.5 pt-1" style="color: rgba(248, 246, 239, 0.85);">
                    <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>Sizing &amp; Fit Advisor</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>Luxury Gift Box Experience</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( home_url('/category-special-collection/') ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>Winter Signature Edit</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>Fabric-Touch Window Info</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>Hygienic Seal Standards</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>Silk &amp; Modal Care Guide</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                </div>
            </div>

            <!-- Column 4: Customer Care & Assistance (Spans 2 cols on lg) -->
            <div class="lg:col-span-2 flex flex-col gap-3 font-body-sm text-sm">
                <span class="font-label-badge text-xs uppercase tracking-widest font-extrabold pb-1 border-b" style="color: #D4B586; border-color: rgba(212, 181, 134, 0.25);">CUSTOMER CARE</span>
                <div class="flex flex-col gap-2.5 pt-1" style="color: rgba(248, 246, 239, 0.85);">
                    <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : '#' ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>My Account &amp; Orders</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( function_exists('wc_get_cart_url') ? wc_get_cart_url() : '#' ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>Shopping Bag &amp; Cart</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( function_exists('wc_get_checkout_url') ? wc_get_checkout_url() : '#' ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>Express Checkout</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>14-Day Exchange Policy</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group">
                        <span>Shipping Rates &amp; Hubs</span>
                        <span class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">chevron_right</span>
                    </a>
                    <a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" rel="noopener noreferrer" class="hover:text-[#D4B586] transition-colors flex items-center justify-between group font-semibold text-[#25D366]">
                        <span>Live WhatsApp Support</span>
                        <span class="material-symbols-outlined text-[14px]">chat</span>
                    </a>
                </div>
            </div>

            <!-- Column 5: FLUFF VIP Club & Social Story (Spans 2 cols on lg) -->
            <div class="lg:col-span-2 flex flex-col gap-3 font-body-sm text-sm">
                <span class="font-label-badge text-xs uppercase tracking-widest font-extrabold pb-1 border-b" style="color: #D4B586; border-color: rgba(212, 181, 134, 0.25);">THE FLUFF CLUB</span>
                <p class="text-xs leading-relaxed pt-1" style="color: rgba(248, 246, 239, 0.8);">
                    Join our private circle for 10% off your first order, exclusive restock alerts, and seasonal preview drops.
                </p>

                <!-- Newsletter Quick Subscription Form -->
                <form class="flex flex-col gap-2 mt-1" onsubmit="handleNewsletter(event)">
                    <div class="relative">
                        <input class="w-full px-3 py-2.5 text-xs bg-[#16233B] text-[#F8F6EF] placeholder:text-[#647A96] border focus:outline-none focus:border-[#D4B586] transition-colors" style="border-color: rgba(212, 181, 134, 0.3);" id="emailInputFooter" placeholder="Your email address..." required="" type="email" />
                    </div>
                    <button class="w-full py-2.5 font-label-md text-xs font-bold uppercase tracking-wider transition-all duration-200 hover:brightness-110 active:scale-98 shadow-sm flex items-center justify-center gap-1.5" style="background-color: #D4B586; color: #1F2F4F;" type="submit">
                        <span>Get 10% Off</span>
                        <span class="material-symbols-outlined text-[15px]">arrow_forward</span>
                    </button>
                </form>

                <!-- Social Channels -->
                <div class="pt-2">
                    <span class="font-label-badge text-[10px] uppercase tracking-widest font-extrabold block mb-2" style="color: #D4B586;">
                        FOLLOW OUR STORY
                    </span>
                    <div class="flex items-center gap-2.5">
                        <a aria-label="Instagram" class="w-8 h-8 rounded-none flex items-center justify-center border transition-all duration-200 hover:bg-[#D4B586] hover:text-[#1F2F4F] hover:scale-105" style="background-color: #16233B; border-color: rgba(212, 181, 134, 0.3); color: #F8F6EF;" href="https://www.instagram.com/fluff.egypt/" rel="noopener noreferrer" target="_blank">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a aria-label="TikTok" class="w-8 h-8 rounded-none flex items-center justify-center border transition-all duration-200 hover:bg-[#D4B586] hover:text-[#1F2F4F] hover:scale-105" style="background-color: #16233B; border-color: rgba(212, 181, 134, 0.3); color: #F8F6EF;" href="https://tiktok.com/@fluff.egypt/" rel="noopener noreferrer" target="_blank">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.24 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                        </a>
                        <a aria-label="Facebook" class="w-8 h-8 rounded-none flex items-center justify-center border transition-all duration-200 hover:bg-[#D4B586] hover:text-[#1F2F4F] hover:scale-105" style="background-color: #16233B; border-color: rgba(212, 181, 134, 0.3); color: #F8F6EF;" href="https://www.facebook.com/fluff.egypt" rel="noopener noreferrer" target="_blank">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Payment Badges & Trust Accreditations Bar -->
        <div class="mt-12 pt-8 border-t flex flex-col md:flex-row items-center justify-between gap-6" style="border-color: rgba(212, 181, 134, 0.2);">
            <div class="flex flex-wrap items-center justify-center md:justify-start gap-2.5 text-xs font-medium" style="color: rgba(248, 246, 239, 0.75);">
                <span class="font-label-badge text-[11px] uppercase tracking-wider font-extrabold mr-2" style="color: #D4B586;">Accepted Payments:</span>
                <span class="px-2.5 py-1 border text-[11px] font-bold" style="background-color: #16233B; border-color: rgba(212, 181, 134, 0.25); color: #F8F6EF;">Cash on Delivery (COD)</span>
                <span class="px-2.5 py-1 border text-[11px] font-bold" style="background-color: #16233B; border-color: rgba(212, 181, 134, 0.25); color: #F8F6EF;">Visa (-20% Online Discount)</span>
                <span class="px-2.5 py-1 border text-[11px] font-bold" style="background-color: #16233B; border-color: rgba(212, 181, 134, 0.25); color: #F8F6EF;">Mastercard</span>
                <span class="px-2.5 py-1 border text-[11px] font-bold" style="background-color: #16233B; border-color: rgba(212, 181, 134, 0.25); color: #F8F6EF;">Meeza ميزة</span>
                <span class="px-2.5 py-1 border text-[11px] font-bold" style="background-color: #16233B; border-color: rgba(212, 181, 134, 0.25); color: #F8F6EF;">ValU Installments</span>
            </div>
            <div class="flex items-center gap-2 text-xs" style="color: #D4B586;">
                <span class="material-symbols-outlined text-[18px]">verified_user</span>
                <span class="font-label-badge text-[11px] tracking-wider uppercase font-bold">256-Bit SSL Encrypted &amp; Hygiene-Sealed Guarantee</span>
            </div>
        </div>

        <!-- Copyright & Legal Sub-Footer Bar -->
        <div class="mt-6 pt-6 border-t flex flex-col md:flex-row items-center justify-between text-xs gap-4 text-center md:text-left" style="border-color: rgba(212, 181, 134, 0.15); color: rgba(248, 246, 239, 0.7);">
            <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4">
                <p>© <?php echo date('Y'); ?> FLUFF Sleepwear. All rights reserved. Handcrafted between Cairo &amp; Istanbul.</p>
                <span class="hidden sm:inline" style="color: rgba(212, 181, 134, 0.4);">|</span>
                <div class="flex items-center gap-3">
                    <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="hover:text-[#D4B586] transition-colors">Privacy Policy</a>
                    <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="hover:text-[#D4B586] transition-colors">Terms of Service</a>
                    <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="hover:text-[#D4B586] transition-colors">Hygiene Seal Guarantee</a>
                </div>
            </div>
            <p class="font-medium" style="color: #D4B586;">
                Crafted for <a href="https://vitaldc.com" target="_blank" rel="noopener" class="underline hover:text-white transition-colors font-bold">vitaldc.com</a>
            </p>
        </div>
    </div>
</footer>

<!-- Slide-Over WooCommerce Cart Drawer Modal -->
<div id="fluffCartDrawer" class="fixed inset-0 z-50 transition-all duration-300 transform translate-x-full pointer-events-none">
    <div class="absolute inset-0 bg-[#1F2F4F]/60 backdrop-blur-sm close-cart-btn"></div>
    <div class="absolute right-0 top-0 bottom-0 w-full max-w-md shadow-2xl flex flex-col justify-between z-10 border-l" style="background-color: #F8F6EF; border-color: #B7C7D9;">
        <div class="p-4 border-b flex items-center justify-between" style="background-color: #F0EDE4; border-color: #B7C7D9;">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[22px]" style="color: #1F2F4F;">shopping_bag</span>
                <h3 class="font-headline-sm text-headline-sm font-bold" style="color: #1F2F4F;">Your Shopping Bag</h3>
            </div>
            <button class="w-9 h-9 rounded-full flex items-center justify-center transition-colors close-cart-btn" style="background-color: #FFFFFF; color: #1F2F4F; border: 1px solid #B7C7D9;" aria-label="Close Cart">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>

        <div class="flex-1 overflow-y-auto p-4 space-y-4" style="background-color: #F8F6EF;">
            <?php
            if ( function_exists('WC') && WC()->cart && ! WC()->cart->is_empty() ) :
                foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                    $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                    $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
                    if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 ) :
                        $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                        ?>
                        <div class="flex items-center gap-3 p-3 bg-white shadow-sm border" style="border-color: #B7C7D9;">
                            <div class="w-16 h-20 overflow-hidden shrink-0 bg-[#F0EDE4]">
                                <?php echo $_product->get_image( 'thumbnail', array( 'class' => 'w-full h-full object-cover' ) ); ?>
                            </div>
                            <div class="flex-1 min-w-0 flex flex-col justify-between">
                                <div class="flex items-start justify-between">
                                    <h4 class="font-label-md text-label-md font-bold truncate" style="color: #1F2F4F;"><?php echo $_product->get_name(); ?></h4>
                                    <?php
                                    echo apply_filters(
                                        'woocommerce_cart_item_remove_link',
                                        sprintf(
                                            '<a href="%s" class="hover:opacity-75 transition-opacity ml-1" style="color: #647A96;" aria-label="%s" data-product_id="%s" data-cart_item_key="%s"><span class="material-symbols-outlined text-[18px]">delete</span></a>',
                                            esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                            esc_attr__( 'Remove this item', 'woocommerce' ),
                                            esc_attr( $product_id ),
                                            esc_attr( $cart_item_key )
                                        ),
                                        $cart_item_key
                                    );
                                    ?>
                                </div>
                                <span class="font-body-sm text-body-sm font-medium" style="color: #647A96;">Qty: <?php echo esc_html( $cart_item['quantity'] ); ?></span>
                                <span class="font-label-md text-label-md font-bold mt-1" style="color: #1F2F4F;"><?php echo WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ); ?></span>
                            </div>
                        </div>
                    <?php
                    endif;
                endforeach;
            else :
            ?>
                <div class="py-12 flex flex-col items-center justify-center text-center space-y-3">
                    <div class="w-16 h-16 bg-white flex items-center justify-center border shadow-sm" style="border-color: #B7C7D9;">
                        <span class="material-symbols-outlined text-[32px]" style="color: #1F2F4F;">shopping_bag</span>
                    </div>
                    <p class="font-headline-sm text-headline-sm font-bold" style="color: #1F2F4F;">Your bag is empty</p>
                    <p class="font-body-sm text-body-sm max-w-xs font-medium" style="color: #647A96;">Explore our slow-luxury sleepwear collections crafted in Istanbul and Cairo.</p>
                    <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/') ); ?>" class="mt-2 px-6 py-2.5 font-label-md text-label-md font-bold transition-all shadow-md" style="background-color: #1F2F4F; color: #FFFFFF;">
                        Browse Sleepwear Catalog
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <div class="p-4 border-t space-y-3" style="background-color: #F0EDE4; border-color: #B7C7D9;">
            <div class="flex items-center justify-between text-body-md font-body-md font-bold" style="color: #1F2F4F;">
                <span>Subtotal</span>
                <span><?php echo ( function_exists('WC') && WC()->cart ) ? WC()->cart->get_cart_subtotal() : '0.00 EGP'; ?></span>
            </div>
            <p class="font-body-sm text-body-sm text-xs" style="color: #647A96;">Shipping and taxes calculated at checkout. Includes complimentary gift box.</p>
            <div class="grid grid-cols-2 gap-2 pt-1">
                <a href="<?php echo esc_url( function_exists('wc_get_cart_url') ? wc_get_cart_url() : '#' ); ?>" class="w-full py-3 bg-white border font-label-md text-label-md font-bold text-center transition-colors" style="color: #1F2F4F; border-color: #B7C7D9;">
                    View Bag
                </a>
                <a href="<?php echo esc_url( function_exists('wc_get_checkout_url') ? wc_get_checkout_url() : '#' ); ?>" class="w-full py-3 font-label-md text-label-md font-bold text-center transition-all shadow-md" style="background-color: #1F2F4F; color: #FFFFFF;">
                    Checkout
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Search Modal -->
<div id="fluffSearchModal" class="fixed inset-0 z-50 bg-[#1F2F4F]/60 backdrop-blur-md hidden flex items-start justify-center pt-20 px-4">
    <div class="w-full max-w-lg p-5 shadow-2xl space-y-4 border" style="background-color: #F8F6EF; border-color: #B7C7D9;">
        <div class="flex items-center justify-between">
            <h3 class="font-headline-sm text-headline-sm font-bold" style="color: #1F2F4F;">Search FLUFF</h3>
            <button data-action="close-search" class="w-8 h-8 bg-white flex items-center justify-center border" style="color: #1F2F4F; border-color: #B7C7D9;">
                <span class="material-symbols-outlined text-[18px]">close</span>
            </button>
        </div>
        <form role="search" method="get" class="relative" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="search" class="w-full py-3.5 pl-11 pr-4 bg-white placeholder:text-[#647A96] border focus:outline-none focus:ring-2 focus:ring-[#1F2F4F] font-body-md" style="color: #1F2F4F; border-color: #B7C7D9;" placeholder="Search sleepwear, satin, silk, cotton..." value="<?php echo get_search_query(); ?>" name="s" />
            <input type="hidden" name="post_type" value="product" />
            <span class="material-symbols-outlined absolute left-3.5 top-4 text-[20px]" style="color: #647A96;">search</span>
        </form>
    </div>
</div>

<!-- High Contrast 100% Solid Mobile Navigation Drawer -->
<div id="fluffMobileMenu" class="fixed inset-0 z-[999999] hidden flex flex-col justify-between p-6 overflow-y-auto" style="background-color: #F8F6EF !important; background: #F8F6EF !important; opacity: 1 !important; z-index: 999999 !important;">
    <!-- Drawer Header Bar -->
    <div class="flex items-center justify-between border-b pb-4 shrink-0" style="border-color: #B7C7D9 !important; background-color: #F8F6EF !important;">
        <div class="flex items-center justify-start">
            <img src="https://qamareen.vitaldc.com/wp-content/uploads/2026/09/logo-dark.png" alt="<?php bloginfo( 'name' ); ?>" class="h-8 w-auto object-contain" />
        </div>
        <button data-action="close-menu" class="w-10 h-10 flex items-center justify-center shadow-sm active:scale-95 transition-transform" style="background-color: #ffffff !important; border: 1px solid #B7C7D9 !important; color: #1F2F4F !important;" aria-label="Close Menu">
            <span class="material-symbols-outlined text-[22px]" style="color: #1F2F4F !important;">close</span>
        </button>
    </div>

    <!-- Crisp High-Contrast Navigation Link Cards -->
    <div class="flex flex-col gap-3 py-6 my-auto">
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="p-3.5 shadow-sm font-headline-sm text-headline-sm font-bold flex items-center justify-between active:scale-[0.99] transition-transform" style="background-color: #ffffff !important; border: 1px solid #B7C7D9 !important; color: #1F2F4F !important;">
            <span class="flex items-center gap-3">
                <span class="material-symbols-outlined text-[22px]" style="color: #1F2F4F !important;">home</span>
                <span style="color: #1F2F4F !important; font-weight: 700;">Home</span>
            </span>
            <span class="material-symbols-outlined text-[18px]" style="color: #647A96 !important;">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" class="p-3.5 shadow-sm font-headline-sm text-headline-sm font-bold flex items-center justify-between active:scale-[0.99] transition-transform" style="background-color: #ffffff !important; border: 1px solid #B7C7D9 !important; color: #1F2F4F !important;">
            <span class="flex items-center gap-3">
                <span class="material-symbols-outlined text-[22px]" style="color: #1F2F4F !important;">grid_view</span>
                <span style="color: #1F2F4F !important; font-weight: 700;">Shop All Catalog</span>
            </span>
            <span class="material-symbols-outlined text-[18px]" style="color: #647A96 !important;">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( home_url('/#new-drops') ); ?>" class="p-3.5 shadow-sm font-headline-sm text-headline-sm font-bold flex items-center justify-between active:scale-[0.99] transition-transform" style="background-color: #ffffff !important; border: 1px solid #B7C7D9 !important; color: #1F2F4F !important;">
            <span class="flex items-center gap-3">
                <span class="material-symbols-outlined text-[22px]" style="color: #D4B586 !important;">local_fire_department</span>
                <span style="color: #1F2F4F !important; font-weight: 700;">New Arrivals</span>
            </span>
            <span class="material-symbols-outlined text-[18px]" style="color: #647A96 !important;">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( home_url('/#satin-section') ); ?>" class="p-3.5 shadow-sm font-headline-sm text-headline-sm font-bold flex items-center justify-between active:scale-[0.99] transition-transform" style="background-color: #ffffff !important; border: 1px solid #B7C7D9 !important; color: #1F2F4F !important;">
            <span class="flex items-center gap-3">
                <span class="material-symbols-outlined text-[22px]" style="color: #1F2F4F !important;">bedtime</span>
                <span style="color: #1F2F4F !important; font-weight: 700;">Satin Shorts</span>
            </span>
            <span class="material-symbols-outlined text-[18px]" style="color: #647A96 !important;">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( home_url('/category-special-collection/') ); ?>" class="p-3.5 shadow-sm font-headline-sm text-headline-sm font-bold flex items-center justify-between active:scale-[0.99] transition-transform" style="background-color: #ffffff !important; border: 1px solid #B7C7D9 !important; color: #1F2F4F !important;">
            <span class="flex items-center gap-3">
                <span class="material-symbols-outlined text-[22px]" style="color: #1F2F4F !important;">ac_unit</span>
                <span style="color: #1F2F4F !important; font-weight: 700;">Winter Special Edit</span>
            </span>
            <span class="material-symbols-outlined text-[18px]" style="color: #647A96 !important;">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="p-3.5 shadow-sm font-headline-sm text-headline-sm font-bold flex items-center justify-between active:scale-[0.99] transition-transform" style="background-color: #ffffff !important; border: 1px solid #B7C7D9 !important; color: #1F2F4F !important;">
            <span class="flex items-center gap-3">
                <span class="material-symbols-outlined text-[22px]" style="color: #1F2F4F !important;">straighten</span>
                <span style="color: #1F2F4F !important; font-weight: 700;">Sizing &amp; Fit Advisor</span>
            </span>
            <span class="material-symbols-outlined text-[18px]" style="color: #647A96 !important;">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="p-3.5 shadow-sm font-headline-sm text-headline-sm font-bold flex items-center justify-between active:scale-[0.99] transition-transform" style="background-color: #ffffff !important; border: 1px solid #B7C7D9 !important; color: #1F2F4F !important;">
            <span class="flex items-center gap-3">
                <span class="material-symbols-outlined text-[22px]" style="color: #1F2F4F !important;">local_shipping</span>
                <span style="color: #1F2F4F !important; font-weight: 700;">Shipping &amp; Gift Box</span>
            </span>
            <span class="material-symbols-outlined text-[18px]" style="color: #647A96 !important;">arrow_forward_ios</span>
        </a>
    </div>

    <!-- Drawer Footer -->
    <div class="pt-4 border-t text-xs font-medium flex items-center justify-between shrink-0" style="border-color: #B7C7D9 !important; color: #647A96 !important; background-color: #F8F6EF !important;">
        <span>Crafted for FLUFF</span>
        <span class="font-bold" style="color: #1F2F4F !important;">vitaldc.com</span>
    </div>
</div>

<!-- Dynamic Notification Toast (Micro-interaction) -->
<div class="fixed top-24 left-1/2 -translate-x-1/2 z-50 transition-all duration-300 transform -translate-y-12 opacity-0 pointer-events-none" id="toastNotification">
    <div class="px-4 py-2 rounded-full shadow-lg flex items-center gap-2" style="background-color: #1F2F4F; color: #F8F6EF;">
        <span class="material-symbols-outlined text-[18px]" style="color: #D4B586;">favorite</span>
        <span class="font-label-md text-label-md" id="toastMessage">Added to wishlist</span>
    </div>
</div>

<!-- Mobile Bottom Navigation Bar (Hidden on PC/Desktop >= 1024px, Clear 25% per item) -->
<nav class="fixed bottom-0 left-0 right-0 w-full z-40 pb-safe shadow-[0_-2px_12px_rgba(31,47,79,0.08)] border-t lg:hidden mobile-only-control" style="background-color: rgba(248, 246, 239, 0.98); backdrop-filter: blur(16px); border-color: #B7C7D9;">
    <div class="grid grid-cols-4 w-full h-16 max-w-lg mx-auto">
        <a aria-current="page" class="w-full h-full flex flex-col items-center justify-center transition-colors gap-1 font-label-md font-bold text-center" style="color: #1F2F4F;" data-path="home" href="<?php echo esc_url( home_url('/') ); ?>">
            <span class="material-symbols-outlined text-[22px]">home</span>
            <span class="text-[11px] font-bold leading-none tracking-wide">Home</span>
        </a>
        <a class="w-full h-full flex flex-col items-center justify-center hover:opacity-100 transition-colors gap-1 text-center" style="color: #647A96;" data-path="collections" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/') ); ?>">
            <span class="material-symbols-outlined text-[22px]">grid_view</span>
            <span class="text-[11px] font-bold leading-none tracking-wide">Catalog</span>
        </a>
        <a class="w-full h-full flex flex-col items-center justify-center hover:opacity-100 transition-colors gap-1 text-center" style="color: #647A96;" data-path="wishlist" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>">
            <span class="material-symbols-outlined text-[22px]">favorite_border</span>
            <span class="text-[11px] font-bold leading-none tracking-wide">Wishlist</span>
        </a>
        <a class="w-full h-full flex flex-col items-center justify-center hover:opacity-100 transition-colors gap-1 text-center" style="color: #647A96;" data-path="account" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : '#' ); ?>">
            <span class="material-symbols-outlined text-[22px]">person</span>
            <span class="text-[11px] font-bold leading-none tracking-wide">Account</span>
        </a>
    </div>
</nav>

<?php wp_footer(); ?>
</body>
</html>
