<?php get_header(); ?>
<?php
        $args = array( 
            'post_type' => 'slider',
            'orderby' => 'menu_order',
            'posts_per_page' => -1
        );
        $slides = new WP_Query( $args );
    ?>

<?php if ( $slides->have_posts() ) : ?>

<div class="slider-container">
    <div id="homeSlider" class="owl-carousel owl-theme">

        <?php while ( $slides->have_posts() ) : $slides->the_post(); ?>

        <div class="item">
            <?php the_post_thumbnail('slider_image'); ?>
            <div class="container put-index">
                <div class="row">
                    <div class="fix-the-caption">
                        <div class="slider-caption">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_field('small_caption')?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="google-rev">
                        <div class="g-img">
                            <img src="<?php the_field('star_rating')?>" alt="">
                        </div>
                        <div class="g-text">
                            <p>Customer reviews on</p>
                        </div>
                        <div class="other-g-img">
                            <img src="<?php the_field('google_logo')?>" alt="">
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
                <h2>We are OutRisk Insurance <span class="dot"></span></h2>
            </div>
            <div class="two">
                <h2>& we care about transparency <span class="comma">,</span></h2>
            </div>
            <div class="three">
                <h2>specificity, and accessibility <span class="dot"></span></h2>
            </div>
        </div>

        <div class="we-are-text">
            <p>OutRisk is a customer centric and technology driven insurance service provide that leverages cutting-edge technologies in order to deliver seamless experience to a wide range of clients, whilst focusing on the mass market.</p>

            <h4>It's really that simple <span class="dot"></span></h4>

            <div class="the-btn">
                <a href="#">Learn More</a>
            </div>
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
                    <h2>Product Portfolio <span class="dot"></span></h2>
                </div>
            </div>
        </div>
        <?php
        $args = array( 
            'post_type' => 'Portfoolio Slider',
            'orderby' => 'menu_order',
            'posts_per_page' => -1
        );
        $portslides = new WP_Query( $args );
    ?>

        <?php if ( $portslides->have_posts() ) : ?>
        <div class="container">
            <div class="portslider-container">
                <div id="portfoliosSlider" class="owl-carousel owl-theme">

                    <?php while ( $portslides->have_posts() ) : $portslides->the_post(); ?>

                    <div class="item">

                        <div class="container put-index">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="port-img">
                                        <img src="<?php the_field('portfolio_image')?>" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="slider-caption">
                                        <h2><?php the_field('the_port_title')?><span class="dot"></span></h2>
                                        <p><?php the_field('main_text_area')?></p>
                                        <span class="button">
                                            <a href="<?php the_field('get_quote_link')?>" class="">
                                                Get Quote
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
<section class="nws">
    <div class="container">
        <div class="row the-news">
            <div class="col-sm-12">
                <h2>Insurance News <span class="dot"></span></h2>
            </div>
            <div class="news-flex">


                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page'=> 2,
                                'category_name' => 'news',
                                );
                                $news_articlePosts = new WP_Query( $args );
                            ?>

                <?php if ($news_articlePosts->have_posts()) : ?>
                <?php while ( $news_articlePosts->have_posts() ) : $news_articlePosts->the_post(); ?>
                <div class="news">
                    <div class="news-holder">
                        <p class="the-date"><?php  echo get_the_date('d/m/Y'); ?></p>
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
            <div class="news-read-mre">
                <a href="#">Read More</a>
            </div>
        </div>
    </div>

</section>
<section class="abt">
    <div class="container">
        <div class="about-career">

            <div class="abt">
                <h3>About Us <span class="dot"></span></h3>
                <p>We're an Insurance company that's building a better world.</p>
                <a href="#">Read More</a>
            </div>
            <div class="career">
                <h3>Careers <span class="dot"></span></h3>
                <p>Want to help transform OutRisk Insurance? Join our team.</p>
                <a href="#">Read More</a>
            </div>
        </div>
    </div>
</section>



<?php if(have_posts()) :
    
        while(have_posts()) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php else: ?>

<?php endif; ?>


<?php get_footer(); ?>
