<?php get_header() ?>

<div class="fs_menu_overlay"></div>

<!-- Hamburger Menu -->
<div class="container product_section_container">
	<div class="row">
		<div class="col product_section clearfix">

			<!-- Breadcrumbs -->

			<div class="breadcrumbs d-flex flex-row align-items-center">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's</a></li>
				</ul>
			</div>
			<!-- Sidebar -->
			<div class="sidebar">
				<div class="sidebar_section">
					<div class="sidebar_title">
						<h5>Product Category</h5>
					</div>
					<ul class="sidebar_categories">
						<?php $cat = get_term_by('id', 22, 'product_cat');?>
						<li><a href="#"><?php echo $cat->name; ?></a></li>
						<?php $cat = get_term_by('id', 20, 'product_cat');?>
						<li><a href="#"><?php echo $cat->name; ?></a></li>
						<?php $cat = get_term_by('id', 19, 'product_cat');?>
						<li><a href="#"><?php echo $cat->name; ?></a></li>
						<?php $cat = get_term_by('id', 21, 'product_cat');?>
						<li><a href="#"><?php echo $cat->name; ?></a></li>
					</ul>
				</div>
			</div>
			<!-- Main Content -->

			<div class="main_content">

				<!-- Products -->
				<div class="products_iso">
					<div class="row">
						<div class="col">
							<!-- Product Grid -->
							<div class="product-grid">
								<!-- Hàm lấy tất cả sản phẩm mới nhất -->
								<?php $args = array('post_type' => 'product',); ?>
								<?php $getposts = new WP_query($args); ?>
								<?php global $wp_query;
								$wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<?php global $product; ?>
									<div class="product-item men">
										<div class="product discount product_filter">
											<div class="product_image">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_post_thumbnail(get_the_id(), 'full', array('class' => 'thumnail')); ?>
												</a>
											</div>
											<div class="favorite favorite_left"></div>
											<?php if ($product->is_on_sale()) { ?>
												<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span><?php echo percentSale($product->get_regular_price(), $product->get_sale_price()) . ' %' ?></span></div>
											<?php } ?>
											<div class="product_info">
												<h6 class="product_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
												<div class="product_price"><?php echo $product->get_price_html(); ?></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>
								<?php endwhile;
								wp_reset_postdata(); ?>
								<!-- Product Sorting -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>free shipping</h6>
							<p>Suffered Alteration in Some Form</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cach on delivery</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening all week</h6>
							<p>8AM - 09PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

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
					<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
						<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
						<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
					</div>
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
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. Template by <a href="#">Colorlib</a> &amp; distributed by <a href="https://themewagon.com">ThemeWagon</a></div>
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
<script src="<?php bloginfo('stylesheet_directory') ?>/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/js/categories_custom.js"></script>

</body>
</html>