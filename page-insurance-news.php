<?php get_header(); ?>

<div class="the-body-content">

    <?php get_template_part('banners'); ?>



    <div class="container">
        <div class="news-flex">


            <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'category_name' => 'news',
                    );
                    $news_articlePosts = new WP_Query($args);
                    ?>

            <?php if ($news_articlePosts->have_posts()) : ?>
            <?php while ($news_articlePosts->have_posts()) : $news_articlePosts->the_post(); ?>
            <div class="news">
                <div class="news-holder">
                    <p class="the-date"><?php echo get_the_date('d/m/Y'); ?></p>
                    <div class="news-text-content">
                        <h5><?php the_title(); ?></h5>
                        <p class="sumarry"><?php the_excerpt(); ?></p>
                    </div>
                    <div class="the-readmore">
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>

            <?php endif; ?>
        </div>

    </div>


</div>





<?php get_footer(); ?>
