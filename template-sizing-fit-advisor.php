<?php
/**
 * Template Name: Sizing & Fit Advisor
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
            <span class="material-symbols-outlined text-secondary text-[18px]">straighten</span>
            <span class="font-label-caps text-label-caps text-secondary tracking-widest uppercase">Bespoke Fit</span>
            <span class="w-8 h-[1px] bg-secondary-fixed-dim/60"></span>
        </div>
        <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-primary tracking-tight font-bold">FLUFF Sizing &amp; Fit Advisor</h1>
        <p class="font-arabic-sub text-arabic-sub text-on-surface-variant" dir="rtl">دليل المقاسات الدقيق لأطقم النوم التركية والمصرية</p>
    </div>

    <!-- Size Chart Table -->
    <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-surface-container overflow-x-auto space-y-4">
        <h2 class="font-headline-sm text-headline-sm text-primary font-semibold border-b border-surface-variant pb-3">Sleepwear Measurements Guide (cm)</h2>
        <table class="w-full text-left font-body-sm text-body-sm text-on-surface">
            <thead>
                <tr class="border-b border-surface-container text-secondary font-label-caps uppercase">
                    <th class="py-2.5 px-3">Size</th>
                    <th class="py-2.5 px-3">Bust (cm)</th>
                    <th class="py-2.5 px-3">Waist (cm)</th>
                    <th class="py-2.5 px-3">Hips (cm)</th>
                    <th class="py-2.5 px-3">Weight (kg)</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-surface-container/50">
                <tr>
                    <td class="py-3 px-3 font-bold text-primary">S (Small)</td>
                    <td class="py-3 px-3">84 - 88</td>
                    <td class="py-3 px-3">66 - 70</td>
                    <td class="py-3 px-3">90 - 94</td>
                    <td class="py-3 px-3">50 - 58 kg</td>
                </tr>
                <tr>
                    <td class="py-3 px-3 font-bold text-primary">M (Medium)</td>
                    <td class="py-3 px-3">89 - 94</td>
                    <td class="py-3 px-3">71 - 76</td>
                    <td class="py-3 px-3">95 - 100</td>
                    <td class="py-3 px-3">59 - 68 kg</td>
                </tr>
                <tr>
                    <td class="py-3 px-3 font-bold text-primary">L (Large)</td>
                    <td class="py-3 px-3">95 - 102</td>
                    <td class="py-3 px-3">77 - 84</td>
                    <td class="py-3 px-3">101 - 108</td>
                    <td class="py-3 px-3">69 - 78 kg</td>
                </tr>
                <tr>
                    <td class="py-3 px-3 font-bold text-primary">XL (Extra Large)</td>
                    <td class="py-3 px-3">103 - 110</td>
                    <td class="py-3 px-3">85 - 92</td>
                    <td class="py-3 px-3">109 - 116</td>
                    <td class="py-3 px-3">79 - 88 kg</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Recommendations -->
    <div class="bg-surface-container-low p-6 rounded-2xl border border-surface-container space-y-3">
        <h3 class="font-headline-sm text-headline-sm text-primary font-semibold">Fit Recommendation</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
            FLUFF sleepwear is tailored with a relaxed, slow-luxury drape. If you prefer a loose relaxed fit for bedtime, choose your regular size. If you are between sizes, we recommend sizing up for optimal softness.
        </p>
        <p class="font-arabic-sub text-arabic-sub text-secondary font-medium" dir="rtl">
            تصميماتنا تتميز بقصة مريحة وفاخرة.. إذا كنتِ بين مقاسين ننصح باختيار المقاس الأكبر لضمان أقصى درجات الراحة أثناء النوم.
        </p>
    </div>
</div>

<?php
get_footer();
