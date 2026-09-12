<?php
/**
 * Generic Page Template
 * 
 * @package FLUFF
 */

get_header(); ?>

<div class="px-margin-mobile py-6 max-w-4xl mx-auto space-y-6">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('bg-surface-container-lowest p-6 md:p-10 rounded-2xl shadow-sm border border-surface-container space-y-4'); ?>>
            <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-primary font-bold">
                <?php the_title(); ?>
            </h1>
            <div class="prose prose-stone font-body-md text-body-md text-on-surface leading-relaxed">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
