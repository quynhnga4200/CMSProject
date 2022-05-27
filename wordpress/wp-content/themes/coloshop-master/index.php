<?php get_header() ?>
<!-- Slider -->

<?php get_template_part('slider') ?>

<!-- Banner -->

<div class="banner">
	<div class="container">
		<div class="row">

			<?php $args = array(
				'hide_empty' => 0,
				'taxonomy' => 'product_cat',
				'orderby' => 'id',
				'parent' => 0
			);
			$cates = get_categories($args);
			foreach ($cates as $cate) {  ?>

				<div class="col-md-3">
					<div class="banner_item align-items-center" style="background: linear-gradient(to right, crimson, lightsalmon, gold, 
  seagreen, midnightblue, indigo, violet);">
						<div class="banner_category">
							<a href="<?php echo get_term_link($cate->slug, 'product_cat'); ?>"><?php echo $cate->name; ?></a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<!-- New Arrivals -->

<div class="new_arrivals">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<div class="section_title new_arrivals_title">
					<h2>New Arrivals</h2>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col text-center">
				<div class="new_arrivals_sorting">


					<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
					</ul>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

					<!-- Product 1 -->
					<!-- Lấy 10 sản phẩm mới nhất -->

					<?php $args = array('post_type' => 'product', 'posts_per_page' => 10,); ?>
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


				</div>
			</div>
		</div>
	</div>
</div>

<!-- Deal of the week -->

<div class="deal_ofthe_week">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="deal_ofthe_week_img">
					<img src="<?php bloginfo('stylesheet_directory') ?>/images/deal_ofthe_week.png" alt="">
				</div>
			</div>
			<div class="col-lg-6 text-right deal_ofthe_week_col">
				<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
					<div class="section_title">
						<h2>Deal Of The Week</h2>
					</div>
					<ul class="timer">
						<li class="d-inline-flex flex-column justify-content-center align-items-center">
							<div id="day" class="timer_num">03</div>
							<div class="timer_unit">Day</div>
						</li>
						<li class="d-inline-flex flex-column justify-content-center align-items-center">
							<div id="hour" class="timer_num">15</div>
							<div class="timer_unit">Hours</div>
						</li>
						<li class="d-inline-flex flex-column justify-content-center align-items-center">
							<div id="minute" class="timer_num">45</div>
							<div class="timer_unit">Mins</div>
						</li>
						<li class="d-inline-flex flex-column justify-content-center align-items-center">
							<div id="second" class="timer_num">23</div>
							<div class="timer_unit">Sec</div>
						</li>
					</ul>
					<div class="red_button deal_ofthe_week_button"><a href="#">shop now</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Best Sellers -->

<div class="best_sellers">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<div class="section_title new_arrivals_title">
					<h2>Best Sellers</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="product_slider_container">
					<div class="owl-carousel owl-theme product_slider">

						<!-- Slide 1 -->


						<!-- Hiển thị sản phẩm nổi bật -->

						<?php
						$tax_query[] = array(
							'taxonomy' => 'product_visibility',
							'field'    => 'name',
							'terms'    => 'featured',
							'operator' => 'IN',
						);
						?>
						<?php $args = array('post_type' => 'product', 'posts_per_page' => 5, 'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
						<?php $getposts = new WP_query($args); ?>
						<?php global $wp_query;
						$wp_query->in_the_loop = true; ?>
						<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
							<?php global $product; ?>

							<div class="owl-item product_slider_item">
								<div class="product-item">
									<div class="product discount">
										<div class="product_image">
											<!-- lấy link -->
											<a href="<?php the_permalink(); ?>">
												<!-- lấy ảnh -->
												<?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>
											</a>
										</div>
										<a href="<?php the_permalink(); ?>">
											<div class="favorite favorite_left"></div>
										</a>
										<!-- hiển thị % sale -->
										<?php if ($product->is_on_sale()) { ?>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
												<span><?php echo percentSale($product->get_regular_price(), $product->get_sale_price()) . ' %' ?></span>
											</div>
										<?php } ?>

										<div class="product_info">
											<h6 class="product_name"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h6>
											<div class="product_price"><?php echo $product->get_price_html(); ?></div>

										</div>
									</div>
								</div>

							</div>


						<?php endwhile;
						wp_reset_postdata(); ?>




						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
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

	<!-- Blogs -->

	<div class="blogs">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Latest Blogs</h2>
					</div>
				</div>
			</div>
			<div class="row blogs_container">
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/images/blog_1.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2017</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/images/blog_2.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2017</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(<?php bloginfo('stylesheet_directory') ?>/images/blog_3.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2017</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<?php get_footer() ?>