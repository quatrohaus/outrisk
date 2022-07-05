<?php get_header(); ?>

<div class="the-body-content">

    <?php get_template_part('banners'); ?>
    <div class="container">
        <div class="career-text">
            <p>We are an equal opportunity employer that promotes workplace gender parity in line with the Sustainable Development Goal (SDG) No.5 which aims to “Achieve gender equality and empower all women and girls”.</p>
            <p>Resultantly, more than 60% of the total OutRisk team is comprised of young female team members we contribute towards employment creation.</p>
            <p>Promoting gender equality through employing more female team members demonstrates our strong commitment to breaking down gender barriers through broadening the female team members’ “professional imagination” and giving them an opportunity to project themselves into leadership roles.</p>
        </div>
    </div>

    <div class="container">
        <div class="careers-title">
            <h2>Open Positions</h2>
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
            $careers = new WP_Query($args);
            ?>

            <?php if ($careers->have_posts()) : ?>

                <div class="c-d">

                    <?php while ($careers->have_posts()) : $careers->the_post(); ?>


                        <div class="career-holder">
                            <div class="ch">
                                <h5><?php the_title() ?></h5>

                                <div class="the-btn">
                                    <a href="<?php the_permalink() ?>">Apply Now</a>
                                </div>
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