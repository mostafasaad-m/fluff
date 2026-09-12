<?php
/**
 * WooCommerce Archive Product / Shop Catalog Template
 * 
 * @package FLUFF
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header( 'shop' );
?>

<div class="flex flex-col w-full">
    <!-- Editorial Banner & Meta Header -->
    <section class="px-margin-mobile pt-2 pb-4">
        <div class="flex items-baseline justify-between gap-2">
            <div class="flex flex-col">
                <span class="font-label-caps text-label-caps text-secondary uppercase tracking-widest">FLUFF Boutique Catalog</span>
                <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-primary tracking-tight mt-0.5">
                    <?php woocommerce_page_title(); ?> <span class="font-arabic-sub text-arabic-sub text-on-surface-variant font-normal block sm:inline">/ متجر الموديلات</span>
                </h1>
            </div>
            <div class="bg-surface-container px-3 py-1.5 rounded-full shadow-sm shrink-0 flex items-center gap-1.5">
                <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                <span class="font-label-caps text-label-caps text-on-surface tracking-wider uppercase font-semibold">
                    <?php
                    $total_products = wc_get_loop_prop('total') ?: 18;
                    echo esc_html( $total_products ) . ' Styles';
                    ?>
                </span>
            </div>
        </div>
        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1.5 italic">
            Curated slow-luxury sleepwear crafted between Istanbul and Cairo.
        </p>
    </section>

    <!-- Horizontal Scrollable Category & Logistics Pills -->
    <section class="w-full overflow-x-auto no-scrollbar px-margin-mobile pb-3">
        <div class="flex items-center gap-2 min-w-max" id="quickPillsGroup">
            <a href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : '#' ); ?>" class="filter-pill active px-4 py-2 rounded-full bg-primary text-on-primary font-label-md text-label-md shadow-sm transition-all flex items-center gap-1.5">
                <span>All Styles</span>
            </a>
            <a href="?stock_type=ready" class="filter-pill px-4 py-2 rounded-full bg-surface-container-high text-on-surface font-label-md text-label-md shadow-sm transition-all hover:bg-surface-variant flex items-center gap-1.5">
                <span class="material-symbols-outlined text-[16px] text-secondary">bolt</span>
                <span>Ready Stock (Cairo 2-4d)</span>
            </a>
            <a href="?stock_type=preorder" class="filter-pill px-4 py-2 rounded-full bg-surface-container-high text-on-surface font-label-md text-label-md shadow-sm transition-all hover:bg-surface-variant flex items-center gap-1.5">
                <span class="material-symbols-outlined text-[16px] text-secondary">flight_takeoff</span>
                <span>Pre-Order (Turkey 10-12d)</span>
            </a>
            <a href="?category=winter-ribbed" class="filter-pill px-4 py-2 rounded-full bg-surface-container-high text-on-surface font-label-md text-label-md shadow-sm transition-all hover:bg-surface-variant flex items-center gap-1.5">
                <span class="material-symbols-outlined text-[16px] text-secondary">ac_unit</span>
                <span>Winter Ribbed</span>
            </a>
            <a href="?category=summer-cotton" class="filter-pill px-4 py-2 rounded-full bg-surface-container-high text-on-surface font-label-md text-label-md shadow-sm transition-all hover:bg-surface-variant flex items-center gap-1.5">
                <span class="material-symbols-outlined text-[16px] text-secondary">sunny</span>
                <span>Summer Cotton</span>
            </a>
            <a href="?category=silk-satin" class="filter-pill px-4 py-2 rounded-full bg-surface-container-high text-on-surface font-label-md text-label-md shadow-sm transition-all hover:bg-surface-variant flex items-center gap-1.5">
                <span>Silk &amp; Satin</span>
            </a>
        </div>
    </section>

    <!-- Filter & Sorting Controls Strip -->
    <section class="px-margin-mobile py-2 flex items-center justify-between gap-3">
        <button class="flex-1 py-2.5 px-3.5 rounded-full bg-surface-container-lowest text-primary shadow-sm hover:bg-surface-container-low transition-all flex items-center justify-between" id="openFilterBtn">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px] text-secondary">tune</span>
                <span class="font-label-md text-label-md">Refine Parameters</span>
            </div>
            <span class="bg-secondary-container text-on-secondary-container font-label-caps text-label-caps px-2 py-0.5 rounded-full">Active</span>
        </button>
        <div class="relative shrink-0">
            <?php woocommerce_catalog_ordering(); ?>
        </div>
    </section>

    <!-- Collapsible Filter Drawer Section -->
    <section class="mx-margin-mobile my-2 p-4 rounded-xl bg-surface-container-low shadow-md hidden transition-all" id="filterDrawer">
        <div class="flex items-center justify-between pb-3 border-b border-surface-variant">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[20px] text-secondary">filter_vintage</span>
                <h3 class="font-headline-sm text-headline-sm text-primary">Refine Selection</h3>
            </div>
            <button class="font-label-caps text-label-caps text-secondary uppercase font-bold" onclick="document.getElementById('filterDrawer').classList.add('hidden')">Close</button>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-3">
            <div>
                <h4 class="font-label-md text-label-md text-primary font-bold mb-2">Availability</h4>
                <div class="space-y-1.5 text-body-sm text-on-surface-variant">
                    <label class="flex items-center gap-2"><input type="checkbox" checked class="rounded text-primary focus:ring-secondary"/> Ready Cairo Stock</label>
                    <label class="flex items-center gap-2"><input type="checkbox" checked class="rounded text-primary focus:ring-secondary"/> Pre-Order Istanbul</label>
                </div>
            </div>
            <div>
                <h4 class="font-label-md text-label-md text-primary font-bold mb-2">Fabric Type</h4>
                <div class="space-y-1.5 text-body-sm text-on-surface-variant">
                    <label class="flex items-center gap-2"><input type="checkbox" class="rounded text-primary focus:ring-secondary"/> Organic Ribbed Cotton</label>
                    <label class="flex items-center gap-2"><input type="checkbox" class="rounded text-primary focus:ring-secondary"/> Pure Mulberry Silk</label>
                    <label class="flex items-center gap-2"><input type="checkbox" class="rounded text-primary focus:ring-secondary"/> Plush Velvet</label>
                </div>
            </div>
            <div>
                <h4 class="font-label-md text-label-md text-primary font-bold mb-2">Price Range</h4>
                <div class="space-y-1.5 text-body-sm text-on-surface-variant">
                    <label class="flex items-center gap-2"><input type="radio" name="price" class="text-primary focus:ring-secondary"/> Under 1,500 EGP</label>
                    <label class="flex items-center gap-2"><input type="radio" name="price" class="text-primary focus:ring-secondary"/> 1,500 – 2,000 EGP</label>
                    <label class="flex items-center gap-2"><input type="radio" name="price" class="text-primary focus:ring-secondary"/> Above 2,000 EGP</label>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Grid Section -->
    <section class="px-margin-mobile py-4">
        <?php
        if ( woocommerce_product_loop() ) {
            woocommerce_product_loop_start();
            if ( wc_get_loop_prop( 'total' ) ) {
                while ( have_posts() ) {
                    the_post();
                    do_action( 'woocommerce_shop_loop' );
                    wc_get_template_part( 'content', 'product' );
                }
            }
            woocommerce_product_loop_end();
            do_action( 'woocommerce_after_shop_loop' );
        } else {
            // Render Fallback Sample Products if catalog is empty in DB
            $sample_products = fluff_get_sample_products();
            ?>
            <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3.5">
                <?php foreach ( $sample_products as $p ) : ?>
                    <li class="group relative rounded-2xl bg-surface-container-lowest p-3 shadow-[0_8px_30px_-4px_rgba(24,39,63,0.05)] border border-surface-container/60 transition-all hover:shadow-md flex flex-col justify-between">
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
                                <span class="font-label-caps text-[10px] text-secondary uppercase"><?php echo esc_html($p['category']); ?></span>
                                <h3 class="font-headline-sm text-headline-sm text-primary font-semibold truncate">
                                    <a href="<?php echo esc_url( home_url('/single-product-detail/') ); ?>"><?php echo esc_html($p['name']); ?></a>
                                </h3>
                                <p class="font-arabic-sub text-[11px] text-on-surface-variant truncate"><?php echo esc_html($p['arabic_name']); ?></p>
                                <div class="flex items-baseline gap-2 pt-1">
                                    <span class="font-label-md text-label-md text-primary font-bold"><?php echo esc_html(number_format($p['price'])); ?> EGP</span>
                                    <span class="font-body-sm text-body-sm text-outline line-through"><?php echo esc_html(number_format($p['regular_price'])); ?> EGP</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3">
                            <a href="<?php echo esc_url( home_url('/single-product-detail/') ); ?>" class="w-full py-2 px-3 rounded-full bg-primary text-on-primary font-label-md text-label-md text-center hover:bg-primary/90 transition-all flex items-center justify-center gap-1 shadow-sm">
                                View Details
                            </a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php } ?>
    </section>
</div>

<?php
get_footer( 'shop' );
