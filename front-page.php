<?php
/**
 * Front Page Template
 *
 * Designed & Developed for FLUFF Sleepwear
 * 
 * @package FLUFF
 */

get_header();
?>

<div class="flex flex-col w-full">

    <!-- Dynamic Notification Toast -->
    <div id="toastNotification" class="fixed top-20 left-1/2 -translate-x-1/2 z-50 transition-all duration-300 transform -translate-y-12 opacity-0 pointer-events-none">
        <div class="bg-[#1F2F4F] text-[#F8F6EF] px-4 py-2.5 rounded-full shadow-lg border border-[#D4B586]/40 flex items-center gap-2">
            <span class="material-symbols-outlined text-[#D4B586] text-[18px]">favorite</span>
            <span id="toastMessage" class="font-body-sm text-xs font-semibold text-[#F8F6EF]">Added to wishlist</span>
        </div>
    </div>

    <!-- Hero Promotional Section -->
    <section class="relative w-full overflow-hidden bg-[#1F2F4F] text-[#F8F6EF]">
        <div class="relative w-full">
            <img alt="50% Off Clearance Promotion" class="w-full h-auto object-cover block max-h-[480px]" src="https://lh3.googleusercontent.com/aida/AEtjO1Xu3_Vs2TNGnwY4xwVI3D-9gFqWYlgP0UDTqcms2JlW3Zpvemgt-wTQ6pCAOrVr2sS4_rjhztkyHf6BKCcSoIOdEibxyEtqTo5uCCE-vF7_tFJuMwfqLOlxRZ_25jCPrsQKfE5EVKNYoRWhB4NsQcInQ1DhQ7dgsIQzAgyA1d9EjT8Aep984e-4o2W4-3ECwAety0rFtlZ9y4mDt0rYSssjU0ylYmNJUby8LD1xnEdub8iFvEbx8EgffBAB"/>
            <div class="absolute inset-0 bg-gradient-to-t from-[#1F2F4F] via-[#1F2F4F]/40 to-transparent flex flex-col justify-end p-4 sm:p-6">
                <div class="flex items-center gap-2 mb-1.5">
                    <span class="bg-[#D4B586] text-[#1F2F4F] px-2.5 py-0.5 rounded-full font-label-caps text-[10px] uppercase font-bold tracking-wider">
                        LIMITED PROMO
                    </span>
                    <span class="font-label-caps text-[10px] text-[#F8F6EF]/90 uppercase tracking-wider font-semibold">
                        Clearance Drops
                    </span>
                </div>
                <h1 class="font-headline-lg text-2xl sm:text-4xl font-bold text-white tracking-tight leading-tight mb-1.5">
                    50% OFF ON 2ND ITEM
                </h1>
                <p class="font-body-md text-sm text-[#F8F6EF]/85 mb-4 max-w-xl">
                    Or Buy 2 Get 1 Free on all breathable Egyptian cotton &amp; silky loungewear crafted for dreamers.
                </p>
                <div class="flex gap-3 max-w-md">
                    <a href="#new-drops" class="flex-1 text-center bg-[#D4B586] text-[#1F2F4F] py-2.5 px-4 rounded-full font-label-caps text-xs font-bold active:scale-95 transition-all shadow-md hover:bg-[#c4a373]">
                        Shop Drops
                    </a>
                    <a href="#satin-section" class="flex-1 text-center bg-[#F8F6EF]/20 backdrop-blur-md text-[#F8F6EF] border border-[#F8F6EF]/30 py-2.5 px-4 rounded-full font-label-caps text-xs font-bold active:scale-95 transition-all hover:bg-[#F8F6EF]/30">
                        Browse Satin
                    </a>
                </div>
            </div>
        </div>
        <!-- Urgent Ticker Bar -->
        <div class="bg-[#1F2F4F] border-t border-b border-[#D4B586]/30 text-[#F8F6EF] py-2 px-4 flex items-center justify-between overflow-x-auto whitespace-nowrap">
            <div class="flex items-center gap-3 font-label-caps text-xs uppercase tracking-widest font-bold text-center w-full justify-center text-[#D4B586]">
                <span>50% OFF ON 2ND ITEM</span>
                <span class="text-[#F8F6EF]/40 font-black">//</span>
                <span>BUY 2 GET 1 FREE</span>
                <span class="text-[#F8F6EF]/40 font-black">//</span>
                <span>LIMITED QUANTITIES AVAILABLE</span>
            </div>
        </div>
    </section>

    <!-- Horizontal Story / Category Pills -->
    <section class="py-5 bg-[#F8F6EF] border-b border-[#B7C7D9]/30">
        <div class="px-margin-mobile flex items-center justify-between mb-3">
            <h2 class="font-headline-md text-headline-md font-bold text-[#1F2F4F]">Browse Collections</h2>
            <span class="font-label-caps text-label-caps text-[#D4B586] uppercase font-bold tracking-wider">7 STYLES</span>
        </div>
        <div class="flex gap-2.5 overflow-x-auto px-margin-mobile no-scrollbar pb-1">
            <button class="flex items-center gap-1.5 px-4 py-2 rounded-full bg-[#1F2F4F] text-[#F8F6EF] font-label-caps text-xs font-bold shrink-0 shadow-sm active:scale-95 transition-transform">
                <span class="material-symbols-outlined text-[16px] text-[#D4B586]">local_fire_department</span>
                Summer PJs
            </button>
            <button class="flex items-center gap-1.5 px-4 py-2 rounded-full bg-[#F4F0E6] text-[#1F2F4F] border border-[#B7C7D9]/40 font-label-caps text-xs shrink-0 active:scale-95 transition-transform hover:bg-[#EAE5D8]">
                <span class="material-symbols-outlined text-[16px]">pattern</span>
                Patterned
            </button>
            <button class="flex items-center gap-1.5 px-4 py-2 rounded-full bg-[#F4F0E6] text-[#1F2F4F] border border-[#B7C7D9]/40 font-label-caps text-xs shrink-0 active:scale-95 transition-transform hover:bg-[#EAE5D8]">
                <span class="material-symbols-outlined text-[16px]">bedtime</span>
                Satin Sets
            </button>
            <button class="flex items-center gap-1.5 px-4 py-2 rounded-full bg-[#F4F0E6] text-[#1F2F4F] border border-[#B7C7D9]/40 font-label-caps text-xs shrink-0 active:scale-95 transition-transform hover:bg-[#EAE5D8]">
                <span class="material-symbols-outlined text-[16px]">layers</span>
                3-Piece Sets
            </button>
            <button class="flex items-center gap-1.5 px-4 py-2 rounded-full bg-[#F4F0E6] text-[#1F2F4F] border border-[#B7C7D9]/40 font-label-caps text-xs shrink-0 active:scale-95 transition-transform hover:bg-[#EAE5D8]">
                <span class="material-symbols-outlined text-[16px]">straighten</span>
                Pants
            </button>
            <button class="flex items-center gap-1.5 px-4 py-2 rounded-full bg-[#F4F0E6] text-[#1F2F4F] border border-[#B7C7D9]/40 font-label-caps text-xs shrink-0 active:scale-95 transition-transform hover:bg-[#EAE5D8]">
                <span class="material-symbols-outlined text-[16px]">spa</span>
                Satin Isdal
            </button>
            <button class="flex items-center gap-1.5 px-4 py-2 rounded-full bg-[#F4F0E6] text-[#1F2F4F] border border-[#B7C7D9]/40 font-label-caps text-xs shrink-0 active:scale-95 transition-transform hover:bg-[#EAE5D8]">
                <span class="material-symbols-outlined text-[16px]">pool</span>
                Swimwear
            </button>
        </div>
    </section>

    <!-- Featured New Drops (2-Column Grid) -->
    <section class="px-margin-mobile py-6 bg-[#F8F6EF]" id="new-drops">
        <div class="flex items-end justify-between mb-4">
            <div>
                <span class="font-label-caps text-label-caps text-[#D4B586] uppercase tracking-wider font-extrabold block">HOT RELEASES</span>
                <h2 class="font-headline-lg-mobile text-headline-lg-mobile font-bold text-[#1F2F4F]">New Arrivals</h2>
            </div>
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" class="font-label-caps text-xs text-[#1F2F4F] font-bold flex items-center gap-0.5 hover:text-[#D4B586] transition-colors">
                View all <span class="material-symbols-outlined text-[16px]">chevron_right</span>
            </a>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3.5">
            <!-- Product 1 -->
            <div class="flex flex-col bg-white rounded-2xl overflow-hidden shadow-sm border border-[#B7C7D9]/40 justify-between">
                <div class="relative aspect-[3/4] w-full bg-[#F4F0E6]">
                    <img alt="Heavenly Stripes Set Ladies - Olive" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1VwCeG0fQNpeA4O0djAQOvl7HREfBTeW5_LuJmMdi8G3DNl0G5cgsBzeoP5vE2ubOk5fJ2NiE9BvK-GWiUQ9hiUXjffnzvv3sF4gxMR2jq7oIMp3jHd_AdjcKRzHgMZMBw2CHhp-8zgbcwbTSsSTheLindjCQjB5SqTjlU9JUOIKxoWgye8WEGZ8kmfW2jzROuxRBT5_KnmEgb4-7ScHRSrYv_sVIUPY2014OmI3_LFiVsmlUksZNZ0OD2h"/>
                    <span class="absolute top-2 left-2 bg-[#647A96] text-white font-label-caps text-[9px] px-2 py-0.5 rounded-full uppercase font-bold">
                        50% OFF 2ND
                    </span>
                    <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center text-[#1F2F4F] shadow active:scale-90 transition-transform hover:text-[#D4B586]" onclick="toggleWishlist(this, 'Heavenly Stripes Set (Ladies)')">
                        <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                    </button>
                </div>
                <div class="p-3 flex flex-col flex-1 justify-between">
                    <div>
                        <span class="font-body-sm text-[11px] text-[#1F2F4F]/70 block">Women's Loungewear</span>
                        <h3 class="font-headline-sm text-sm font-bold text-[#1F2F4F] line-clamp-1 mt-0.5">Heavenly Stripes Set (Ladies) - Olive</h3>
                    </div>
                    <div class="mt-2 flex items-baseline gap-1.5">
                        <span class="font-label-caps text-xs font-extrabold text-[#1F2F4F]">LE 1,499.00</span>
                        <span class="font-body-sm text-[11px] text-[#1F2F4F]/60 line-through">LE 949.00</span>
                    </div>
                    <button class="mt-2.5 w-full py-2 bg-[#1F2F4F] text-white font-label-caps text-xs font-bold rounded-xl flex items-center justify-center gap-1 active:bg-[#D4B586] active:text-[#1F2F4F] transition-colors shadow-sm" onclick="addToCart('Heavenly Stripes Set (Ladies)- Olive')">
                        Add to Bag
                    </button>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="flex flex-col bg-white rounded-2xl overflow-hidden shadow-sm border border-[#B7C7D9]/40 justify-between">
                <div class="relative aspect-[3/4] w-full bg-[#F4F0E6]">
                    <img alt="Heavenly Stripe Set Men - Baby Blue" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1Xt8iTmQBIsTUqH1cH3QjUba-6evLhtfSDtZs3w0Zkt0POrAOyQX_HfhB5hNnQKK5aqlvcNKZSGdBMNBh2IHmCWdIw0C3V3oc--d00G9H5jhozsouPTtTHPaUmGuOovWAiKJEImb1OchbROMwEyMnq7x5xRqWVVg4Pmgp5XN-D-C2LoTvAy_PeTIf28HYrkiGVzzRdWrtUVnPf0v2BgVqjQdYIIFni-rz05-L8NsCWxbjXDbEBp2ljtTQI"/>
                    <span class="absolute top-2 left-2 bg-[#D8B4C1] text-[#1F2F4F] font-label-caps text-[9px] px-2 py-0.5 rounded-full uppercase font-bold">
                        COUPLES PAIR
                    </span>
                    <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center text-[#1F2F4F] shadow active:scale-90 transition-transform hover:text-[#D4B586]" onclick="toggleWishlist(this, 'Heavenly Stripe Set (Men)')">
                        <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                    </button>
                </div>
                <div class="p-3 flex flex-col flex-1 justify-between">
                    <div>
                        <span class="font-body-sm text-[11px] text-[#1F2F4F]/70 block">Men's Relaxed Fit</span>
                        <h3 class="font-headline-sm text-sm font-bold text-[#1F2F4F] line-clamp-1 mt-0.5">Heavenly Stripe Set (Men) - Baby Blue</h3>
                    </div>
                    <div class="mt-2 flex items-baseline gap-1.5">
                        <span class="font-label-caps text-xs font-extrabold text-[#1F2F4F]">LE 1,499.00</span>
                        <span class="font-body-sm text-[11px] text-[#1F2F4F]/60 line-through">LE 949.00</span>
                    </div>
                    <button class="mt-2.5 w-full py-2 bg-[#1F2F4F] text-white font-label-caps text-xs font-bold rounded-xl flex items-center justify-center gap-1 active:bg-[#D4B586] active:text-[#1F2F4F] transition-colors shadow-sm" onclick="addToCart('Heavenly Stripe Set (Men)- Baby Blue')">
                        Add to Bag
                    </button>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="flex flex-col bg-white rounded-2xl overflow-hidden shadow-sm border border-[#B7C7D9]/40 justify-between">
                <div class="relative aspect-[3/4] w-full bg-[#F4F0E6]">
                    <img alt="Serenity Stripe Short Set Blue" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1WsztWbC7LnZvHfwf9yG0LjwCHnYp8zr3memxfq3YFqj0alRImyzYhB-l8-VEHRpmCIQQyd9gsOQfmVHesPDnzUULcavi_Pkm3BUbxrvB6d-Ecqi1aBwniv3dKsB60rswMJ1gT4QXQSy9iqao17423I60MbYVkKzeNuVGYsch3HLvaW0-tsK5xy1ZybIlu-BiDwSXWwURg_OXYJ6T1C_0wZ2ObgR4E2ra5LDw_PNy6GnFtyrFfVax4AIYWx"/>
                    <span class="absolute top-2 left-2 bg-[#D4B586] text-[#1F2F4F] font-label-caps text-[9px] px-2 py-0.5 rounded-full uppercase font-extrabold">
                        BESTSELLER
                    </span>
                    <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center text-[#1F2F4F] shadow active:scale-90 transition-transform hover:text-[#D4B586]" onclick="toggleWishlist(this, 'Serenity Stripe Short Set')">
                        <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                    </button>
                </div>
                <div class="p-3 flex flex-col flex-1 justify-between">
                    <div>
                        <span class="font-body-sm text-[11px] text-[#1F2F4F]/70 block">Cotton Short Set</span>
                        <h3 class="font-headline-sm text-sm font-bold text-[#1F2F4F] line-clamp-1 mt-0.5">Serenity Stripe Short Set Blue</h3>
                    </div>
                    <div class="mt-2 flex items-baseline gap-1.5">
                        <span class="font-label-caps text-xs font-extrabold text-[#1F2F4F]">LE 1,299.00</span>
                        <span class="font-body-sm text-[11px] text-[#1F2F4F]/60 line-through">LE 899.00</span>
                    </div>
                    <button class="mt-2.5 w-full py-2 bg-[#1F2F4F] text-white font-label-caps text-xs font-bold rounded-xl flex items-center justify-center gap-1 active:bg-[#D4B586] active:text-[#1F2F4F] transition-colors shadow-sm" onclick="addToCart('Serenity Stripe Short Set Blue')">
                        Add to Bag
                    </button>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="flex flex-col bg-white rounded-2xl overflow-hidden shadow-sm border border-[#B7C7D9]/40 justify-between">
                <div class="relative aspect-[3/4] w-full bg-[#F4F0E6]">
                    <img alt="Dots PJ 3 Pieces Set" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1WPXewYZN1Zq8Yg0wyounPitnYkQPlfs7Gq15JjGg3Sd3SCXtfRxRtjYlp95CJEt3-T9CVBWm3nZzhadYyPz6BlhydxNlPl_Zh5smhHVnicLMFci5zyh4ogEIyUfEUBhrkAzGbFNHT2SckxP-St6syOhhk_TMzgENyjPZiOPSbkknbbNdzGpKgDYRjhuiqaYILjZP_nXP1VFnPXyaWsOgVFSxsiMWiDfykQb3Tah4Lx7J9lsrrqgqPaGCeT"/>
                    <span class="absolute top-2 left-2 bg-[#647A96] text-white font-label-caps text-[9px] px-2 py-0.5 rounded-full uppercase font-bold">
                        3-PIECE VALUE
                    </span>
                    <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center text-[#1F2F4F] shadow active:scale-90 transition-transform hover:text-[#D4B586]" onclick="toggleWishlist(this, 'Dots PJ 3 Pieces Set')">
                        <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                    </button>
                </div>
                <div class="p-3 flex flex-col flex-1 justify-between">
                    <div>
                        <span class="font-body-sm text-[11px] text-[#1F2F4F]/70 block">Full Loungewear Trio</span>
                        <h3 class="font-headline-sm text-sm font-bold text-[#1F2F4F] line-clamp-1 mt-0.5">Dots PJ 3 Pieces Set</h3>
                    </div>
                    <div class="mt-2 flex items-baseline gap-1.5">
                        <span class="font-label-caps text-xs font-extrabold text-[#1F2F4F]">LE 1,549.00</span>
                        <span class="font-body-sm text-[11px] text-[#1F2F4F]/60 line-through">LE 1,199.00</span>
                    </div>
                    <button class="mt-2.5 w-full py-2 bg-[#1F2F4F] text-white font-label-caps text-xs font-bold rounded-xl flex items-center justify-center gap-1 active:bg-[#D4B586] active:text-[#1F2F4F] transition-colors shadow-sm" onclick="addToCart('Dots PJ 3 Pieces Set')">
                        Add to Bag
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Editorial Feature - 'The Art of Everyday Elegance' -->
    <section class="relative my-6 px-margin-mobile overflow-hidden">
        <div class="bg-[#1F2F4F] text-[#F8F6EF] rounded-2xl overflow-hidden shadow-md">
            <div class="p-6">
                <span class="font-label-caps text-label-caps text-[#D4B586] uppercase tracking-widest font-extrabold block mb-1">
                    EDITORIAL LOOKBOOK
                </span>
                <h2 class="font-headline-lg text-2xl sm:text-3xl font-bold text-white tracking-tight leading-tight">
                    The Art of Everyday Elegance
                </h2>
                <p class="font-body-md text-sm text-[#F8F6EF]/85 mt-2">
                    Softness You Can Feel. Made for Cozy Days &amp; Sun-drenched Balconies.
                </p>
            </div>
            <!-- Editorial Image -->
            <div class="relative px-6 pb-6">
                <div class="relative w-full rounded-xl overflow-hidden shadow-lg aspect-[4/3] max-h-[360px]">
                    <img alt="Editorial Loungewear Setting" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1VJSnw8BMsvFTE9-IpIKi4dXD27-EHyGQmH0o9gwr5g3GMHiyYXTCqGj2CyvdpGrbq33zSZ8xGQtaI_2wNf9oIWQIJ_VicWFpTEXuQvwhN5Y7kBP0p6zMEz9sCdlicg3lOBFhkr20RzKbjVSLc1ncMXUfIva-moQfoSOFoTTlAjk3ePuI3brufnS04mLg9sm2a-ws_lxOcV8UDB2DqezhaMg232MSggiWvAZ36AEW61asFvdmdMlHZu57f2"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1F2F4F]/90 via-transparent to-transparent flex items-end p-4">
                        <div class="flex items-center justify-between w-full">
                            <div>
                                <span class="font-label-caps text-[10px] text-[#D4B586] uppercase font-bold">Featured Capsule</span>
                                <p class="font-headline-sm text-sm sm:text-base font-bold text-white">Heavenly Stripe &amp; Satin</p>
                            </div>
                            <a href="#satin-section" class="bg-[#F8F6EF] text-[#1F2F4F] px-4 py-2 rounded-xl font-label-caps text-xs font-bold shadow hover:bg-[#D4B586] transition-colors">
                                EXPLORE
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Satin Shorts Spotlight -->
    <section class="px-margin-mobile py-6 bg-[#F4F0E6]" id="satin-section">
        <div class="flex items-end justify-between mb-4">
            <div>
                <span class="font-label-caps text-label-caps text-[#D4B586] uppercase tracking-wider font-extrabold block">GLOSSY SILK TOUCH</span>
                <h2 class="font-headline-lg-mobile text-headline-lg-mobile font-bold text-[#1F2F4F]">Satin Shorts</h2>
            </div>
            <span class="bg-[#D8B4C1]/30 text-[#1F2F4F] border border-[#D8B4C1]/50 px-3 py-1 rounded-full font-label-caps text-xs font-bold">
                LE 1,249 FLAT
            </span>
        </div>
        <div class="flex gap-3.5 overflow-x-auto no-scrollbar pb-2">
            <!-- Satin 1 -->
            <div class="w-48 shrink-0 flex flex-col bg-white rounded-2xl border border-[#B7C7D9]/40 overflow-hidden shadow-sm justify-between">
                <div class="relative aspect-[3/4] w-full bg-[#F4F0E6]">
                    <img alt="Bows Satin Pyjama Short Set" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1WPPZkBI_R2AAGWi3YWayPjm9ZspL2ac17jUmVbpFqCdrIkGmtU5SxRiuX-f5-UGiu_BvBjU_pTTm87_miz_bzfrUkZ-okjeFkCRLX7rtRMp_9sDBFFaDCXphaGjnD0Xd99--r0JX-j6UQDdsaSZIZYckU3LimGxcBSYFNiTfUgLKV-aRsC5ROf7GMJE-JekKgNYuHYM3N_pcx6sCViMv1JW3p5JQrhfYNwqYUOM1lFFfvGz8iE1qtiLvqF"/>
                    <span class="absolute top-2 left-2 bg-[#D4B586] text-[#1F2F4F] font-label-caps text-[9px] px-2 py-0.5 rounded-full uppercase font-bold">
                        TRENDING
                    </span>
                    <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-7 h-7 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center text-[#1F2F4F] shadow hover:text-[#D4B586]" onclick="toggleWishlist(this, 'Bows Satin Pyjama Set')">
                        <span class="material-symbols-outlined text-[16px]">favorite_border</span>
                    </button>
                </div>
                <div class="p-3 flex flex-col flex-1 justify-between">
                    <h4 class="font-headline-sm text-sm font-bold text-[#1F2F4F] line-clamp-1">Bows Satin Pyjama Short Set</h4>
                    <div class="mt-1 flex items-baseline gap-1.5">
                        <span class="font-label-caps text-xs font-bold text-[#1F2F4F]">LE 1,249.00</span>
                        <span class="font-body-sm text-[11px] text-[#1F2F4F]/60 line-through">LE 949.00</span>
                    </div>
                    <button class="mt-2.5 w-full py-1.5 bg-[#F4F0E6] text-[#1F2F4F] font-label-caps text-xs uppercase font-bold rounded-xl active:bg-[#1F2F4F] active:text-white hover:bg-[#1F2F4F] hover:text-white transition-colors" onclick="addToCart('Bows Satin Pyjama Short Set')">
                        Quick Add
                    </button>
                </div>
            </div>
            <!-- Satin 2 -->
            <div class="w-48 shrink-0 flex flex-col bg-white rounded-2xl border border-[#B7C7D9]/40 overflow-hidden shadow-sm justify-between">
                <div class="relative aspect-[3/4] w-full bg-[#F4F0E6]">
                    <img alt="Zebra Satin Pyjama Short Set" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1X1kO5qIrnleN2sbhJ_-wglyBgzXbIeep--lxuWX8wajBQJSGTWIWqA4GSwwYR-gHjXIAKB_oAmdJbyqDsHPlyo-A9NIIbWNlX0uOsmO7wQaXXSCVFtWBB-LPRgTLAAjS6GNwNLe7p8tz3dAbMhkX0kz91lHZ4MDtQvjN3LX_kmaSFdL_6YXq9qsjy5Mgnqfze-gKCJ_jIGvhUTtHSQ5SwLLVZ62-ETKblTp44_KhHPKUNmbcaxM6Rg8_OK"/>
                    <span class="absolute top-2 left-2 bg-[#647A96] text-white font-label-caps text-[9px] px-2 py-0.5 rounded-full uppercase font-bold">
                        WILD SILK
                    </span>
                    <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-7 h-7 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center text-[#1F2F4F] shadow hover:text-[#D4B586]" onclick="toggleWishlist(this, 'Zebra Satin Pyjama Set')">
                        <span class="material-symbols-outlined text-[16px]">favorite_border</span>
                    </button>
                </div>
                <div class="p-3 flex flex-col flex-1 justify-between">
                    <h4 class="font-headline-sm text-sm font-bold text-[#1F2F4F] line-clamp-1">Zebra Satin Pyjama Short Set</h4>
                    <div class="mt-1 flex items-baseline gap-1.5">
                        <span class="font-label-caps text-xs font-bold text-[#1F2F4F]">LE 1,249.00</span>
                        <span class="font-body-sm text-[11px] text-[#1F2F4F]/60 line-through">LE 949.00</span>
                    </div>
                    <button class="mt-2.5 w-full py-1.5 bg-[#F4F0E6] text-[#1F2F4F] font-label-caps text-xs uppercase font-bold rounded-xl active:bg-[#1F2F4F] active:text-white hover:bg-[#1F2F4F] hover:text-white transition-colors" onclick="addToCart('Zebra Satin Pyjama Short Set')">
                        Quick Add
                    </button>
                </div>
            </div>
            <!-- Satin 3 -->
            <div class="w-48 shrink-0 flex flex-col bg-white rounded-2xl border border-[#B7C7D9]/40 overflow-hidden shadow-sm justify-between">
                <div class="relative aspect-[3/4] w-full bg-[#F4F0E6]">
                    <img alt="Red Hearts Satin Pyjama Short Set" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1V2YvKFWDhfpJAa8_Qcck_cMhcUmPE9PoCqoxoeeKSVSsGS0aewrIIab7Edcl5Q1sdMxbIVFRpBe8-IK3PiywuQ0jXT5OwPV0QMYnmM0Ri_AsSH2KeuSobuxuI1aPrgWszV6oqjHbA408MH_WfFX1kjrQ6toebduM-tWTUZHMaAQkifrit6kIiYPEZ1nFkLlkfupZTiiKiwvGKluHZMDu58DKTtNmwvpwRXSBLyW-3VtEVw1VF4EzgYQGc"/>
                    <span class="absolute top-2 left-2 bg-[#D8B4C1] text-[#1F2F4F] font-label-caps text-[9px] px-2 py-0.5 rounded-full uppercase font-bold">
                        LOVER EDIT
                    </span>
                    <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-7 h-7 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center text-[#1F2F4F] shadow hover:text-[#D4B586]" onclick="toggleWishlist(this, 'Red Hearts Satin Pyjama Set')">
                        <span class="material-symbols-outlined text-[16px]">favorite_border</span>
                    </button>
                </div>
                <div class="p-3 flex flex-col flex-1 justify-between">
                    <h4 class="font-headline-sm text-sm font-bold text-[#1F2F4F] line-clamp-1">Red Hearts Satin Pyjama Short Set</h4>
                    <div class="mt-1 flex items-baseline gap-1.5">
                        <span class="font-label-caps text-xs font-bold text-[#1F2F4F]">LE 1,249.00</span>
                        <span class="font-body-sm text-[11px] text-[#1F2F4F]/60 line-through">LE 949.00</span>
                    </div>
                    <button class="mt-2.5 w-full py-1.5 bg-[#F4F0E6] text-[#1F2F4F] font-label-caps text-xs uppercase font-bold rounded-xl active:bg-[#1F2F4F] active:text-white hover:bg-[#1F2F4F] hover:text-white transition-colors" onclick="addToCart('Red Hearts Satin Pyjama Short Set')">
                        Quick Add
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Selling Patterned & Everyday Pyjamas -->
    <section class="px-margin-mobile py-6 bg-[#F8F6EF]">
        <div class="flex items-end justify-between mb-4">
            <div>
                <span class="font-label-caps text-label-caps text-[#D4B586] uppercase tracking-wider font-extrabold block">SUMMER FAVORITES</span>
                <h2 class="font-headline-lg-mobile text-headline-lg-mobile font-bold text-[#1F2F4F]">Everyday &amp; Patterned</h2>
            </div>
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" class="font-label-caps text-xs text-[#1F2F4F] font-bold flex items-center gap-0.5 hover:text-[#D4B586] transition-colors">
                See All <span class="material-symbols-outlined text-[16px]">chevron_right</span>
            </a>
        </div>
        <div class="grid grid-cols-2 gap-3.5">
            <!-- Item 1 -->
            <div class="flex flex-col bg-white rounded-2xl border border-[#B7C7D9]/40 overflow-hidden shadow-sm justify-between">
                <div class="relative aspect-[3/4] w-full bg-[#F4F0E6]">
                    <img alt="Everyday Check Set Red" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1UV79PZn6ChU5aSYe_e1oeSy8_917VS3XsEuLF1KZQaN3ZSZJS5LbhacDetMSZ_E4Gn3RBVHlqc5gJruY32C4EV8uXa3OT1wYjhj1zn3wD_kny1pD83-itXwag3uH2I9gXImiFdoh1rfnDCjPnM4pSiJ_6gVfj7nZJyRHAWXOHpyb1NI3rxBbEh2qvY-qsnd85x_UH7jk_n3FcKMWaTOd1GPtI0Sm5K08eUb66gGaWKEMAUVXzxAsI1Ykzp"/>
                    <span class="absolute top-2 left-2 bg-[#D4B586] text-[#1F2F4F] font-label-caps text-[9px] px-2 py-0.5 rounded-full uppercase font-extrabold">
                        CLASSIC CHECK
                    </span>
                    <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center text-[#1F2F4F] shadow active:scale-90 transition-transform hover:text-[#D4B586]" onclick="toggleWishlist(this, 'Everyday Check Set Red')">
                        <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                    </button>
                </div>
                <div class="p-3 flex flex-col flex-1 justify-between">
                    <h3 class="font-headline-sm text-sm font-bold text-[#1F2F4F] line-clamp-1">Everyday Check Set Red</h3>
                    <div class="mt-1 flex items-baseline gap-1.5">
                        <span class="font-label-caps text-xs font-extrabold text-[#1F2F4F]">LE 1,349.00</span>
                        <span class="font-body-sm text-[11px] text-[#1F2F4F]/60 line-through">LE 999.00</span>
                    </div>
                    <button class="mt-2.5 w-full py-2 bg-[#1F2F4F] text-white font-label-caps text-xs font-bold rounded-xl hover:bg-[#1F2F4F]/90 transition-colors shadow-sm" onclick="addToCart('Everyday Check Set Red')">
                        Add to Bag
                    </button>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="flex flex-col bg-white rounded-2xl border border-[#B7C7D9]/40 overflow-hidden shadow-sm justify-between">
                <div class="relative aspect-[3/4] w-full bg-[#F4F0E6]">
                    <img alt="Pillow Talk Pj Lavender" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1WbpwaU9rpcQI6q4LdI9xASfcKjKfGcbteE2z100BQuWDVBIrSM6EC-CS-Hn0sxEE5IKCjHaY3LpqVdMDk2KztjkKynAFiZSs5Ow0SURx08roHAF0TO13ddL8caRJc7QoMHoFktlkv0rEaGBn0ecxJvQ9eQ2ryc6xNsG4HkORX-tIS_2HgkOWagVeZiSrFTYm5JyO6pRJH49_L05IGR6Wm9nwTXcbq7yzIn65wEJdqoTqPX_6gFYxv5zMPl"/>
                    <span class="absolute top-2 left-2 bg-[#D8B4C1] text-[#1F2F4F] font-label-caps text-[9px] px-2 py-0.5 rounded-full uppercase font-bold">
                        COZY MODAL
                    </span>
                    <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center text-[#1F2F4F] shadow active:scale-90 transition-transform hover:text-[#D4B586]" onclick="toggleWishlist(this, 'Pillow Talk Pj Lavender')">
                        <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                    </button>
                </div>
                <div class="p-3 flex flex-col flex-1 justify-between">
                    <h3 class="font-headline-sm text-sm font-bold text-[#1F2F4F] line-clamp-1">Pillow Talk Pj Lavender</h3>
                    <div class="mt-1 flex items-baseline gap-1.5">
                        <span class="font-label-caps text-xs font-extrabold text-[#1F2F4F]">LE 1,349.00</span>
                        <span class="font-body-sm text-[11px] text-[#1F2F4F]/60 line-through">LE 999.00</span>
                    </div>
                    <button class="mt-2.5 w-full py-2 bg-[#1F2F4F] text-white font-label-caps text-xs font-bold rounded-xl hover:bg-[#1F2F4F]/90 transition-colors shadow-sm" onclick="addToCart('Pillow Talk Pj Lavender')">
                        Add to Bag
                    </button>
                </div>
            </div>
            <!-- Item 3 Full Width Banner-Card -->
            <div class="col-span-2 flex bg-white rounded-2xl border border-[#B7C7D9]/40 overflow-hidden shadow-sm">
                <div class="relative w-2/5 aspect-[3/4] bg-[#F4F0E6] shrink-0">
                    <img alt="Stars PJ 3 Pieces Set Navy" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1WqdMVkKM8AnKJoSM14TGIX5rIi1_gW7_ku2tN12mohAqgq-PnRgE4bdOdfBVbssZEMhTNkaljxsbCR1UmC-pQXK1dp9gaFzD_ZaOiye_L-nveYTxv4NHrAuaqF7nc-0HCRTl3_oVvoCErzZiiG2WFvAhxil8RMzRr8gGk32JG70hIZb3MM3COa4tLOxcwc4yTOM4m0hMKFtcvAcBcTnPbBuTeiY_Ch6HnDUkfgO2yU8Mcip447I3kMkF14"/>
                    <span class="absolute top-2 left-2 bg-[#647A96] text-white font-label-caps text-[9px] px-2 py-0.5 rounded-full uppercase font-bold">
                        TRIO SET
                    </span>
                </div>
                <div class="p-4 flex flex-col justify-between flex-1">
                    <div>
                        <span class="font-label-caps text-[10px] text-[#D4B586] uppercase font-bold">3 Pieces Pyjamas</span>
                        <h3 class="font-headline-sm text-base font-bold text-[#1F2F4F] mt-1">Stars PJ 3 Pieces Set Navy</h3>
                        <p class="font-body-sm text-xs text-[#1F2F4F]/80 mt-1">Includes robe-wrap, soft tank, and wide-leg trousers.</p>
                    </div>
                    <div class="mt-3">
                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="font-label-caps text-sm font-extrabold text-[#1F2F4F]">LE 1,549.00</span>
                            <span class="font-body-sm text-xs text-[#1F2F4F]/60 line-through">LE 1,199.00</span>
                        </div>
                        <button class="w-full py-2 bg-[#1F2F4F] text-white font-label-caps text-xs font-bold rounded-xl shadow-sm hover:bg-[#D4B586] hover:text-[#1F2F4F] transition-all flex items-center justify-center gap-1.5" onclick="addToCart('Stars PJ 3 Pieces Set Navy')">
                            <span class="material-symbols-outlined text-[18px]">shopping_bag</span>
                            Claim 50% On 2nd
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Collection: 'Isdal Family' -->
    <section class="px-margin-mobile py-6 bg-[#F4F0E6]">
        <div class="flex items-center justify-between mb-3">
            <div>
                <span class="font-label-caps text-label-caps text-[#D4B586] uppercase tracking-wider font-extrabold block">PRAYER &amp; MODEST SILKS</span>
                <h2 class="font-headline-lg-mobile text-headline-lg-mobile font-bold text-[#1F2F4F]">Isdal Family</h2>
            </div>
            <span class="font-label-caps text-xs bg-white text-[#1F2F4F] border border-[#B7C7D9]/40 px-3 py-1 rounded-full font-bold shadow-sm">
                MUMMY &amp; ME
            </span>
        </div>
        <div class="bg-white rounded-2xl p-4 shadow-sm border border-[#B7C7D9]/40">
            <div class="relative w-full aspect-[4/3] max-h-[300px] rounded-xl overflow-hidden mb-3">
                <img alt="Kids Celestial Starry Satin Isdal Set" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1VNgKX7fZPp-dRz4BLC6A4O8njt8PY4X2nXEiwzyP5AzoHBBXA_rwdMJky7R_44cK8MB06coVeYeIbZFzV4hOUyQJsFdfzTuLgveeOx01b_OqWgfpitVMaIFwE1kHk7RTbMCuJR44VbdcN2VDtQtVd77z2PZTGXsvkO-20S5sJw9NIrXXTV3f62vfWuNMODVHF9z0hSeTZqN9ZQZ0DYZ5GRhOkGC_EvXRU6R5KC1wVu7PXtAnFETzYh95aP"/>
                <div class="absolute inset-0 bg-gradient-to-t from-[#1F2F4F]/80 via-transparent to-transparent flex items-end p-3">
                    <span class="bg-[#D4B586] text-[#1F2F4F] font-label-caps text-[10px] px-2.5 py-0.5 rounded-full font-extrabold uppercase">
                        MATCHING MOTHER &amp; DAUGHTER
                    </span>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="font-headline-sm text-base font-bold text-[#1F2F4F]">Kids Celestial Starry Satin Isdal Set</h3>
                    <p class="font-body-sm text-xs text-[#1F2F4F]/80 mt-0.5">Crafted with breathable satin touch fabric for delicate comfort.</p>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-[#B7C7D9]/30 flex items-center justify-between">
                <div>
                    <span class="font-body-sm text-[11px] text-[#1F2F4F]/70 block">Special Price</span>
                    <span class="font-label-caps text-base font-extrabold text-[#1F2F4F]">LE 900.00</span>
                </div>
                <button class="px-5 py-2.5 bg-[#1F2F4F] text-white font-label-caps text-xs font-bold rounded-xl hover:bg-[#D4B586] hover:text-[#1F2F4F] transition-all flex items-center gap-1.5 shadow-md" onclick="addToCart('Kids Celestial Starry Satin Isdal Set')">
                    Shop Isdal
                </button>
            </div>
        </div>
    </section>

    <!-- Trust Badges Bar -->
    <section class="px-margin-mobile py-6 bg-[#F8F6EF]">
        <div class="grid grid-cols-3 gap-3 text-center max-w-4xl mx-auto">
            <div class="flex flex-col items-center p-3 rounded-2xl bg-white border border-[#B7C7D9]/40 shadow-sm">
                <span class="material-symbols-outlined text-[#1F2F4F] text-[26px]">local_shipping</span>
                <span class="font-label-caps text-xs font-bold text-[#1F2F4F] mt-1.5 uppercase">Fast Delivery</span>
                <span class="font-body-sm text-[10px] text-[#1F2F4F]/70">Egypt Wide</span>
            </div>
            <div class="flex flex-col items-center p-3 rounded-2xl bg-white border border-[#B7C7D9]/40 shadow-sm">
                <span class="material-symbols-outlined text-[#1F2F4F] text-[26px]">payments</span>
                <span class="font-label-caps text-xs font-bold text-[#1F2F4F] mt-1.5 uppercase">COD Ready</span>
                <span class="font-body-sm text-[10px] text-[#1F2F4F]/70">Pay at Door</span>
            </div>
            <div class="flex flex-col items-center p-3 rounded-2xl bg-white border border-[#B7C7D9]/40 shadow-sm">
                <span class="material-symbols-outlined text-[#1F2F4F] text-[26px]">sync_alt</span>
                <span class="font-label-caps text-xs font-bold text-[#1F2F4F] mt-1.5 uppercase">14-Day Exchange</span>
                <span class="font-body-sm text-[10px] text-[#1F2F4F]/70">Easy Returns</span>
            </div>
        </div>
    </section>

    <!-- Newsletter & Community Perks -->
    <section class="px-margin-mobile py-8 bg-[#F4F0E6]">
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-[#B7C7D9]/40 text-center max-w-2xl mx-auto">
            <div class="w-12 h-12 rounded-full bg-[#1F2F4F]/10 text-[#1F2F4F] flex items-center justify-center mx-auto mb-3">
                <span class="material-symbols-outlined text-[26px] text-[#D4B586]">mark_email_unread</span>
            </div>
            <h2 class="font-headline-lg-mobile text-headline-lg-mobile font-bold text-[#1F2F4F]">Join the FLUFF VIP Club</h2>
            <p class="font-body-md text-sm text-[#1F2F4F]/80 mt-1.5 mb-5">
                We craft sleepwear that feels like home. Subscribe for new season drops, bespoke care guides, and exclusive member privileges.
            </p>
            <form class="flex flex-col sm:flex-row gap-2 max-w-md mx-auto" onsubmit="handleNewsletter(event)">
                <input class="w-full px-4 py-3 bg-[#F8F6EF] text-[#1F2F4F] border border-[#B7C7D9]/60 rounded-xl font-body-md text-sm placeholder-[#1F2F4F]/60 focus:outline-none focus:border-[#1F2F4F]" id="emailInput" placeholder="Enter your email address" required type="email"/>
                <button class="py-3 px-6 bg-[#1F2F4F] text-white font-label-caps text-xs font-bold rounded-xl shadow-md hover:bg-[#D4B586] hover:text-[#1F2F4F] transition-all shrink-0" type="submit">
                    GET 10% OFF
                </button>
            </form>
            <!-- Social Channels -->
            <div class="mt-6 pt-5 border-t border-[#B7C7D9]/30 flex flex-col items-center">
                <span class="font-label-caps text-[10px] text-[#1F2F4F]/70 uppercase tracking-widest font-extrabold mb-3">
                    FOLLOW OUR JOURNAL
                </span>
                <div class="flex items-center gap-3">
                    <a aria-label="Instagram" class="w-9 h-9 rounded-full bg-[#F4F0E6] flex items-center justify-center text-[#1F2F4F] hover:bg-[#1F2F4F] hover:text-white transition-colors" href="https://www.instagram.com" rel="noopener noreferrer" target="_blank">
                        <span class="font-label-caps text-xs font-bold">IG</span>
                    </a>
                    <a aria-label="TikTok" class="w-9 h-9 rounded-full bg-[#F4F0E6] flex items-center justify-center text-[#1F2F4F] hover:bg-[#1F2F4F] hover:text-white transition-colors" href="https://tiktok.com" rel="noopener noreferrer" target="_blank">
                        <span class="font-label-caps text-xs font-bold">TT</span>
                    </a>
                    <a aria-label="Facebook" class="w-9 h-9 rounded-full bg-[#F4F0E6] flex items-center justify-center text-[#1F2F4F] hover:bg-[#1F2F4F] hover:text-white transition-colors" href="https://www.facebook.com" rel="noopener noreferrer" target="_blank">
                        <span class="font-label-caps text-xs font-bold">FB</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- Client-side Micro-Interactions -->
<script>
    function showToast(message) {
        const toast = document.getElementById('toastNotification');
        const text = document.getElementById('toastMessage');
        if (!toast || !text) return;
        text.innerText = message;
        toast.classList.remove('-translate-y-12', 'opacity-0');
        toast.classList.add('translate-y-0', 'opacity-100');
        setTimeout(() => {
            toast.classList.remove('translate-y-0', 'opacity-100');
            toast.classList.add('-translate-y-12', 'opacity-0');
        }, 2400);
    }

    function toggleWishlist(btn, productName) {
        const icon = btn.querySelector('.material-symbols-outlined');
        if (!icon) return;
        const isFilled = icon.innerText === 'favorite';
        if (isFilled) {
            icon.innerText = 'favorite_border';
            btn.classList.remove('text-[#D4B586]');
            btn.classList.add('text-[#1F2F4F]');
            showToast('Removed ' + productName);
        } else {
            icon.innerText = 'favorite';
            btn.classList.remove('text-[#1F2F4F]');
            btn.classList.add('text-[#D4B586]');
            showToast('Saved ' + productName + ' to Wishlist');
        }
    }

    function addToCart(productName) {
        showToast('Added ' + productName + ' to Shopping Bag');
    }

    function handleNewsletter(e) {
        e.preventDefault();
        const input = document.getElementById('emailInput');
        if (input && input.value) {
            showToast('Welcome to FLUFF VIP Club!');
            input.value = '';
        }
    }
</script>

<?php
get_footer();