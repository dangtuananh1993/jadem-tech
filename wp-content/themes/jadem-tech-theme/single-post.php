<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jadem-tech
 */

get_header();
?>

	<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) : the_post();
	if( !isset( $home_single_url ) ) {
		$home_single_url = get_home_url();
	}
	if( !isset( $EL_single ) ) {
		$EL_single = (string) substr( $home_single_url, -3, 3 );
	}
	?>
		<!-- Banner -->
		<div class="banner-news" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('<?php echo get_template_directory_uri() ?>./img/banner/tinTucBanner.png');">
			<?php
			if( $EL_single == "/en" ) {
			?> 
				<p>NEWS - EVENTS</p>
			<?php
			} else {
			?>  
				<p>TIN TỨC - SỰ KIỆN</p>
			<?php  
			}
			?>
			
		</div>
		<!-- End Banner -->
		<!-- Bread Crumb -->
		<div class="bread-crumb">
			<?php $categories = get_the_category(); ?>
				<ul class="bread-crumb-inner container">
					<li>
						<a href="<?php echo get_home_url(); ?>">HOME</a>
						<p>/</p>
					</li>
					<?php foreach($categories as $cat) { ?>
					<li>
						<a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>
					</li>
					<?php 
					} 
					?>
					<li>
						<p>/</p>
						<P><?php echo get_the_title() ?></P>
					</li>
				</ul>
		</div>
		<!-- End Bread Crumb -->
		<!-- Post content -->
		<div class="post-content-outer">
			<!-- Container -->
			<div class="container">
				
					<!-- Row -->
					<div class="row">
						<!-- Post content col -->
						<div class="post-content post-content-col">
							<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
							<h1 class="single-post-title"><?php echo get_the_title() ?></h1>
							<?php echo get_the_content(); ?>
						</div>
						<!-- End post content col -->
						<!-- related post -->
						<div class="related-post related-post-col">
							<?php
							if( $EL_single == "/en" ) {
							?>   
							<p class="related-title"><?php echo esc_html__( 'RELATED POSTS', 'jadem-tech' ) ?></p>
							<?php
							} else {
							?>
							<p class="related-title"><?php echo esc_html__( 'BÀI VIẾT LIÊN QUAN', 'jadem-tech' ) ?></p>
							<?php  
							}
							?>
							
							<?php
							$categories = wp_get_post_categories( get_the_ID() );
							$cat_args = array(
								'category__in'   => $categories,
								'posts_per_page' => 8,
								'orderby'        => 'date',
								'post__not_in'   => array( get_the_ID() )
								);
							$cat_query = new WP_Query( $cat_args );
							while ( $cat_query->have_posts() ) : $cat_query->the_post();
							?>
								<div class="related-post-content">
									<div class="img-frame-outer">
										<a class="img-frame" href="<?php echo get_the_permalink()?>">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
										</a>
									</div>
									<div class="related-post-content-inner">
										<h2 class="related-post-title">
											<a href="<?php echo get_the_permalink()?>"><?php echo get_the_title() ?></a>
										</h2>
									</div>
								</div>
							<?php
							endwhile;
							// reset $post after custom loop ends (if you need the main loop after this point)
							wp_reset_postdata();
							?>
						</div>
						<!-- End related post -->
					</div>
					<!-- End Row -->
				
			</div>
			<!-- End container -->
		</div>
		<!-- End Post content -->
	<?php
	endwhile; // End of the loop.
	?>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
