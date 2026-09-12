<?php
/**
 * FLUFF Sleepwear Front Page Template
 * 
 * Designed & Developed by Mostafa Saad (vitaldc.com)
 * 
 * @package FLUFF
 */

get_header();
?>

<div class="flex flex-col w-full">

    <!-- 1. Atmospheric Editorial Hero -->
    <section class="relative w-full px-margin-mobile pt-4 pb-6 overflow-hidden">
        <div class="relative w-full rounded-2xl overflow-hidden shadow-sm bg-primary-container">
            <div class="bg-cover bg-center w-full min-h-[380px] sm:min-h-[440px] relative flex flex-col justify-between p-6 sm:p-10" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD3wn6bHyBbqJ1a8J3kTP7N5efe-ZaHSyLzj8lb45Dw1iA9sVThBHYeh96lDMY0gnFTFpR_VpBQ5p96LzySzbRXxdJeO9fNg3YKKWH2K5-YAv9SVF-f1ynKJ0-IuvK3SqHOBAY_WHRUEyVi1uG0nGn4XRG70lRH6v5A3dVD8D0xMPIdWHUY690QuEuokadkBuX0y0HLN9LKFdIyuibS9r4pXU986s1zfLA4Rad63FMrZsmwJk1fS_pZAg')">
                <!-- Scrim gradient for contrast -->
                <div class="absolute inset-0 bg-gradient-to-b from-primary/80 via-primary/35 to-primary/90 pointer-events-none"></div>
                
                <!-- Top branding bar -->
                <div class="relative z-10 flex items-center justify-between">
                    <div class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-surface/20 backdrop-blur-md border border-surface/10">
                        <span class="material-symbols-outlined text-secondary-container text-[16px]">nightlight</span>
                        <span class="font-label-caps text-label-caps text-surface tracking-widest uppercase">Istanbul Nights</span>
                    </div>
                    <span class="font-label-caps text-label-caps text-secondary-fixed tracking-widest uppercase hidden sm:inline">Rest • Dream • Belong</span>
                </div>

                <!-- Bottom text editorial block -->
                <div class="relative z-10 space-y-3 text-center max-w-2xl mx-auto pt-10">
                    <div class="flex items-center justify-center gap-2 mb-1">
                        <span class="h-[1px] w-8 bg-secondary-fixed-dim/60"></span>
                        <span class="font-label-caps text-label-caps text-secondary-container tracking-widest uppercase font-bold">Winter Signature Edit</span>
                        <span class="h-[1px] w-8 bg-secondary-fixed-dim/60"></span>
                    </div>
                    <h1 class="font-display-hero text-display-hero-mobile sm:text-display-hero text-surface font-semibold tracking-tight leading-tight">
                        Istanbul Fluffy Nights
                    </h1>
                    <p class="font-arabic-sub text-arabic-sub sm:text-headline-sm text-surface-container-high italic opacity-95">
                        Sleep beautifully anywhere — <span class="font-normal font-body-sm text-surface-variant">A softer you every night</span>
                    </p>
                    <p class="font-arabic-sub text-arabic-sub text-surface-container-highest opacity-90" dir="rtl">
                        تشكيلة نوم بيجامات فاخرة مصممة بين استوديوهات إسطنبول ومخازن القاهرة
                    </p>
                    <div class="pt-3 flex items-center justify-center gap-3">
                        <a class="px-6 py-3 rounded-full bg-secondary text-on-secondary font-label-md text-label-md hover:bg-secondary/90 transition-all shadow-md active:scale-95 flex items-center gap-2" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#collection-grid' ); ?>">
                            <span>Explore Collection</span>
                            <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </a>
                        <a class="px-6 py-3 rounded-full bg-surface/20 backdrop-blur-md text-surface font-label-md text-label-md hover:bg-surface/30 transition-all" href="#shopping-routes">
                            Delivery Routes
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Dual Shopping Routes: Ready Stock vs Pre-Order -->
    <section class="px-margin-mobile py-6" id="shopping-routes">
        <div class="text-center mb-6">
            <p class="font-label-caps text-label-caps text-secondary tracking-widest uppercase mb-1">Tailored To Your Pace</p>
            <h2 class="font-headline-lg-mobile sm:font-headline-lg text-headline-lg-mobile text-primary tracking-tight font-semibold">Shop The Way That Fits Your Night</h2>
            <p class="font-arabic-sub text-arabic-sub text-on-surface-variant mt-0.5">تشكيلات فورية بالقاهرة وشحن خاص بالطلب من إسطنبول</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Route 1: Ready Stock Cairo -->
            <div class="relative rounded-2xl bg-surface-container-lowest p-6 shadow-[0_8px_30px_-4px_rgba(24,39,63,0.05)] border border-surface-container transition-all hover:border-secondary/30">
                <div class="flex items-start justify-between gap-3 mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center text-primary shrink-0">
                            <span class="material-symbols-outlined text-[26px]">inventory_2</span>
                        </div>
                        <div>
                            <div class="flex items-center gap-2">
                                <h3 class="font-label-md text-label-md text-primary font-bold uppercase tracking-wider">Ready Stock</h3>
                                <span class="font-arabic-sub text-arabic-sub text-secondary font-bold">متوفر بالمخزون</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Locally curated in Cairo warehouse</p>
                        </div>
                    </div>
                    <span class="px-3 py-1 rounded-full bg-surface-container-high text-primary font-label-caps text-label-caps uppercase font-bold">
                        Cairo Dispatch
                    </span>
                </div>
                <div class="rounded-xl bg-surface-container-low p-4 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-secondary text-[22px]">local_shipping</span>
                        <div>
                            <p class="font-label-md text-label-md text-on-surface font-semibold">Delivery inside Cairo &amp; Egypt</p>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">2–4 business days directly to door</p>
                        </div>
                    </div>
                    <span class="font-arabic-sub text-arabic-sub text-secondary font-bold">٢-٤ أيام عمل</span>
                </div>
                <div class="mt-4 flex items-center justify-between pt-1">
                    <span class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#25D366]"></span> Instant Dispatch Guaranteed
                    </span>
                    <a class="font-label-md text-label-md text-secondary font-bold flex items-center gap-1 hover:text-primary transition-colors" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>?stock_type=ready">
                        Browse Ready <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Route 2: Pre-Order Turkey -->
            <div class="relative rounded-2xl bg-surface-container-lowest p-6 shadow-[0_8px_30px_-4px_rgba(24,39,63,0.05)] border border-surface-container transition-all hover:border-secondary/30">
                <div class="flex items-start justify-between gap-3 mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed shrink-0">
                            <span class="material-symbols-outlined text-[26px]">flight_takeoff</span>
                        </div>
                        <div>
                            <div class="flex items-center gap-2">
                                <h3 class="font-label-md text-label-md text-primary font-bold uppercase tracking-wider">Istanbul Pre-Order</h3>
                                <span class="font-arabic-sub text-arabic-sub text-secondary font-bold">طلب خاص من إسطنبول</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Handmade at Bosphorus ateliers</p>
                        </div>
                    </div>
                    <span class="px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-caps text-label-caps uppercase font-bold">
                        Bespoke Air
                    </span>
                </div>
                <div class="rounded-xl bg-surface-container-low p-4 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-secondary text-[22px]">flight</span>
                        <div>
                            <p class="font-label-md text-label-md text-on-surface font-semibold">Direct Air Delivery</p>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">10–12 business days express shipping</p>
                        </div>
                    </div>
                    <span class="font-arabic-sub text-arabic-sub text-secondary font-bold">١٠-١٢ يوم عمل</span>
                </div>
                <div class="mt-4 flex items-center justify-between pt-1">
                    <span class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-secondary"></span> Custom Atelier Tailoring
                    </span>
                    <a class="font-label-md text-label-md text-secondary font-bold flex items-center gap-1 hover:text-primary transition-colors" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>?stock_type=preorder">
                        Browse Pre-Order <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Category Capsule Pills Bar -->
    <section class="w-full overflow-x-auto no-scrollbar px-margin-mobile py-2">
        <div class="flex items-center gap-2.5 min-w-max">
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" class="px-5 py-2.5 rounded-full bg-primary text-on-primary font-label-md text-label-md shadow-sm flex items-center gap-2">
                <span>All Collections</span>
            </a>
            <a href="<?php echo esc_url( home_url('/category-special-collection/') ); ?>" class="px-5 py-2.5 rounded-full bg-surface-container-high text-on-surface font-label-md text-label-md shadow-sm hover:bg-surface-variant flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px] text-secondary">ac_unit</span>
                <span>Winter Ribbed Edit</span>
            </a>
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>?category=silk-satin" class="px-5 py-2.5 rounded-full bg-surface-container-high text-on-surface font-label-md text-label-md shadow-sm hover:bg-surface-variant flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px] text-secondary">strikethrough_s</span>
                <span>Silk &amp; Satin Robes</span>
            </a>
            <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="px-5 py-2.5 rounded-full bg-surface-container-high text-on-surface font-label-md text-label-md shadow-sm hover:bg-surface-variant flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px] text-secondary">straighten</span>
                <span>Sizing Advisor</span>
            </a>
        </div>
    </section>

    <!-- 4. Dynamic WooCommerce Featured Products Section -->
    <section class="px-margin-mobile py-8" id="collection-grid">
        <div class="flex items-center justify-between mb-5">
            <div>
                <span class="font-label-caps text-label-caps text-secondary uppercase tracking-widest">Trending Now</span>
                <h2 class="font-headline-lg-mobile sm:font-headline-lg text-headline-lg-mobile text-primary font-semibold">Featured Sleepwear Sets</h2>
            </div>
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" class="font-label-caps text-label-caps text-secondary uppercase font-bold hover:underline flex items-center gap-1">
                View All <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
        </div>

        <?php
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => 4,
        );
        $loop = new WP_Query( $args );

        if ( $loop->have_posts() ) :
            ?>
            <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                <?php
                while ( $loop->have_posts() ) : $loop->the_post();
                    wc_get_template_part( 'content', 'product' );
                endwhile;
                ?>
            </ul>
            <?php
            wp_reset_postdata();
        else :
            // Fallback Sample Products
            $sample_products = fluff_get_sample_products();
            ?>
            <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                <?php foreach ( $sample_products as $p ) : ?>
                    <li class="group relative rounded-2xl bg-surface-container-lowest p-3.5 shadow-[0_8px_30px_-4px_rgba(24,39,63,0.05)] border border-surface-container/60 transition-all hover:shadow-md flex flex-col justify-between">
                        <div class="space-y-3">
                            <div class="relative w-full aspect-[4/5] rounded-xl overflow-hidden bg-surface-container">
                                <a href="<?php echo esc_url( home_url('/single-product-detail/') ); ?>">
                                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="<?php echo esc_url($p['image']); ?>" alt="<?php echo esc_attr($p['name']); ?>"/>
                                </a>
                                <div class="absolute top-2.5 left-2.5 flex flex-col gap-1">
                                    <span class="bg-surface-bright/90 backdrop-blur-md text-primary font-label-caps text-[9px] px-2 py-0.5 rounded-full shadow-sm font-bold uppercase">
                                        <?php echo esc_html($p['badge']); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="space-y-1">
                                <span class="font-label-caps text-[10px] text-secondary uppercase font-bold"><?php echo esc_html($p['category']); ?></span>
                                <h3 class="font-headline-sm text-headline-sm text-primary font-semibold truncate">
                                    <a href="<?php echo esc_url( home_url('/single-product-detail/') ); ?>" class="hover:text-secondary transition-colors"><?php echo esc_html($p['name']); ?></a>
                                </h3>
                                <p class="font-arabic-sub text-[11px] text-on-surface-variant truncate" dir="rtl"><?php echo esc_html($p['arabic_name']); ?></p>
                                <div class="flex items-baseline gap-2 pt-1">
                                    <span class="font-label-md text-label-md text-primary font-bold"><?php echo esc_html(number_format($p['price'])); ?> EGP</span>
                                    <span class="font-body-sm text-body-sm text-outline line-through"><?php echo esc_html(number_format($p['regular_price'])); ?> EGP</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3">
                            <a href="<?php echo esc_url( home_url('/single-product-detail/') ); ?>" class="w-full py-2.5 px-3 rounded-full bg-primary text-on-primary font-label-md text-label-md text-center hover:bg-primary/90 transition-all shadow-sm block">
                                View Details
                            </a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>

    <!-- 5. Fabric & Tactile Touch Feature Showcase Section -->
    <section class="px-margin-mobile py-6">
        <div class="bg-surface-container-lowest p-6 rounded-2xl border border-surface-container shadow-sm grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <div class="space-y-3">
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-caps text-label-caps font-bold uppercase">
                    <span class="material-symbols-outlined text-[16px]">touch_app</span>
                    <span>Fabric Touch Guarantee</span>
                </div>
                <h2 class="font-headline-lg-mobile text-headline-lg-mobile text-primary font-bold leading-tight">
                    Pure Turkish Cotton &amp; Hand-Brushed Silk
                </h2>
                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                    Every FLUFF set is crafted using organic high-density ribbed cotton and Mulberry silk touches. Our hygienic window-box packaging lets you inspect and feel the tactile fabric texture before opening the sterile seal.
                </p>
                <p class="font-arabic-sub text-arabic-sub text-secondary font-medium" dir="rtl">
                    اقماشة قطنية مضلعة فاخرة وحرير طبيعي.. تفحصي ملمس القماش الأصلي عبر نافذة المعاينة الشفافة.
                </p>
                <div class="pt-2">
                    <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="px-5 py-2.5 rounded-full bg-primary text-on-primary font-label-md text-label-md inline-flex items-center gap-1.5 hover:bg-primary/90 transition-all">
                        <span>Learn About Hygiene Guarantee</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                </div>
            </div>

            <div class="rounded-xl overflow-hidden aspect-[4/3] bg-surface-container shadow-sm relative">
                <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuABYr5oGJKTfjmStIIief-QWqVSNZAItQWof64WAc68f0MSE-t8yFzO2QNYQyyaUkXrjBIkkbTHbTbBjDgGb3P28FXfw8jZ_Vl8FxyQoJ-SR6JrY_lfNkIMCGW9Y0fuNLVDHDEQj7GuXzsxUcTuZIO7KOBz95EL725icBGnWX_l93YvklQGhZVdk30Vaakqacdx1smKNf8xNUAbVgqjoZ-BEZrPPy4HGJzuLP1pqXeMuzwrU-CdXfdPlA" alt="Fabric Texture"/>
                <div class="absolute bottom-3 right-3 bg-surface/90 backdrop-blur-md px-3 py-1.5 rounded-full text-xs font-semibold text-primary shadow-md flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-secondary"></span>
                    <span>100% Organic Weave</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Complimentary Sterling Crescent Pendant Gift Banner -->
    <section class="px-margin-mobile py-4">
        <div class="bg-gradient-to-r from-primary-container to-[#223352] text-on-primary rounded-2xl p-6 sm:p-8 relative overflow-hidden shadow-md">
            <div class="flex items-center gap-5 relative z-10">
                <div class="w-16 h-16 rounded-full bg-secondary-container/20 flex items-center justify-center text-secondary-container shrink-0">
                    <span class="material-symbols-outlined text-[36px]">card_giftcard</span>
                </div>
                <div class="flex-1 min-w-0 space-y-1.5">
                    <div class="flex items-center gap-2">
                        <span class="font-label-caps text-label-caps text-secondary-fixed tracking-wider uppercase font-bold">FLUFF × STERLING GIFT</span>
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary-fixed"></span>
                        <span class="font-body-sm text-body-sm text-tertiary-fixed">Complimentary Gift</span>
                    </div>
                    <h3 class="font-headline-lg-mobile sm:font-headline-lg text-headline-lg-mobile text-on-primary font-bold">Solid 925 Sterling Crescent Moon Pendant</h3>
                    <p class="font-arabic-sub text-arabic-sub text-surface-container-highest/90">قلادة هلال الفضة الخالصة عيار ٩٢٥ مدرجة مجاناً داخل طردك الفاخر مع كل طلب</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Bespoke Services & Policy Showcase Grid -->
    <section class="px-margin-mobile py-6 grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="p-6 rounded-2xl bg-surface-container-lowest border border-surface-container shadow-sm space-y-3">
            <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-secondary">
                <span class="material-symbols-outlined text-[22px]">straighten</span>
            </div>
            <h4 class="font-headline-sm text-headline-sm text-primary font-semibold">Sizing &amp; Fit Advisor</h4>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Find your tailored fit across our Turkish ribbed &amp; modal collections.</p>
            <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="font-label-md text-label-md text-secondary font-bold hover:underline inline-flex items-center gap-1">
                Open Sizing Advisor <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
        </div>

        <div class="p-6 rounded-2xl bg-surface-container-lowest border border-surface-container shadow-sm space-y-3">
            <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-secondary">
                <span class="material-symbols-outlined text-[22px]">local_shipping</span>
            </div>
            <h4 class="font-headline-sm text-headline-sm text-primary font-semibold">Hygiene &amp; Transit Terms</h4>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Sealed hygienic window box allows touch-testing before seal break.</p>
            <a href="<?php echo esc_url( home_url('/shipping-packaging/') ); ?>" class="font-label-md text-label-md text-secondary font-bold hover:underline inline-flex items-center gap-1">
                View Packaging Terms <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
        </div>

        <div class="p-6 rounded-2xl bg-surface-container-lowest border border-surface-container shadow-sm space-y-3">
            <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-secondary">
                <span class="material-symbols-outlined text-[22px]">auto_awesome</span>
            </div>
            <h4 class="font-headline-sm text-headline-sm text-primary font-semibold">Special Capsule Edit</h4>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Curated limited edition winter sets imported from Istanbul ateliers.</p>
            <a href="<?php echo esc_url( home_url('/category-special-collection/') ); ?>" class="font-label-md text-label-md text-secondary font-bold hover:underline inline-flex items-center gap-1">
                View Special Edit <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
        </div>
    </section>

    <!-- 8. Editorial Customer Reviews Section -->
    <section class="px-margin-mobile py-8 bg-surface-container-low my-4">
        <div class="max-w-4xl mx-auto space-y-6">
            <div class="text-center space-y-1">
                <span class="font-label-caps text-label-caps text-secondary uppercase tracking-widest">Love Notes</span>
                <h2 class="font-headline-lg-mobile sm:font-headline-lg text-headline-lg-mobile text-primary font-bold">What FLUFF Sleepers Say</h2>
                <p class="font-arabic-sub text-arabic-sub text-on-surface-variant">آراء عميلاتنا في القاهرة والدول العربية</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-5 rounded-2xl bg-surface-container-lowest border border-surface-container shadow-sm space-y-3">
                    <div class="flex items-center gap-1 text-secondary">
                        <span class="material-symbols-outlined text-[18px]">star</span>
                        <span class="material-symbols-outlined text-[18px]">star</span>
                        <span class="material-symbols-outlined text-[18px]">star</span>
                        <span class="material-symbols-outlined text-[18px]">star</span>
                        <span class="material-symbols-outlined text-[18px]">star</span>
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface italic">"The Istanbul Blossom set is pure perfection! The fabric window in the packaging let me touch it before opening. Truly luxury experience!"</p>
                    <div class="pt-2 border-t border-surface-container flex items-center justify-between text-xs text-on-surface-variant">
                        <span class="font-semibold text-primary">Nouran S.</span>
                        <span>Cairo, Egypt</span>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-surface-container-lowest border border-surface-container shadow-sm space-y-3">
                    <div class="flex items-center gap-1 text-secondary">
                        <span class="material-symbols-outlined text-[18px]">star</span>
                        <span class="material-symbols-outlined text-[18px]">star</span>
                        <span class="material-symbols-outlined text-[18px]">star</span>
                        <span class="material-symbols-outlined text-[18px]">star</span>
                        <span class="material-symbols-outlined text-[18px]">star</span>
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface italic">"وصلني في 3 أيام بالقاهرة في علبة التغليف الفاخرة ومعدات الفضة الهدية تجنن! خامة القطن مريحة جداً ليلة بعد ليلة."</p>
                    <div class="pt-2 border-t border-surface-container flex items-center justify-between text-xs text-on-surface-variant">
                        <span class="font-semibold text-primary">Dalia M.</span>
                        <span>Giza, Egypt</span>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-surface-container-lowest border border-surface-container shadow-sm space-y-3">
                    <div class="flex items-center gap-1 text-secondary">
                        <span class="material-symbols-outlined text-[18px]">star</span>
                        <span class="material-symbols-outlined text-[18px]">star</span>
                        <span class="material-symbols-outlined text-[18px]">star</span>
                        <span class="material-symbols-outlined text-[18px]">star</span>
                        <span class="material-symbols-outlined text-[18px]">star</span>
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface italic">"Pre-ordered from Istanbul and arrived exactly in 11 days. High-end atelier quality. Will definitely order again!"</p>
                    <div class="pt-2 border-t border-surface-container flex items-center justify-between text-xs text-on-surface-variant">
                        <span class="font-semibold text-primary">Yasmin K.</span>
                        <span>Alexandria</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php
get_footer();