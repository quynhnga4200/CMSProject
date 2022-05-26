<!DOCTYPE html>
<html lang="en">
<head>
<?php wp_head() ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/styles/bootstrap4/bootstrap.min.css">
<link href="<?php bloginfo('stylesheet_directory') ?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/styles/responsive.css">
</head>

<body <?php body_class() ?>> 

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">colo<span>shop</span></a>
						</div>
						<nav class="navbar">
							
                            <?php wp_nav_menu(
                                            array(
                                                'theme_location' => 'header-main',
                                                'container' => 'false',
                                                'menu_id' => 'header-main',
                                                'menu_class' => 'navbar_menu' // thay bằng class giống css
                                            )
                                        ); ?>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">2</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>


	</div>