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
<footer class="bg-[#1F2F4F] text-[#F8F6EF] pt-12 pb-24 px-margin-mobile relative overflow-hidden">
    <div class="max-w-4xl mx-auto flex flex-col gap-8">
        <!-- Footer Header & Branding -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6 border-b border-[#B7C7D9]/30 pb-8">
            <div class="flex flex-col gap-2">
                <div class="flex items-center gap-2">
                    <img alt="FLUFF Brand Logo" class="h-7 w-auto object-contain brightness-200 max-h-7" src="https://lh3.googleusercontent.com/aida/AEtjO1UkM_8BjdjT_W6Zr62fRkIE-uPuPvGnGe-lm7OOCZhcsUQmI_5C8Qx0c0Bq6gQJRLkmMi396-88mjrFY0UMERqK4-aD2UCS_tyfA3QBjMvczEmw6egtGNvlg8ctNbpu6sykNhHHdZwxSD5ueybo4IEwWXLWQNn1LwBsgKoNHjGTBiHiW4XUcu0uWdcsTHbQWd4OBigdxHr1yZfsEj-FqBGxQjIj0sI-CkvWdkQAingbjl_d543zYpC6eZSs"/>
                    <span class="font-headline-md text-headline-md text-white tracking-tight font-bold">FLUFF Sleepwear</span>
                </div>
                <p class="font-arabic-sub text-arabic-sub text-[#F8F6EF]/90 font-medium">
                    راحتك.. أحلامك.. وانتمائك | القاهرة وإسطنبول
                </p>
            </div>
            <div class="flex items-center gap-3">
                <div class="px-3.5 py-1.5 rounded-full bg-[#647A96]/30 text-white border border-[#B7C7D9]/30 font-label-caps text-label-caps uppercase flex items-center gap-1.5 font-bold">
                    <span class="material-symbols-outlined text-[14px] text-[#D4B586]">local_shipping</span>
                    <span>Cairo Express (<?php echo esc_html( fluff_get_option('fluff_cairo_delivery', '2-4d') ); ?>)</span>
                </div>
                <div class="px-3.5 py-1.5 rounded-full bg-[#D8B4C1]/20 text-[#D8B4C1] border border-[#D8B4C1]/30 font-label-caps text-label-caps uppercase flex items-center gap-1.5 font-bold">
                    <span class="material-symbols-outlined text-[14px]">flight_takeoff</span>
                    <span>Istanbul Special (<?php echo esc_html( fluff_get_option('fluff_istanbul_delivery', '10-12d') ); ?>)</span>
                </div>
            </div>
        </div>

        <!-- Links Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 font-body-sm text-body-sm text-[#F8F6EF]/85">
            <div class="flex flex-col gap-2">
                <span class="font-label-caps text-label-caps text-[#D4B586] uppercase tracking-wider font-bold">Collections</span>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" class="hover:text-white transition-colors">All Sleepwear</a>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>?stock_type=ready" class="hover:text-white transition-colors">Ready Stock (Cairo)</a>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>?stock_type=preorder" class="hover:text-white transition-colors">Pre-Order (Istanbul)</a>
            </div>
            <div class="flex flex-col gap-2">
                <span class="font-label-caps text-label-caps text-[#D4B586] uppercase tracking-wider font-bold">Bespoke Guidance</span>
                <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="hover:text-white transition-colors">Sizing &amp; Fit Advisor</a>
                <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="hover:text-white transition-colors">Luxury Gift Box &amp; Delivery</a>
                <a href="<?php echo esc_url( home_url('/category-special-collection/') ); ?>" class="hover:text-white transition-colors">Winter Signature Edit</a>
            </div>
            <div class="flex flex-col gap-2">
                <span class="font-label-caps text-label-caps text-[#D4B586] uppercase tracking-wider font-bold">Customer Care</span>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : '#' ); ?>" class="hover:text-white transition-colors">My Orders &amp; Account</a>
                <a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" class="hover:text-white transition-colors flex items-center gap-1 font-semibold text-white">
                    <span class="material-symbols-outlined text-[16px] text-[#25D366]">chat</span> WhatsApp Concierge
                </a>
            </div>
            <div class="flex flex-col gap-2">
                <span class="font-label-caps text-label-caps text-[#D4B586] uppercase tracking-wider font-bold">Craft &amp; Origin</span>
                <p class="text-xs leading-relaxed text-[#F8F6EF]/80">
                    Hand-crafted using pure organic Turkish cotton and luxury fabrics between Istanbul ateliers and Cairo delivery hubs.
                </p>
            </div>
        </div>

        <!-- Copyright & Developer Credit -->
        <div class="pt-6 border-t border-[#B7C7D9]/30 flex flex-col sm:flex-row items-center justify-between text-xs text-[#F8F6EF]/75 gap-3">
            <p>© <?php echo date('Y'); ?> FLUFF Sleepwear. All rights reserved.</p>
            <p class="font-semibold text-[#D4B586]">
                Designed &amp; Developed by <a href="https://vitaldc.com" target="_blank" rel="noopener" class="underline hover:text-white transition-colors">Mostafa Saad (vitaldc.com)</a>
            </p>
        </div>
    </div>
</footer>

<!-- Slide-Over WooCommerce Cart Drawer Modal -->
<div id="fluffCartDrawer" class="fixed inset-0 z-50 transition-all duration-300 transform translate-x-full pointer-events-none">
    <div class="absolute inset-0 bg-[#1F2F4F]/50 backdrop-blur-sm close-cart-btn"></div>
    <div class="absolute right-0 top-0 bottom-0 w-full max-w-md bg-[#F8F6EF] shadow-2xl flex flex-col justify-between z-10 border-l border-[#B7C7D9]">
        <div class="p-4 border-b border-[#B7C7D9]/50 flex items-center justify-between bg-white">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[#D4B586] text-[22px]">shopping_bag</span>
                <h3 class="font-headline-sm text-headline-sm text-[#1F2F4F] font-bold">Your Shopping Bag</h3>
            </div>
            <button class="w-9 h-9 rounded-full bg-[#F8F6EF] flex items-center justify-center text-[#1F2F4F] hover:text-[#D4B586] transition-colors close-cart-btn" aria-label="Close Cart">
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
                        <div class="flex items-center gap-3 p-3 rounded-xl bg-white shadow-sm border border-[#B7C7D9]/60">
                            <div class="w-16 h-20 rounded-lg overflow-hidden shrink-0 bg-[#F8F6EF]">
                                <?php echo $_product->get_image( 'thumbnail', array( 'class' => 'w-full h-full object-cover' ) ); ?>
                            </div>
                            <div class="flex-1 min-w-0 flex flex-col justify-between">
                                <div class="flex items-start justify-between">
                                    <h4 class="font-label-md text-label-md text-[#1F2F4F] font-bold truncate"><?php echo $_product->get_name(); ?></h4>
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
                                <span class="font-body-sm text-body-sm text-[#1F2F4F]/80 font-medium">Qty: <?php echo esc_html( $cart_item['quantity'] ); ?></span>
                                <span class="font-label-md text-label-md text-[#1F2F4F] font-bold mt-1"><?php echo WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ); ?></span>
                            </div>
                        </div>
                    <?php
                    endif;
                endforeach;
            else :
            ?>
                <div class="py-12 flex flex-col items-center justify-center text-center space-y-3">
                    <div class="w-16 h-16 rounded-full bg-white flex items-center justify-center text-[#D4B586] border border-[#B7C7D9]/50 shadow-sm">
                        <span class="material-symbols-outlined text-[32px]">shopping_bag</span>
                    </div>
                    <p class="font-headline-sm text-headline-sm text-[#1F2F4F] font-bold">Your bag is empty</p>
                    <p class="font-body-sm text-body-sm text-[#1F2F4F]/80 max-w-xs font-medium">Explore our luxury sleepwear collections crafted in Istanbul and Cairo.</p>
                    <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/') ); ?>" class="mt-2 px-6 py-2.5 rounded-full bg-[#1F2F4F] text-white font-label-md text-label-md font-bold hover:bg-[#1F2F4F]/90 transition-all shadow-md">
                        Browse Sleepwear Catalog
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <div class="p-4 border-t border-[#B7C7D9] bg-white space-y-3">
            <div class="flex items-center justify-between text-body-md font-body-md text-[#1F2F4F] font-bold">
                <span>Subtotal</span>
                <span><?php echo ( function_exists('WC') && WC()->cart ) ? WC()->cart->get_cart_subtotal() : '0.00 EGP'; ?></span>
            </div>
            <p class="font-body-sm text-body-sm text-[#1F2F4F]/75 text-xs">Shipping and taxes calculated at checkout. Includes complimentary gift box.</p>
            <div class="grid grid-cols-2 gap-2 pt-1">
                <a href="<?php echo esc_url( function_exists('wc_get_cart_url') ? wc_get_cart_url() : '#' ); ?>" class="w-full py-3 rounded-full bg-[#F8F6EF] text-[#1F2F4F] border border-[#B7C7D9] font-label-md text-label-md font-bold text-center hover:bg-[#EAE5D8] transition-colors">
                    View Bag
                </a>
                <a href="<?php echo esc_url( function_exists('wc_get_checkout_url') ? wc_get_checkout_url() : '#' ); ?>" class="w-full py-3 rounded-full bg-[#D4B586] text-[#1F2F4F] font-label-md text-label-md font-bold text-center hover:bg-[#D4B586]/90 transition-all shadow-md">
                    Checkout
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Search Modal -->
<div id="fluffSearchModal" class="fixed inset-0 z-50 bg-[#1F2F4F]/60 backdrop-blur-md hidden flex items-start justify-center pt-20 px-margin-mobile">
    <div class="w-full max-w-lg bg-[#F8F6EF] rounded-2xl p-5 shadow-2xl space-y-4 border border-[#B7C7D9]">
        <div class="flex items-center justify-between">
            <h3 class="font-headline-sm text-headline-sm text-[#1F2F4F] font-bold">Search FLUFF</h3>
            <button data-action="close-search" class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-[#1F2F4F] border border-[#B7C7D9]">
                <span class="material-symbols-outlined text-[18px]">close</span>
            </button>
        </div>
        <form role="search" method="get" class="relative" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="search" class="w-full py-3.5 pl-11 pr-4 rounded-full bg-white text-[#1F2F4F] placeholder:text-[#1F2F4F]/60 border border-[#B7C7D9] focus:outline-none focus:ring-2 focus:ring-[#D4B586] font-body-md" placeholder="Search sleepwear, satin, silk, velvet..." value="<?php echo get_search_query(); ?>" name="s" />
            <input type="hidden" name="post_type" value="product" />
            <span class="material-symbols-outlined absolute left-3.5 top-4 text-[#1F2F4F]/60 text-[20px]">search</span>
        </form>
    </div>
</div>

<!-- High Contrast Mobile Navigation Drawer -->
<div id="fluffMobileMenu" class="fixed inset-0 z-50 bg-[#F8F6EF] hidden flex flex-col justify-between p-6 text-[#1F2F4F] overflow-y-auto">
    <div class="flex items-center justify-between border-b border-[#B7C7D9] pb-4">
        <div class="flex items-center gap-2">
            <img alt="FLUFF Brand Logo" class="h-8 w-auto object-contain max-h-8" src="https://lh3.googleusercontent.com/aida/AEtjO1UkM_8BjdjT_W6Zr62fRkIE-uPuPvGnGe-lm7OOCZhcsUQmI_5C8Qx0c0Bq6gQJRLkmMi396-88mjrFY0UMERqK4-aD2UCS_tyfA3QBjMvczEmw6egtGNvlg8ctNbpu6sykNhHHdZwxSD5ueybo4IEwWXLWQNn1LwBsgKoNHjGTBiHiW4XUcu0uWdcsTHbQWd4OBigdxHr1yZfsEj-FqBGxQjIj0sI-CkvWdkQAingbjl_d543zYpC6eZSs"/>
            <span class="font-headline-md text-headline-md text-[#1F2F4F] font-bold">FLUFF Sleepwear</span>
        </div>
        <button data-action="close-menu" class="w-10 h-10 rounded-full bg-white border border-[#B7C7D9] flex items-center justify-center text-[#1F2F4F] hover:bg-[#D4B586] transition-colors">
            <span class="material-symbols-outlined text-[22px]">close</span>
        </button>
    </div>

    <!-- Crisp Readability Navigation Links -->
    <div class="flex flex-col gap-3 py-6">
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="p-3.5 rounded-xl bg-white border border-[#B7C7D9]/60 text-[#1F2F4F] font-headline-sm text-headline-sm font-bold flex items-center justify-between hover:bg-[#D4B586]/20 transition-all">
            <span class="flex items-center gap-2.5">
                <span class="material-symbols-outlined text-[#D4B586] text-[20px]">home</span> Home
            </span>
            <span class="material-symbols-outlined text-[18px] text-[#1F2F4F]/60">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" class="p-3.5 rounded-xl bg-white border border-[#B7C7D9]/60 text-[#1F2F4F] font-headline-sm text-headline-sm font-bold flex items-center justify-between hover:bg-[#D4B586]/20 transition-all">
            <span class="flex items-center gap-2.5">
                <span class="material-symbols-outlined text-[#D4B586] text-[20px]">grid_view</span> Shop All Catalog
            </span>
            <span class="material-symbols-outlined text-[18px] text-[#1F2F4F]/60">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( home_url('/category-special-collection/') ); ?>" class="p-3.5 rounded-xl bg-white border border-[#B7C7D9]/60 text-[#1F2F4F] font-headline-sm text-headline-sm font-bold flex items-center justify-between hover:bg-[#D4B586]/20 transition-all">
            <span class="flex items-center gap-2.5">
                <span class="material-symbols-outlined text-[#D4B586] text-[20px]">ac_unit</span> Winter Special Edit
            </span>
            <span class="material-symbols-outlined text-[18px] text-[#1F2F4F]/60">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="p-3.5 rounded-xl bg-white border border-[#B7C7D9]/60 text-[#1F2F4F] font-headline-sm text-headline-sm font-bold flex items-center justify-between hover:bg-[#D4B586]/20 transition-all">
            <span class="flex items-center gap-2.5">
                <span class="material-symbols-outlined text-[#D4B586] text-[20px]">straighten</span> Sizing &amp; Fit Advisor
            </span>
            <span class="material-symbols-outlined text-[18px] text-[#1F2F4F]/60">arrow_forward_ios</span>
        </a>
        <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="p-3.5 rounded-xl bg-white border border-[#B7C7D9]/60 text-[#1F2F4F] font-headline-sm text-headline-sm font-bold flex items-center justify-between hover:bg-[#D4B586]/20 transition-all">
            <span class="flex items-center gap-2.5">
                <span class="material-symbols-outlined text-[#D4B586] text-[20px]">local_shipping</span> Shipping &amp; Gift Box
            </span>
            <span class="material-symbols-outlined text-[18px] text-[#1F2F4F]/60">arrow_forward_ios</span>
        </a>
    </div>

    <div class="pt-4 border-t border-[#B7C7D9] text-xs text-[#1F2F4F]/80 font-medium flex items-center justify-between">
        <span>Crafted by Mostafa Saad</span>
        <span class="text-[#D4B586] font-bold">vitaldc.com</span>
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
