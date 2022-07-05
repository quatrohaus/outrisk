<?php get_header(); ?>
<?php
$args = array(
    'post_type' => 'slider',
    'orderby' => 'menu_order',
    'posts_per_page' => -1
);
$slides = new WP_Query($args);
?>

<?php if ($slides->have_posts()) : ?>

    <div class="slider-container">
        <div id="homeSlider" class="owl-carousel owl-theme">

            <?php while ($slides->have_posts()) : $slides->the_post(); ?>

                <div class="item">
                    <?php the_post_thumbnail('slider_image'); ?>
                    <div class="container put-index">
                        <div class="content-wrapper">
                            <div class="fix-the-caption">
                                <div class="slider-caption">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_field('small_caption') ?></p>
                                </div>
                                <div class="learn-more">
                                    <div class="btn">
                                        <a href="<?php the_field('button_link') ?>">Learn More</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        </div>
    </div>
    <section class="we-are">
        <div class="container">
            <div class="the-big-text">
                <div class="one">
                    <h2>We are OutRisk Underwriting Management Agency</h2>
                </div>
                <div class="two">
                    <h2>& we care about transparency<span class="comma">,</span></h2>
                </div>
                <div class="three">
                    <h2>specificity, and accessibility</h2>
                </div>
            </div>

            <div class="we-are-text">
                <p>OutRisk Underwriting Management Agency is a is a young, vibrant and purely digital insurtech that has ingrained the versatility of cutting edge digital technologies as key drivers of its operating model in a bid to meet and exceed dynamic customer needs.</p>

                <h3>It's really that simple</h3>

                <!-- <div class="the-btn">
                    <a href="about-us">Learn More</a>
                </div> -->
            </div>
        </div>
    </section>


    <section class="plans">
        <div class="fluid-container t-p">
            <div class="plan-bg">
            </div>
            <div class="container">
                <div class="the-p">
                    <div class="the-tabs-holder">
                        <div class="right-one">
                            <p><span class="the-bold">Four Plans.</span>Which one is right for you?</p>
                        </div>
                        <?php echo do_shortcode('[wptabs id="32"]'); ?>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <section class="portfolio">
        <div class="fluid-container port">
            <div class="container">
                <div class="col-sm-12">
                    <div class="port-heading">
                        <h2>Product Portfolio </h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <?php
                $args = array(
                    'post_type' => 'Portfoolio Slider',
                    'orderby' => 'menu_order',
                    'posts_per_page' => -1
                );
                $portslides = new WP_Query($args);
                ?>

                <?php if ($portslides->have_posts()) : ?>

                    <div class="portslider-container">
                        <div id="portfoliosSlider" class="owl-carousel owl-theme">

                            <?php while ($portslides->have_posts()) : $portslides->the_post(); ?>

                                <div class="item">

                                    <div class="container put-index">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="port-img">
                                                    <img src="<?php the_field('portfolio_image') ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="slider-caption">
                                                    <h2><?php the_field('the_port_title') ?></h2>
                                                    <p><?php the_field('main_text_area') ?></p>
                                                    <span class="button">
                                                        <a href="<?php the_field('get_quote_link') ?>" class="">
                                                            Get Quote
                                                        </a>
                                                    </span>
                                                    <span class="button">
                                                        <a href="<?php the_field('learn_more') ?>" class="">
                                                            Learn More
                                                        </a>
                                                    </span>

                                                </div>
                                            </div>
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
    </section>
    <section class="testimonials">
        <div class="container">
            <h2>Testimonials</h2>

            <?php
            $args = array(
                'post_type' => 'testimonials',
                'orderby' => 'menu_order',
                'posts_per_page' => -1
            );
            $testimony = new WP_Query($args);
            ?>

            <?php if ($testimony->have_posts()) : ?>

                <div class="testimony-wrapper">
                    <div id="testimonialSlider" class="owl-carousel owl-theme">

                        <?php while ($testimony->have_posts()) : $testimony->the_post(); ?>

                            <div class="testimony">
                                <h6><?php the_field('name') ?></h6>
                                <p><?php the_field('testimony') ?></p>
                            </div>


                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                    </div>

    </section>
    <section class="abt">
        <div class="container">
            <div class="about-career">

                <div class="abt">
                    <h3>About Us</h3>
                    <p>We're an Insurance company that's building a better world.</p>
                    <a href="about-us">Read More</a>
                </div>
                <div class="career">
                    <h3>Careers</h3>
                    <p>Want to help transform OutRisk Insurance? Join our team.</p>
                    <a href="career">Read More</a>
                </div>
            </div>
        </div>
    </section>



    <?php if (have_posts()) :

        while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

    <?php else : ?>

    <?php endif; ?>


    <?php get_footer(); ?>