<?php
/**
 * FLUFF Sleepwear Theme Footer
 * Designed & Developed by Mostafa Saad (vitaldc.com)
 */

$wa_phone = fluff_get_option( 'fluff_whatsapp', '201000000000' );
$wa_url   = 'https://wa.me/' . preg_replace( '/[^0-9]/', '', $wa_phone );
?>
</main><!-- /main -->

<!-- Floating Live WhatsApp Concierge Button -->
<aside class="fixed bottom-6 right-4 z-40 pointer-events-auto pb-safe">
    <a class="flex items-center gap-2 bg-[#25D366] text-white px-4 py-2.5 rounded-full shadow-[0_8px_24px_-2px_rgba(37,211,102,0.35)] hover:bg-[#20ba59] active:scale-95 transition-all duration-200" href="<?php echo esc_url( $wa_url ); ?>" rel="noopener noreferrer" target="_blank">
        <span class="material-symbols-outlined text-[20px]">chat</span>
        <span class="font-body-md text-body-md font-semibold tracking-normal text-white">Concierge</span>
        <span class="material-symbols-outlined text-[16px]">arrow_forward_ios</span>
    </a>
</aside>

<!-- Global Editorial Footer in Midnight Blue (#1F2F4F) -->
<footer class="bg-[#1F2F4F] text-[#F8F6EF] pt-12 pb-24 px-4 relative overflow-hidden" style="background-color: #1F2F4F; color: #F8F6EF;">
    <div class="max-w-4xl mx-auto flex flex-col gap-8">
        <!-- Footer Header & Branding -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6 border-b border-white/15 pb-8" style="border-color: rgba(183, 199, 217, 0.25);">
            <div class="flex flex-col gap-2">
                <div class="flex items-center gap-2">
                    <span class="font-headline-md text-headline-md tracking-tight font-extrabold text-2xl uppercase" style="color: #F8F6EF;">FLUFF</span>
                </div>
                <p class="font-arabic-sub text-arabic-sub font-medium" style="color: rgba(248, 246, 239, 0.85);">
                    راحتك.. أحلامك.. وانتمائك | القاهرة وإسطنبول
                </p>
            </div>
            <div class="flex items-center gap-3">
                <div class="px-3.5 py-1.5 font-label-badge text-label-badge uppercase flex items-center gap-1.5 font-bold" style="background-color: #647A96; color: #ffffff;">
                    <span class="material-symbols-outlined text-[14px]">local_shipping</span>
                    <span>Cairo Express (<?php echo esc_html( fluff_get_option('fluff_cairo_delivery', '2-4d') ); ?>)</span>
                </div>
                <div class="px-3.5 py-1.5 font-label-badge text-label-badge uppercase flex items-center gap-1.5 font-bold" style="background-color: #D8B4C1; color: #1F2F4F;">
                    <span class="material-symbols-outlined text-[14px]">flight_takeoff</span>
                    <span>Istanbul Special (<?php echo esc_html( fluff_get_option('fluff_istanbul_delivery', '10-12d') ); ?>)</span>
                </div>
            </div>
        </div>

        <!-- Links Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 font-body-sm text-body-sm" style="color: rgba(248, 246, 239, 0.85);">
            <div class="flex flex-col gap-2">
                <span class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold" style="color: #D4B586;">Collections</span>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" class="hover:text-[#D4B586] transition-colors" style="color: #F8F6EF;">All Sleepwear</a>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>?stock_type=ready" class="hover:text-[#D4B586] transition-colors" style="color: #F8F6EF;">Ready Stock (Cairo)</a>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>?stock_type=preorder" class="hover:text-[#D4B586] transition-colors" style="color: #F8F6EF;">Pre-Order (Istanbul)</a>
            </div>
            <div class="flex flex-col gap-2">
                <span class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold" style="color: #D4B586;">Bespoke Guidance</span>
                <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="hover:text-[#D4B586] transition-colors" style="color: #F8F6EF;">Sizing &amp; Fit Advisor</a>
                <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="hover:text-[#D4B586] transition-colors" style="color: #F8F6EF;">Luxury Gift Box &amp; Delivery</a>
                <a href="<?php echo esc_url( home_url('/category-special-collection/') ); ?>" class="hover:text-[#D4B586] transition-colors" style="color: #F8F6EF;">Winter Signature Edit</a>
            </div>
            <div class="flex flex-col gap-2">
                <span class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold" style="color: #D4B586;">Customer Care</span>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : '#' ); ?>" class="hover:text-[#D4B586] transition-colors" style="color: #F8F6EF;">My Orders &amp; Account</a>
                <a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" class="hover:text-[#D4B586] transition-colors flex items-center gap-1 font-semibold" style="color: #F8F6EF;">
                    <span class="material-symbols-outlined text-[16px] text-[#25D366]">chat</span> WhatsApp Concierge
                </a>
            </div>
            <div class="flex flex-col gap-2">
                <span class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold" style="color: #D4B586;">Craft &amp; Origin</span>
                <p class="text-xs leading-relaxed" style="color: rgba(248, 246, 239, 0.8);">
                    Hand-crafted using pure organic Turkish cotton and luxury fabrics between Istanbul ateliers and Cairo delivery hubs.
                </p>
            </div>
        </div>

        <!-- Copyright & Developer Credit -->
        <div class="pt-6 border-t flex flex-col sm:flex-row items-center justify-between text-xs gap-3" style="border-color: rgba(183, 199, 217, 0.25); color: rgba(248, 246, 239, 0.75);">
            <p>© <?php echo date('Y'); ?> FLUFF Sleepwear. All rights reserved.</p>
            <p class="font-semibold" style="color: #D4B586;">
                Designed &amp; Developed by <a href="https://vitaldc.com" target="_blank" rel="noopener" class="underline hover:text-white transition-colors">Mostafa Saad (vitaldc.com)</a>
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
        <div class="flex items-center gap-2">
            <span class="font-headline-md text-headline-md font-extrabold text-2xl uppercase tracking-tight" style="color: #1F2F4F !important;">FLUFF</span>
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
        <span>Crafted by Mostafa Saad</span>
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

<!-- Mobile Bottom Navigation Bar (Hidden on PC/Desktop >= 1024px) -->
<nav class="fixed bottom-0 w-full z-40 pb-safe shadow-[0_-2px_12px_rgba(31,47,79,0.08)] border-t lg:hidden mobile-only-control" style="background-color: rgba(248, 246, 239, 0.95); backdrop-filter: blur(16px); border-color: #B7C7D9;">
    <div class="flex justify-around items-center h-16 px-2">
        <a aria-current="page" class="flex flex-col items-center justify-center min-w-[64px] h-12 transition-colors gap-1 font-label-md font-bold" style="color: #1F2F4F;" data-path="home" href="<?php echo esc_url( home_url('/') ); ?>">
            <span class="material-symbols-outlined text-[22px]">home</span>
            <span class="font-label-md text-label-md">Home</span>
        </a>
        <a class="flex flex-col items-center justify-center min-w-[64px] h-12 hover:opacity-100 transition-colors gap-1" style="color: #647A96;" data-path="collections" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/') ); ?>">
            <span class="material-symbols-outlined text-[22px]">grid_view</span>
            <span class="font-label-md text-label-md">Catalog</span>
        </a>
        <a class="flex flex-col items-center justify-center min-w-[64px] h-12 hover:opacity-100 transition-colors gap-1" style="color: #647A96;" data-path="wishlist" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>">
            <span class="material-symbols-outlined text-[22px]">favorite_border</span>
            <span class="font-label-md text-label-md">Wishlist</span>
        </a>
        <a class="flex flex-col items-center justify-center min-w-[64px] h-12 hover:opacity-100 transition-colors gap-1" style="color: #647A96;" data-path="account" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : '#' ); ?>">
            <span class="material-symbols-outlined text-[22px]">person</span>
            <span class="font-label-md text-label-md">Account</span>
        </a>
    </div>
</nav>

<?php wp_footer(); ?>
</body>
</html>
