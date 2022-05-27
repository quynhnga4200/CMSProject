<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter and get 20% off your first purchase</p>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="post">
                    <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                        <input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
                        <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">

                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'header-bot',
                            'container' => 'false',
                            'menu_id' => 'header-bot',
                            'menu_class' => 'footer_nav' 
                        )
                    ); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'header-bot-icon',
                            'container' => 'false',
                            'menu_id' => 'header-bot-icon',
                            'menu_class' => 'header-bot-icon' 
                        )
                    ); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_nav_container">
                    <div class="cr">©2018 All Rights Reserverd. Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a> &amp; distributed by <a href="https://themewagon.com">ThemeWagon</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>


</div>

<script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/styles/bootstrap4/popper.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/plugins/easing/easing.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/js/custom.js"></script>
<?php wp_footer() ?>
</body>

</html>