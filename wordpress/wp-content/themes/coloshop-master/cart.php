<?php 
 /*
   Template Name: Trang giỏ hàng
   */
        get_header()
  ?>
  <div class="shopping-cart">
      <div class="container">
          <?php echo do_shortcode('[woocommerce_cart]') ?>

      </div>
  </div>
 <?php 
 get_footer()
 ?>