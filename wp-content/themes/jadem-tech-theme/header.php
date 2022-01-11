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
								<?php pll_the_languages( array(
										'show_flags' => 1,
										'dropdown' => 0,
										'show_names' => 0,
										// 'hide_current' => 1,
									));
								?>
								<!-- <a href="#"><i class="fab fa-facebook-square"></i></a>
								<a href="#"><i class="fab fa-youtube"></i></a>
								<a href="#"><i class="fab fa-linkedin-in"></i></a> -->
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
							if( !isset( $location ) ) {
								$location = get_nav_menu_locations();
							}
							if( !isset(  $menu_id  ) && is_array( $location ) && !empty( $location ) ) {
								$menu_id = $location['main-menu'];
							}
							if( !isset( $main_menu ) ) {
								$main_menu = wp_get_nav_menu_items($menu_id);
							}
							?>
							<div class="nav-bar">
								<ul class="main-menu">
									
									<?php foreach($main_menu as $menu_item):?>
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
											<?php } else { 
												$header_home_url = get_home_url();
												$EL_header = (string) substr( $header_home_url, -3, 3 );
												?>
												<li class="menu-item">
													<a class="menu-item-a" href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a>
													<div class="menu-child">
														<div class="menu-child-items">
															<?php  
															if( $EL_header == "/en" ) {
															?>
																<h3><?php esc_html_e( 'CATEGORIES' ) ?></h3>
															<?php
															} else {
															?>
																<h3><?php esc_html_e( 'DANH MỤC SẢN PHẨM' ) ?></h3>
															<?php
															}
															?>
															<?php
															$lg = get_field( 'logo' );
															$product_category = get_field( 'product_category', 'options' )["category_grid_module"];
															$product_category_en = get_field( 'product_category_el', 'options' );
															if( $EL_header == "/en" ) {
															?>
																<ul>
																	<?php
																	if( !empty( $product_category_en) && is_array( $product_category_en ) ) {
																	?>
																		<?php foreach($product_category_en as $child_mn) : ?>
																			<li><a class="menu-child-items-a" data-img=" <img src='<?php echo  $child_mn['product_category_image_el'] ; ?>'>" href="<?php echo get_term_link( $child_mn['product_category_el'][0] ); ?>"><i class="fas fa-chevron-right"></i> <?php echo get_term( $child_mn['product_category_el'][0] )->name;?></a></li>
																		<?php endforeach ?>
																	<?php
																	}
																	?>
																</ul>
															<?php
															} else {
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
															<?php
															}
															?>
															
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
							<form id="search" action="<?php echo home_url( '/' ); ?>" method="get" role="form">
								<div class="header-bot-search-outer">
									<div class="header-bot-search-bar">
										<div class="header-bot-search-bar-outer">
											<input type="text" name="s">
											<input type="hidden" name="post_type" value="product" />
											<!-- <?php //$query_types = get_query_var('post_type'); ?> -->
											<!-- <input type="hidden" name="post_type" value="product" /> -->
											<!-- <input type="submit" id="searchsubmit" value="Search" /> -->
											<button type="submit" id="search-submit" value="Search"><i class="fas fa-search"></i></button>
										</div>
									</div>
									<div class="header-bot-search">
										<i class="fas fa-search"></i>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- End Header bot -->
			</div>
			<!-- End Header -->
		</header><!-- #masthead -->
