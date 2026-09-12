<?php
/**
 * Main Fallback Template
 * 
 * @package FLUFF
 */

get_header(); ?>

<div class="px-margin-mobile py-8 max-w-4xl mx-auto space-y-6">
    <?php if ( have_posts() ) : ?>
        <header class="mb-6">
            <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-primary font-bold">
                <?php single_post_title(); ?>
            </h1>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('bg-surface-container-lowest p-5 rounded-2xl shadow-sm border border-surface-container space-y-3'); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="rounded-xl overflow-hidden aspect-video bg-surface-container">
                            <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover')); ?>
                        </div>
                    <?php endif; ?>
                    <h2 class="font-headline-sm text-headline-sm text-primary font-semibold">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
        
        <div class="pt-6">
            <?php the_posts_pagination(); ?>
        </div>
    <?php else : ?>
        <p class="font-body-md text-body-md text-on-surface-variant">No content found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
