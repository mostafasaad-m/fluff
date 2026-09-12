<?php
/**
 * Template Name: Special Collection (Winter Edit)
 * 
 * @package FLUFF
 */

get_header();
?>

<div class="flex flex-col w-full pb-16">
    <!-- Atmospheric Hero -->
    <section class="relative w-full px-margin-mobile pt-4 pb-6 overflow-hidden">
        <div class="relative w-full rounded-2xl overflow-hidden shadow-sm bg-primary-container">
            <div class="bg-cover bg-center w-full min-h-[320px] relative flex flex-col justify-between p-6" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD3wn6bHyBbqJ1a8J3kTP7N5efe-ZaHSyLzj8lb45Dw1iA9sVThBHYeh96lDMY0gnFTFpR_VpBQ5p96LzySzbRXxdJeO9fNg3YKKWH2K5-YAv9SVF-f1ynKJ0-IuvK3SqHOBAY_WHRUEyVi1uG0nGn4XRG70lRH6v5A3dVD8D0xMPIdWHUY690QuEuokadkBuX0y0HLN9LKFdIyuibS9r4pXU986s1zfLA4Rad63FMrZsmwJk1fS_pZAg')">
                <div class="absolute inset-0 bg-gradient-to-b from-primary/80 via-primary/30 to-primary/90 pointer-events-none"></div>
                <div class="relative z-10 flex items-center justify-between">
                    <span class="px-3 py-1 rounded-full bg-surface/20 backdrop-blur-md font-label-caps text-label-caps text-surface uppercase">Winter Special Edit</span>
                    <span class="font-label-caps text-label-caps text-secondary-fixed uppercase">Limited Release</span>
                </div>
                <div class="relative z-10 space-y-2 text-center pt-8">
                    <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-surface font-bold">Istanbul Fluffy Nights Collection</h1>
                    <p class="font-arabic-sub text-arabic-sub text-surface-container-high italic opacity-95">تشكيلة الشتاء المحدودة المستوردة خصيصاً من إسطنبول</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Collection Grid -->
    <section class="px-margin-mobile py-4 max-w-5xl mx-auto space-y-4">
        <div class="flex items-center justify-between border-b border-surface-variant pb-3">
            <h2 class="font-headline-md text-headline-md text-primary font-semibold">Curated Signature Styles</h2>
            <span class="font-label-caps text-label-caps text-secondary uppercase font-bold">4 Exclusive Items</span>
        </div>

        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <?php
            $sample_products = fluff_get_sample_products();
            foreach ( array_slice($sample_products, 0, 3) as $p ) :
            ?>
                <li class="group relative rounded-2xl bg-surface-container-lowest p-3.5 shadow-sm border border-surface-container flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="relative w-full aspect-[4/5] rounded-xl overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="<?php echo esc_url($p['image']); ?>" alt="<?php echo esc_attr($p['name']); ?>"/>
                            <span class="absolute top-2.5 left-2.5 bg-tertiary-fixed text-on-tertiary-fixed font-label-caps text-[9px] px-2 py-0.5 rounded-full uppercase font-bold">
                                <?php echo esc_html($p['badge']); ?>
                            </span>
                        </div>
                        <div class="space-y-1">
                            <h3 class="font-headline-sm text-headline-sm text-primary font-semibold truncate"><?php echo esc_html($p['name']); ?></h3>
                            <p class="font-arabic-sub text-arabic-sub text-on-surface-variant text-xs truncate"><?php echo esc_html($p['arabic_name']); ?></p>
                            <div class="flex items-baseline gap-2 pt-1">
                                <span class="font-label-md text-label-md text-primary font-bold"><?php echo esc_html(number_format($p['price'])); ?> EGP</span>
                                <span class="font-body-sm text-body-sm text-outline line-through"><?php echo esc_html(number_format($p['regular_price'])); ?> EGP</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" class="w-full py-2.5 rounded-full bg-primary text-on-primary font-label-md text-label-md text-center block hover:bg-primary/90 transition-all shadow-sm">
                            View Collection Item
                        </a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</div>

<?php
get_footer();
