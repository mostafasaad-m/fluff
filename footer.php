<?php
/**
 * FLUFF Sleepwear Theme Footer
 * Designed & Developed by Mostafa Saad (vitaldc.com)
 */
?>
</main><!-- /main -->

<!-- Global Editorial Footer -->
<footer class="bg-primary text-surface pt-12 pb-24 px-margin-mobile relative overflow-hidden">
    <div class="max-w-4xl mx-auto flex flex-col gap-8">
        <!-- Footer Header & Branding -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6 border-b border-primary-container pb-8">
            <div class="flex flex-col gap-2">
                <div class="flex items-center gap-2">
                    <img alt="FLUFF Brand Logo" class="h-7 w-auto object-contain brightness-200" src="https://lh3.googleusercontent.com/aida/AEtjO1UkM_8BjdjT_W6Zr62fRkIE-uPuPvGnGe-lm7OOCZhcsUQmI_5C8Qx0c0Bq6gQJRLkmMi396-88mjrFY0UMERqK4-aD2UCS_tyfA3QBjMvczEmw6egtGNvlg8ctNbpu6sykNhHHdZwxSD5ueybo4IEwWXLWQNn1LwBsgKoNHjGTBiHiW4XUcu0uWdcsTHbQWd4OBigdxHr1yZfsEj-FqBGxQjIj0sI-CkvWdkQAingbjl_d543zYpC6eZSs"/>
                    <span class="font-headline-md text-headline-md text-surface tracking-tight font-semibold">FLUFF Sleepwear</span>
                </div>
                <p class="font-arabic-sub text-arabic-sub text-surface-container-high opacity-85">
                    راحتك.. أحلامك.. وانتمائك | القاهرة وإسطنبول
                </p>
            </div>
            <div class="flex items-center gap-3">
                <div class="px-3.5 py-1.5 rounded-full bg-primary-container text-secondary-container font-label-caps text-label-caps uppercase flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[14px]">local_shipping</span>
                    <span>Cairo Express (2-4d)</span>
                </div>
                <div class="px-3.5 py-1.5 rounded-full bg-primary-container text-tertiary-fixed font-label-caps text-label-caps uppercase flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[14px]">flight_takeoff</span>
                    <span>Istanbul Special (10-12d)</span>
                </div>
            </div>
        </div>

        <!-- Links Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 font-body-sm text-body-sm text-surface-container-high">
            <div class="flex flex-col gap-2">
                <span class="font-label-caps text-label-caps text-secondary-fixed uppercase tracking-wider font-bold">Collections</span>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" class="hover:text-surface transition-colors">All Sleepwear</a>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>?stock_type=ready" class="hover:text-surface transition-colors">Ready Stock (Cairo)</a>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>?stock_type=preorder" class="hover:text-surface transition-colors">Pre-Order (Istanbul)</a>
            </div>
            <div class="flex flex-col gap-2">
                <span class="font-label-caps text-label-caps text-secondary-fixed uppercase tracking-wider font-bold">Bespoke Guidance</span>
                <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="hover:text-surface transition-colors">Sizing &amp; Fit Advisor</a>
                <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="hover:text-surface transition-colors">Luxury Gift Box &amp; Delivery</a>
                <a href="<?php echo esc_url( home_url('/category-special-collection/') ); ?>" class="hover:text-surface transition-colors">Winter Signature Edit</a>
            </div>
            <div class="flex flex-col gap-2">
                <span class="font-label-caps text-label-caps text-secondary-fixed uppercase tracking-wider font-bold">Customer Care</span>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : '#' ); ?>" class="hover:text-surface transition-colors">My Orders &amp; Account</a>
                <a href="https://wa.me/201000000000" target="_blank" class="hover:text-surface transition-colors flex items-center gap-1">
                    <span class="material-symbols-outlined text-[16px] text-[#25D366]">chat</span> WhatsApp Concierge
                </a>
            </div>
            <div class="flex flex-col gap-2">
                <span class="font-label-caps text-label-caps text-secondary-fixed uppercase tracking-wider font-bold">Craft &amp; Origin</span>
                <p class="text-xs leading-relaxed text-surface-container-high/80">
                    Hand-crafted using pure organic Turkish cotton and luxury fabrics between Istanbul ateliers and Cairo delivery hubs.
                </p>
            </div>
        </div>

        <!-- Copyright & Developer Credit -->
        <div class="pt-6 border-t border-primary-container/60 flex flex-col sm:flex-row items-center justify-between text-xs text-surface-container-high/70 gap-3">
            <p>© <?php echo date('Y'); ?> FLUFF Sleepwear. All rights reserved.</p>
            <p class="font-medium text-secondary-fixed">
                Designed &amp; Developed by <a href="https://vitaldc.com" target="_blank" rel="noopener" class="underline hover:text-surface transition-colors">Mostafa Saad (vitaldc.com)</a>
            </p>
        </div>
    </div>
</footer>

