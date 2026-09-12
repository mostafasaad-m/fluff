<?php
/**
 * WooCommerce Single Product Template
 * 
 * @package FLUFF
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header( 'shop' );

while ( have_posts() ) :
    the_post();
    global $product;
    $origin = fluff_get_product_origin( $product );
    $is_preorder = ( $origin === 'preorder' );
    ?>

    <div class="flex flex-col w-full pb-28 text-on-surface" id="product-<?php the_ID(); ?>">
        <!-- Breadcrumbs Header -->
        <div class="px-margin-mobile pt-3 pb-2 flex items-center justify-between">
            <div class="flex items-center gap-1.5 font-label-caps text-label-caps tracking-wider text-secondary uppercase">
                <span><?php echo esc_html( wc_get_product_category_list( get_the_ID(), ', ', '', '' ) ?: 'Istanbul Nights' ); ?></span>
                <span class="text-outline-variant font-normal">/</span>
                <span class="text-primary font-bold">Style <?php echo esc_html( $product ? $product->get_sku() ?: 'S01' : 'S01' ); ?></span>
            </div>
            <div class="flex items-center gap-1 bg-surface-container px-2.5 py-1 rounded-full text-secondary font-label-caps text-[10px] uppercase">
                <span class="material-symbols-outlined text-[14px] text-secondary">verified</span>
                <span>Authentic Turkish Cotton</span>
            </div>
        </div>

        <!-- Product Gallery Showcase -->
        <div class="px-margin-mobile relative">
            <div class="relative w-full aspect-[4/5] rounded-xl overflow-hidden bg-surface-container-low shadow-sm">
                <!-- Main Visual Image -->
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'full', array(
                        'id'    => 'main-product-img',
                        'class' => 'w-full h-full object-cover transition-all duration-300'
                    ) );
                } else {
                    ?>
                    <img id="main-product-img" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCuwfI3EExIhQr-dG-9Dkn2xafcNeRJKorDBABE-77YXDX7HSFYYyQxgo1uBPTMzDCQ26o4knS-8D_kNHxsaBsijVRuJbKPyJ8A2X1y5k0ynaKmQSjPAInpGcE3hpypDQC4CIz2lF88xFmm6VOzjG-z1EyWd90tTgC9sCM8ypGKcsT0IBLilQMDRTzxeyq6suPGIXJBBEshUubURbgugFg4M5VAiNa8my9_Eaa8U8y5yl9BUPnVhkOpJQ" alt="<?php the_title_attribute(); ?>"/>
                    <?php
                }
                ?>

                <!-- Badges -->
                <div class="absolute top-3.5 left-3.5 flex flex-col gap-1.5 items-start">
                    <?php if ( $is_preorder ) : ?>
                        <span class="bg-tertiary-fixed text-on-tertiary-fixed font-label-caps text-[10px] px-2.5 py-1 rounded-full shadow-sm flex items-center gap-1 uppercase tracking-wider font-bold">
                            <span class="material-symbols-outlined text-[13px]">flight_takeoff</span> Pre-Order • Istanbul Sourcing
                        </span>
                    <?php else : ?>
                        <span class="bg-surface-bright/90 backdrop-blur-md text-primary font-label-caps text-[10px] px-2.5 py-1 rounded-full shadow-sm flex items-center gap-1 uppercase tracking-wider font-bold">
                            <span class="material-symbols-outlined text-[13px] text-secondary">bolt</span> Ready Stock • Cairo
                        </span>
                    <?php endif; ?>
                    <span class="bg-surface-bright/90 backdrop-blur-md text-primary font-body-sm text-body-sm px-2.5 py-0.5 rounded-full shadow-sm">
                        Winter Ribbed Collection
                    </span>
                </div>

                <!-- Fabric Touch Callout Pin -->
                <div class="absolute bottom-3.5 right-3.5 bg-surface-bright/95 backdrop-blur-md px-3 py-1.5 rounded-full shadow-md flex items-center gap-2">
                    <div class="w-5 h-5 rounded-full overflow-hidden bg-secondary-container flex items-center justify-center ring-2 ring-surface">
                        <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuABYr5oGJKTfjmStIIief-QWqVSNZAItQWof64WAc68f0MSE-t8yFzO2QNYQyyaUkXrjBIkkbTHbTbBjDgGb3P28FXfw8jZ_Vl8FxyQoJ-SR6JrY_lfNkIMCGW9Y0fuNLVDHDEQj7GuXzsxUcTuZIO7KOBz95EL725icBGnWX_l93YvklQGhZVdk30Vaakqacdx1smKNf8xNUAbVgqjoZ-BEZrPPy4HGJzuLP1pqXeMuzwrU-CdXfdPlA" alt="Fabric Texture"/>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-label-caps text-[9px] text-secondary uppercase leading-none">Fabric Touch</span>
                        <span class="font-arabic-sub text-[11px] text-primary leading-tight font-semibold">ملمس القماش الأصلي</span>
                    </div>
                </div>
            </div>

            <!-- Gallery Thumbnails -->
            <?php
            $attachment_ids = $product ? $product->get_gallery_image_ids() : array();
            if ( ! empty( $attachment_ids ) ) :
            ?>
                <div class="flex items-center gap-2 mt-3 overflow-x-auto no-scrollbar pb-1">
                    <?php foreach ( $attachment_ids as $attachment_id ) : ?>
                        <?php $full_src = wp_get_attachment_image_url( $attachment_id, 'full' ); ?>
                        <div class="w-16 h-16 rounded-lg overflow-hidden bg-surface-container shrink-0 cursor-pointer gallery-thumb" data-full-img="<?php echo esc_url($full_src); ?>">
                            <?php echo wp_get_attachment_image( $attachment_id, 'thumbnail', false, array( 'class' => 'w-full h-full object-cover' ) ); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Product Title, Pricing & BNPL -->
        <div class="px-margin-mobile mt-4 flex flex-col gap-1">
            <div class="flex items-baseline justify-between gap-2">
                <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-primary leading-tight font-semibold">
                    <?php the_title(); ?>
                </h1>
                <span class="font-label-caps text-label-caps text-secondary font-bold shrink-0">
                    CODE: <?php echo esc_html( $product ? $product->get_sku() ?: 'S01' : 'S01' ); ?>
                </span>
            </div>
            <p class="font-arabic-sub text-arabic-sub text-on-surface-variant" dir="rtl">
                طقم بيجامة قطن تركي مضلع فاخر بتطريز الكرز الوردي الناعم
            </p>

            <!-- Pricing Row -->
            <div class="flex items-baseline gap-2.5 mt-2">
                <span class="font-headline-lg-mobile text-headline-lg-mobile text-primary font-bold">
                    <?php echo $product ? $product->get_price_html() : '1,350 EGP'; ?>
                </span>
                <?php if ( $product && $product->is_on_sale() ) : ?>
                    <span class="bg-secondary-container text-on-secondary-container font-label-caps text-[10px] px-2 py-0.5 rounded-full uppercase tracking-wider font-bold">
                        Special Edit Offer
                    </span>
                <?php endif; ?>
            </div>

            <!-- Installment / ValU Micro-banner -->
            <div class="mt-2.5 bg-surface-container-low p-3 rounded-xl flex items-center justify-between gap-2 border border-surface-container">
                <div class="flex items-center gap-2">
                    <div class="w-7 h-7 rounded-lg bg-surface-container-highest flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[18px]">payments</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-body-sm text-body-sm text-primary font-semibold">Or 4 installments from 337.50 EGP</span>
                        <span class="font-arabic-sub text-[11px] text-on-surface-variant">مع valU أو Sympl بدون فوائد خفية</span>
                    </div>
                </div>
                <span class="material-symbols-outlined text-outline-variant text-[18px]">arrow_forward_ios</span>
            </div>
        </div>

        <!-- Delivery & Origin Guarantee Card -->
        <div class="px-margin-mobile mt-3.5">
            <div class="bg-surface-container p-3.5 rounded-xl flex flex-col gap-2.5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary text-[20px]">local_shipping</span>
                        <span class="font-body-md text-body-md text-primary font-semibold">Delivery to Cairo &amp; All Egypt</span>
                    </div>
                    <span class="font-arabic-sub text-arabic-sub text-secondary font-medium">توصيل سريع لكل المحافظات</span>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant">
                    <?php echo $is_preorder ? 'Pre-Order direct from Istanbul ateliers: 10-12 business days to your doorstep.' : 'Ready Stock in Cairo: 2-4 business days express delivery.'; ?>
                </p>
            </div>
        </div>

        <!-- Variation Swatches & Add To Cart -->
        <div class="px-margin-mobile mt-5 space-y-4">
            <!-- Swatch Group Size -->
            <div class="space-y-2 swatch-group">
                <div class="flex items-center justify-between">
                    <span class="font-label-caps text-label-caps text-primary uppercase font-bold">Select Size</span>
                    <button data-action="open-sizing" class="font-label-caps text-label-caps text-secondary uppercase font-bold flex items-center gap-1 hover:underline">
                        <span class="material-symbols-outlined text-[14px]">straighten</span> Sizing Guide
                    </button>
                </div>
                <div class="grid grid-cols-4 gap-2">
                    <button type="button" class="swatch-btn py-2.5 rounded-xl bg-primary text-on-primary font-label-md text-label-md font-bold text-center border border-primary transition-all">S</button>
                    <button type="button" class="swatch-btn py-2.5 rounded-xl bg-surface-container text-on-surface font-label-md text-label-md font-bold text-center border border-transparent transition-all">M</button>
                    <button type="button" class="swatch-btn py-2.5 rounded-xl bg-surface-container text-on-surface font-label-md text-label-md font-bold text-center border border-transparent transition-all">L</button>
                    <button type="button" class="swatch-btn py-2.5 rounded-xl bg-surface-container text-on-surface font-label-md text-label-md font-bold text-center border border-transparent transition-all">XL</button>
                </div>
            </div>

            <!-- Native WooCommerce Add to Cart Form / Button -->
            <div class="pt-2">
                <?php
                if ( function_exists('woocommerce_template_single_add_to_cart') ) {
                    woocommerce_template_single_add_to_cart();
                } else {
                    ?>
                    <button data-action="open-cart" class="w-full py-4 rounded-full bg-secondary text-on-secondary font-headline-sm text-headline-sm font-semibold text-center hover:bg-secondary/90 transition-all shadow-md active:scale-95 flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-[22px]">shopping_bag</span>
                        <span>Add To Bag • إضافة للسلة</span>
                    </button>
                    <?php
                }
                ?>
            </div>
        </div>

        <!-- Fabric & Care Accordion -->
        <div class="px-margin-mobile mt-6 space-y-3">
            <div class="border border-surface-container rounded-xl bg-surface-container-lowest overflow-hidden">
                <button class="w-full p-4 flex items-center justify-between text-left accordion-toggle" data-target="fabric-details">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary text-[20px]">strikethrough_s</span>
                        <span class="font-headline-sm text-headline-sm text-primary font-semibold">Fabric &amp; Care Details</span>
                    </div>
                    <span class="material-symbols-outlined text-outline transition-transform duration-200 accordion-icon">expand_more</span>
                </button>
                <div id="fabric-details" class="p-4 pt-0 text-body-sm text-on-surface-variant space-y-2 border-t border-surface-container/50 hidden">
                    <p>• 100% Organic Turkish Ribbed Cotton woven in Istanbul.</p>
                    <p>• Machine wash cold on gentle cycle with similar colors.</p>
                    <p>• Do not tumble dry. Line dry in shade to preserve soft tactile texture.</p>
                </div>
            </div>
        </div>

        <!-- Complimentary Sterling Gift Banner -->
        <div class="px-margin-mobile mt-6">
            <div class="bg-gradient-to-r from-primary-container to-[#223352] text-on-primary rounded-2xl p-4 relative overflow-hidden shadow-sm">
                <div class="flex items-center gap-3 relative z-10">
                    <div class="w-11 h-11 rounded-full bg-secondary-container/20 flex items-center justify-center text-secondary-container shrink-0">
                        <span class="material-symbols-outlined text-[24px]">card_giftcard</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2">
                            <span class="font-label-caps text-label-caps text-secondary-fixed tracking-wider uppercase">FLUFF × STERLING GIFT</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-secondary-fixed"></span>
                            <span class="font-body-sm text-body-sm text-tertiary-fixed">Complimentary</span>
                        </div>
                        <p class="font-headline-sm text-headline-sm text-on-primary truncate font-semibold">Solid 925 Sterling Crescent Moon Pendant</p>
                        <p class="font-arabic-sub text-arabic-sub text-surface-container-highest/90 truncate">هدية قلادة هلال الفضة الخالصة ٩٢٥ مدرجة داخل طردك الفاخر</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products Section -->
        <section class="px-margin-mobile mt-8">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-headline-md text-headline-md text-primary font-semibold">You May Also Dream In</h3>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" class="font-label-caps text-label-caps text-secondary uppercase font-bold hover:underline">View All</a>
            </div>
            <?php
            if ( function_exists('woocommerce_related_products') ) {
                woocommerce_related_products( array(
                    'posts_per_page' => 2,
                    'columns'        => 2,
                ) );
            }
            ?>
        </section>
    </div>

<?php endwhile; ?>

<?php
get_footer( 'shop' );
