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
								<a href="#"><i class="fab fa-facebook-square"></i></a>
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
								<?php 
								if( !isset( $logo ) ) {
									$logo = get_field( 'logo', "options" );
								}
								?>
								<img src="<?php echo $logo ?>" alt="" class="img-logo">
							</div>
							<?php 
							$location = get_nav_menu_locations();
							$menu_id = $location['main-menu'];
							$main_menu = wp_get_nav_menu_items($menu_id);
							?>
							<div class="nav-bar">
								<ul class="main-menu">
									
									<?php foreach($main_menu as $menu_item):?>
										<?php echo "<pre>" ;
										 echo "</pre>" ;
										
										?>
										<?php if( !$menu_item->menu_item_parent ) {
											$child_menu = [];
											foreach( $main_menu as $menu ) {
												if( $menu->menu_item_parent == $menu_item->ID ) {
													$child_menu[] = $menu;
												}
											}

											$has_child = !empty($child_menu) && is_array($child_menu);
											if( !$has_child) { ?>
												<li class="menu-item"><a class="menu-item-a" href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></li>
											<?php } else { ?>
												<li class="menu-item">
													<a class="menu-item-a" href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a>
													<div class="menu-child">
														<div class="menu-child-items">
															<h3>DANH MỤC SẢN PHẨM </h3>
															<?php
															$lg = get_field( 'logo' );
															$product_category = get_field( 'product_category', 'options' )["category_grid_module"];
															?>
															<ul>
																<?php
																if( !empty( $product_category) && is_array( $product_category ) ) {
																?>
																	<?php foreach($product_category as $child_mn) : ?>
																		<li><a class="menu-child-items-a" data-img=" <img src='<?php echo wp_get_attachment_url(  $child_mn['product_category_image'], 'thumbnail' ) ; ?>'>" href="<?php echo get_term_link( $child_mn['product_category_info'] ); ?>"><i class="fas fa-chevron-right"></i> <?php echo get_term( $child_mn['product_category_info'] )->name;?></a></li>
																	<?php endforeach ?>
																<?php
																}
																?>
															</ul>
														</div>
														<div class="menu-child-img-outer">
															<div class="menu-child-img">
																<img src="<?php echo get_template_directory_uri()?>./img/all-category/avc-1.png" alt="">
															</div>
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