<!-- Slide-Over WooCommerce Cart Drawer Modal -->
<div id="fluffCartDrawer" class="fixed inset-0 z-50 transition-all duration-300 transform translate-x-full pointer-events-none">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-primary/40 backdrop-blur-sm close-cart-btn"></div>
    <div class="absolute right-0 top-0 bottom-0 w-full max-w-md bg-surface shadow-2xl flex flex-col justify-between z-10">
        <!-- Cart Header -->
        <div class="p-4 border-b border-surface-variant flex items-center justify-between bg-surface-bright">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary text-[22px]">shopping_bag</span>
                <h3 class="font-headline-sm text-headline-sm text-primary font-semibold">Your Shopping Bag</h3>
            </div>
            <button class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface hover:text-primary transition-colors close-cart-btn" aria-label="Close Cart">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>

        <!-- Cart Items Container -->
        <div class="flex-1 overflow-y-auto p-4 space-y-4">
            <?php
            if ( function_exists('WC') && WC()->cart && ! WC()->cart->is_empty() ) :
                foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                    $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                    $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
                    if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 ) :
                        $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                        ?>
                        <div class="flex items-center gap-3 p-3 rounded-xl bg-surface-container-lowest shadow-sm border border-surface-container">
                            <div class="w-16 h-20 rounded-lg overflow-hidden shrink-0 bg-surface-container">
                                <?php echo $_product->get_image( 'thumbnail', array( 'class' => 'w-full h-full object-cover' ) ); ?>
                            </div>
                            <div class="flex-1 min-w-0 flex flex-col justify-between">
                                <div class="flex items-start justify-between">
                                    <h4 class="font-label-md text-label-md text-primary font-semibold truncate"><?php echo $_product->get_name(); ?></h4>
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
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Qty: <?php echo esc_html( $cart_item['quantity'] ); ?></span>
                                <span class="font-label-md text-label-md text-primary font-bold mt-1"><?php echo WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ); ?></span>
                            </div>
                        </div>
                    <?php
                    endif;
                endforeach;
            else :
            ?>
                <div class="py-12 flex flex-col items-center justify-center text-center space-y-3">
                    <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined text-[32px]">shopping_bag</span>
                    </div>
                    <p class="font-headline-sm text-headline-sm text-primary">Your bag is empty</p>
                    <p class="font-body-sm text-body-sm text-on-surface-variant max-w-xs">Explore our luxury sleepwear collections crafted in Istanbul and Cairo.</p>
                    <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/') ); ?>" class="mt-2 px-6 py-2.5 rounded-full bg-primary text-on-primary font-label-md text-label-md hover:bg-primary/90 transition-all shadow-md">
                        Browse Sleepwear Catalog
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <!-- Cart Footer / Summary -->
        <div class="p-4 border-t border-surface-variant bg-surface-container-low space-y-3">
            <div class="flex items-center justify-between text-body-md font-body-md text-primary font-semibold">
                <span>Subtotal</span>
                <span><?php echo ( function_exists('WC') && WC()->cart ) ? WC()->cart->get_cart_subtotal() : '0.00 EGP'; ?></span>
            </div>
            <p class="font-body-sm text-body-sm text-on-surface-variant text-xs">Shipping and taxes calculated at checkout. Includes complimentary gift box.</p>
            <div class="grid grid-cols-2 gap-2 pt-1">
                <a href="<?php echo esc_url( function_exists('wc_get_cart_url') ? wc_get_cart_url() : '#' ); ?>" class="w-full py-3 rounded-full bg-surface-container-high text-primary font-label-md text-label-md font-semibold text-center hover:bg-surface-variant transition-colors">
                    View Bag
                </a>
                <a href="<?php echo esc_url( function_exists('wc_get_checkout_url') ? wc_get_checkout_url() : '#' ); ?>" class="w-full py-3 rounded-full bg-secondary text-on-secondary font-label-md text-label-md font-semibold text-center hover:bg-secondary/90 transition-all shadow-md">
                    Checkout
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Search Modal -->
<div id="fluffSearchModal" class="fixed inset-0 z-50 bg-primary/60 backdrop-blur-md hidden flex items-start justify-center pt-20 px-margin-mobile">
    <div class="w-full max-w-lg bg-surface rounded-2xl p-4 shadow-2xl space-y-4">
        <div class="flex items-center justify-between">
            <h3 class="font-headline-sm text-headline-sm text-primary">Search FLUFF</h3>
            <button data-action="close-search" class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-on-surface">
                <span class="material-symbols-outlined text-[18px]">close</span>
            </button>
        </div>
        <form role="search" method="get" class="relative" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="search" class="w-full py-3 pl-10 pr-4 rounded-full bg-surface-container text-primary placeholder:text-outline focus:outline-none focus:ring-2 focus:ring-secondary font-body-md" placeholder="Search sleepwear, satin, silk, velvet..." value="<?php echo get_search_query(); ?>" name="s" />
            <input type="hidden" name="post_type" value="product" />
            <span class="material-symbols-outlined absolute left-3 top-3.5 text-outline text-[20px]">search</span>
        </form>
    </div>
</div>

<!-- Mobile Navigation Drawer -->
<div id="fluffMobileMenu" class="fixed inset-0 z-50 bg-primary/70 backdrop-blur-md hidden flex flex-col justify-between p-6 text-surface">
    <div class="flex items-center justify-between border-b border-primary-container pb-4">
        <span class="font-headline-md text-headline-md font-semibold">FLUFF Sleepwear</span>
        <button data-action="close-menu" class="w-9 h-9 rounded-full bg-primary-container flex items-center justify-center text-surface">
            <span class="material-symbols-outlined text-[20px]">close</span>
        </button>
    </div>
    <div class="flex flex-col gap-5 font-headline-sm text-headline-sm py-8">
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="hover:text-secondary-container transition-colors">Home</a>
        <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" class="hover:text-secondary-container transition-colors">Shop All Catalog</a>
        <a href="<?php echo esc_url( home_url('/category-special-collection/') ); ?>" class="hover:text-secondary-container transition-colors">Winter Special Edit</a>
        <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="hover:text-secondary-container transition-colors">Sizing &amp; Fit Advisor</a>
        <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="hover:text-secondary-container transition-colors">Shipping &amp; Gift Box</a>
    </div>
    <div class="pt-4 border-t border-primary-container text-xs text-surface-container-high">
        Crafted by Mostafa Saad • vitaldc.com
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
