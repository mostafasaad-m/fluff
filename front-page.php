<?php
/**
 * Front Page Template - Premium WordPress Edition
 *
 * Designed & Developed for FLUFF Sleepwear
 * 
 * @package FLUFF
 */

get_header();
?>

<div class="flex flex-col w-full">

    <!-- Hero Promotional Campaign Section -->
    <section class="relative w-full overflow-hidden bg-primary-container text-on-primary">
        <div class="relative w-full h-[480px] sm:h-[520px] md:h-[560px] lg:h-[600px]">
            <img alt="50% Off Clearance Promotion" class="absolute inset-0 w-full h-full object-cover object-center" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB809kO4ZJAOqb63h11rKiXdwFeidxMKkxEv9KhLh-3Cdu5c5AnHyRQsPUBdLjrGmzBQPyIUw0D6DXxlu-hY-zaS4zgUpE5CpWpFME1eeMSqVxIqnMF45cH06uX_pwxIsEBabTOMYGh3yhSTbDyghYTUVu0QgndqHwKx-WnXv53OrxjKAfg3v3GKI8PgdC7nW_FNOL5dChTUlW69ghVOa6XeQBFz0jkfxH1cGxw_9rAyaUEIkkM0wbTrIg1HjG02yzdb2Q" />
            <div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/95 via-inverse-surface/50 to-transparent flex flex-col justify-end p-5 sm:p-8 md:p-12 lg:p-16">
                <div class="max-w-3xl">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="bg-sale-yellow text-on-background px-3 py-1 font-label-badge text-label-badge uppercase tracking-wider font-extrabold shadow-sm">
                            LIMITED CLEARANCE
                        </span>
                        <span class="font-label-badge text-label-badge text-warm-white uppercase tracking-wider font-bold">
                            Summer &amp; Satin Drops
                        </span>
                    </div>
                    <h1 class="font-display-hero-mobile md:font-display-hero text-display-hero-mobile md:text-5xl lg:text-6xl font-extrabold text-warm-white tracking-tight leading-tight mb-3 uppercase">
                        50% OFF ON 2ND ITEM
                    </h1>
                    <p class="font-body-md md:font-body-lg text-body-md md:text-lg text-warm-white/95 mb-6 max-w-xl leading-relaxed">
                        Or Buy 2 Get 1 Free on all breathable Egyptian cotton &amp; silky loungewear crafted for everyday luxury.
                    </p>
                    <div class="flex flex-wrap sm:flex-nowrap gap-3 max-w-md">
                        <a class="flex-1 text-center bg-sale-yellow text-on-background py-3 px-6 font-label-lg text-label-lg font-bold active:scale-95 hover:bg-yellow-400 transition-all shadow-md" href="#new-drops">
                            Shop New Drops
                        </a>
                        <a class="flex-1 text-center bg-surface-container-lowest/90 backdrop-blur-sm text-primary py-3 px-6 font-label-lg text-label-lg font-bold active:scale-95 hover:bg-white transition-all shadow-md" href="#satin-section">
                            Browse Satin
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Clearance Urgent Ticker Bar -->
        <div class="bg-sale-yellow text-on-background py-2.5 px-4 flex items-center justify-between overflow-x-auto whitespace-nowrap border-t border-b border-primary/20">
            <div class="flex items-center gap-4 sm:gap-6 font-label-badge text-label-badge uppercase tracking-widest font-extrabold text-center w-full justify-center">
                <span>50% OFF ON 2ND ITEM</span>
                <span class="text-terracotta-rich font-black">//</span>
                <span>BUY 2 GET 1 FREE</span>
                <span class="text-terracotta-rich font-black">//</span>
                <span>LIMITED QUANTITIES</span>
                <span class="text-terracotta-rich font-black hidden sm:inline">//</span>
                <span class="hidden sm:inline">EXPRESS DELIVERY EGYPT &amp; ISTANBUL</span>
            </div>
        </div>
    </section>

    <!-- Horizontal Category / Story Navigation Pills -->
    <section class="py-5 bg-surface-container-low border-b border-surface-variant">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-3">
                <span class="font-label-badge text-label-badge text-primary uppercase font-extrabold tracking-wider">CURATED STYLES</span>
                <span class="font-label-badge text-label-badge text-secondary font-bold">7 EXCLUSIVE CAPSULES</span>
            </div>
            <div class="flex gap-2.5 overflow-x-auto no-scrollbar pb-1 md:flex-wrap">
                <a href="#new-drops" class="flex items-center gap-2 px-4 py-2 bg-primary text-on-primary font-label-md text-label-md font-bold shrink-0 shadow-sm hover:bg-terracotta-rich active:scale-95 transition-all">
                    <span class="material-symbols-outlined text-[18px] text-sale-yellow">local_fire_department</span>
                    New Drops
                </a>
                <a href="#satin-section" class="flex items-center gap-2 px-4 py-2 bg-surface-container-lowest text-on-surface border border-outline-variant font-label-md text-label-md font-bold shrink-0 hover:bg-surface-container active:scale-95 transition-all">
                    <span class="material-symbols-outlined text-[18px] text-primary">bedtime</span>
                    Satin Shorts
                </a>
                <a href="#patterned-section" class="flex items-center gap-2 px-4 py-2 bg-surface-container-lowest text-on-surface border border-outline-variant font-label-md text-label-md font-bold shrink-0 hover:bg-surface-container active:scale-95 transition-all">
                    <span class="material-symbols-outlined text-[18px] text-primary">pattern</span>
                    Everyday &amp; Patterned
                </a>
                <a href="#isdal-section" class="flex items-center gap-2 px-4 py-2 bg-surface-container-lowest text-on-surface border border-outline-variant font-label-md text-label-md font-bold shrink-0 hover:bg-surface-container active:scale-95 transition-all">
                    <span class="material-symbols-outlined text-[18px] text-primary">spa</span>
                    Isdal Family
                </a>
                <a href="<?php echo esc_url( home_url('/category-special-collection/') ); ?>" class="flex items-center gap-2 px-4 py-2 bg-surface-container-lowest text-on-surface border border-outline-variant font-label-md text-label-md font-bold shrink-0 hover:bg-surface-container active:scale-95 transition-all">
                    <span class="material-symbols-outlined text-[18px] text-primary">ac_unit</span>
                    Winter Special Edit
                </a>
                <a href="<?php echo esc_url( home_url('/sizing-fit-advisor/') ); ?>" class="flex items-center gap-2 px-4 py-2 bg-surface-container-lowest text-on-surface border border-outline-variant font-label-md text-label-md font-bold shrink-0 hover:bg-surface-container active:scale-95 transition-all">
                    <span class="material-symbols-outlined text-[18px] text-primary">straighten</span>
                    Sizing &amp; Fit
                </a>
                <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/') ); ?>" class="flex items-center gap-2 px-4 py-2 bg-surface-container-lowest text-primary border border-primary font-label-md text-label-md font-bold shrink-0 hover:bg-primary hover:text-on-primary active:scale-95 transition-all">
                    <span class="material-symbols-outlined text-[18px]">grid_view</span>
                    All Sleepwear
                </a>
            </div>
        </div>
    </section>

    <!-- Featured New Drops Section (Responsive Mobile Grid / PC 4-Column Enhanced) -->
    <section class="py-8 md:py-12 bg-surface" id="new-drops">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-6">
                <div>
                    <span class="font-label-badge text-label-badge text-terracotta-rich uppercase tracking-wider font-extrabold block">HOT RELEASES</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-3xl font-extrabold text-on-surface tracking-tight">New Arrivals</h2>
                </div>
                <a class="font-label-md text-label-md text-primary font-bold flex items-center gap-1 hover:text-terracotta-rich transition-colors" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>">
                    View all <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                </a>
            </div>

            <!-- Responsive Product Cards Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-6">
                <!-- Product 1 -->
                <div class="group flex flex-col bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative aspect-[3/4] w-full bg-surface-container overflow-hidden">
                        <img alt="Heavenly Stripes Set Ladies - Olive" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1VwCeG0fQNpeA4O0djAQOvl7HREfBTeW5_LuJmMdi8G3DNl0G5cgsBzeoP5vE2ubOk5fJ2NiE9BvK-GWiUQ9hiUXjffnzvv3sF4gxMR2jq7oIMp3jHd_AdjcKRzHgMZMBw2CHhp-8zgbcwbTSsSTheLindjCQjB5SqTjlU9JUOIKxoWgye8WEGZ8kmfW2jzROuxRBT5_KnmEgb4-7ScHRSrYv_sVIUPY2014OmI3_LFiVsmlUksZNZ0OD2h" />
                        <span class="absolute top-2 left-2 bg-terracotta-rich text-on-primary font-label-badge text-label-badge px-2 py-0.5 font-extrabold">50% OFF 2ND</span>
                        <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-warm-white/90 backdrop-blur-sm flex items-center justify-center text-charcoal-muted shadow active:scale-90 hover:text-primary transition-transform" onclick="toggleWishlist(this, 'Heavenly Stripes Set (Ladies)')">
                            <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                        </button>
                    </div>
                    <div class="p-3 sm:p-4 flex flex-col flex-1 justify-between">
                        <div>
                            <span class="font-body-sm text-body-sm text-secondary block">Women's Loungewear</span>
                            <h3 class="font-body-md text-body-md font-bold text-on-surface line-clamp-1 mt-0.5">Heavenly Stripes Set (Ladies)- Olive</h3>
                        </div>
                        <div class="mt-3">
                            <div class="flex items-baseline gap-2">
                                <span class="font-label-lg text-label-lg font-extrabold text-primary">LE 1,499.00</span>
                                <span class="font-body-sm text-body-sm text-secondary line-through">LE 949.00</span>
                            </div>
                            <button class="mt-2.5 w-full py-2 bg-surface-container text-on-surface font-label-md text-label-md font-bold flex items-center justify-center gap-1.5 active:bg-primary active:text-on-primary hover:bg-primary hover:text-on-primary transition-colors" onclick="addToCart('Heavenly Stripes Set (Ladies)- Olive')">
                                <span class="material-symbols-outlined text-[16px]">shopping_bag</span>Add to Bag
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="group flex flex-col bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative aspect-[3/4] w-full bg-surface-container overflow-hidden">
                        <img alt="Heavenly Stripe Set Men - Baby Blue" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1Xt8iTmQBIsTUqH1cH3QjUba-6evLhtfSDtZs3w0Zkt0POrAOyQX_HfhB5hNnQKK5aqlvcNKZSGdBMNBh2IHmCWdIw0C3V3oc--d00G9H5jhozsouPTtTHPaUmGuOovWAiKJEImb1OchbROMwEyMnq7x5xRqWVVg4Pmgp5XN-D-C2LoTvAy_PeTIf28HYrkiGVzzRdWrtUVnPf0v2BgVqjQdYIIFni-rz05-L8NsCWxbjXDbEBp2ljtTQI" />
                        <span class="absolute top-2 left-2 bg-inverse-surface text-inverse-on-surface font-label-badge text-label-badge px-2 py-0.5 font-extrabold">COUPLES PAIR</span>
                        <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-warm-white/90 backdrop-blur-sm flex items-center justify-center text-charcoal-muted shadow active:scale-90 hover:text-primary transition-transform" onclick="toggleWishlist(this, 'Heavenly Stripe Set (Men)')">
                            <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                        </button>
                    </div>
                    <div class="p-3 sm:p-4 flex flex-col flex-1 justify-between">
                        <div>
                            <span class="font-body-sm text-body-sm text-secondary block">Men's Relaxed Fit</span>
                            <h3 class="font-body-md text-body-md font-bold text-on-surface line-clamp-1 mt-0.5">Heavenly Stripe Set (Men)- Baby Blue</h3>
                        </div>
                        <div class="mt-3">
                            <div class="flex items-baseline gap-2">
                                <span class="font-label-lg text-label-lg font-extrabold text-primary">LE 1,499.00</span>
                                <span class="font-body-sm text-body-sm text-secondary line-through">LE 949.00</span>
                            </div>
                            <button class="mt-2.5 w-full py-2 bg-surface-container text-on-surface font-label-md text-label-md font-bold flex items-center justify-center gap-1.5 active:bg-primary active:text-on-primary hover:bg-primary hover:text-on-primary transition-colors" onclick="addToCart('Heavenly Stripe Set (Men)- Baby Blue')">
                                <span class="material-symbols-outlined text-[16px]">shopping_bag</span>Add to Bag
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="group flex flex-col bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative aspect-[3/4] w-full bg-surface-container overflow-hidden">
                        <img alt="Serenity Stripe Short Set Blue" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1WsztWbC7LnZvHfwf9yG0LjwCHnYp8zr3memxfq3YFqj0alRImyzYhB-l8-VEHRpmCIQQyd9gsOQfmVHesPDnzUULcavi_Pkm3BUbxrvB6d-Ecqi1aBwniv3dKsB60rswMJ1gT4QXQSy9iqao17423I60MbYVkKzeNuVGYsch3HLvaW0-tsK5xy1ZybIlu-BiDwSXWwURg_OXYJ6T1C_0wZ2ObgR4E2ra5LDw_PNy6GnFtyrFfVax4AIYWx" />
                        <span class="absolute top-2 left-2 bg-sale-yellow text-on-background font-label-badge text-label-badge px-2 py-0.5 font-extrabold">BESTSELLER</span>
                        <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-warm-white/90 backdrop-blur-sm flex items-center justify-center text-charcoal-muted shadow active:scale-90 hover:text-primary transition-transform" onclick="toggleWishlist(this, 'Serenity Stripe Short Set')">
                            <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                        </button>
                    </div>
                    <div class="p-3 sm:p-4 flex flex-col flex-1 justify-between">
                        <div>
                            <span class="font-body-sm text-body-sm text-secondary block">Cotton Short Set</span>
                            <h3 class="font-body-md text-body-md font-bold text-on-surface line-clamp-1 mt-0.5">Serenity Stripe Short Set Blue</h3>
                        </div>
                        <div class="mt-3">
                            <div class="flex items-baseline gap-2">
                                <span class="font-label-lg text-label-lg font-extrabold text-primary">LE 1,299.00</span>
                                <span class="font-body-sm text-body-sm text-secondary line-through">LE 899.00</span>
                            </div>
                            <button class="mt-2.5 w-full py-2 bg-surface-container text-on-surface font-label-md text-label-md font-bold flex items-center justify-center gap-1.5 active:bg-primary active:text-on-primary hover:bg-primary hover:text-on-primary transition-colors" onclick="addToCart('Serenity Stripe Short Set Blue')">
                                <span class="material-symbols-outlined text-[16px]">shopping_bag</span>Add to Bag
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="group flex flex-col bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative aspect-[3/4] w-full bg-surface-container overflow-hidden">
                        <img alt="Dots PJ 3 Pieces Set" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1WPXewYZN1Zq8Yg0wyounPitnYkQPlfs7Gq15JjGg3Sd3SCXtfRxRtjYlp95CJEt3-T9CVBWm3nZzhadYyPz6BlhydxNlPl_Zh5smhHVnicLMFci5zyh4ogEIyUfEUBhrkAzGbFNHT2SckxP-St6syOhhk_TMzgENyjPZiOPSbkknbbNdzGpKgDYRjhuiqaYILjZP_nXP1VFnPXyaWsOgVFSxsiMWiDfykQb3Tah4Lx7J9lsrrqgqPaGCeT" />
                        <span class="absolute top-2 left-2 bg-primary text-on-primary font-label-badge text-label-badge px-2 py-0.5 font-extrabold">3-PIECE VALUE</span>
                        <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-warm-white/90 backdrop-blur-sm flex items-center justify-center text-charcoal-muted shadow active:scale-90 hover:text-primary transition-transform" onclick="toggleWishlist(this, 'Dots PJ 3 Pieces Set')">
                            <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                        </button>
                    </div>
                    <div class="p-3 sm:p-4 flex flex-col flex-1 justify-between">
                        <div>
                            <span class="font-body-sm text-body-sm text-secondary block">Full Loungewear Trio</span>
                            <h3 class="font-body-md text-body-md font-bold text-on-surface line-clamp-1 mt-0.5">Dots PJ 3 Pieces Set</h3>
                        </div>
                        <div class="mt-3">
                            <div class="flex items-baseline gap-2">
                                <span class="font-label-lg text-label-lg font-extrabold text-primary">LE 1,549.00</span>
                                <span class="font-body-sm text-body-sm text-secondary line-through">LE 1,199.00</span>
                            </div>
                            <button class="mt-2.5 w-full py-2 bg-surface-container text-on-surface font-label-md text-label-md font-bold flex items-center justify-center gap-1.5 active:bg-primary active:text-on-primary hover:bg-primary hover:text-on-primary transition-colors" onclick="addToCart('Dots PJ 3 Pieces Set')">
                                <span class="material-symbols-outlined text-[16px]">shopping_bag</span>Add to Bag
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Editorial Feature - 'The Art of Everyday Elegance' (Enhanced PC Split Layout) -->
    <section class="py-8 md:py-16 bg-primary-container text-on-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- Text Narrative -->
                <div class="flex flex-col justify-center">
                    <span class="font-label-badge text-label-badge text-sale-yellow uppercase tracking-widest font-extrabold block mb-2">
                        EDITORIAL LOOKBOOK
                    </span>
                    <h2 class="font-display-hero-mobile md:font-display-hero text-display-hero-mobile md:text-4xl lg:text-5xl font-extrabold text-warm-white tracking-tight uppercase leading-tight">
                        The Art of Everyday Elegance
                    </h2>
                    <p class="font-body-md md:font-body-lg text-body-md md:text-lg text-on-primary-container mt-4 leading-relaxed">
                        Softness you can genuinely feel. Crafted with pride using organic cottons and whisper-light satin finishes, tailored for lazy weekend mornings and sun-drenched balconies.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-4">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-sale-yellow text-[20px]">check_circle</span>
                            <span class="font-label-md text-label-md text-warm-white font-bold">100% Breathable Weave</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-sale-yellow text-[20px]">check_circle</span>
                            <span class="font-label-md text-label-md text-warm-white font-bold">Non-Pilling Satin</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-sale-yellow text-[20px]">check_circle</span>
                            <span class="font-label-md text-label-md text-warm-white font-bold">Cairo &amp; Istanbul Craft</span>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a class="inline-flex items-center gap-2 bg-sale-yellow text-on-background px-6 py-3 font-label-lg text-label-lg font-bold shadow hover:bg-yellow-400 active:scale-95 transition-all" href="#satin-section">
                            EXPLORE CAPSULE <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Editorial Visual Imagery -->
                <div class="relative w-full aspect-[4/3] md:aspect-[5/4] overflow-hidden shadow-2xl">
                    <img alt="Editorial Loungewear Setting" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB809kO4ZJAOqb63h11rKiXdwFeidxMKkxEv9KhLh-3Cdu5c5AnHyRQsPUBdLjrGmzBQPyIUw0D6DXxlu-hY-zaS4zgUpE5CpWpFME1eeMSqVxIqnMF45cH06uX_pwxIsEBabTOMYGh3yhSTbDyghYTUVu0QgndqHwKx-WnXv53OrxjKAfg3v3GKI8PgdC7nW_FNOL5dChTUlW69ghVOa6XeQBFz0jkfxH1cGxw_9rAyaUEIkkM0wbTrIg1HjG02yzdb2Q" />
                    <div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/85 via-transparent to-transparent flex items-end p-5 md:p-8">
                        <div class="flex items-center justify-between w-full">
                            <div>
                                <span class="font-label-badge text-label-badge text-sale-yellow uppercase font-extrabold tracking-wider">Featured Capsule</span>
                                <p class="font-headline-sm md:font-headline-md text-headline-sm md:text-2xl font-bold text-warm-white">Heavenly Stripe &amp; Satin</p>
                            </div>
                            <span class="bg-warm-white/90 backdrop-blur-sm text-on-surface px-4 py-2 font-label-md text-label-md font-extrabold shadow hidden sm:inline-block">
                                LE 1,249 FLAT
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Satin Shorts Spotlight (Responsive Desktop Grid) -->
    <section class="py-8 md:py-12 bg-surface-container-low" id="satin-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-6">
                <div>
                    <span class="font-label-badge text-label-badge text-primary uppercase tracking-wider font-extrabold block">GLOSSY SILK TOUCH</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-3xl font-extrabold text-on-surface tracking-tight">Satin Shorts</h2>
                </div>
                <span class="bg-blush-tint text-primary px-3 py-1 font-label-badge text-label-badge font-bold border border-primary/20">
                    LE 1,249 FLAT PRICE
                </span>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-6">
                <!-- Satin 1 -->
                <div class="group flex flex-col bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative aspect-[3/4] w-full bg-surface-container overflow-hidden">
                        <img alt="Bows Satin Pyjama Short Set" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1WPPZkBI_R2AAGWi3YWayPjm9ZspL2ac17jUmVbpFqCdrIkGmtU5SxRiuX-f5-UGiu_BvBjU_pTTm87_miz_bzfrUkZ-okjeFkCRLX7rtRMp_9sDBFFaDCXphaGjnD0Xd99--r0JX-j6UQDdsaSZIZYckU3LimGxcBSYFNiTfUgLKV-aRsC5ROf7GMJE-JekKgNYuHYM3N_pcx6sCViMv1JW3p5JQrhfYNwqYUOM1lFFfvGz8iE1qtiLvqF" />
                        <span class="absolute top-2 left-2 bg-sale-yellow text-on-background font-label-badge text-label-badge px-2 py-0.5 font-extrabold">TRENDING</span>
                        <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-warm-white/90 backdrop-blur-sm flex items-center justify-center text-charcoal-muted shadow active:scale-90 hover:text-primary transition-transform" onclick="toggleWishlist(this, 'Bows Satin Pyjama Set')">
                            <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                        </button>
                    </div>
                    <div class="p-3 sm:p-4 flex flex-col flex-1 justify-between">
                        <h4 class="font-body-md text-body-md font-bold text-on-surface line-clamp-1">Bows Satin Pyjama Short Set</h4>
                        <div class="mt-2">
                            <div class="flex items-baseline gap-1.5">
                                <span class="font-label-lg text-label-lg font-bold text-primary">LE 1,249.00</span>
                                <span class="font-body-sm text-body-sm text-secondary line-through">LE 949.00</span>
                            </div>
                            <button class="mt-2.5 w-full py-2 bg-surface-container text-on-surface font-label-badge text-label-badge uppercase font-bold active:bg-primary active:text-on-primary hover:bg-primary hover:text-on-primary transition-colors flex items-center justify-center gap-1" onclick="addToCart('Bows Satin Pyjama Short Set')">
                                <span class="material-symbols-outlined text-[16px]">add_shopping_cart</span> Quick Add
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Satin 2 -->
                <div class="group flex flex-col bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative aspect-[3/4] w-full bg-surface-container overflow-hidden">
                        <img alt="Zebra Satin Pyjama Short Set" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1X1kO5qIrnleN2sbhJ_-wglyBgzXbIeep--lxuWX8wajBQJSGTWIWqA4GSwwYR-gHjXIAKB_oAmdJbyqDsHPlyo-A9NIIbWNlX0uOsmO7wQaXXSCVFtWBB-LPRgTLAAjS6GNwNLe7p8tz3dAbMhkX0kz91lHZ4MDtQvjN3LX_kmaSFdL_6YXq9qsjy5Mgnqfze-gKCJ_jIGvhUTtHSQ5SwLLVZ62-ETKblTp44_KhHPKUNmbcaxM6Rg8_OK" />
                        <span class="absolute top-2 left-2 bg-inverse-surface text-inverse-on-surface font-label-badge text-label-badge px-2 py-0.5 font-extrabold">WILD SILK</span>
                        <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-warm-white/90 backdrop-blur-sm flex items-center justify-center text-charcoal-muted shadow active:scale-90 hover:text-primary transition-transform" onclick="toggleWishlist(this, 'Zebra Satin Pyjama Set')">
                            <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                        </button>
                    </div>
                    <div class="p-3 sm:p-4 flex flex-col flex-1 justify-between">
                        <h4 class="font-body-md text-body-md font-bold text-on-surface line-clamp-1">Zebra Satin Pyjama Short Set</h4>
                        <div class="mt-2">
                            <div class="flex items-baseline gap-1.5">
                                <span class="font-label-lg text-label-lg font-bold text-primary">LE 1,249.00</span>
                                <span class="font-body-sm text-body-sm text-secondary line-through">LE 949.00</span>
                            </div>
                            <button class="mt-2.5 w-full py-2 bg-surface-container text-on-surface font-label-badge text-label-badge uppercase font-bold active:bg-primary active:text-on-primary hover:bg-primary hover:text-on-primary transition-colors flex items-center justify-center gap-1" onclick="addToCart('Zebra Satin Pyjama Short Set')">
                                <span class="material-symbols-outlined text-[16px]">add_shopping_cart</span> Quick Add
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Satin 3 -->
                <div class="group flex flex-col bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-md transition-shadow col-span-2 sm:col-span-1">
                    <div class="relative aspect-[3/4] w-full bg-surface-container overflow-hidden">
                        <img alt="Red Hearts Satin Pyjama Short Set" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1V2YvKFWDhfpJAa8_Qcck_cMhcUmPE9PoCqoxoeeKSVSsGS0aewrIIab7Edcl5Q1sdMxbIVFRpBe8-IK3PiywuQ0jXT5OwPV0QMYnmM0Ri_AsSH2KeuSobuxuI1aPrgWszV6oqjHbA408MH_WfFX1kjrQ6toebduM-tWTUZHMaAQkifrit6kIiYPEZ1nFkLlkfupZTiiKiwvGKluHZMDu58DKTtNmwvpwRXSBLyW-3VtEVw1VF4EzgYQGc" />
                        <span class="absolute top-2 left-2 bg-terracotta-rich text-on-primary font-label-badge text-label-badge px-2 py-0.5 font-extrabold">LOVER EDIT</span>
                        <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-warm-white/90 backdrop-blur-sm flex items-center justify-center text-charcoal-muted shadow active:scale-90 hover:text-primary transition-transform" onclick="toggleWishlist(this, 'Red Hearts Satin Pyjama Set')">
                            <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                        </button>
                    </div>
                    <div class="p-3 sm:p-4 flex flex-col flex-1 justify-between">
                        <h4 class="font-body-md text-body-md font-bold text-on-surface line-clamp-1">Red Hearts Satin Pyjama Short Set</h4>
                        <div class="mt-2">
                            <div class="flex items-baseline gap-1.5">
                                <span class="font-label-lg text-label-lg font-bold text-primary">LE 1,249.00</span>
                                <span class="font-body-sm text-body-sm text-secondary line-through">LE 949.00</span>
                            </div>
                            <button class="mt-2.5 w-full py-2 bg-surface-container text-on-surface font-label-badge text-label-badge uppercase font-bold active:bg-primary active:text-on-primary hover:bg-primary hover:text-on-primary transition-colors flex items-center justify-center gap-1" onclick="addToCart('Red Hearts Satin Pyjama Short Set')">
                                <span class="material-symbols-outlined text-[16px]">add_shopping_cart</span> Quick Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Selling Patterned & Everyday Pyjamas -->
    <section class="py-8 md:py-12 bg-surface" id="patterned-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-6">
                <div>
                    <span class="font-label-badge text-label-badge text-terracotta-rich uppercase tracking-wider font-extrabold block">SUMMER FAVORITES</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-3xl font-extrabold text-on-surface tracking-tight">Everyday &amp; Patterned</h2>
                </div>
                <a class="font-label-md text-label-md text-primary font-bold flex items-center gap-0.5 hover:text-terracotta-rich transition-colors" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>">
                    See 24+ <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
                <!-- Card 1 -->
                <div class="flex flex-col bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative aspect-[3/4] w-full bg-surface-container overflow-hidden">
                        <img alt="Everyday Check Set Red" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1UV79PZn6ChU5aSYe_e1oeSy8_917VS3XsEuLF1KZQaN3ZSZJS5LbhacDetMSZ_E4Gn3RBVHlqc5gJruY32C4EV8uXa3OT1wYjhj1zn3wD_kny1pD83-itXwag3uH2I9gXImiFdoh1rfnDCjPnM4pSiJ_6gVfj7nZJyRHAWXOHpyb1NI3rxBbEh2qvY-qsnd85x_UH7jk_n3FcKMWaTOd1GPtI0Sm5K08eUb66gGaWKEMAUVXzxAsI1Ykzp" />
                        <span class="absolute top-2 left-2 bg-sale-yellow text-on-background font-label-badge text-label-badge px-2 py-0.5 font-extrabold">CLASSIC CHECK</span>
                        <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-warm-white/90 backdrop-blur-sm flex items-center justify-center text-charcoal-muted shadow active:scale-90 hover:text-primary transition-transform" onclick="toggleWishlist(this, 'Everyday Check Set Red')">
                            <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                        </button>
                    </div>
                    <div class="p-4 flex flex-col flex-1 justify-between">
                        <h3 class="font-body-md text-body-md font-bold text-on-surface line-clamp-1">Everyday Check Set Red</h3>
                        <div class="mt-3">
                            <div class="flex items-baseline gap-1.5">
                                <span class="font-label-lg text-label-lg font-extrabold text-primary">LE 1,349.00</span>
                                <span class="font-body-sm text-body-sm text-secondary line-through">LE 999.00</span>
                            </div>
                            <button class="mt-2.5 w-full py-2 bg-surface-container text-on-surface font-label-md text-label-md font-bold active:bg-primary active:text-on-primary hover:bg-primary hover:text-on-primary transition-colors flex items-center justify-center gap-1.5" onclick="addToCart('Everyday Check Set Red')">
                                <span class="material-symbols-outlined text-[16px]">shopping_bag</span> Add to Bag
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex flex-col bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative aspect-[3/4] w-full bg-surface-container overflow-hidden">
                        <img alt="Pillow Talk Pj Lavender" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1WbpwaU9rpcQI6q4LdI9xASfcKjKfGcbteE2z100BQuWDVBIrSM6EC-CS-Hn0sxEE5IKCjHaY3LpqVdMDk2KztjkKynAFiZSs5Ow0SURx08roHAF0TO13ddL8caRJc7QoMHoFktlkv0rEaGBn0ecxJvQ9eQ2ryc6xNsG4HkORX-tIS_2HgkOWagVeZiSrFTYm5JyO6pRJH49_L05IGR6Wm9nwTXcbq7yzIn65wEJdqoTqPX_6gFYxv5zMPl" />
                        <span class="absolute top-2 left-2 bg-blush-tint text-primary font-label-badge text-label-badge px-2 py-0.5 font-bold">COZY MODAL</span>
                        <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-warm-white/90 backdrop-blur-sm flex items-center justify-center text-charcoal-muted shadow active:scale-90 hover:text-primary transition-transform" onclick="toggleWishlist(this, 'Pillow Talk Pj Lavender')">
                            <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                        </button>
                    </div>
                    <div class="p-4 flex flex-col flex-1 justify-between">
                        <h3 class="font-body-md text-body-md font-bold text-on-surface line-clamp-1">Pillow Talk Pj Lavender</h3>
                        <div class="mt-3">
                            <div class="flex items-baseline gap-1.5">
                                <span class="font-label-lg text-label-lg font-extrabold text-primary">LE 1,349.00</span>
                                <span class="font-body-sm text-body-sm text-secondary line-through">LE 999.00</span>
                            </div>
                            <button class="mt-2.5 w-full py-2 bg-surface-container text-on-surface font-label-md text-label-md font-bold active:bg-primary active:text-on-primary hover:bg-primary hover:text-on-primary transition-colors flex items-center justify-center gap-1.5" onclick="addToCart('Pillow Talk Pj Lavender')">
                                <span class="material-symbols-outlined text-[16px]">shopping_bag</span> Add to Bag
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 (Trio Set Feature) -->
                <div class="flex flex-col bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative aspect-[3/4] w-full bg-surface-container overflow-hidden">
                        <img alt="Stars PJ 3 Pieces Set Navy" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1WqdMVkKM8AnKJoSM14TGIX5rIi1_gW7_ku2tN12mohAqgq-PnRgE4bdOdfBVbssZEMhTNkaljxsbCR1UmC-pQXK1dp9gaFzD_ZaOiye_L-nveYTxv4NHrAuaqF7nc-0HCRTl3_oVvoCErzZiiG2WFvAhxil8RMzRr8gGk32JG70hIZb3MM3COa4tLOxcwc4yTOM4m0hMKFtcvAcBcTnPbBuTeiY_Ch6HnDUkfgO2yU8Mcip447I3kMkF14" />
                        <span class="absolute top-2 left-2 bg-terracotta-rich text-on-primary font-label-badge text-label-badge px-2 py-0.5 font-extrabold">TRIO SET</span>
                        <button aria-label="Add to wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-warm-white/90 backdrop-blur-sm flex items-center justify-center text-charcoal-muted shadow active:scale-90 hover:text-primary transition-transform" onclick="toggleWishlist(this, 'Stars PJ 3 Pieces Set Navy')">
                            <span class="material-symbols-outlined text-[18px]">favorite_border</span>
                        </button>
                    </div>
                    <div class="p-4 flex flex-col flex-1 justify-between">
                        <div>
                            <span class="font-label-badge text-label-badge text-secondary uppercase font-bold">Includes Robe, Tank &amp; Pants</span>
                            <h3 class="font-headline-sm text-headline-sm font-bold text-on-surface mt-1">Stars PJ 3 Pieces Set Navy</h3>
                        </div>
                        <div class="mt-3">
                            <div class="flex items-baseline gap-2 mb-2">
                                <span class="font-headline-sm text-headline-sm font-extrabold text-primary">LE 1,549.00</span>
                                <span class="font-body-sm text-body-sm text-secondary line-through">LE 1,199.00</span>
                            </div>
                            <button class="w-full py-2.5 bg-primary text-on-primary font-label-md text-label-md font-bold active:scale-95 hover:bg-terracotta-rich transition-all flex items-center justify-center gap-1.5 shadow-sm" onclick="addToCart('Stars PJ 3 Pieces Set Navy')">
                                <span class="material-symbols-outlined text-[18px]">shopping_bag</span> Claim 50% On 2nd
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Collection: 'Isdal Family' (Desktop Enhanced Showcase) -->
    <section class="py-8 md:py-14 bg-surface-container" id="isdal-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <span class="font-label-badge text-label-badge text-terracotta-rich uppercase tracking-wider font-extrabold block">PRAYER &amp; MODEST SILKS</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-3xl font-extrabold text-on-surface tracking-tight">Isdal Family</h2>
                </div>
                <span class="font-label-badge text-label-badge bg-warm-white text-on-surface px-3 py-1.5 font-bold shadow-sm border border-outline-variant">
                    MUMMY &amp; ME
                </span>
            </div>

            <!-- Enhanced Desktop Side-by-Side Card -->
            <div class="bg-surface-container-lowest overflow-hidden shadow-sm p-4 sm:p-6 md:p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-10 items-center">
                    <div class="relative w-full aspect-[4/3] sm:aspect-[16/10] md:aspect-[4/3] overflow-hidden">
                        <img alt="Kids Celestial Starry Satin Isdal Set" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1VNgKX7fZPp-dRz4BLC6A4O8njt8PY4X2nXEiwzyP5AzoHBBXA_rwdMJky7R_44cK8MB06coVeYeIbZFzV4hOUyQJsFdfzTuLgveeOx01b_OqWgfpitVMaIFwE1kHk7RTbMCuJR44VbdcN2VDtQtVd77z2PZTGXsvkO-20S5sJw9NIrXXTV3f62vfWuNMODVHF9z0hSeTZqN9ZQZ0DYZ5GRhOkGC_EvXRU6R5KC1wVu7PXtAnFETzYh95aP" />
                        <div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/75 via-transparent to-transparent flex items-end p-4">
                            <span class="bg-sale-yellow text-on-background font-label-badge text-label-badge px-3 py-1 font-extrabold shadow">
                                MATCHING MOTHER &amp; DAUGHTER
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between h-full py-2">
                        <div>
                            <span class="font-label-badge text-label-badge text-terracotta-rich uppercase font-bold tracking-wider">Modest Comfort Collection</span>
                            <h3 class="font-headline-md md:font-headline-lg text-headline-md md:text-3xl font-extrabold text-on-surface mt-1">
                                Kids Celestial Starry Satin Isdal Set
                            </h3>
                            <p class="font-body-md text-body-md text-secondary mt-3 leading-relaxed">
                                Crafted with breathable satin-touch fabric and gentle draping for delicate comfort during prayer, family gatherings, and everyday relaxation. Designed for matching moments between mother and daughter.
                            </p>
                        </div>
                        <div class="mt-6 pt-6 border-t border-surface-variant flex flex-wrap items-center justify-between gap-4">
                            <div>
                                <span class="font-body-sm text-body-sm text-secondary block">Special Campaign Price</span>
                                <span class="font-headline-md text-2xl md:text-3xl font-black text-primary">LE 900.00</span>
                            </div>
                            <button class="px-6 py-3 bg-primary text-on-primary font-label-md text-label-md font-bold active:scale-95 hover:bg-terracotta-rich transition-all flex items-center gap-2 shadow-md" onclick="addToCart('Kids Celestial Starry Satin Isdal Set')">
                                <span class="material-symbols-outlined text-[20px]">shopping_bag</span> Shop Isdal Collection
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Badges Bar (3 Columns on Desktop) -->
    <section class="py-8 bg-warm-white border-t border-b border-surface-variant">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 text-center">
                <div class="flex flex-col items-center p-4 bg-surface-container-low border border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary text-[28px]">local_shipping</span>
                    <span class="font-label-badge text-label-badge font-extrabold text-on-surface mt-2 uppercase tracking-wider">Fast Delivery</span>
                    <span class="font-body-sm text-xs text-secondary mt-0.5">Express Across Cairo &amp; All Egypt Governorates</span>
                </div>
                <div class="flex flex-col items-center p-4 bg-surface-container-low border border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary text-[28px]">payments</span>
                    <span class="font-label-badge text-label-badge font-extrabold text-on-surface mt-2 uppercase tracking-wider">COD Ready</span>
                    <span class="font-body-sm text-xs text-secondary mt-0.5">Pay at Doorstep With Cash or Visa</span>
                </div>
                <div class="flex flex-col items-center p-4 bg-surface-container-low border border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary text-[28px]">sync_alt</span>
                    <span class="font-label-badge text-label-badge font-extrabold text-on-surface mt-2 uppercase tracking-wider">14-Day Easy Exchange</span>
                    <span class="font-body-sm text-xs text-secondary mt-0.5">Hassle-Free Sizing &amp; Fitting Exchanges</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter & Community Perks -->
    <section class="py-12 md:py-16 bg-surface-container-highest">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-surface-container-lowest p-6 sm:p-10 shadow-sm text-center">
                <div class="w-14 h-14 rounded-full bg-blush-tint text-primary flex items-center justify-center mx-auto mb-4">
                    <span class="material-symbols-outlined text-[30px]">mark_email_unread</span>
                </div>
                <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-3xl font-extrabold text-on-surface tracking-tight">
                    Join the FLUFF Club
                </h2>
                <p class="font-body-md text-body-md text-secondary mt-2 mb-6 max-w-lg mx-auto">
                    We create pieces that feel softer, fit better, and last longer. Sign up for exclusive 50% discount codes, secret restocks, and first access to seasonal drops.
                </p>
                <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" onsubmit="handleNewsletter(event)">
                    <input class="flex-1 px-4 py-3 bg-surface-container text-on-surface font-body-md text-body-md placeholder-secondary focus:outline-none focus:ring-2 focus:ring-primary" id="emailInput" placeholder="Enter your email address" required="" type="email" />
                    <button class="py-3 px-6 bg-primary text-on-primary font-label-lg text-label-lg font-bold shadow-md hover:bg-terracotta-rich active:scale-95 transition-all shrink-0" type="submit">
                        GET 10% OFF
                    </button>
                </form>

                <!-- Social Channels -->
                <div class="mt-8 pt-6 border-t border-surface-variant flex flex-col items-center">
                    <span class="font-label-badge text-label-badge text-secondary uppercase tracking-widest font-extrabold mb-3">
                        FOLLOW OUR STORY
                    </span>
                    <div class="flex items-center gap-4">
                        <a aria-label="Instagram" class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface hover:bg-primary hover:text-on-primary transition-colors" href="https://www.instagram.com/chummy_ts/" rel="noopener noreferrer" target="_blank">
                            <span class="font-label-badge text-label-badge font-bold">IG</span>
                        </a>
                        <a aria-label="TikTok" class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface hover:bg-primary hover:text-on-primary transition-colors" href="https://tiktok.com/@chummy_ts/" rel="noopener noreferrer" target="_blank">
                            <span class="font-label-badge text-label-badge font-bold">TT</span>
                        </a>
                        <a aria-label="Facebook" class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface hover:bg-primary hover:text-on-primary transition-colors" href="https://www.facebook.com/Chummyts" rel="noopener noreferrer" target="_blank">
                            <span class="font-label-badge text-label-badge font-bold">FB</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Micro Brand Footer Note -->
            <div class="mt-8 text-center text-secondary">
                <p class="font-label-badge text-label-badge uppercase tracking-wider text-on-surface-variant font-bold">
                    &copy; <?php echo date('Y'); ?> FLUFF SLEEPWEAR. POWERED BY CHAM.STD &amp; VITALDC
                </p>
                <p class="font-body-sm text-[11px] text-secondary mt-1">
                    Pure Egyptian Cotton &amp; Silky Satin Loungewear | Cairo &amp; Istanbul Ateliers
                </p>
            </div>
        </div>
    </section>

</div>

<?php
get_footer();
?>