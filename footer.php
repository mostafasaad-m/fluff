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

<!-- Global Editorial Footer -->
<footer class="bg-[#1f1b1a] text-warm-white pt-12 pb-24 px-4 relative overflow-hidden">
    <div class="max-w-4xl mx-auto flex flex-col gap-8">
        <!-- Footer Header & Branding -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6 border-b border-white/15 pb-8">
            <div class="flex flex-col gap-2">
                <div class="flex items-center gap-2">
                    <span class="font-headline-md text-headline-md text-warm-white tracking-tight font-extrabold text-2xl uppercase">FLUFF</span>
                </div>
                <p class="font-arabic-sub text-arabic-sub text-warm-white/90 font-medium">
                    راحتك.. أحلامك.. وانتمائك | القاهرة وإسطنبول
                </p>
            </div>
            <div class="flex items-center gap-3">
                <div class="px-3.5 py-1.5 bg-primary/40 text-warm-white border border-primary/40 font-label-badge text-label-badge uppercase flex items-center gap-1.5 font-bold">
                    <span class="material-symbols-outlined text-[14px] text-sale-yellow">local_shipping</span>
                    <span>Cairo Express (<?php echo esc_html( fluff_get_option('fluff_cairo_delivery', '2-4d') ); ?>)</span>
                </div>
                <div class="px-3.5 py-1.5 bg-sale-yellow/20 text-sale-yellow border border-sale-yellow/30 font-label-badge text-label-badge uppercase flex items-center gap-1.5 font-bold">
                    <span class="material-symbols-outlined text-[14px]">flight_takeoff</span>
                    <span>Istanbul Special (<?php echo esc_html( fluff_get_option('fluff_istanbul_delivery', '10-12d') ); ?>)</span>
                </div>
            </div>
        </div>

        <!-- Links Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 font-body-sm text-body-sm text-warm-white/85">
            <div class="flex flex-col gap-2">
                <span class="font-label-badge text-label-badge text-sale-yellow uppercase tracking-wider font-extrabold">Collections</span>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" class="hover:text-sale-yellow transition-colors">All Sleepwear</a>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>?stock_type=ready" class="hover:text-sale-yellow transition-colors">Ready Stock (Cairo)</a>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>?stock_type=preorder" class="hover:text-sale-yellow transition-colors">Pre-Order (Istanbul)</a>
            </div>
            <div class="flex flex-col gap-2">
                <span class="font-label-badge text-label-badge text-sale-yellow uppercase tracking-wider font-extrabold">Bespoke Guidance</span>
                <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="hover:text-sale-yellow transition-colors">Sizing &amp; Fit Advisor</a>
                <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="hover:text-sale-yellow transition-colors">Luxury Gift Box &amp; Delivery</a>
                <a href="<?php echo esc_url( home_url('/category-special-collection/') ); ?>" class="hover:text-sale-yellow transition-colors">Winter Signature Edit</a>
            </div>
            <div class="flex flex-col gap-2">
                <span class="font-label-badge text-label-badge text-sale-yellow uppercase tracking-wider font-extrabold">Customer Care</span>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : '#' ); ?>" class="hover:text-sale-yellow transition-colors">My Orders &amp; Account</a>
                <a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" class="hover:text-sale-yellow transition-colors flex items-center gap-1 font-semibold text-white">
                    <span class="material-symbols-outlined text-[16px] text-[#25D366]">chat</span> WhatsApp Concierge
                </a>
            </div>
            <div class="flex flex-col gap-2">
                <span class="font-label-badge text-label-badge text-sale-yellow uppercase tracking-wider font-extrabold">Craft &amp; Origin</span>
                <p class="text-xs leading-relaxed text-warm-white/80">
                    Hand-crafted using pure organic Turkish cotton and luxury fabrics between Istanbul ateliers and Cairo delivery hubs.
                </p>
            </div>
        </div>

        <!-- Copyright & Developer Credit -->
        <div class="pt-6 border-t border-white/15 flex flex-col sm:flex-row items-center justify-between text-xs text-warm-white/75 gap-3">
            <p>© <?php echo date('Y'); ?> FLUFF Sleepwear. All rights reserved.</p>
            <p class="font-semibold text-sale-yellow">
                Designed &amp; Developed by <a href="https://vitaldc.com" target="_blank" rel="noopener" class="underline hover:text-white transition-colors">Mostafa Saad (vitaldc.com)</a>
            </p>
        </div>
    </div>
</footer>

