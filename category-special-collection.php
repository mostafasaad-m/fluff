<!DOCTYPE html>

<html class="h-full" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover"
        name="viewport" />
    <title>FLUFF Sleepwear</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&amp;family=Playfair+Display:ital,wght@0,500;0,600;1,500&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script
        id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "secondary-container": "#fedeb2", "tertiary-fixed": "#fddbd3", "secondary-fixed-dim": "#e0c298", "on-primary": "#ffffff", "primary": "#18273f", "on-background": "#1c1c18", "on-tertiary": "#ffffff", "surface-variant": "#e6e2dc", "on-error": "#ffffff", "on-surface-variant": "#44474d", "secondary": "#725b38", "surface-bright": "#fdfbf7", "inverse-surface": "#31302d", "on-tertiary-fixed": "#291712", "on-secondary-fixed": "#281800", "surface-container-lowest": "#ffffff", "on-secondary-container": "#78603e", "background": "#fdfbf7", "on-tertiary-fixed-variant": "#58413c", "on-primary-container": "#808eab", "error": "#ba1a1a", "surface-container": "#f5f1ea", "primary-container": "#18273f", "on-secondary-fixed-variant": "#584323", "error-container": "#ffdad6", "surface-container-high": "#eee9e0", "tertiary": "#1e0e09", "surface-dim": "#dddad4", "outline": "#75777e", "inverse-primary": "#b8c7e6", "on-surface": "#18273f", "on-error-container": "#93000a", "primary-fixed-dim": "#b8c7e6", "surface-container-highest": "#e6e2dc", "surface": "#fdfbf7", "on-tertiary-container": "#a48780", "tertiary-container": "#35221d", "on-primary-fixed": "#0c1c33", "secondary-fixed": "#fedeb2", "outline-variant": "#c5c6ce", "on-primary-fixed-variant": "#394761", "tertiary-fixed-dim": "#e0bfb7", "surface-container-low": "#fbf8f2", "surface-tint": "#505f7a", "on-secondary": "#ffffff", "primary-fixed": "#d6e3ff", "inverse-on-surface": "#f4f0ea" }, "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, "spacing": { "space-md": "1.25rem", "space-lg": "2rem", "space-xs": "0.375rem", "margin-mobile": "1rem", "space-sm": "0.75rem", "space-xl": "3.25rem", "gutter": "1.25rem", "gutter-mobile": "0.75rem", "margin": "2rem" }, "fontFamily": { "body-lg": ["Manrope"], "label-caps": ["Manrope"], "label-md": ["Manrope"], "headline-md": ["Playfair Display"], "display-hero-mobile": ["Playfair Display"], "body-sm": ["Manrope"], "arabic-sub": ["Manrope"], "headline-sm": ["Playfair Display"], "display-hero": ["Playfair Display"], "headline-lg-mobile": ["Playfair Display"], "headline-lg": ["Playfair Display"], "body-md": ["Manrope"] }, "fontSize": { "body-lg": ["16px", { "lineHeight": "26px", "fontWeight": "400" }], "label-caps": ["11px", { "lineHeight": "16px", "letterSpacing": "0.14em", "fontWeight": "700" }], "label-md": ["13px", { "lineHeight": "18px", "fontWeight": "600" }], "headline-md": ["22px", { "lineHeight": "30px", "fontWeight": "500" }], "display-hero-mobile": ["34px", { "lineHeight": "42px", "letterSpacing": "-0.01em", "fontWeight": "600" }], "body-sm": ["12px", { "lineHeight": "18px", "fontWeight": "400" }], "arabic-sub": ["13px", { "lineHeight": "22px", "fontWeight": "500" }], "headline-sm": ["18px", { "lineHeight": "26px", "fontWeight": "500" }], "display-hero": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "600" }], "headline-lg-mobile": ["26px", { "lineHeight": "34px", "fontWeight": "600" }], "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }], "body-md": ["14px", { "lineHeight": "22px", "fontWeight": "400" }] } } } }</script>
    <style>
        @layer base {

            html,
            body {
                width: 100%;
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior-y: none;
                font-family: 'Manrope', sans-serif;
                background-color: #fdfbf7;
                color: #18273f;
            }

            .pb-safe {
                padding-bottom: env(safe-area-inset-bottom, 0px);
            }

            .pt-safe {
                padding-top: env(safe-area-inset-top, 0px);
            }

            main>:first-child {
                margin-top: 0 !important;
            }

            main>:last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body
    class="bg-surface text-on-surface flex flex-col min-h-full selection:bg-secondary-container selection:text-on-secondary-container">
    <header class="fixed top-0 w-full z-50 pt-safe bg-surface/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div class="bg-primary-container text-surface px-margin-mobile py-1 text-center overflow-hidden">
            <p class="font-label-caps text-label-caps text-surface uppercase tracking-widest truncate">REST • DREAM •
                BELONG | CAIRO &amp; ISTANBUL EXPRESS DELIVERY</p>
        </div>
        <div class="h-16 px-gutter-mobile flex items-center justify-between gap-2">
            <div class="flex items-center gap-1.5 shrink-0"><button aria-label="Open Menu"
                    class="w-11 h-11 flex items-center justify-center text-primary hover:text-secondary transition-colors"><span
                        class="material-symbols-outlined text-[24px]">menu</span></button><img alt="FLUFF Brand Logo"
                    class="h-8 w-auto object-contain"
                    src="https://lh3.googleusercontent.com/aida/AEtjO1UkM_8BjdjT_W6Zr62fRkIE-uPuPvGnGe-lm7OOCZhcsUQmI_5C8Qx0c0Bq6gQJRLkmMi396-88mjrFY0UMERqK4-aD2UCS_tyfA3QBjMvczEmw6egtGNvlg8ctNbpu6sykNhHHdZwxSD5ueybo4IEwWXLWQNn1LwBsgKoNHjGTBiHiW4XUcu0uWdcsTHbQWd4OBigdxHr1yZfsEj-FqBGxQjIj0sI-CkvWdkQAingbjl_d543zYpC6eZSs" /><span
                    class="font-headline-sm text-headline-sm text-primary tracking-tight font-medium ml-1 hidden xs:inline">FLUFF</span>
            </div>
            <div class="flex-1 px-1 text-center"><span
                    class="font-headline-sm text-headline-sm text-primary truncate block">Category Special</span></div>
            <div class="flex items-center gap-1 shrink-0"><button aria-label="Search"
                    class="w-11 h-11 flex items-center justify-center text-primary hover:text-secondary transition-colors"><span
                        class="material-symbols-outlined text-[22px]">search</span></button><button
                    aria-label="Wishlist"
                    class="w-11 h-11 flex items-center justify-center text-primary hover:text-secondary transition-colors"><span
                        class="material-symbols-outlined text-[22px]">favorite</span></button><button
                    aria-label="Profile"
                    class="w-11 h-11 flex items-center justify-center text-primary hover:text-secondary transition-colors">
                    <div
                        class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center shadow-sm">
                        <span class="material-symbols-outlined text-[18px]">person</span></div>
                </button></div>
        </div>
    </header>
    <main class="flex flex-col relative w-full pt-24 pb-32 bg-surface min-h-screen">
        <div class="flex flex-col w-full">
            <!-- Editorial Header & Collection Switcher -->
            <section class="px-margin-mobile pt-2 pb-6">
                <div class="flex flex-col items-center text-center">
                    <div
                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container shadow-sm mb-3">
                        <span class="material-symbols-outlined text-[16px]">nights_stay</span>
                        <span class="font-label-caps text-label-caps uppercase tracking-widest">Seasonal Capsule</span>
                    </div>
                    <h1
                        class="font-display-hero-mobile text-display-hero-mobile text-primary tracking-tight font-semibold">
                        Istanbul Nights
                    </h1>
                    <p class="font-headline-sm text-headline-sm text-secondary italic mt-0.5">
                        Warm nights. Softer days.
                    </p>
                    <p class="font-arabic-sub text-arabic-sub text-on-surface-variant mt-1 max-w-xs">
                        تشكيلة الشتاء الفاخرة والصيف التركي • Crafted between Istanbul &amp; Cairo
                    </p>
                    <!-- Interactive Switcher Pills -->
                    <div class="mt-5 p-1 bg-surface-container rounded-full flex w-full max-w-sm shadow-inner"
                        id="collection-pills">
                        <button
                            class="flex-1 py-2.5 px-3 rounded-full bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-sm transition-all"
                            id="btn-winter">
                            <span class="material-symbols-outlined text-[16px]">ac_unit</span>
                            <span>Winter (Ready Stock)</span>
                        </button>
                        <button
                            class="flex-1 py-2.5 px-3 rounded-full text-on-surface-variant font-label-md text-label-md flex items-center justify-center gap-1.5 hover:text-primary transition-all"
                            id="btn-summer">
                            <span class="material-symbols-outlined text-[16px]">wb_sunny</span>
                            <span>Summer Pre-Order</span>
                        </button>
                    </div>
                </div>
            </section>
            <!-- Editorial Highlight Callout -->
            <section class="px-margin-mobile mb-6">
                <div class="relative overflow-hidden rounded-xl bg-surface-container-low p-4 shadow-sm">
                    <div class="flex items-start justify-between gap-3">
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-1.5 text-secondary mb-1">
                                <span class="material-symbols-outlined text-[18px]">inventory_2</span>
                                <span class="font-label-caps text-label-caps uppercase tracking-wider">Cairo Ready
                                    Stock</span>
                            </div>
                            <h2 class="font-headline-sm text-headline-sm text-primary font-medium leading-snug">
                                Immediate Dispatch across Egypt
                            </h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                Hand-inspected in Zamalek atelier. Wrapped in tissue paper, ready to arrive at your door
                                in 2–4 business days.
                            </p>
                        </div>
                        <div
                            class="shrink-0 w-16 h-16 rounded-lg bg-surface-container flex flex-col items-center justify-center text-center p-1.5 shadow-inner">
                            <span
                                class="font-display-hero-mobile text-[20px] text-primary font-bold leading-none">24h</span>
                            <span
                                class="font-label-caps text-[9px] uppercase tracking-tighter text-on-surface-variant mt-0.5">Express
                                Cairo</span>
                        </div>
                    </div>
                    <!-- Texture Filter Badges -->
                    <div class="flex items-center gap-2 overflow-x-auto pt-4 mt-3 no-scrollbar">
                        <button
                            class="shrink-0 px-3 py-1.5 rounded-full bg-surface-container-lowest text-primary font-label-md text-label-md shadow-sm">
                            All Styles (6)
                        </button>
                        <button
                            class="shrink-0 px-3 py-1.5 rounded-full bg-surface-container text-on-surface-variant font-label-md text-label-md hover:bg-surface-container-high transition-colors">
                            Ribbed Fleece
                        </button>
                        <button
                            class="shrink-0 px-3 py-1.5 rounded-full bg-surface-container text-on-surface-variant font-label-md text-label-md hover:bg-surface-container-high transition-colors">
                            Turkish Cotton
                        </button>
                        <button
                            class="shrink-0 px-3 py-1.5 rounded-full bg-surface-container text-on-surface-variant font-label-md text-label-md hover:bg-surface-container-high transition-colors">
                            Cashmere Touch
                        </button>
                    </div>
                </div>
            </section>
            <!-- Product Cards Grid (2-Column Mobile) -->
            <section class="px-margin-mobile">
                <div class="grid grid-cols-2 gap-3" id="catalog-grid">
                    <!-- Item W01 -->
                    <div class="product-card flex flex-col bg-surface-container-lowest rounded-xl p-2.5 shadow-sm relative group"
                        data-category="winter">
                        <div
                            class="relative w-full aspect-[4/5] rounded-lg overflow-hidden bg-surface-container mb-2.5">
                            <img class="w-full h-full object-cover"
                                data-alt="A young woman wearing an elegant dusty steel-blue ribbed knit long-sleeve loungewear set with delicate front tie details. High-end boutique aesthetic, shot in soft natural morning window light inside a luxury Parisian-meets-Istanbul apartment with warm wooden parquet floors and linen drapes."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzOexs3MowhnkaSud04-uIBM472CmcGyeLLdYsE3K_gX5-R5n-_1u_RccvNXs8TpxdWizyHpPN-gsWtgwwXx0GJm-m1Mebvw6FDRX1qqFSvfU6UB4PtQ3KiJVRlFajBYYdrbUqaOfkMj-GSSkg0Ih4tkDK1cd18iuCue_tqVvpQNlA-Iyh9wiGizeJaeV_8Z5LDTm0WqTdJ7xSNNkfTe3BFvVHb6y5acxdaxhJWEMNyjYDCIORpzkL4g" />
                            <span
                                class="absolute top-2 left-2 px-2 py-0.5 rounded-full bg-primary/90 backdrop-blur-md text-on-primary font-label-caps text-[10px] tracking-wider uppercase shadow-xs">
                                Winter
                            </span>
                            <button aria-label="Add to Wishlist"
                                class="absolute top-2 right-2 w-7 h-7 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm flex items-center justify-center text-primary shadow-sm hover:text-error transition-colors">
                                <span class="material-symbols-outlined text-[16px]">favorite</span>
                            </button>
                            <div class="absolute bottom-1.5 inset-x-1.5 flex justify-center">
                                <span
                                    class="w-full py-1 px-1.5 rounded bg-surface-container-lowest/95 backdrop-blur-sm text-center text-primary font-label-caps text-[9px] uppercase tracking-widest truncate shadow-xs">
                                    Ready Stock • 2-4 Days
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-1 mb-0.5">
                            <span class="font-headline-sm text-headline-sm text-primary font-bold">W01</span>
                            <span class="font-label-md text-label-md text-secondary font-bold">1,650 EGP</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant truncate">Steel Blue Ribbed Knit</p>
                        <!-- Size Selector -->
                        <div class="flex items-center gap-1 my-2">
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center hover:bg-primary hover:text-on-primary transition-all">S</button>
                            <button
                                class="w-6 h-6 rounded bg-primary text-on-primary font-label-caps text-[10px] flex items-center justify-center font-bold">M</button>
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center hover:bg-primary hover:text-on-primary transition-all">L</button>
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center hover:bg-primary hover:text-on-primary transition-all">XL</button>
                        </div>
                        <button
                            class="w-full mt-auto py-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-primary font-label-md text-label-md flex items-center justify-center gap-1 transition-all">
                            <span>Quick Add</span>
                            <span class="material-symbols-outlined text-[15px]">arrow_forward</span>
                        </button>
                    </div>
                    <!-- Item W02 -->
                    <div class="product-card flex flex-col bg-surface-container-lowest rounded-xl p-2.5 shadow-sm relative group"
                        data-category="winter">
                        <div
                            class="relative w-full aspect-[4/5] rounded-lg overflow-hidden bg-surface-container mb-2.5">
                            <img class="w-full h-full object-cover"
                                data-alt="Close-up detail of luxurious charcoal grey cashmere-blend pajamas with tactile mother-of-pearl buttons. Hands gently resting on soft ribbed weave, warm serene Mediterranean interior lighting with cream background accents."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8g4Ko_8r8ltaB6dg-8XuooPfbrfu4JsYnCCWIjG9f8hivzugJFg7d7e5kbARvpkAHm1BnLmyG8lSOnmBBnKNcHXd1I70T1lAySGEaQU-7cDw9zmBVqVlQzWXFS4i-ltR_1UOTGISTmn_1uRckUzaEozzGMUIb6OEdWJYrWwrn11l96WRjhSDIaDLx_elbk5GI8-4t1_mcKA4TcMxcbKosSI1FlOb6GP4Kd6PtvHruC_SpIAUAFB9qsw" />
                            <span
                                class="absolute top-2 left-2 px-2 py-0.5 rounded-full bg-primary/90 backdrop-blur-md text-on-primary font-label-caps text-[10px] tracking-wider uppercase shadow-xs">
                                Winter
                            </span>
                            <button aria-label="Add to Wishlist"
                                class="absolute top-2 right-2 w-7 h-7 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm flex items-center justify-center text-primary shadow-sm hover:text-error transition-colors">
                                <span class="material-symbols-outlined text-[16px]">favorite</span>
                            </button>
                            <div class="absolute bottom-1.5 inset-x-1.5 flex justify-center">
                                <span
                                    class="w-full py-1 px-1.5 rounded bg-surface-container-lowest/95 backdrop-blur-sm text-center text-secondary font-label-caps text-[9px] uppercase tracking-widest truncate shadow-xs font-bold">
                                    ⚡ 24h Express Cairo
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-1 mb-0.5">
                            <span class="font-headline-sm text-headline-sm text-primary font-bold">W02</span>
                            <span class="font-label-md text-label-md text-secondary font-bold">1,750 EGP</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant truncate">Charcoal Cashmere Blend
                        </p>
                        <div class="flex items-center gap-1 my-2">
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center">S</button>
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center">M</button>
                            <button
                                class="w-6 h-6 rounded bg-primary text-on-primary font-label-caps text-[10px] flex items-center justify-center font-bold">L</button>
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center">XL</button>
                        </div>
                        <button
                            class="w-full mt-auto py-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-primary font-label-md text-label-md flex items-center justify-center gap-1 transition-all">
                            <span>Quick Add</span>
                            <span class="material-symbols-outlined text-[15px]">arrow_forward</span>
                        </button>
                    </div>
                    <!-- Item W03 -->
                    <div class="product-card flex flex-col bg-surface-container-lowest rounded-xl p-2.5 shadow-sm relative group"
                        data-category="winter">
                        <div
                            class="relative w-full aspect-[4/5] rounded-lg overflow-hidden bg-surface-container mb-2.5">
                            <img class="w-full h-full object-cover"
                                data-alt="Blonde European model lounging elegantly in an oatmeal heathered ribbed knit robe with cozy flared sleeves and plush waist sash. Soft sunny bedroom with classic ornate white French moldings and fluffy pillows."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdzu5nIIQweph7pAeLqyaoU8HfIA7fEB4kf94jQDUW5qY8vkhlP6_UKhOnkoTh8dRBRly-v1a5Izp-_6KwyKYFLo7NcmzLtw0_Y7AUyeQMBr__i5VtubjuHgE1yt33b1bnvS7uKlf9B9CFxkWzskvo2PfNi985Mz44DqyxuVQY5llnlQv2G9LHhY7i2ggexC-ct5E_rWayXRBMbebz_mPCxSr5sL84M1dOICTjxP6rmkRxYG1Wt8S2mg" />
                            <span
                                class="absolute top-2 left-2 px-2 py-0.5 rounded-full bg-primary/90 backdrop-blur-md text-on-primary font-label-caps text-[10px] tracking-wider uppercase shadow-xs">
                                Winter
                            </span>
                            <button aria-label="Add to Wishlist"
                                class="absolute top-2 right-2 w-7 h-7 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm flex items-center justify-center text-primary shadow-sm hover:text-error transition-colors">
                                <span class="material-symbols-outlined text-[16px]">favorite</span>
                            </button>
                            <div class="absolute bottom-1.5 inset-x-1.5 flex justify-center">
                                <span
                                    class="w-full py-1 px-1.5 rounded bg-surface-container-lowest/95 backdrop-blur-sm text-center text-primary font-label-caps text-[9px] uppercase tracking-widest truncate shadow-xs">
                                    Ready Stock
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-1 mb-0.5">
                            <span class="font-headline-sm text-headline-sm text-primary font-bold">W03</span>
                            <span class="font-label-md text-label-md text-secondary font-bold">1,950 EGP</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant truncate">Oatmeal Heather Robe</p>
                        <div class="flex items-center gap-1 my-2">
                            <button
                                class="w-6 h-6 rounded bg-primary text-on-primary font-label-caps text-[10px] flex items-center justify-center font-bold">S</button>
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center">M</button>
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center">L</button>
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center">XL</button>
                        </div>
                        <button
                            class="w-full mt-auto py-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-primary font-label-md text-label-md flex items-center justify-center gap-1 transition-all">
                            <span>Quick Add</span>
                            <span class="material-symbols-outlined text-[15px]">arrow_forward</span>
                        </button>
                    </div>
                    <!-- Item S01 -->
                    <div class="product-card flex flex-col bg-surface-container-lowest rounded-xl p-2.5 shadow-sm relative group"
                        data-category="summer">
                        <div
                            class="relative w-full aspect-[4/5] rounded-lg overflow-hidden bg-surface-container mb-2.5">
                            <img class="w-full h-full object-cover"
                                data-alt="Macro detail of soft white lightweight waffle-knit pajamas patterned with delicate miniature hand-painted red cherries. Aesthetic studio lighting, holding dried blush blooms, ultra-soft Turkish cotton texture."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDwPI-P3hw5BlJ2P8M2rzs5bnuVzMKuXEDPQA21CoCcGAAnloDRNRfIRehffDaHCkavqvb_PMDJE9Dyjk7d308UtIpS21slNDjZBJ4lni5b9txpo9p13Kv9OciXbtM5aR3JArXxZx3S5cV6hgz5kSQdWn0WGLMonTCbd6PQ-G0hizyfjl-mSOmI8-OnmVcpec2IkOH1s92YcqUUcW0eTVYyiScZ85-rJYq43er0qyLgllteXaxXE4ArVg" />
                            <span
                                class="absolute top-2 left-2 px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-caps text-[10px] tracking-wider uppercase shadow-xs">
                                Summer
                            </span>
                            <button aria-label="Add to Wishlist"
                                class="absolute top-2 right-2 w-7 h-7 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm flex items-center justify-center text-primary shadow-sm hover:text-error transition-colors">
                                <span class="material-symbols-outlined text-[16px]">favorite</span>
                            </button>
                            <div class="absolute bottom-1.5 inset-x-1.5 flex justify-center">
                                <span
                                    class="w-full py-1 px-1.5 rounded bg-surface-container-lowest/95 backdrop-blur-sm text-center text-primary font-label-caps text-[9px] uppercase tracking-widest truncate shadow-xs">
                                    Istanbul Pre-Order
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-1 mb-0.5">
                            <span class="font-headline-sm text-headline-sm text-primary font-bold">S01</span>
                            <span class="font-label-md text-label-md text-secondary font-bold">1,350 EGP</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant truncate">Cherry Print Ribbed Set
                        </p>
                        <div class="flex items-center gap-1 my-2">
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center">S</button>
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center">M</button>
                            <button
                                class="w-6 h-6 rounded bg-primary text-on-primary font-label-caps text-[10px] flex items-center justify-center font-bold">L</button>
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center">XL</button>
                        </div>
                        <button
                            class="w-full mt-auto py-2 rounded-lg bg-surface-container-high hover:bg-primary hover:text-on-primary text-primary font-label-md text-label-md flex items-center justify-center gap-1 transition-all">
                            <span>Reserve Style</span>
                            <span class="material-symbols-outlined text-[15px]">flight_takeoff</span>
                        </button>
                    </div>
                    <!-- Item S02 -->
                    <div class="product-card flex flex-col bg-surface-container-lowest rounded-xl p-2.5 shadow-sm relative group"
                        data-category="summer">
                        <div
                            class="relative w-full aspect-[4/5] rounded-lg overflow-hidden bg-surface-container mb-2.5">
                            <img class="w-full h-full object-cover"
                                data-alt="Playful pastel baby-pink ribbed cotton sleep set with miniature fuchsia ribbon bow motifs scattered across the fabric. Clean minimal editorial studio shot with warm soft lighting."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCpupYDkUdclO896_sD9pBMhQBqdh3YK0pYSWe86fcUWOZbli2tJy0n9qy8pOp3HagTncSAoW7YyCNlFmxrmUjB-yAvV-gaxIZiT0-u-KxJqTYGwQGU09dtgTu5jgzQtlAxssKDv_btIjeUiph2674mCAYVoT1FnfFSYadv04YiiTfr007dlGZ2EE8PzPzY1UoRIc-StIZAiP13TGuI5LtY-z30XCaHIZjsNjVmN2TRVhdruPy-hf8_g" />
                            <span
                                class="absolute top-2 left-2 px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-caps text-[10px] tracking-wider uppercase shadow-xs">
                                Summer
                            </span>
                            <button aria-label="Add to Wishlist"
                                class="absolute top-2 right-2 w-7 h-7 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm flex items-center justify-center text-primary shadow-sm hover:text-error transition-colors">
                                <span class="material-symbols-outlined text-[16px]">favorite</span>
                            </button>
                            <div class="absolute bottom-1.5 inset-x-1.5 flex justify-center">
                                <span
                                    class="w-full py-1 px-1.5 rounded bg-surface-container-lowest/95 backdrop-blur-sm text-center text-primary font-label-caps text-[9px] uppercase tracking-widest truncate shadow-xs">
                                    Pre-Order • 10-12 Days
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-1 mb-0.5">
                            <span class="font-headline-sm text-headline-sm text-primary font-bold">S02</span>
                            <span class="font-label-md text-label-md text-secondary font-bold">1,450 EGP</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant truncate">Pink Bow Co-ord</p>
                        <div class="flex items-center gap-1 my-2">
                            <button
                                class="w-6 h-6 rounded bg-primary text-on-primary font-label-caps text-[10px] flex items-center justify-center font-bold">S</button>
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center">M</button>
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center">L</button>
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center">XL</button>
                        </div>
                        <button
                            class="w-full mt-auto py-2 rounded-lg bg-surface-container-high hover:bg-primary hover:text-on-primary text-primary font-label-md text-label-md flex items-center justify-center gap-1 transition-all">
                            <span>Reserve Style</span>
                            <span class="material-symbols-outlined text-[15px]">flight_takeoff</span>
                        </button>
                    </div>
                    <!-- Item S04 -->
                    <div class="product-card flex flex-col bg-surface-container-lowest rounded-xl p-2.5 shadow-sm relative group"
                        data-category="summer">
                        <div
                            class="relative w-full aspect-[4/5] rounded-lg overflow-hidden bg-surface-container mb-2.5">
                            <img class="w-full h-full object-cover"
                                data-alt="Model lounging wearing an off-white Henley long-sleeve cotton sleep top with a delicate embroidered black velvet heart emblem on the chest and dark olive sage pants. Cozy indoor ambiance with warm ambient light."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmqF5hBNaPod1JCp7cK91VL1d4yjNCRAT-QoZU7eC9ZrNRah79EnI-8DiFEzV1S6VQqFyJqCCU9HpfP5HFLLWc_qjA_2kxUqFABnma3GwlDNFedFbljhluhOSZ5L5ipxlE8J3ylNtmWY7i48Uu2iyhejcj6Ny64yFYO5n_m9Kd4AdOvX3COzoVS0bHA67g_tdiaqGiM1m9v4Z6xHKFMbJ8UTvsLWNE4H6EWPcE05tjG4Xjw36seqasiA" />
                            <span
                                class="absolute top-2 left-2 px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-caps text-[10px] tracking-wider uppercase shadow-xs">
                                Summer
                            </span>
                            <button aria-label="Add to Wishlist"
                                class="absolute top-2 right-2 w-7 h-7 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm flex items-center justify-center text-primary shadow-sm hover:text-error transition-colors">
                                <span class="material-symbols-outlined text-[16px]">favorite</span>
                            </button>
                            <div class="absolute bottom-1.5 inset-x-1.5 flex justify-center">
                                <span
                                    class="w-full py-1 px-1.5 rounded bg-surface-container-lowest/95 backdrop-blur-sm text-center text-primary font-label-caps text-[9px] uppercase tracking-widest truncate shadow-xs">
                                    Pre-Order Only
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-1 mb-0.5">
                            <span class="font-headline-sm text-headline-sm text-primary font-bold">S04</span>
                            <span class="font-label-md text-label-md text-secondary font-bold">1,400 EGP</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant truncate">Henley Heart Ribbed Set
                        </p>
                        <div class="flex items-center gap-1 my-2">
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center">S</button>
                            <button
                                class="w-6 h-6 rounded bg-primary text-on-primary font-label-caps text-[10px] flex items-center justify-center font-bold">M</button>
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center">L</button>
                            <button
                                class="w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center">XL</button>
                        </div>
                        <button
                            class="w-full mt-auto py-2 rounded-lg bg-surface-container-high hover:bg-primary hover:text-on-primary text-primary font-label-md text-label-md flex items-center justify-center gap-1 transition-all">
                            <span>Reserve Style</span>
                            <span class="material-symbols-outlined text-[15px]">flight_takeoff</span>
                        </button>
                    </div>
                </div>
            </section>
            <!-- Editorial Value Pillars Strip -->
            <section class="px-margin-mobile my-8">
                <div class="bg-surface-container-low rounded-xl p-4 shadow-sm flex flex-col gap-3">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-9 h-9 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-[18px]">verified</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-headline-sm text-[15px] text-primary font-semibold">100% Real Ateliers
                                Photos</h4>
                            <p class="font-arabic-sub text-[12px] text-on-surface-variant">صور حقيقية واقعية لجميع القطع
                                بدون فلاتر</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div
                            class="w-9 h-9 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-[18px]">straighten</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-headline-sm text-[15px] text-primary font-semibold">Tailored Size Guidance
                            </h4>
                            <p class="font-arabic-sub text-[12px] text-on-surface-variant">استشارة دقيقة للمقاس المناسب
                                مع خدمة العملاء</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div
                            class="w-9 h-9 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-[18px]">redeem</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-headline-sm text-[15px] text-primary font-semibold">Bespoke Silk Paper
                                Packaging</h4>
                            <p class="font-arabic-sub text-[12px] text-on-surface-variant">تغليف فاخر بعناية كهدية لكِ
                                أو لمن تحبين</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- The FLUFF Story: Two Cities Narrative Bento Card -->
            <section class="px-margin-mobile mb-6">
                <div class="bg-primary text-on-primary rounded-xl p-5 shadow-lg relative overflow-hidden">
                    <!-- Subtle Decorative Arch Ambient Gradient -->
                    <div
                        class="absolute -right-8 -bottom-8 w-40 h-40 rounded-full bg-secondary/20 blur-2xl pointer-events-none">
                    </div>
                    <div class="relative z-10 flex flex-col items-center text-center">
                        <div
                            class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-secondary-container mb-2 shadow-inner">
                            <span class="material-symbols-outlined text-[20px]">diamond</span>
                        </div>
                        <span class="font-label-caps text-label-caps text-secondary-fixed uppercase tracking-widest">
                            FLUFF Philosophy
                        </span>
                        <h3
                            class="font-headline-lg-mobile text-headline-lg-mobile mt-1 font-semibold text-surface-bright">
                            Two Cities, One Softer You
                        </h3>
                        <p class="font-arabic-sub text-arabic-sub text-surface-variant mt-0.5">
                            من أزقة إسطنبول إلى ليالي القاهرة الهادئة
                        </p>
                        <p class="font-body-md text-body-md text-surface-variant/90 mt-3 max-w-sm">
                            FLUFF was founded on the quiet belief that what touches your skin in your most private hours
                            defines how you wake up to the world. We bridge the tactile heritage of Turkey’s knitting
                            ateliers with effortless concierge delivery to your Cairo door.
                        </p>
                        <div class="grid grid-cols-2 gap-3 w-full mt-5 text-left">
                            <div class="p-3 rounded-lg bg-surface-container-lowest/10 backdrop-blur-sm">
                                <span
                                    class="font-label-caps text-[10px] text-secondary-container uppercase tracking-wider block">Istanbul
                                    Atelier</span>
                                <span
                                    class="font-headline-sm text-[15px] text-surface-bright font-medium mt-0.5 block">Karaköy,
                                    TR</span>
                                <p class="font-body-sm text-[11px] text-surface-variant/80 mt-1">Spinning combed cotton
                                    &amp; ribbed fabrics</p>
                            </div>
                            <div class="p-3 rounded-lg bg-surface-container-lowest/10 backdrop-blur-sm">
                                <span
                                    class="font-label-caps text-[10px] text-secondary-container uppercase tracking-wider block">Cairo
                                    Dispatch</span>
                                <span
                                    class="font-headline-sm text-[15px] text-surface-bright font-medium mt-0.5 block">Zamalek,
                                    EG</span>
                                <p class="font-body-sm text-[11px] text-surface-variant/80 mt-1">Immediate ready-stock
                                    delivery &amp; sizing desk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Concierge Sizing & WhatsApp Advisory Box -->
            <section class="px-margin-mobile mb-8">
                <div class="bg-surface-container rounded-xl p-4 flex items-center justify-between gap-3 shadow-sm">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-full bg-surface-container-lowest text-primary flex items-center justify-center shadow-sm shrink-0">
                            <span class="material-symbols-outlined text-[20px]">support_agent</span>
                        </div>
                        <div>
                            <h4 class="font-label-md text-label-md text-primary">Confused about sizing?</h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Our Cairo stylists reply in
                                minutes with exact measurements.</p>
                        </div>
                    </div>
                    <a class="shrink-0 w-9 h-9 rounded-full bg-primary text-on-primary flex items-center justify-center shadow-sm hover:scale-105 active:scale-95 transition-transform"
                        href="https://wa.me/" rel="noopener noreferrer" target="_blank">
                        <span class="material-symbols-outlined text-[18px]">chat</span>
                    </a>
                </div>
            </section>
        </div>
        <script>
            // Interactive Collection Switching micro-interaction
            const winterBtn = document.getElementById('btn-winter');
            const summerBtn = document.getElementById('btn-summer');
            const cards = document.querySelectorAll('.product-card');

            if (winterBtn && summerBtn) {
                winterBtn.addEventListener('click', () => {
                    winterBtn.className = 'flex-1 py-2.5 px-3 rounded-full bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-sm transition-all';
                    summerBtn.className = 'flex-1 py-2.5 px-3 rounded-full text-on-surface-variant font-label-md text-label-md flex items-center justify-center gap-1.5 hover:text-primary transition-all';

                    cards.forEach(card => {
                        if (card.getAttribute('data-category') === 'winter') {
                            card.style.display = 'flex';
                            card.classList.add('animate-fadeIn');
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });

                summerBtn.addEventListener('click', () => {
                    summerBtn.className = 'flex-1 py-2.5 px-3 rounded-full bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-sm transition-all';
                    winterBtn.className = 'flex-1 py-2.5 px-3 rounded-full text-on-surface-variant font-label-md text-label-md flex items-center justify-center gap-1.5 hover:text-primary transition-all';

                    cards.forEach(card => {
                        if (card.getAttribute('data-category') === 'summer') {
                            card.style.display = 'flex';
                            card.classList.add('animate-fadeIn');
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            }

            // Size pill interactive toggle
            document.querySelectorAll('.product-card').forEach(card => {
                const sizePills = card.querySelectorAll('button:not(:last-child)');
                sizePills.forEach(pill => {
                    pill.addEventListener('click', (e) => {
                        e.stopPropagation();
                        sizePills.forEach(p => {
                            p.className = 'w-6 h-6 rounded bg-surface-container text-on-surface-variant font-label-caps text-[10px] flex items-center justify-center hover:bg-primary hover:text-on-primary transition-all';
                        });
                        pill.className = 'w-6 h-6 rounded bg-primary text-on-primary font-label-caps text-[10px] flex items-center justify-center font-bold';
                    });
                });
            });
        </script>
    </main>
    <aside class="fixed bottom-24 right-4 z-40 pointer-events-auto"><a
            class="flex items-center gap-2 bg-[#25D366] text-white px-4 py-2.5 rounded-full shadow-[0_8px_24px_-2px_rgba(37,211,102,0.35)] hover:bg-[#20ba59] active:scale-95 transition-all duration-200"
            href="https://wa.me/" rel="noopener noreferrer" target="_blank"><span
                class="material-symbols-outlined text-[20px]">chat</span><span
                class="font-body-md text-body-md font-semibold tracking-normal text-white">Order on WhatsApp</span><span
                class="material-symbols-outlined text-[16px]">arrow_forward_ios</span></a></aside>
    <nav class="fixed bottom-0 w-full z-50 pb-safe bg-surface/90 backdrop-blur-xl shadow-[0_-2px_12px_rgba(24,39,63,0.05)]"
        data-active-classes="text-primary font-bold">
        <div class="flex justify-around items-center h-16 px-2"><a
                class="flex flex-col items-center justify-center gap-0.5 w-16 h-12 text-on-surface-variant hover:text-primary transition-colors duration-150"
                data-path="home" href="#"><span class="material-symbols-outlined text-[22px]">home</span><span
                    class="font-label-caps text-label-caps tracking-normal capitalize">Home</span></a><a
                class="flex flex-col items-center justify-center gap-0.5 w-16 h-12 text-on-surface-variant hover:text-primary transition-colors duration-150"
                data-path="shop-catalog" href="#"><span class="material-symbols-outlined text-[22px]">styler</span><span
                    class="font-label-caps text-label-caps tracking-normal capitalize">Catalog</span></a><a
                aria-current="page"
                class="flex flex-col items-center justify-center gap-0.5 w-16 h-12 transition-colors duration-150 text-primary font-bold"
                data-path="category-special" href="#"><span
                    class="material-symbols-outlined text-[22px]">auto_awesome_mosaic</span><span
                    class="font-label-caps text-label-caps tracking-normal capitalize">Collections</span></a><a
                class="flex flex-col items-center justify-center gap-0.5 w-16 h-12 text-on-surface-variant hover:text-primary transition-colors duration-150"
                data-path="sizing-guide" href="#"><span
                    class="material-symbols-outlined text-[22px]">straighten</span><span
                    class="font-label-caps text-label-caps tracking-normal capitalize">Sizing</span></a><a
                class="flex flex-col items-center justify-center gap-0.5 w-16 h-12 text-on-surface-variant hover:text-primary transition-colors duration-150 relative"
                data-path="cart-and-account" href="#">
                <div class="relative flex items-center justify-center"><span
                        class="material-symbols-outlined text-[22px]">shopping_bag</span><span
                        class="absolute -top-1 -right-2 bg-secondary text-on-secondary text-[10px] font-bold rounded-full w-4 h-4 flex items-center justify-center">2</span>
                </div><span class="font-label-caps text-label-caps tracking-normal capitalize">Cart</span>
            </a></div>
    </nav>
</body>

</html>