<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jadem-tech
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- Wrapper -->
	<div class="wrapper">

		<header id="masthead" class="site-header">
			<!-- Header -->
			<div class="header">
				<!-- Header top -->
				<div class="header-top">
					<div class="container">
						<div class="header-top-inner">
							<p>Well come to Jadem-tech</p>
							<div class="header-top-social">
								<a href="<?php echo get_template_directory_uri()?>/#"><i class="fab fa-facebook-square"></i></a>
								<a href="#"><i class="fab fa-youtube"></i></a>
								<a href="#"><i class="fab fa-linkedin-in"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- End Header top -->
				<!-- Header-bot -->
				<div class="header-bot">
					<div class="container">
						<div class="header-bot-inner">
							<div class="header-bot-logo">
								<img src="<?php echo get_template_directory_uri()?>./img/logo.png" alt="" class="img-logo">
							</div>
							<?php 
							$location = get_nav_menu_locations();
							$menu_id = $location['main-menu'];
							$main_menu = wp_get_nav_menu_items($menu_id);
							// print_r($main_menu);
							?>
							<div class="nav-bar">
								<ul class="main-menu">
									
									<?php foreach($main_menu as $menu_item):?>
										<?php if( !$menu_item->menu_item_parent ) {
											$child_menu = [];
											foreach( $main_menu as $menu ) {
												// $i++;
												if( $menu->menu_item_parent == $menu_item->ID ) {
												
													$child_menu[] = $menu;
													// echo $i . "<br>";
												}
											}
											// echo "<pre>";
											// print_r($child_menu);
											// echo "</pre>";
											// wp_die();

											$has_child = !empty($child_menu) && is_array($child_menu);
											if( !$has_child) { ?>
												<li class="menu-item"><a class="menu-item-a" href="<?php echo home_url(); ?>"><?php echo $menu_item->title; ?></a></li>
											<?php } else { ?>
												<li class="menu-item">
													<a class="menu-item-a" href="<?php echo home_url(); ?>"><?php echo $menu_item->title; ?></a>
													<div class="menu-child">
													<div class="menu-child-items">
														<h3>DANH MỤC SẢN PHẨM </h3>
														<ul>
															<?php foreach($child_menu as $child_mn) : ?>
															<li><a class="menu-child-items-a" href="<?php echo $child_mn->url; ?>"><i class="fas fa-chevron-right"></i> <?php echo $child_mn->title;?></a></li>
															<?php endforeach ?>
														</ul>
													</div>
													<div class="menu-child-img">
														<img src="<?php echo get_template_directory_uri()?>./img/product/product-category.jpg" alt="">
													</div>
												</div>
												</li>
											<?php }
										} ?>
									
									<?php endforeach ?>
									
								</ul>
							</div>
							<div class="header-bot-search">
								<i class="fas fa-search"></i>
							</div>
						</div>
					</div>
				</div>
				<!-- End Header bot -->
			</div>
			<!-- End Header -->
		</header><!-- #masthead -->