<!-- Slide-Over WooCommerce Cart Drawer Modal -->
<div id="fluffCartDrawer" class="fixed inset-0 z-50 transition-all duration-300 transform translate-x-full pointer-events-none">
    <div class="absolute inset-0 bg-inverse-surface/60 backdrop-blur-sm close-cart-btn"></div>
    <div class="absolute right-0 top-0 bottom-0 w-full max-w-md bg-surface shadow-2xl flex flex-col justify-between z-10 border-l border-outline-variant">
        <div class="p-4 border-b border-surface-variant flex items-center justify-between bg-surface-container-lowest">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-[22px]">shopping_bag</span>
                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Your Shopping Bag</h3>
            </div>
            <button class="w-9 h-9 rounded-full bg-surface flex items-center justify-center text-on-surface hover:text-primary transition-colors close-cart-btn" aria-label="Close Cart">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>

        <div class="flex-1 overflow-y-auto p-4 space-y-4">
            <?php
            if ( function_exists('WC') && WC()->cart && ! WC()->cart->is_empty() ) :
                foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                    $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                    $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
                    if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 ) :
                        $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                        ?>
                        <div class="flex items-center gap-3 p-3 bg-surface-container-lowest shadow-sm border border-outline-variant">
                            <div class="w-16 h-20 overflow-hidden shrink-0 bg-surface-container">
                                <?php echo $_product->get_image( 'thumbnail', array( 'class' => 'w-full h-full object-cover' ) ); ?>
                            </div>
                            <div class="flex-1 min-w-0 flex flex-col justify-between">
                                <div class="flex items-start justify-between">
                                    <h4 class="font-label-md text-label-md text-on-surface font-bold truncate"><?php echo $_product->get_name(); ?></h4>
                                    <?php
                                    echo apply_filters(
                                        'woocommerce_cart_item_remove_link',
                                        sprintf(
                                            '<a href="%s" class="text-outline hover:text-error transition-colors ml-1" aria-label="%s" data-product_id="%s" data-cart_item_key="%s"><span class="material-symbols-outlined text-[18px]">delete</span></a>',
                                            esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                            esc_attr__( 'Remove this item', 'woocommerce' ),
                                            esc_attr( $product_id ),
                                            esc_attr( $cart_item_key )
                                        ),
                                        $cart_item_key
                                    );
                                    ?>
                                </div>
                                <span class="font-body-sm text-body-sm text-secondary font-medium">Qty: <?php echo esc_html( $cart_item['quantity'] ); ?></span>
                                <span class="font-label-md text-label-md text-primary font-bold mt-1"><?php echo WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ); ?></span>
                            </div>
                        </div>
                    <?php
                    endif;
                endforeach;
            else :
            ?>
                <div class="py-12 flex flex-col items-center justify-center text-center space-y-3">
                    <div class="w-16 h-16 bg-surface-container-lowest flex items-center justify-center text-primary border border-outline-variant shadow-sm">
                        <span class="material-symbols-outlined text-[32px]">shopping_bag</span>
                    </div>
                    <p class="font-headline-sm text-headline-sm text-on-surface font-bold">Your bag is empty</p>
                    <p class="font-body-sm text-body-sm text-secondary max-w-xs font-medium">Explore our luxury sleepwear collections crafted in Istanbul and Cairo.</p>
                    <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/') ); ?>" class="mt-2 px-6 py-2.5 bg-primary text-on-primary font-label-md text-label-md font-bold hover:bg-terracotta-rich transition-all shadow-md">
                        Browse Sleepwear Catalog
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <div class="p-4 border-t border-outline-variant bg-surface-container-lowest space-y-3">
            <div class="flex items-center justify-between text-body-md font-body-md text-on-surface font-bold">
                <span>Subtotal</span>
                <span><?php echo ( function_exists('WC') && WC()->cart ) ? WC()->cart->get_cart_subtotal() : '0.00 EGP'; ?></span>
            </div>
            <p class="font-body-sm text-body-sm text-secondary text-xs">Shipping and taxes calculated at checkout. Includes complimentary gift box.</p>
            <div class="grid grid-cols-2 gap-2 pt-1">
                <a href="<?php echo esc_url( function_exists('wc_get_cart_url') ? wc_get_cart_url() : '#' ); ?>" class="w-full py-3 bg-surface text-on-surface border border-outline-variant font-label-md text-label-md font-bold text-center hover:bg-surface-container transition-colors">
                    View Bag
                </a>
                <a href="<?php echo esc_url( function_exists('wc_get_checkout_url') ? wc_get_checkout_url() : '#' ); ?>" class="w-full py-3 bg-primary text-on-primary font-label-md text-label-md font-bold text-center hover:bg-terracotta-rich transition-all shadow-md">
                    Checkout
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Search Modal -->
<div id="fluffSearchModal" class="fixed inset-0 z-50 bg-inverse-surface/60 backdrop-blur-md hidden flex items-start justify-center pt-20 px-4">
    <div class="w-full max-w-lg bg-surface p-5 shadow-2xl space-y-4 border border-outline-variant">
        <div class="flex items-center justify-between">
            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Search FLUFF</h3>
            <button data-action="close-search" class="w-8 h-8 bg-surface-container-lowest flex items-center justify-center text-on-surface border border-outline-variant">
                <span class="material-symbols-outlined text-[18px]">close</span>
            </button>
        </div>
        <form role="search" method="get" class="relative" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="search" class="w-full py-3.5 pl-11 pr-4 bg-surface-container-lowest text-on-surface placeholder:text-secondary border border-outline-variant focus:outline-none focus:ring-2 focus:ring-primary font-body-md" placeholder="Search sleepwear, satin, silk, cotton..." value="<?php echo get_search_query(); ?>" name="s" />
            <input type="hidden" name="post_type" value="product" />
            <span class="material-symbols-outlined absolute left-3.5 top-4 text-secondary text-[20px]">search</span>
        </form>
    </div>
