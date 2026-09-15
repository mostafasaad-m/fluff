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
    $product_sku = $product ? ( $product->get_sku() ?: 'S' . str_pad( (string) get_the_ID(), 2, '0', STR_PAD_LEFT ) ) : 'S01';
    ?>

    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 sm:pt-6 pb-28 lg:pb-16 text-on-surface" id="product-<?php the_ID(); ?>">
        
        <!-- Main Product Split Layout: Left Gallery / Right Details on Desktop -->
        <div class="lg:grid lg:grid-cols-12 lg:gap-10 xl:gap-14 lg:items-start">
            
            <!-- Left Column: Product Gallery Showcase (lg:col-span-7) -->
            <div class="lg:col-span-7 flex flex-col gap-3 relative lg:sticky lg:top-24">
                <div class="relative w-full aspect-[4/5] sm:aspect-[3/4] lg:aspect-[4/5] rounded-none overflow-hidden bg-surface-container-low shadow-sm border border-[#B7C7D9]/40">
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

                    <!-- Origin & Collection Badges -->
                    <div class="absolute top-3.5 left-3.5 flex flex-col gap-1.5 items-start z-10">
                        <?php if ( $is_preorder ) : ?>
                            <span class="font-label-badge text-[10px] px-3 py-1 shadow-sm flex items-center gap-1 uppercase tracking-wider font-extrabold" style="background-color: #D8B4C1 !important; color: #1F2F4F !important;">
                                <span class="material-symbols-outlined text-[13px]">flight_takeoff</span> Pre-Order • Istanbul Atelier
                            </span>
                        <?php else : ?>
                            <span class="font-label-badge text-[10px] px-3 py-1 shadow-sm flex items-center gap-1 uppercase tracking-wider font-extrabold" style="background-color: #647A96 !important; color: #ffffff !important;">
                                <span class="material-symbols-outlined text-[13px]">bolt</span> Ready Stock • Cairo Hub
                            </span>
                        <?php endif; ?>
                        
                        <?php if ( $product && $product->is_on_sale() ) : ?>
                            <span class="font-label-badge text-[10px] px-3 py-0.5 shadow-sm uppercase tracking-wider font-extrabold" style="background-color: #D4B586 !important; color: #1F2F4F !important;">
                                50% OFF 2ND ITEM
                            </span>
                        <?php endif; ?>
                    </div>

                    <!-- Fabric Touch Callout Pin -->
                    <div class="absolute bottom-3.5 right-3.5 bg-white/95 backdrop-blur-md px-3 py-1.5 shadow-md flex items-center gap-2 border border-[#B7C7D9]/60 z-10">
                        <div class="w-6 h-6 overflow-hidden bg-[#F0EDE4] flex items-center justify-center border border-[#B7C7D9]">
                            <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuABYr5oGJKTfjmStIIief-QWqVSNZAItQWof64WAc68f0MSE-t8yFzO2QNYQyyaUkXrjBIkkbTHbTbBjDgGb3P28FXfw8jZ_Vl8FxyQoJ-SR6JrY_lfNkIMCGW9Y0fuNLVDHDEQj7GuXzsxUcTuZIO7KOBz95EL725icBGnWX_l93YvklQGhZVdk30Vaakqacdx1smKNf8xNUAbVgqjoZ-BEZrPPy4HGJzuLP1pqXeMuzwrU-CdXfdPlA" alt="Fabric Texture"/>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-label-badge text-[9px] text-[#647A96] uppercase leading-none font-bold">Fabric Touch</span>
                            <span class="font-arabic-sub text-[11px] text-[#1F2F4F] leading-tight font-semibold">ملمس القماش الأصلي</span>
                        </div>
                    </div>
                </div>

                <!-- Gallery Thumbnails Strip -->
                <?php
                $attachment_ids = $product ? $product->get_gallery_image_ids() : array();
                if ( ! empty( $attachment_ids ) ) :
                ?>
                    <div class="flex items-center gap-2.5 overflow-x-auto no-scrollbar pb-1">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="w-16 h-20 sm:w-20 sm:h-24 overflow-hidden bg-surface-container shrink-0 cursor-pointer gallery-thumb border-2 border-[#1F2F4F]" data-full-img="<?php echo esc_url( wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) ); ?>">
                                <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'w-full h-full object-cover' ) ); ?>
                            </div>
                        <?php endif; ?>
                        <?php foreach ( $attachment_ids as $attachment_id ) : ?>
                            <?php $full_src = wp_get_attachment_image_url( $attachment_id, 'full' ); ?>
                            <div class="w-16 h-20 sm:w-20 sm:h-24 overflow-hidden bg-surface-container shrink-0 cursor-pointer gallery-thumb border border-[#B7C7D9] hover:border-[#1F2F4F] transition-colors" data-full-img="<?php echo esc_url($full_src); ?>">
                                <?php echo wp_get_attachment_image( $attachment_id, 'thumbnail', false, array( 'class' => 'w-full h-full object-cover' ) ); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Right Column: Product Narrative, Specs & Commerce Form (lg:col-span-5) -->
            <div class="lg:col-span-5 flex flex-col gap-4 mt-5 lg:mt-0">
                
                <!-- Breadcrumbs & SKU -->
                <div class="flex items-center justify-between pb-1 border-b border-[#B7C7D9]/30">
                    <div class="flex items-center gap-2 font-label-badge text-xs uppercase tracking-wider text-[#647A96]">
                        <span><?php echo esc_html( strip_tags( wc_get_product_category_list( get_the_ID(), ', ' ) ) ?: 'Sleepwear Collection' ); ?></span>
                        <span class="text-[#B7C7D9]">/</span>
                        <span class="font-extrabold text-[#1F2F4F]">Style <?php echo esc_html( $product_sku ); ?></span>
                    </div>
                    <div class="flex items-center gap-1 bg-[#F0EDE4] px-2.5 py-1 text-[#1F2F4F] font-label-badge text-[10px] uppercase font-bold">
                        <span class="material-symbols-outlined text-[14px] text-[#D4B586]">verified</span>
                        <span>Turkish Cotton</span>
                    </div>
                </div>

                <!-- Product Title & Arabic Tagline -->
                <div>
                    <h1 class="text-2xl sm:text-3xl font-extrabold text-[#1F2F4F] uppercase tracking-wide leading-tight" style="font-family: 'Bodoni Moda', 'Playfair Display', serif;">
                        <?php the_title(); ?>
                    </h1>
                    <p class="font-arabic-sub text-sm sm:text-base text-[#53627A] mt-1" dir="rtl">
                        طقم بيجامة قطن تركي مضلع فاخر بتطريز أنيق ولمسة حريرية ناعمة
                    </p>
                </div>

                <!-- Pricing Row -->
                <div class="flex items-baseline gap-3 pt-1">
                    <div class="text-2xl sm:text-3xl font-black text-[#1F2F4F]">
                        <?php echo $product ? $product->get_price_html() : '1,350 EGP'; ?>
                    </div>
                    <?php if ( $product && $product->is_on_sale() ) : ?>
                        <span class="bg-[#D8B4C1] text-[#1F2F4F] font-label-badge text-[10px] px-2.5 py-1 uppercase tracking-wider font-extrabold">
                            Special Offer
                        </span>
                    <?php endif; ?>
                </div>

                <!-- Installment / ValU Micro-banner -->
                <div class="bg-[#F0EDE4] p-3.5 border border-[#B7C7D9] flex items-center justify-between gap-3 shadow-sm">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-white flex items-center justify-center text-[#1F2F4F] shrink-0 border border-[#B7C7D9]">
                            <span class="material-symbols-outlined text-[20px]">payments</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-label-md text-xs sm:text-sm text-[#1F2F4F] font-extrabold">Or 4 monthly installments without hidden fees</span>
                            <span class="font-arabic-sub text-[11px] text-[#53627A]">متوفر مع valU أو Sympl أو ميزة بالتقسيط المباشر</span>
                        </div>
                    </div>
                    <span class="material-symbols-outlined text-[#647A96] text-[18px]">arrow_forward_ios</span>
                </div>

                <!-- Delivery & Origin Guarantee Card -->
                <div class="bg-white p-4 border border-[#B7C7D9] shadow-sm flex flex-col gap-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-[20px]" style="color: #D4B586;">local_shipping</span>
                            <span class="font-label-md text-sm text-[#1F2F4F] font-bold">Direct Doorstep Delivery</span>
                        </div>
                        <span class="font-arabic-sub text-xs font-semibold text-[#647A96]">توصيل سريع لكل المحافظات</span>
                    </div>
                    <p class="text-xs sm:text-sm text-[#53627A] leading-relaxed">
                        <?php echo $is_preorder ? 'Pre-Order direct from Istanbul ateliers: 10–12 business days delivery.' : 'Ready Stock in Cairo: 2–4 business days express doorstep delivery.'; ?>
                    </p>
                </div>

                <!-- Sizing Swatches & Size Advisor Modal Trigger -->
                <div class="space-y-2.5 pt-1">
                    <div class="flex items-center justify-between">
                        <span class="font-label-badge text-xs text-[#1F2F4F] uppercase font-extrabold tracking-wider">Select Size</span>
                        <button type="button" onclick="document.getElementById('size-modal')?.classList.remove('hidden')" class="font-label-badge text-xs uppercase font-extrabold text-[#D4B586] hover:underline flex items-center gap-1 cursor-pointer">
                            <span class="material-symbols-outlined text-[15px]">straighten</span> Sizing Guide
                        </button>
                    </div>
                    <div class="grid grid-cols-4 gap-2.5">
                        <button type="button" class="swatch-size-pill py-3 px-2 text-center font-label-md text-sm font-extrabold border border-[#1F2F4F] bg-[#1F2F4F] text-white transition-all active:scale-95 cursor-pointer">S</button>
                        <button type="button" class="swatch-size-pill py-3 px-2 text-center font-label-md text-sm font-extrabold border border-[#B7C7D9] bg-[#F0EDE4] text-[#1F2F4F] hover:border-[#1F2F4F] transition-all active:scale-95 cursor-pointer">M</button>
                        <button type="button" class="swatch-size-pill py-3 px-2 text-center font-label-md text-sm font-extrabold border border-[#B7C7D9] bg-[#F0EDE4] text-[#1F2F4F] hover:border-[#1F2F4F] transition-all active:scale-95 cursor-pointer">L</button>
                        <button type="button" class="swatch-size-pill py-3 px-2 text-center font-label-md text-sm font-extrabold border border-[#B7C7D9] bg-[#F0EDE4] text-[#1F2F4F] hover:border-[#1F2F4F] transition-all active:scale-95 cursor-pointer">XL</button>
                    </div>
                </div>

                <!-- Add to Cart Action -->
                <div class="pt-2">
                    <?php
                    if ( function_exists('woocommerce_template_single_add_to_cart') ) {
                        woocommerce_template_single_add_to_cart();
                    } else {
                        ?>
                        <button data-action="open-cart" class="w-full py-4 bg-[#1F2F4F] text-white font-label-md text-sm sm:text-base font-extrabold uppercase tracking-wider text-center hover:bg-[#D4B586] hover:text-[#1F2F4F] transition-all shadow-md active:scale-98 flex items-center justify-center gap-2 cursor-pointer">
                            <span class="material-symbols-outlined text-[22px]">shopping_bag</span>
                            <span>Add To Bag • إضافة للسلة</span>
                        </button>
                        <?php
                    }
                    ?>
                </div>

                <!-- Fabric & Care Accordion -->
                <div class="border border-[#B7C7D9] bg-[#F0EDE4] overflow-hidden mt-2">
                    <details class="group p-4 cursor-pointer">
                        <summary class="flex items-center justify-between list-none">
                            <div class="flex items-center gap-2.5">
                                <span class="material-symbols-outlined text-[#1F2F4F] text-[20px]">strikethrough_s</span>
                                <span class="font-label-md text-sm text-[#1F2F4F] font-extrabold uppercase tracking-wide">Fabric &amp; Care Details</span>
                            </div>
                            <span class="material-symbols-outlined text-[#647A96] transition-transform group-open:rotate-180 text-[20px]">expand_more</span>
                        </summary>
                        <div class="pt-3 text-xs sm:text-sm text-[#53627A] space-y-1.5 border-t border-[#B7C7D9]/40 mt-3 leading-relaxed">
                            <p>• 100% Organic Turkish Ribbed Cotton woven in Istanbul design ateliers.</p>
                            <p>• Machine wash cold on gentle cycle with similar colors.</p>
                            <p>• Do not tumble dry. Line dry in shade to preserve soft slow-luxury texture.</p>
                            <p>• 14-day exchange guarantee provided the hygienic security seal remains intact.</p>
                        </div>
                    </details>
                </div>

                <!-- Complimentary Sterling Gift Banner -->
                <div class="p-4 border border-[#D4B586]/40 shadow-sm relative overflow-hidden" style="background-color: #16233B; color: #F8F6EF;">
                    <div class="flex items-center gap-3 relative z-10">
                        <div class="w-10 h-10 border border-[#D4B586] flex items-center justify-center shrink-0" style="background-color: rgba(212, 181, 134, 0.15); color: #D4B586;">
                            <span class="material-symbols-outlined text-[22px]">redeem</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2">
                                <span class="font-label-badge text-[10px] uppercase font-extrabold tracking-widest text-[#D4B586]">COMPLIMENTARY GIFT</span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#D4B586]"></span>
                                <span class="text-xs text-[#F8F6EF]">Included in Parcel</span>
                            </div>
                            <p class="font-label-md text-sm text-white truncate font-bold mt-0.5">Solid 925 Sterling Crescent Moon Pendant</p>
                            <p class="font-arabic-sub text-xs text-[#D4B586] truncate">هدية قلادة هلال الفضة الخالصة ٩٢٥ داخل علبة طلبك الفاخرة</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Related Products Section (Equalized Heights for PC & Mobile) -->
        <section class="mt-14 pt-10 border-t border-[#B7C7D9]/40">
            <div class="flex items-end justify-between mb-6">
                <div>
                    <span class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold block text-[#647A96]">COMPLETE YOUR WARDROBE</span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-[#1F2F4F] uppercase tracking-wide" style="font-family: 'Bodoni Moda', 'Playfair Display', serif;">
                        You May Also Dream In
                    </h3>
                </div>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/') ); ?>" class="font-label-md text-xs uppercase font-extrabold text-[#1F2F4F] hover:text-[#D4B586] transition-colors flex items-center gap-1">
                    View All <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                </a>
            </div>

            <?php
            // Output WooCommerce related products
            if ( function_exists('woocommerce_related_products') ) {
                woocommerce_related_products( array(
                    'posts_per_page' => 4,
                    'columns'        => 4,
                ) );
            }
            ?>
        </section>

    </div>

    <!-- Mobile Sticky Action Tray (Only visible on Mobile < 1024px, positioned above bottom navbar) -->
    <div class="fixed bottom-16 left-0 right-0 z-30 lg:hidden px-4 py-2.5 shadow-[0_-4px_16px_rgba(31,47,79,0.12)] border-t flex items-center justify-between gap-3" style="background-color: rgba(248, 246, 239, 0.98); backdrop-filter: blur(16px); border-color: #B7C7D9;">
        <div class="flex flex-col shrink-0">
            <span class="text-[10px] uppercase font-bold text-[#647A96] leading-none">Price</span>
            <span class="text-base font-black text-[#1F2F4F] leading-tight mt-0.5">
                <?php echo $product ? $product->get_price_html() : '1,350 EGP'; ?>
            </span>
        </div>
        <div class="flex items-center gap-2 flex-1 justify-end">
            <?php
            $wa_phone = fluff_get_option( 'fluff_whatsapp', '201000000000' );
            $wa_text  = rawurlencode( 'Hello FLUFF, I would like to order: ' . get_the_title() . ' (' . get_permalink() . ')' );
            $wa_url   = 'https://wa.me/' . preg_replace( '/[^0-9]/', '', $wa_phone ) . '?text=' . $wa_text;
            ?>
            <a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" rel="noopener noreferrer" class="w-11 h-11 bg-[#25D366] text-white flex items-center justify-center shrink-0 shadow-sm active:scale-95 transition-transform" aria-label="Order via WhatsApp">
                <span class="material-symbols-outlined text-[20px]">chat</span>
            </a>
            <button type="button" onclick="document.querySelector('form.cart button[type=submit], button.single_add_to_cart_button')?.click()" class="flex-1 max-w-[200px] py-3 px-4 bg-[#1F2F4F] text-white font-label-md text-xs uppercase tracking-wider font-extrabold flex items-center justify-center gap-1.5 shadow-md active:scale-98 transition-all">
                <span class="material-symbols-outlined text-[17px]">shopping_bag</span>
                <span>Add To Bag</span>
            </button>
        </div>
    </div>

    <!-- Size Guide Modal -->
    <div class="fixed inset-0 z-50 bg-[#1F2F4F]/60 backdrop-blur-sm hidden flex items-end justify-center p-4 sm:p-6" id="size-modal">
        <div class="bg-[#F8ECF0] w-full max-w-lg max-h-[85vh] overflow-y-auto p-5 sm:p-6 shadow-2xl flex flex-col gap-4 border border-[#B7C7D9] animate-in slide-in-from-bottom duration-300">
            <div class="flex items-center justify-between pb-2 border-b border-[#B7C7D9]">
                <div>
                    <span class="font-label-badge text-[10px] text-[#647A96] uppercase font-bold tracking-widest">FLUFF SLOW LUXURY</span>
                    <h3 class="text-xl font-extrabold text-[#1F2F4F] uppercase">Find Your Perfect Fit</h3>
                </div>
                <button type="button" onclick="document.getElementById('size-modal')?.classList.add('hidden')" class="w-9 h-9 bg-white border border-[#B7C7D9] flex items-center justify-center text-[#1F2F4F] hover:opacity-75 transition-opacity" aria-label="Close Size Guide">
                    <span class="material-symbols-outlined text-[20px]">close</span>
                </button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-center text-xs border border-[#B7C7D9] bg-white">
                    <thead class="bg-[#1F2F4F] text-white font-bold uppercase tracking-wider">
                        <tr>
                            <th class="py-2 px-3">Size</th>
                            <th class="py-2 px-3">Bust (cm)</th>
                            <th class="py-2 px-3">Waist (cm)</th>
                            <th class="py-2 px-3">Hips (cm)</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#B7C7D9] text-[#1F2F4F] font-semibold">
                        <tr><td class="py-2 px-3 bg-[#F0EDE4] font-bold">S</td><td>84–88</td><td>66–70</td><td>90–94</td></tr>
                        <tr><td class="py-2 px-3 bg-[#F0EDE4] font-bold">M</td><td>89–94</td><td>71–76</td><td>95–100</td></tr>
                        <tr><td class="py-2 px-3 bg-[#F0EDE4] font-bold">L</td><td>95–101</td><td>77–83</td><td>101–107</td></tr>
                        <tr><td class="py-2 px-3 bg-[#F0EDE4] font-bold">XL</td><td>102–108</td><td>84–90</td><td>108–114</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="text-xs text-[#53627A] leading-relaxed">
                Need bespoke guidance? Our Istanbul & Cairo concierge is live 7 days a week on WhatsApp to advise on exact drape and sizing.
            </p>
            <button type="button" onclick="document.getElementById('size-modal')?.classList.add('hidden')" class="w-full py-3 bg-[#1F2F4F] text-white font-label-md text-xs uppercase font-extrabold tracking-wider transition-colors hover:bg-[#D4B586] hover:text-[#1F2F4F]">
                Back To Product
            </button>
        </div>
    </div>

    <script>
    // Gallery Thumbnail Switching
    document.querySelectorAll('.gallery-thumb').forEach(function(thumb) {
        thumb.addEventListener('click', function() {
            var fullImg = this.getAttribute('data-full-img');
            var mainImg = document.getElementById('main-product-img');
            if (fullImg && mainImg) {
                mainImg.src = fullImg;
                document.querySelectorAll('.gallery-thumb').forEach(function(t) {
                    t.classList.remove('border-[#1F2F4F]', 'border-2');
                    t.classList.add('border-[#B7C7D9]');
                });
                this.classList.add('border-[#1F2F4F]', 'border-2');
                this.classList.remove('border-[#B7C7D9]');
            }
        });
    });

    // Sizing Swatch Toggle
    document.querySelectorAll('.swatch-size-pill').forEach(function(pill) {
        pill.addEventListener('click', function() {
            document.querySelectorAll('.swatch-size-pill').forEach(function(p) {
                p.classList.remove('bg-[#1F2F4F]', 'text-white');
                p.classList.add('bg-[#F0EDE4]', 'text-[#1F2F4F]');
            });
            this.classList.remove('bg-[#F0EDE4]', 'text-[#1F2F4F]');
            this.classList.add('bg-[#1F2F4F]', 'text-white');
        });
    });
    </script>

<?php endwhile; ?>

<?php
get_footer( 'shop' );
