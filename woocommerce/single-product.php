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

    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 sm:pt-10 lg:pt-12 pb-28 lg:pb-16 text-on-surface" id="product-<?php the_ID(); ?>">
        
        <!-- Main Product Split Layout: Left Gallery / Right Details on Desktop -->
        <div class="lg:grid lg:grid-cols-12 lg:gap-10 xl:gap-14 lg:items-start">
            
            <!-- Left Column: Product Gallery Showcase (lg:col-span-7) -->
            <div class="lg:col-span-7 flex flex-col gap-3 relative lg:sticky lg:top-28">
                <div class="relative w-full aspect-[4/5] sm:aspect-[3/4] lg:aspect-[4/5] rounded-none overflow-hidden bg-surface-container-low shadow-sm border border-[#B7C7D9]/40 group/gallery" id="fluffGalleryStage">
                    <!-- Main Visual Image -->
                    <?php
                    $main_thumb_id = get_post_thumbnail_id();
                    $main_img_url  = $main_thumb_id ? wp_get_attachment_image_url( $main_thumb_id, 'full' ) : '';
                    if ( empty( $main_img_url ) ) {
                        $main_img_url = 'https://lh3.googleusercontent.com/aida-public/AB6AXuCuwfI3EExIhQr-dG-9Dkn2xafcNeRJKorDBABE-77YXDX7HSFYYyQxgo1uBPTMzDCQ26o4knS-8D_kNHxsaBsijVRuJbKPyJ8A2X1y5k0ynaKmQSjPAInpGcE3hpypDQC4CIz2lF88xFmm6VOzjG-z1EyWd90tTgC9sCM8ypGKcsT0IBLilQMDRTzxeyq6suPGIXJBBEshUubURbgugFg4M5VAiNa8my9_Eaa8U8y5yl9BUPnVhkOpJQ';
                    }
                    ?>
                    <img id="main-product-img" class="w-full h-full object-cover transition-opacity duration-300 select-none" src="<?php echo esc_url( $main_img_url ); ?>" alt="<?php the_title_attribute(); ?>"/>

                    <!-- Floating Navigation Chevrons -->
                    <button type="button" id="fluffGalleryPrev" class="absolute left-3 top-1/2 -translate-y-1/2 z-20 w-10 h-10 sm:w-11 sm:h-11 rounded-full flex items-center justify-center text-white bg-[#16233B]/75 hover:bg-[#16233B] hover:text-[#D4B586] backdrop-blur-md border border-white/20 shadow-md transition-all active:scale-90 cursor-pointer" aria-label="Previous Product Image">
                        <span class="material-symbols-outlined text-[24px]">chevron_left</span>
                    </button>
                    <button type="button" id="fluffGalleryNext" class="absolute right-3 top-1/2 -translate-y-1/2 z-20 w-10 h-10 sm:w-11 sm:h-11 rounded-full flex items-center justify-center text-white bg-[#16233B]/75 hover:bg-[#16233B] hover:text-[#D4B586] backdrop-blur-md border border-white/20 shadow-md transition-all active:scale-90 cursor-pointer" aria-label="Next Product Image">
                        <span class="material-symbols-outlined text-[24px]">chevron_right</span>
                    </button>

                    <!-- Origin & Collection Badges -->
                    <div class="absolute top-3.5 left-3.5 flex flex-col gap-1.5 items-start z-10 pointer-events-none">
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

                    <!-- Slide Counter Indicator -->
                    <div id="fluffGalleryCounter" class="absolute bottom-3.5 left-3.5 bg-[#16233B]/80 backdrop-blur-md text-white px-2.5 py-1 text-[10px] font-extrabold tracking-wider z-10 border border-white/20">
                        1 / 1
                    </div>

                    <!-- Fabric Touch Callout Pin -->
                    <div class="absolute bottom-3.5 right-3.5 bg-white/95 backdrop-blur-md px-3 py-1.5 shadow-md flex items-center gap-2 border border-[#B7C7D9]/60 z-10 pointer-events-none">
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
            <div class="lg:col-span-5 flex flex-col space-y-8 sm:space-y-9 mt-8 lg:mt-0">
                
                <!-- Block 1: Breadcrumbs & SKU -->
                <div class="flex items-center justify-between pb-4 border-b border-[#B7C7D9]/40">
                    <div class="flex items-center gap-2 font-label-badge text-xs uppercase tracking-wider text-[#647A96]">
                        <span><?php echo esc_html( strip_tags( wc_get_product_category_list( get_the_ID(), ', ' ) ) ?: 'Sleepwear Collection' ); ?></span>
                        <span class="text-[#B7C7D9]">/</span>
                        <span class="font-extrabold text-[#1F2F4F]">Style <?php echo esc_html( $product_sku ); ?></span>
                    </div>
                    <div class="flex items-center gap-1.5 bg-[#F0EDE4] px-3 py-1.5 text-[#1F2F4F] font-label-badge text-[10px] uppercase font-extrabold border border-[#B7C7D9]/50 shadow-sm">
                        <span class="material-symbols-outlined text-[15px] text-[#D4B586]">verified</span>
                        <span>Turkish Cotton</span>
                    </div>
                </div>

                <!-- Block 2: Product Title & Editorial Narrative -->
                <div class="space-y-4">
                    <!-- Title -->
                    <h1 class="text-3xl sm:text-4xl lg:text-[38px] font-extrabold text-[#1F2F4F] uppercase tracking-wide leading-tight" style="font-family: 'Bodoni Moda', 'Playfair Display', serif;">
                        <?php the_title(); ?>
                    </h1>

                    <!-- Product Short Description / Narrative -->
                    <?php
                    $short_desc = $product ? $product->get_short_description() : '';
                    if ( empty( $short_desc ) ) {
                        $short_desc = get_the_excerpt();
                    }
                    if ( ! empty( $short_desc ) ) :
                    ?>
                        <div class="text-sm sm:text-base text-[#43526E] leading-relaxed pt-2">
                            <?php echo wp_kses_post( $short_desc ); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Poetic Arabic Narrative Touch -->
                    <div class="p-3.5 bg-[#F0EDE4]/70 border-r-2 border-[#1F2F4F] flex items-center justify-between mt-3">
                        <p class="font-arabic-sub text-xs sm:text-sm text-[#1F2F4F] font-semibold leading-relaxed" dir="rtl">
                            طقم بيجامة قطن تركي مضلع فاخر بتطريز أنيق ولمسة حريرية ناعمة
                        </p>
                        <span class="material-symbols-outlined text-[#D4B586] text-[18px] shrink-0 ml-2">auto_awesome</span>
                    </div>
                </div>

                <!-- Block 3: Pricing Row & Value Reassurance -->
                <div class="pt-5 border-t border-[#B7C7D9]/40 space-y-2">
                    <div class="flex items-baseline gap-3.5">
                        <div class="text-3xl sm:text-4xl lg:text-[40px] font-black text-[#1F2F4F] tracking-tight">
                            <?php echo $product ? $product->get_price_html() : '1,350 EGP'; ?>
                        </div>
                        <?php if ( $product && $product->is_on_sale() ) : ?>
                            <span class="bg-[#D8B4C1] text-[#1F2F4F] font-label-badge text-[10px] px-3 py-1 uppercase tracking-wider font-extrabold shadow-sm">
                                Special Offer
                            </span>
                        <?php endif; ?>
                    </div>
                    <span class="text-xs text-[#647A96] block font-medium">All local taxes included • Free express courier above 1500 EGP</span>
                </div>

                <!-- Block 4: Installment / ValU Micro-banner -->
                <div class="bg-[#F0EDE4] p-4 sm:p-4.5 border border-[#B7C7D9] flex items-center justify-between gap-3 shadow-sm hover:border-[#1F2F4F] transition-colors">
                    <div class="flex items-center gap-3.5">
                        <div class="w-9 h-9 bg-white flex items-center justify-center text-[#1F2F4F] shrink-0 border border-[#B7C7D9]">
                            <span class="material-symbols-outlined text-[20px]">payments</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-label-md text-xs sm:text-sm text-[#1F2F4F] font-extrabold">Or 4 monthly installments without hidden fees</span>
                            <span class="font-arabic-sub text-[11px] text-[#53627A]">متوفر مع valU أو Sympl أو ميزة بالتقسيط المباشر</span>
                        </div>
                    </div>
                    <span class="material-symbols-outlined text-[#647A96] text-[18px]">arrow_forward_ios</span>
                </div>

                <!-- Block 5: Sizing Swatches (Sliced-Off Unavailable Sizes & Crisp Available Sizes) -->
                <?php
                $all_sizes = array( 'XS', 'S', 'M', 'L', 'XL' );
                $var_stock_map = array();
                $is_variable = ( $product && method_exists( $product, 'is_type' ) && $product->is_type( 'variable' ) );

                if ( $is_variable ) {
                    $available_vars = $product->get_available_variations();
                    foreach ( $available_vars as $avar ) {
                        $s_val = '';
                        if ( isset( $avar['attributes']['attribute_size'] ) ) {
                            $s_val = strtoupper( $avar['attributes']['attribute_size'] );
                        } elseif ( isset( $avar['attributes']['attribute_pa_size'] ) ) {
                            $s_val = strtoupper( $avar['attributes']['attribute_pa_size'] );
                        }
                        if ( $s_val ) {
                            $in_stock = ! empty( $avar['is_in_stock'] );
                            if ( isset( $avar['max_qty'] ) && $avar['max_qty'] !== '' && $avar['max_qty'] !== null && (int) $avar['max_qty'] <= 0 ) {
                                $in_stock = false;
                            }
                            $var_stock_map[ $s_val ] = array(
                                'in_stock'     => $in_stock,
                                'variation_id' => $avar['variation_id'],
                                'price_html'   => isset( $avar['price_html'] ) ? $avar['price_html'] : '',
                                'price'        => isset( $avar['display_price'] ) ? $avar['display_price'] : 0,
                            );
                        }
                    }

                    // Direct child inspection fallback
                    if ( empty( $var_stock_map ) && method_exists( $product, 'get_children' ) ) {
                        foreach ( $product->get_children() as $child_id ) {
                            $child_obj = wc_get_product( $child_id );
                            if ( $child_obj ) {
                                $attrs = $child_obj->get_attributes();
                                $s_val = isset( $attrs['size'] ) ? strtoupper( $attrs['size'] ) : ( isset( $attrs['pa_size'] ) ? strtoupper( $attrs['pa_size'] ) : '' );
                                if ( $s_val ) {
                                    $in_stock = $child_obj->is_in_stock();
                                    $qty = $child_obj->get_stock_quantity();
                                    if ( $qty !== null && (int) $qty <= 0 ) {
                                        $in_stock = false;
                                    }
                                    $var_stock_map[ $s_val ] = array(
                                        'in_stock'     => $in_stock,
                                        'variation_id' => $child_id,
                                        'price'        => $child_obj->get_price(),
                                    );
                                }
                            }
                        }
                    }
                }

                // Identify first available in-stock size to pre-select
                $first_available_size = '';
                foreach ( $all_sizes as $sz ) {
                    if ( isset( $var_stock_map[ $sz ] ) && $var_stock_map[ $sz ]['in_stock'] ) {
                        $first_available_size = $sz;
                        break;
                    }
                }
                if ( ! $first_available_size && ! $is_variable ) {
                    $first_available_size = 'M';
                }
                ?>
                <div class="fluff-sizing-block space-y-3.5">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="font-label-badge text-xs uppercase font-extrabold tracking-wider text-[#1F2F4F]">Select Size:</span>
                            <span id="fluffSelectedSizeName" class="font-label-badge text-xs font-black uppercase text-[#1F2F4F] bg-[#F0EDE4] px-2.5 py-0.5 border border-[#B7C7D9]/70">
                                <?php echo esc_html( $first_available_size ? $first_available_size : 'Please choose' ); ?>
                            </span>
                        </div>
                        <button type="button" onclick="document.getElementById('size-modal')?.classList.remove('hidden')" class="font-label-badge text-xs uppercase font-extrabold text-[#D4B586] hover:underline flex items-center gap-1 cursor-pointer transition-colors">
                            <span class="material-symbols-outlined text-[15px]">straighten</span> Sizing &amp; Fit Guide
                        </button>
                    </div>

                    <!-- Swatches Row (5 Sizes: XS, S, M, L, XL) -->
                    <div class="grid grid-cols-5 gap-2.5 sm:gap-3" id="fluffSizeSwatchesContainer">
                        <?php foreach ( $all_sizes as $sz ) : 
                            $is_available = isset( $var_stock_map[ $sz ] ) ? $var_stock_map[ $sz ]['in_stock'] : ( ! $is_variable );
                            $is_selected  = ( $sz === $first_available_size );
                            $var_id       = isset( $var_stock_map[ $sz ]['variation_id'] ) ? $var_stock_map[ $sz ]['variation_id'] : '';
                        ?>
                            <button 
                                type="button" 
                                class="fluff-swatch-pill relative flex flex-col items-center justify-center py-3 px-1 border transition-all duration-200 select-none <?php echo $is_available ? 'is-instock' : 'is-outofstock'; ?> <?php echo ( $is_available && $is_selected ) ? 'is-selected' : ''; ?>"
                                data-size="<?php echo esc_attr( $sz ); ?>"
                                data-variation-id="<?php echo esc_attr( $var_id ); ?>"
                                <?php echo $is_available ? '' : 'disabled="disabled" aria-disabled="true" title="Size ' . esc_attr( $sz ) . ' is currently sold out"'; ?>
                            >
                                <span class="font-label-md text-sm sm:text-base font-extrabold leading-none tracking-wide">
                                    <?php echo esc_html( $sz ); ?>
                                </span>
                                <?php if ( ! $is_available ) : ?>
                                    <span class="text-[9px] font-bold uppercase tracking-tight mt-1 leading-none fluff-soldout-label">
                                        Sold Out
                                    </span>
                                <?php else : ?>
                                    <span class="text-[9px] font-bold uppercase tracking-tight mt-1 leading-none fluff-avail-label">
                                        In Stock
                                    </span>
                                <?php endif; ?>
                            </button>
                        <?php endforeach; ?>
                    </div>

                    <!-- Dynamic Stock Status Feedback -->
                    <div id="fluffStockFeedback" class="text-xs font-bold pt-1 flex items-center gap-2">
                        <?php if ( $first_available_size ) : ?>
                            <span class="w-2.5 h-2.5 rounded-full bg-[#25D366] animate-pulse"></span>
                            <span class="text-[#25D366]">Size <?php echo esc_html( $first_available_size ); ?> is in stock &amp; ready for Cairo Express delivery.</span>
                        <?php else : ?>
                            <span class="w-2.5 h-2.5 rounded-full bg-[#ba1a1a]"></span>
                            <span class="text-[#ba1a1a]">All sizes currently out of stock. Contact Concierge for custom Istanbul order.</span>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Block 6: Add to Cart Action -->
                <div class="pt-1 fluff-add-to-cart-wrapper">
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

                <!-- Block 7: Delivery & Origin Guarantee Card -->
                <div class="bg-white p-4 sm:p-5 border border-[#B7C7D9] shadow-sm flex flex-col gap-2.5">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2.5">
                            <span class="material-symbols-outlined text-[22px]" style="color: #D4B586;">local_shipping</span>
                            <span class="font-label-md text-sm text-[#1F2F4F] font-bold uppercase tracking-wider">Direct Doorstep Delivery</span>
                        </div>
                        <span class="font-arabic-sub text-xs font-semibold text-[#647A96]">توصيل سريع لكل المحافظات</span>
                    </div>
                    <p class="text-xs sm:text-sm text-[#53627A] leading-relaxed">
                        <?php echo $is_preorder ? 'Pre-Order direct from Istanbul ateliers: 10–12 business days express delivery.' : 'Ready Stock in Cairo Hub: 2–4 business days express doorstep delivery.'; ?>
                    </p>
                </div>

                <!-- Block 8: Product Specifications & Fabric Care Drawers -->
                <div class="space-y-3.5">
                    <!-- Engraved Product Specifications Drawer (Dynamic Custom Fields) -->
                    <div class="border border-[#B7C7D9] bg-[#F0EDE4] overflow-hidden shadow-sm">
                        <details class="group p-4 cursor-pointer" open>
                            <summary class="flex items-center justify-between list-none">
                                <div class="flex items-center gap-2.5">
                                    <span class="material-symbols-outlined text-[#1F2F4F] text-[20px]">tune</span>
                                    <span class="font-label-md text-sm text-[#1F2F4F] font-extrabold uppercase tracking-wide">Product Specifications</span>
                                </div>
                                <span class="material-symbols-outlined text-[#647A96] transition-transform group-open:rotate-180 text-[20px]">expand_more</span>
                            </summary>
                            <div class="pt-3.5 border-t border-[#B7C7D9]/40 mt-3">
                                <?php 
                                if ( function_exists( 'fluff_render_product_specs_table' ) ) {
                                    fluff_render_product_specs_table( get_the_ID() );
                                }
                                ?>
                            </div>
                        </details>
                    </div>

                    <!-- Fabric & Care Accordion -->
                    <div class="border border-[#B7C7D9] bg-[#F0EDE4] overflow-hidden shadow-sm">
                        <details class="group p-4 cursor-pointer">
                            <summary class="flex items-center justify-between list-none">
                                <div class="flex items-center gap-2.5">
                                    <span class="material-symbols-outlined text-[#1F2F4F] text-[20px]">strikethrough_s</span>
                                    <span class="font-label-md text-sm text-[#1F2F4F] font-extrabold uppercase tracking-wide">Fabric &amp; Care Details</span>
                                </div>
                                <span class="material-symbols-outlined text-[#647A96] transition-transform group-open:rotate-180 text-[20px]">expand_more</span>
                            </summary>
                            <div class="pt-3.5 text-xs sm:text-sm text-[#53627A] space-y-1.5 border-t border-[#B7C7D9]/40 mt-3 leading-relaxed">
                                <p>• 100% Organic Turkish Cotton woven in Istanbul design ateliers.</p>
                                <p>• Machine wash cold on gentle cycle with similar colors.</p>
                                <p>• Do not tumble dry. Line dry in shade to preserve soft slow-luxury texture.</p>
                                <p>• 14-day exchange guarantee provided the hygienic security seal remains intact.</p>
                            </div>
                        </details>
                    </div>
                </div>

                <!-- Block 9: Complimentary Sterling Gift Banner -->
                <div class="p-4 sm:p-5 border border-[#D4B586]/40 shadow-sm relative overflow-hidden" style="background-color: #16233B; color: #F8F6EF;">
                    <div class="flex items-center gap-3.5 relative z-10">
                        <div class="w-10 h-10 border border-[#D4B586] flex items-center justify-center shrink-0" style="background-color: rgba(212, 181, 134, 0.15); color: #D4B586;">
                            <span class="material-symbols-outlined text-[22px]">redeem</span>
                        </div>
                     
                    </div>
                </div>

            </div>
        </div>

        <!-- Related Products Section (Aligned with Homepage View Collection) -->
        <section class="mt-20 pt-12 border-t border-[#B7C7D9]/50 related-products-section">
            <?php
            $current_hp_view = get_post_meta( get_the_ID(), '_fluff_homepage_view', true );
            $section_subtitle = ! empty( $current_hp_view ) ? 'FROM THE ' . strtoupper( $current_hp_view ) . ' EDIT' : 'COMPLETE YOUR WARDROBE';
            ?>
            <div class="flex items-end justify-between mb-8">
                <div>
                    <span class="font-label-badge text-label-badge uppercase tracking-wider font-extrabold block text-[#647A96]"><?php echo esc_html( $section_subtitle ); ?></span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-[#1F2F4F] uppercase tracking-wide mt-1" style="font-family: 'Bodoni Moda', 'Playfair Display', serif;">
                        You May Also Dream In
                    </h3>
                </div>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/') ); ?>" class="font-label-md text-xs uppercase font-extrabold text-[#1F2F4F] hover:text-[#D4B586] transition-colors flex items-center gap-1">
                    View All <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                </a>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                <?php
                $related_items = function_exists( 'fluff_get_related_homepage_products' ) ? fluff_get_related_homepage_products( get_the_ID(), 4 ) : array();
                if ( ! empty( $related_items ) ) {
                    foreach ( $related_items as $r_item ) {
                        if ( function_exists( 'fluff_render_product_card' ) ) {
                            fluff_render_product_card( $r_item );
                        }
                    }
                } elseif ( function_exists('woocommerce_related_products') ) {
                    woocommerce_related_products( array(
                        'posts_per_page' => 4,
                        'columns'        => 4,
                    ) );
                }
                ?>
            </div>
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
