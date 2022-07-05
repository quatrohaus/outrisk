<?php get_header(); ?>

<div class="the-body-content">

    <?php get_template_part( 'banners' ); ?>



    <div class="container">
        <div class="row">
            <div class="col">

                <?php
         
        $args = array(
            'post_type' => 'business_insurance',
            'taxonomy' => 'business_insurance_type',
            //'term' => 'completed-projects',
            'posts_per_page'=> -1,
           // 'meta_key'			=> 'range',
	        'orderby'			=> 'range',
	        'order'				=> 'ASC'
        );
        $the_query = new WP_Query( $args ); ?>
                <div class="roduct-flex">
                    <?php if ($the_query->have_posts() ) : ?>
                    <?php while ($the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="product-holder">

                        <div class="prod-img">
                            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('business_image')?>" alt=""></a>

                        </div>
                        <div class="prod-title">
                            <h3 class="the-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="dot"></span></a></h3>
                        </div>
                    </div>


                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>








    <?php get_footer(); ?>
