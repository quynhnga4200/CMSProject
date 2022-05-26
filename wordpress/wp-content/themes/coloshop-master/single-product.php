<?php
get_header( 'shop' );

?>
<div class="container">
    <?php
    do_action( 'woocommerce_before_main_content' );
    while ( have_posts() ) : the_post(); 
        wc_get_template_part( 'content', 'single-product' );
    endwhile; // end of the loop.
    ?>
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