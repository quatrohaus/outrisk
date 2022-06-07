<?php get_header(); ?>

<div class="the-body-content">

    <?php get_template_part( 'banners' ); ?>
    <div class="container">
        <div class="career-text">
            <p>Have a zeal to contribute to the real wprld and create visible impact in business and lives of custmers? We are transforming business and customer experience everyday.</p>
        </div>
    </div>

    <div class="container">
        <div class="careers-title">
            <h2>Open Positionsspan<span class="dot"></span></h2>
        </div>
    </div>
    <div class="container">
        <div class="careers-cont">

            <?php
        $args = array( 
            'post_type' => 'Careers',
            'orderby' => 'menu_order',
            'posts_per_page' => -1
        );
        $careers = new WP_Query( $args );
    ?>

            <?php if ( $careers->have_posts() ) : ?>

            <div class="c-d">

                <?php while ( $careers->have_posts() ) : $careers->the_post(); ?>


                <div class="career-holder">
                    <div class="ch">
                        <h5><?php the_title()?></h5>

                        <div class="the-btn">
                            <a href="<?php the_permalink()?>">Apply Now</a>
                        </div>
                    </div>
                </div>




                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
        </div>

    </div>








    <?php get_footer(); ?>
