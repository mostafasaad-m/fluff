<?php
/**
 * WooCommerce Cart Page Template
 * 
 * @package FLUFF
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

<div class="px-margin-mobile py-4 max-w-3xl mx-auto space-y-6">
    <div class="flex items-center justify-between border-b border-surface-variant pb-4">
        <div>
            <span class="font-label-caps text-label-caps text-secondary uppercase tracking-widest">Your Selections</span>
            <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-primary font-semibold mt-0.5">Shopping Bag &amp; Gift Box</h1>
        </div>
        <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/') ); ?>" class="font-label-md text-label-md text-secondary font-bold hover:underline flex items-center gap-1">
            <span class="material-symbols-outlined text-[16px]">arrow_back</span> Continue Shopping
        </a>
    </div>

    <form class="woocommerce-cart-form space-y-6" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
        <?php do_action( 'woocommerce_before_cart_table' ); ?>

        <div class="space-y-3">
            <?php
            if ( WC()->cart && ! WC()->cart->is_empty() ) :
                foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                    $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                    $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                    if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 ) :
                        $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                        ?>
                        <div class="p-4 rounded-2xl bg-surface-container-lowest shadow-sm border border-surface-container flex items-center gap-4">
                            <div class="w-20 h-24 rounded-xl overflow-hidden bg-surface-container shrink-0">
                                <?php echo $_product->get_image( 'thumbnail', array( 'class' => 'w-full h-full object-cover' ) ); ?>
                            </div>
                            <div class="flex-1 min-w-0 space-y-1">
                                <div class="flex items-start justify-between">
                                    <h3 class="font-headline-sm text-headline-sm text-primary font-semibold truncate">
                                        <a href="<?php echo esc_url( $product_permalink ); ?>"><?php echo $_product->get_name(); ?></a>
                                    </h3>
                                    <?php
                                    echo apply_filters(
                                        'woocommerce_cart_item_remove_link',
                                        sprintf(
                                            '<a href="%s" class="text-outline hover:text-error transition-colors p-1" aria-label="%s" data-product_id="%s" data-cart_item_key="%s"><span class="material-symbols-outlined text-[20px]">delete</span></a>',
                                            esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                            esc_attr__( 'Remove this item', 'woocommerce' ),
                                            esc_attr( $product_id ),
                                            esc_attr( $cart_item_key )
                                        ),
                                        $cart_item_key
                                    );
                                    ?>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Price: <?php echo WC()->cart->get_product_price( $_product ); ?></p>
                                <div class="flex items-center justify-between pt-2">
                                    <div class="flex items-center gap-2 bg-surface-container px-3 py-1 rounded-full">
                                        <span class="font-body-sm text-body-sm font-semibold">Qty: <?php echo esc_html($cart_item['quantity']); ?></span>
                                    </div>
                                    <span class="font-label-md text-label-md text-primary font-bold">
                                        <?php echo WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php
                    endif;
                endforeach;
            else :
                ?>
                <div class="py-12 bg-surface-container-lowest rounded-2xl p-8 text-center space-y-3">
                    <span class="material-symbols-outlined text-secondary text-[48px]">shopping_bag</span>
                    <h2 class="font-headline-md text-headline-md text-primary">Your Shopping Bag is Empty</h2>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Discover our luxury sleepwear handcrafted between Istanbul and Cairo.</p>
                    <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/') ); ?>" class="inline-block px-6 py-3 rounded-full bg-primary text-on-primary font-label-md text-label-md font-semibold hover:bg-primary/90 transition-all shadow-md">
                        Shop Collection
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <?php if ( WC()->cart && ! WC()->cart->is_empty() ) : ?>
            <!-- Complimentary Sterling Gift Banner -->
            <div class="bg-gradient-to-r from-primary-container to-[#223352] text-on-primary rounded-2xl p-4 relative overflow-hidden shadow-sm">
                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-full bg-secondary-container/20 flex items-center justify-center text-secondary-container shrink-0">
                        <span class="material-symbols-outlined text-[24px]">card_giftcard</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2">
                            <span class="font-label-caps text-label-caps text-secondary-fixed tracking-wider uppercase">FLUFF × STERLING GIFT</span>
                        </div>
                        <p class="font-headline-sm text-headline-sm text-on-primary truncate font-semibold">Solid 925 Sterling Crescent Moon Pendant Included</p>
                        <p class="font-arabic-sub text-arabic-sub text-surface-container-highest/90 truncate">هدية قلادة هلال الفضة الخالصة مدرجة تلقائياً داخل طلبك</p>
                    </div>
                </div>
            </div>

            <!-- Cart Totals & Checkout -->
            <div class="p-6 rounded-2xl bg-surface-container-low border border-surface-container space-y-4">
                <h3 class="font-headline-sm text-headline-sm text-primary font-semibold border-b border-surface-variant pb-3">Order Summary</h3>
                <div class="flex justify-between font-body-md text-body-md text-on-surface">
                    <span>Subtotal</span>
                    <span class="font-semibold text-primary"><?php echo WC()->cart->get_cart_subtotal(); ?></span>
                </div>
                <div class="flex justify-between font-body-md text-body-md text-on-surface">
                    <span>Cairo &amp; Egypt Delivery</span>
                    <span class="text-secondary font-medium">Calculated at Checkout</span>
                </div>
                <div class="pt-3 border-t border-surface-variant flex justify-between font-headline-md text-headline-md text-primary font-bold">
                    <span>Total</span>
                    <span><?php echo WC()->cart->get_cart_total(); ?></span>
                </div>
                <div class="pt-2">
                    <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="w-full py-4 rounded-full bg-secondary text-on-secondary font-headline-sm text-headline-sm font-semibold text-center hover:bg-secondary/90 transition-all shadow-md block">
                        Proceed to Checkout • إتمام الطلب
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </form>
</div>

<?php
get_footer( 'shop' );
