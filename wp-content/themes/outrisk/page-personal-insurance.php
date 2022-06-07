<?php get_header(); ?>

<div class="the-body-content">

    <?php get_template_part( 'banners' ); ?>



    <div class="container">
        <div class="row">
            <div class="col">

                <?php
         
        $args = array(
            'post_type' => 'personal_insurance',
            'taxonomy' => 'personal_insurance_type',
            //'term' => 'completed-projects',
            'posts_per_page'=> -1,
           // 'meta_key'			=> 'range',
	        'orderby'			=> 'range',
	        'order'				=> 'ASC'
        );
        $the_query = new WP_Query( $args ); ?>

                <?php if ($the_query->have_posts() ) : ?>
                <?php while ($the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="project-rows">

                    <div class="proj-img">
                        <img src="<?php the_field('personal_image')?>" alt="">
                        <!--                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('personal_image'); ?> </a>-->
                    </div>
                    <div class="proj-title">
                        <h5 class="the-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    </div>
                    <div class="proj-summary">
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <div class="proj-read-more">
                        <h6 class="readmore"><a href="<?php the_permalink(); ?>">Read More</a></h6>
                    </div>

                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>

        </div>
    </div>








    <?php get_footer(); ?>
