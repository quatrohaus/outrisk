<div class="fluid-container for-footer">
    <div class="container">
        <div class="row">
            <div class="lets-shape">
                <h3>Let's shape the future of insurance together.</h3>

                <div class="bttn">
                    <a href="">Talk to Us</a>
                </div>
            </div>
        </div>




        <div class="footer-middle">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="f-logo-social-icons">
                        <div class="thef-lgo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/./css/img/outriskrlogo white.png" alt="">
                        </div>
                        <div class="scial">
                            <a href="" class="facebook"><i class="icon-iconmonstr-facebook-5"></i></a>
                            <a href="" class="twitter"><i class="icon-iconmonstr-twitter-5"></i></a>
                            <a href="" class="linkedin"><i class="icon-iconmonstr-linkedin-5"></i></a>
                            <a href="" class="youtube"><i class="icon-iconmonstr-youtube-10"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="the-footer-menu">
                        <div class="products">
                            <h5>Products</h5>
                            <?php
                        $args = array(
                            'theme_location' => 'products');
                        ?>
                            <?php wp_nav_menu( $args ); ?>


                        </div>

                        <div class="company">
                            <h5>Company</h5>
                            <?php
                    $args = array(
                            'theme_location' => 'company');
                        ?>
                            <?php wp_nav_menu( $args ); ?>
                        </div>

                        <div class="legal">
                            <h5>Legal</h5>
                            <?php
                        $args = array(
                            'theme_location' => 'legal');
                        ?>
                            <?php wp_nav_menu( $args ); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="designed">
            <div class="row done-by">
                <div class="copy-right-area">
                    <p>Copyright &copy; <?php echo date("Y");?> Our Risk. All righrts reserved. </p>
                </div>
                <div class="the-quatro">
                    <p>Site by <a href="www.quatrohaus.com">Quatrohaus</a></p>
                </div>
            </div>

        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>
