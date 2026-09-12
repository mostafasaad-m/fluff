<?php
/**
 * WooCommerce Checkout Form Template
 * 
 * @package FLUFF
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header( 'shop' );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
    echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
    return;
}
?>

<div class="px-margin-mobile py-4 max-w-4xl mx-auto space-y-6">
    <div class="border-b border-surface-variant pb-4">
        <span class="font-label-caps text-label-caps text-secondary uppercase tracking-widest">FLUFF Bespoke Order</span>
        <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-primary font-semibold mt-0.5">Checkout • إتمام الشراء الفاخر</h1>
    </div>

    <form name="checkout" method="post" class="checkout woocommerce-checkout grid grid-cols-1 lg:grid-cols-12 gap-8" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

        <!-- Billing & Delivery Details -->
        <div class="lg:col-span-7 space-y-6">
            <?php if ( $checkout->get_checkout_fields() ) : ?>
                <div class="bg-surface-container-lowest p-6 rounded-2xl border border-surface-container shadow-sm space-y-4">
                    <div class="flex items-center gap-2 border-b border-surface-container pb-3">
                        <span class="material-symbols-outlined text-secondary text-[20px]">local_shipping</span>
                        <h2 class="font-headline-sm text-headline-sm text-primary font-semibold">Delivery Address &amp; Info</h2>
                    </div>

                    <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
                    <div id="customer_details">
                        <?php do_action( 'woocommerce_checkout_billing' ); ?>
                        <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                    </div>
                    <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
                </div>
            <?php endif; ?>

            <!-- Payment Methods -->
            <div class="bg-surface-container-lowest p-6 rounded-2xl border border-surface-container shadow-sm space-y-4">
                <div class="flex items-center gap-2 border-b border-surface-container pb-3">
                    <span class="material-symbols-outlined text-secondary text-[20px]">payments</span>
                    <h2 class="font-headline-sm text-headline-sm text-primary font-semibold">Payment Options • طريقة الدفع</h2>
                </div>
                
                <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
                <div id="order_review" class="woocommerce-checkout-review-order">
                    <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                </div>
            </div>
        </div>

        <!-- Order Summary Sidebar -->
        <div class="lg:col-span-5 space-y-6">
            <div class="bg-surface-container-low p-6 rounded-2xl border border-surface-container shadow-sm space-y-4 sticky top-24">
                <h2 class="font-headline-sm text-headline-sm text-primary font-semibold border-b border-surface-variant pb-3">Order Summary</h2>
                
                <!-- Items list -->
                <div class="space-y-3">
                    <?php
                    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                        $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 ) :
                            ?>
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-14 rounded-lg overflow-hidden bg-surface-container shrink-0">
                                    <?php echo $_product->get_image( 'thumbnail', array( 'class' => 'w-full h-full object-cover' ) ); ?>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-label-md text-label-md text-primary font-semibold truncate"><?php echo $_product->get_name(); ?></h4>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Qty: <?php echo esc_html( $cart_item['quantity'] ); ?></span>
                                </div>
                                <span class="font-label-md text-label-md text-primary font-bold">
                                    <?php echo WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ); ?>
                                </span>
                            </div>
                        <?php
                        endif;
                    endforeach;
                    ?>
                </div>

                <!-- Sterling Gift Banner -->
                <div class="bg-primary-container text-surface p-3 rounded-xl flex items-center gap-2">
                    <span class="material-symbols-outlined text-secondary-fixed text-[20px]">card_giftcard</span>
                    <span class="font-body-sm text-body-sm text-surface-container-high">Includes 925 Sterling Crescent Moon Gift</span>
                </div>

                <div class="pt-3 border-t border-surface-variant flex justify-between font-headline-md text-headline-md text-primary font-bold">
                    <span>Total</span>
                    <span><?php echo WC()->cart->get_cart_total(); ?></span>
                </div>
            </div>
        </div>

    </form>
</div>

<?php
get_footer( 'shop' );
