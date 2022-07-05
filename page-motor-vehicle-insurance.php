<?php get_header(); ?>

<div class="the-body-content">

    <?php get_template_part('banners'); ?>



    <div class="container">
        <div class="row">
            <div class="col">

                <?php

                $args = array(
                    'post_type' => 'motor_insurance',
                    'taxonomy' => 'motor_insurance_type',
                    //'term' => 'completed-projects',
                    'posts_per_page' => -1,
                    // 'meta_key'			=> 'range',
                    'orderby'            => 'range',
                    'order'                => 'ASC'
                );
                $the_query = new WP_Query($args); ?>
                <div class="roduct-flex">
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <div class="product-holder">

                                <div class="prod-img">

                                    <div class="circle-wrapper">
                                        <div class="circle"></div>
                                        <a class="ripple-button" href="<?php the_permalink(); ?>"><img src="<?php the_field('personal_image') ?>" alt=""></a>

                                    </div>



                                </div>
                                <div class="prod-title">
                                    <h3 class="the-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                            </div>


                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>

</div>

<?php get_footer(); ?>