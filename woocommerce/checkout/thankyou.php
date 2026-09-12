<?php
/**
 * WooCommerce Order Received / Thank You Page Template
 * 
 * @package FLUFF
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header( 'shop' );
?>

<div class="px-margin-mobile py-6 max-w-3xl mx-auto space-y-6">
    <?php if ( $order ) : ?>
        <!-- Ambient Header Banner -->
        <section class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm border border-surface-container relative overflow-hidden">
            <div class="flex items-start justify-between gap-3">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-secondary-container/50 flex items-center justify-center shrink-0 text-secondary">
                        <span class="material-symbols-outlined text-[28px]">nightlight</span>
                    </div>
                    <div class="flex flex-col min-w-0">
                        <div class="flex items-center gap-2">
                            <span class="font-label-caps text-label-caps text-secondary uppercase tracking-widest">ISTANBUL NIGHTS</span>
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full bg-surface-container text-primary font-body-sm text-body-sm font-semibold">
                                Order #<?php echo esc_html( $order->get_order_number() ); ?>
                            </span>
                        </div>
                        <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-primary tracking-tight font-bold mt-0.5">Order Confirmed!</h1>
                        <p class="font-arabic-sub text-arabic-sub text-on-surface-variant">تم تأكيد طلبك بنجاح وسعادتنا برعايتك</p>
                    </div>
                </div>
                <div class="shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-secondary-fixed text-on-secondary-fixed">
                    <span class="material-symbols-outlined text-[20px]">check</span>
                </div>
            </div>

            <div class="mt-4 pt-3 flex items-center justify-between text-body-sm font-body-sm text-on-surface-variant bg-surface-container-low p-3 rounded-xl">
                <div class="flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px] text-secondary">calendar_today</span>
                    <span><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></span>
                </div>
                <div class="flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px] text-secondary">payments</span>
                    <span class="font-medium text-primary"><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></span>
                </div>
            </div>
        </section>

        <!-- Complimentary Sterling Gift Callout -->
        <section class="bg-gradient-to-r from-primary-container to-[#223352] text-on-primary rounded-2xl p-4 relative overflow-hidden shadow-sm">
            <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-full bg-secondary-container/20 flex items-center justify-center text-secondary-container shrink-0">
                    <span class="material-symbols-outlined text-[24px]">card_giftcard</span>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2">
                        <span class="font-label-caps text-label-caps text-secondary-fixed tracking-wider uppercase">FLUFF × STERLING GIFT</span>
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary-fixed"></span>
                        <span class="font-body-sm text-body-sm text-tertiary-fixed">Included</span>
                    </div>
                    <p class="font-headline-sm text-headline-sm text-on-primary truncate font-semibold">Solid 925 Sterling Crescent Moon Pendant</p>
                    <p class="font-arabic-sub text-arabic-sub text-surface-container-highest/90 truncate">هدية قلادة هلال الفضة الخالصة ٩٢٥ مدرجة داخل طردك الفاخر</p>
                </div>
            </div>
        </section>

        <!-- Order Items & Details -->
        <section class="bg-surface-container-lowest p-6 rounded-2xl border border-surface-container shadow-sm space-y-4">
            <h2 class="font-headline-sm text-headline-sm text-primary font-semibold border-b border-surface-variant pb-3">Order Details</h2>
            <div class="space-y-3">
                <?php
                foreach ( $order->get_items() as $item_id => $item ) :
                    $product = $item->get_product();
                    ?>
                    <div class="flex items-center justify-between text-body-md font-body-md text-primary py-1 border-b border-surface-container/40">
                        <div>
                            <span class="font-semibold"><?php echo esc_html( $item->get_name() ); ?></span>
                            <span class="text-on-surface-variant text-xs ml-2">× <?php echo esc_html( $item->get_quantity() ); ?></span>
                        </div>
                        <span class="font-bold"><?php echo wp_kses_post( $order->get_formatted_line_subtotal( $item ) ); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="pt-2 flex justify-between font-headline-md text-headline-md text-primary font-bold">
                <span>Total Paid</span>
                <span><?php echo wp_kses_post( $order->get_formatted_order_total() ); ?></span>
            </div>
        </section>

        <!-- Delivery & Support Buttons -->
        <section class="flex flex-col sm:flex-row gap-3 pt-2">
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/') ); ?>" class="flex-1 py-3.5 px-6 rounded-full bg-primary text-on-primary font-label-md text-label-md font-semibold text-center hover:bg-primary/90 transition-all shadow-md">
                Back To Shop Catalog
            </a>
            <a href="https://wa.me/201000000000" target="_blank" class="flex-1 py-3.5 px-6 rounded-full bg-surface-container-high text-primary font-label-md text-label-md font-semibold text-center hover:bg-surface-variant transition-colors flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-[#25D366] text-[20px]">chat</span> WhatsApp Support Concierge
            </a>
        </section>
    <?php else : ?>
        <div class="py-12 bg-surface-container-lowest rounded-2xl p-8 text-center space-y-3">
            <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-primary font-bold">Thank You For Your Order!</h1>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Your order has been received and is currently being processed by our Istanbul &amp; Cairo ateliers.</p>
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="inline-block px-6 py-3 rounded-full bg-primary text-on-primary font-label-md text-label-md font-semibold">Return Home</a>
        </div>
    <?php endif; ?>
</div>

<?php
get_footer( 'shop' );