</div>

<!-- High Contrast 100% Solid Mobile Navigation Drawer -->
<div id="fluffMobileMenu" class="fixed inset-0 z-[999999] hidden flex flex-col justify-between p-6 overflow-y-auto" style="background-color: #FAF7F2 !important; background: #FAF7F2 !important; opacity: 1 !important; z-index: 999999 !important;">
    <!-- Drawer Header Bar -->
    <div class="flex items-center justify-between border-b pb-4 shrink-0" style="border-color: #e2beb9 !important; background-color: #FAF7F2 !important;">
        <div class="flex items-center gap-2">
            <span class="font-headline-md text-headline-md font-extrabold text-2xl uppercase tracking-tight" style="color: #a61d17 !important;">FLUFF</span>
        </div>
        <button data-action="close-menu" class="w-10 h-10 flex items-center justify-center shadow-sm active:scale-95 transition-transform" style="background-color: #ffffff !important; border: 1px solid #e2beb9 !important; color: #1f1b1a !important;" aria-label="Close Menu">
            <span class="material-symbols-outlined text-[22px]" style="color: #1f1b1a !important;">close</span>
        </button>
    </div>

    <!-- Crisp High-Contrast Navigation Link Cards -->
    <div class="flex flex-col gap-3 py-6 my-auto">
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="p-3.5 shadow-sm font-headline-sm text-headline-sm font-bold flex items-center justify-between active:scale-[0.99] transition-transform" style="background-color: #ffffff !important; border: 1px solid #e2beb9 !important; color: #1f1b1a !important;">
            <span class="flex items-center gap-3">
                <span class="material-symbols-outlined text-[22px]" style="color: #a61d17 !important;">home</span>
                <span style="color: #1f1b1a !important; font-weight: 700;">Home</span>
            </span>
            <span class="material-symbols-outlined text-[18px]" style="color: #8e706c !important;">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" class="p-3.5 shadow-sm font-headline-sm text-headline-sm font-bold flex items-center justify-between active:scale-[0.99] transition-transform" style="background-color: #ffffff !important; border: 1px solid #e2beb9 !important; color: #1f1b1a !important;">
            <span class="flex items-center gap-3">
                <span class="material-symbols-outlined text-[22px]" style="color: #a61d17 !important;">grid_view</span>
                <span style="color: #1f1b1a !important; font-weight: 700;">Shop All Catalog</span>
            </span>
            <span class="material-symbols-outlined text-[18px]" style="color: #8e706c !important;">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( home_url('/#new-drops') ); ?>" class="p-3.5 shadow-sm font-headline-sm text-headline-sm font-bold flex items-center justify-between active:scale-[0.99] transition-transform" style="background-color: #ffffff !important; border: 1px solid #e2beb9 !important; color: #1f1b1a !important;">
            <span class="flex items-center gap-3">
                <span class="material-symbols-outlined text-[22px]" style="color: #F3CB0E !important;">local_fire_department</span>
                <span style="color: #1f1b1a !important; font-weight: 700;">New Arrivals</span>
            </span>
            <span class="material-symbols-outlined text-[18px]" style="color: #8e706c !important;">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( home_url('/#satin-section') ); ?>" class="p-3.5 shadow-sm font-headline-sm text-headline-sm font-bold flex items-center justify-between active:scale-[0.99] transition-transform" style="background-color: #ffffff !important; border: 1px solid #e2beb9 !important; color: #1f1b1a !important;">
            <span class="flex items-center gap-3">
                <span class="material-symbols-outlined text-[22px]" style="color: #a61d17 !important;">bedtime</span>
                <span style="color: #1f1b1a !important; font-weight: 700;">Satin Shorts</span>
            </span>
            <span class="material-symbols-outlined text-[18px]" style="color: #8e706c !important;">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( home_url('/category-special-collection/') ); ?>" class="p-3.5 shadow-sm font-headline-sm text-headline-sm font-bold flex items-center justify-between active:scale-[0.99] transition-transform" style="background-color: #ffffff !important; border: 1px solid #e2beb9 !important; color: #1f1b1a !important;">
            <span class="flex items-center gap-3">
                <span class="material-symbols-outlined text-[22px]" style="color: #a61d17 !important;">ac_unit</span>
                <span style="color: #1f1b1a !important; font-weight: 700;">Winter Special Edit</span>
            </span>
            <span class="material-symbols-outlined text-[18px]" style="color: #8e706c !important;">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="p-3.5 shadow-sm font-headline-sm text-headline-sm font-bold flex items-center justify-between active:scale-[0.99] transition-transform" style="background-color: #ffffff !important; border: 1px solid #e2beb9 !important; color: #1f1b1a !important;">
            <span class="flex items-center gap-3">
                <span class="material-symbols-outlined text-[22px]" style="color: #a61d17 !important;">straighten</span>
                <span style="color: #1f1b1a !important; font-weight: 700;">Sizing &amp; Fit Advisor</span>
            </span>
            <span class="material-symbols-outlined text-[18px]" style="color: #8e706c !important;">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="p-3.5 shadow-sm font-headline-sm text-headline-sm font-bold flex items-center justify-between active:scale-[0.99] transition-transform" style="background-color: #ffffff !important; border: 1px solid #e2beb9 !important; color: #1f1b1a !important;">
            <span class="flex items-center gap-3">
                <span class="material-symbols-outlined text-[22px]" style="color: #a61d17 !important;">local_shipping</span>
                <span style="color: #1f1b1a !important; font-weight: 700;">Shipping &amp; Gift Box</span>
            </span>
            <span class="material-symbols-outlined text-[18px]" style="color: #8e706c !important;">arrow_forward_ios</span>
        </a>
    </div>

    <!-- Drawer Footer -->
    <div class="pt-4 border-t text-xs font-medium flex items-center justify-between shrink-0" style="border-color: #e2beb9 !important; color: #57504D !important; background-color: #FAF7F2 !important;">
        <span>Crafted by Mostafa Saad</span>
        <span class="font-bold" style="color: #a61d17 !important;">vitaldc.com</span>
    </div>
