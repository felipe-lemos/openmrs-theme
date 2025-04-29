<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if (!has_block('core/cover') && !is_front_page()) : ?>
            <header class="entry-header padding-section-medium">
                <div class="max-width-large">
                    <h1 class="entry-title heading-style-h1 text-color-scampi"><?php the_title(); ?></h1>
                </div>
            </header>
            <?php endif; ?>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>