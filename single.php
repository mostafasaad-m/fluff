<?php
/**
 * Single Blog Post Template
 * 
 * @package FLUFF
 */

get_header(); ?>

<div class="px-margin-mobile py-6 max-w-3xl mx-auto space-y-6">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('bg-surface-container-lowest p-6 md:p-10 rounded-2xl shadow-sm border border-surface-container space-y-6'); ?>>
            <div class="space-y-2">
                <span class="font-label-caps text-label-caps text-secondary uppercase tracking-widest"><?php echo get_the_date(); ?></span>
                <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-primary font-bold">
                    <?php the_title(); ?>
                </h1>
            </div>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="rounded-xl overflow-hidden aspect-video bg-surface-container shadow-sm">
                    <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                </div>
            <?php endif; ?>
            <div class="prose prose-stone font-body-md text-body-md text-on-surface leading-relaxed">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
