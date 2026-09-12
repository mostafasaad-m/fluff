<?php
/**
 * Template Name: Shipping & Luxury Packaging
 * 
 * @package FLUFF
 */

get_header();
?>

<div class="px-margin-mobile pt-3 pb-12 max-w-4xl mx-auto space-y-6">
    <!-- Header -->
    <div class="text-center space-y-2">
        <div class="inline-flex items-center justify-center gap-2">
            <span class="w-8 h-[1px] bg-secondary-fixed-dim/60"></span>
            <span class="material-symbols-outlined text-secondary text-[18px]">bedtime</span>
            <span class="font-label-caps text-label-caps text-secondary tracking-widest uppercase">The FLUFF Promise</span>
            <span class="w-8 h-[1px] bg-secondary-fixed-dim/60"></span>
        </div>
        <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-primary tracking-tight font-bold">Packaging, Hygiene &amp; Transit</h1>
        <p class="font-arabic-sub text-arabic-sub text-on-surface-variant" dir="rtl">تجربة التغليف الفاخر، ضمان النظافة ومسارات الشحن المزدوجة</p>
        <div class="mt-2 inline-flex items-center gap-1.5 px-3 py-1 bg-surface-container-high/80 rounded-full shadow-sm">
            <span class="material-symbols-outlined text-secondary text-[14px]">verified</span>
            <span class="font-label-caps text-label-caps text-secondary font-medium">Bespoke Istanbul • Express Cairo</span>
        </div>
    </div>

    <!-- Touch Before Opening Feature -->
    <div class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm border border-surface-container space-y-4">
        <div class="flex items-center gap-3 border-b border-surface-container pb-3">
            <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container">
                <span class="material-symbols-outlined text-[20px]">touch_app</span>
            </div>
            <div>
                <h2 class="font-headline-sm text-headline-sm text-primary font-semibold">Touch Before Opening</h2>
                <p class="font-arabic-sub text-arabic-sub text-on-surface-variant">اللمس وتفحص الملمس قبل كسر الختم</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <div class="rounded-xl overflow-hidden aspect-video bg-surface-container shadow-sm">
                <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBA8RuU4Vh39DcxzwSPPFtjaXGb-dJmPYne_u2Xs8CIDq_cWTTY8jfDFGu6TqCByml0eW_Ld5V2ZeAfnyK5lzhIYGe3ZZ43wi9c3uDjd3NGV0tGiiMcCsJQRiPguQJD1rnnoCkyEsjBhzFdOD4dNQCAMP9B3RO6ex4f4ScIXseMoxPiV5OTKNCZdqafwtuxEXFPnWJd60Z9jit8r4WJ-0JweMo1qSz4LmhFqzgbeqGSSJm1GClx2M5Ydg" alt="Fabric Touch Window"/>
            </div>
            <div class="space-y-3 font-body-sm text-body-sm text-on-surface-variant">
                <p class="text-primary font-semibold text-body-md">Hygienic Fabric Touch Window</p>
                <p>Feel the hand-brushed silk &amp; modal softness through the transparent aperture window without compromising the hygienic sealed inner bag.</p>
                <p class="font-arabic-sub text-arabic-sub" dir="rtl">يمكنك لمس وتجربة نسيج القماش الفاخر من خلال نافذة الفحص الخاصة قبل فتح الختم الطبي المعتمد.</p>
            </div>
        </div>
    </div>

    <!-- Dual Delivery Routes -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Cairo Express -->
        <div class="bg-surface-container-lowest p-6 rounded-2xl border border-surface-container shadow-sm space-y-3">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary text-[24px]">local_shipping</span>
                <h3 class="font-headline-sm text-headline-sm text-primary font-semibold">Ready Stock (Cairo Hub)</h3>
            </div>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Dispatched within 24 hours directly from Cairo warehouse to all Egyptian governorates.</p>
            <span class="inline-block px-3 py-1 bg-surface-container rounded-full font-label-caps text-label-caps text-secondary font-bold">2–4 Business Days</span>
        </div>

        <!-- Istanbul Pre-Order -->
        <div class="bg-surface-container-lowest p-6 rounded-2xl border border-surface-container shadow-sm space-y-3">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary text-[24px]">flight_takeoff</span>
                <h3 class="font-headline-sm text-headline-sm text-primary font-semibold">Pre-Order (Istanbul Atelier)</h3>
            </div>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Hand-cut and crafted in our Bosphorus ateliers, then flown express to your Cairo address.</p>
            <span class="inline-block px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed rounded-full font-label-caps text-label-caps font-bold">10–12 Business Days</span>
        </div>
    </div>
</div>

<?php
get_footer();
