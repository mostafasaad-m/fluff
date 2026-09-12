<?php
/**
 * WooCommerce Content Product Component (Card)
 * 
 * @package FLUFF
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

global $product;

if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}

$origin = fluff_get_product_origin( $product );
$is_preorder = ( $origin === 'preorder' );
?>
<li <?php wc_product_class( 'group relative rounded-2xl bg-white p-3.5 shadow-sm border border-[#B7C7D9] transition-all hover:shadow-md flex flex-col justify-between list-none', $product ); ?>>
    <div class="space-y-3">
        <!-- Thumbnail & Badges -->
        <div class="relative w-full aspect-[4/5] rounded-xl overflow-hidden bg-[#F8F6EF]">
            <a href="<?php the_permalink(); ?>" class="block w-full h-full">
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'woocommerce_thumbnail', array( 'class' => 'w-full h-full object-cover transition-transform duration-500 group-hover:scale-105' ) );
                } else {
                    echo sprintf( '<img src="%s" alt="%s" class="w-full h-full object-cover"/>', esc_url( wc_placeholder_img_src( 'woocommerce_thumbnail' ) ), esc_attr( get_the_title() ) );
                }
                ?>
            </a>

            <!-- Badges -->
            <div class="absolute top-2.5 left-2.5 flex flex-col gap-1">
                <?php if ( $is_preorder ) : ?>
                    <span class="bg-[#D8B4C1] text-[#1F2F4F] font-label-caps text-[9px] px-2.5 py-0.5 rounded-full shadow-sm flex items-center gap-1 uppercase tracking-wider font-bold">
                        <span class="material-symbols-outlined text-[12px]">flight_takeoff</span> Pre-Order
                    </span>
                <?php else : ?>
                    <span class="bg-[#647A96] text-white font-label-caps text-[9px] px-2.5 py-0.5 rounded-full shadow-sm flex items-center gap-1 uppercase tracking-wider font-bold">
                        <span class="material-symbols-outlined text-[12px] text-[#D4B586]">bolt</span> Ready Stock
                    </span>
                <?php endif; ?>

                <?php if ( $product->is_on_sale() ) : ?>
                    <span class="bg-[#D4B586] text-[#1F2F4F] font-label-caps text-[9px] px-2 py-0.5 rounded-full uppercase tracking-wider font-bold">
                        Sale
                    </span>
                <?php endif; ?>
            </div>

            <!-- Wishlist Button -->
            <button aria-label="Add to Wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-[#F8F6EF]/90 backdrop-blur-sm text-[#1F2F4F] flex items-center justify-center shadow-sm hover:scale-110 active:scale-95 transition-all">
                <span class="material-symbols-outlined text-[16px]">favorite_border</span>
            </button>
        </div>

        <!-- Product Title & Info -->
        <div class="space-y-1">
            <div class="flex items-center justify-between text-xs text-[#D4B586] font-label-caps uppercase font-bold">
                <span><?php echo wp_kses_post( wc_get_product_category_list( $product->get_id(), ', ', '', '' ) ?: 'FLUFF Sleepwear' ); ?></span>
                <?php if ( $rating_html = wc_get_rating_html( $product->get_average_rating() ) ) : ?>
                    <div class="flex items-center gap-0.5 text-[#D4B586]">
                        <span class="material-symbols-outlined text-[14px]">star</span>
                        <span class="font-bold text-[10px] text-[#1F2F4F]"><?php echo esc_html( number_format( $product->get_average_rating(), 1 ) ); ?></span>
                    </div>
                <?php endif; ?>
            </div>

            <h3 class="font-headline-sm text-headline-sm text-[#1F2F4F] font-semibold truncate leading-snug">
                <a href="<?php the_permalink(); ?>" class="hover:text-[#D4B586] transition-colors"><?php the_title(); ?></a>
            </h3>

            <!-- Price -->
            <div class="flex items-baseline gap-2 pt-0.5">
                <span class="font-label-md text-label-md text-[#1F2F4F] font-bold">
                    <?php echo $product->get_price_html(); ?>
                </span>
            </div>
        </div>
    </div>

    <!-- Quick Add Button -->
    <div class="pt-3">
        <?php
        woocommerce_template_loop_add_to_cart( array(
            'class' => 'w-full py-2.5 px-3 rounded-full bg-[#1F2F4F] text-white font-label-md text-label-md text-center hover:bg-[#1F2F4F]/90 transition-all flex items-center justify-center gap-1 shadow-sm'
        ) );
        ?>
    </div>
</li>
