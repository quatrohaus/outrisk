<?php get_header(); ?>
<div class="container">
    <div class="faqs-section">
        <?php if (have_posts()) :

            while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>