</div>

<!-- Dynamic Notification Toast (Micro-interaction) -->
<div class="fixed top-24 left-1/2 -translate-x-1/2 z-50 transition-all duration-300 transform -translate-y-12 opacity-0 pointer-events-none" id="toastNotification">
    <div class="bg-inverse-surface text-inverse-on-surface px-4 py-2 rounded-full shadow-lg flex items-center gap-2">
        <span class="material-symbols-outlined text-sale-yellow text-[18px]">favorite</span>
        <span class="font-label-md text-label-md" id="toastMessage">Added to wishlist</span>
    </div>
</div>

<!-- Mobile Bottom Navigation Bar (Hidden on PC/Desktop) -->
<nav class="fixed bottom-0 w-full z-40 pb-safe bg-surface/90 backdrop-blur-xl shadow-[0_-2px_12px_rgba(43,38,37,0.06)] border-t border-surface-variant md:hidden" data-active-classes="text-primary font-label-md">
    <div class="flex justify-around items-center h-16 px-2">
        <a aria-current="page" class="flex flex-col items-center justify-center min-w-[64px] h-12 transition-colors gap-1 text-primary font-label-md" data-path="home" href="<?php echo esc_url( home_url('/') ); ?>">
            <span class="material-symbols-outlined text-[22px]">home</span>
            <span class="font-label-md text-label-md">Home</span>
        </a>
        <a class="flex flex-col items-center justify-center min-w-[64px] h-12 text-on-surface-variant hover:text-on-surface transition-colors gap-1" data-path="collections" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/') ); ?>">
            <span class="material-symbols-outlined text-[22px]">grid_view</span>
            <span class="font-label-md text-label-md">Catalog</span>
        </a>
        <a class="flex flex-col items-center justify-center min-w-[64px] h-12 text-on-surface-variant hover:text-on-surface transition-colors gap-1" data-path="wishlist" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>">
            <span class="material-symbols-outlined text-[22px]">favorite_border</span>
            <span class="font-label-md text-label-md">Wishlist</span>
        </a>
        <a class="flex flex-col items-center justify-center min-w-[64px] h-12 text-on-surface-variant hover:text-on-surface transition-colors gap-1" data-path="account" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : '#' ); ?>">
            <span class="material-symbols-outlined text-[22px]">person</span>
            <span class="font-label-md text-label-md">Account</span>
        </a>
    </div>
</nav>

<?php wp_footer(); ?>
</body>
</html>
