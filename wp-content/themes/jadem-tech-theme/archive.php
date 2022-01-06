<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jadem-tech
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php 
		// Get current category
		$current_term = get_queried_object();
		?>
		<div class="banner-news" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('<?php echo get_template_directory_uri() ?>./img/banner/tinTucBanner.png');">
		<p><?php echo $current_term->name; ?></p>
		</div>
		<!-- Bread Crumb -->
		<div class="bread-crumb">
			<ul class="bread-crumb-inner container">
				<li>
					<a href="<?php echo get_home_url(); ?>">HOME</a>
					<p>/</p>
				</li>
				<?php if($current_term->parent != 0) { ?>
				<li>
					<a href="<?php echo get_category_link($current_term->parent); ?>"><?php echo get_the_category_by_ID($current_term->parent); ?></a>
					<p>/</p>
				</li>
				<?php
				} 
				?>
				<li>
					<P> <?php echo $current_term->name; ?></P>
				</li>
			</ul>
		</div>
        <!-- End Bread Crumb -->
		<?php
		// Get Child Category
		$child_categories=get_categories(array( 'parent' => $current_term->cat_ID )); 
		?>
		<!-- Category news -->
        <div class="category-news">
            <div class="container">
                <div class="category-tab">
                    <div class="tab-name">
                        <div class="tab-content tab-content-active" data-tab="#<?php echo $current_term->slug; ?>"><?php echo $current_term->name; ?> </div>
                        <?php
						foreach($child_categories as $cat) {?>
						<a  href="<?php echo get_category_link($cat->cat_ID); ?>" class="tab-content" data-tab="#<?php echo $cat->slug; ?>"><?php echo $cat->name; ?> </a>
						<?php
						} 
						?>
                    </div>
                </div>
				<?php
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
				$args = array (
					// 'posts_per_page' => 2,
					'category_name' => $current_term->slug,
					'paged' => $paged,
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) :
				?>
				<!-- Row outer -->
					<div class="row-outer active" id="<?php echo $current_term->slug; ?>">	
						<!-- Row -->	
						<div class="row news" > 
							<?php
							while ( $the_query->have_posts() ) : $the_query->the_post();
							?>
								<div class="news-col">
									<a href="<?php echo get_post_permalink() ?>">
										<div class="news-col-1">
											<div class="img-frame-outer">
												<div class="img-frame">
													<img class="img-frame-inner" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
												</div>
											</div>
											<div class="news-content">
												<h3><?php echo get_the_title() ?></h3>
												<p><?php echo get_the_excerpt() ?></p>
											</div>
										</div>
									</a>
								</div>
							<?php
							endwhile;
							?>
						</div>
						<!-- End Row -->
						<!-- Pagination -->
						<div class="pagination">
							<?php
							$big = 999999999; // need an unlikely integer=
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'current' => max( 1, get_query_var('paged') ),
								'total' => $the_query->max_num_pages
							) );
							wp_reset_postdata();
							wp_reset_query();
							?>
						</div>
						<!-- End Pagination -->	
					</div>
					<!-- End row outer -->
				<?php
				endif;
				?>
            </div>
        </div>
        <!-- End Category news -->

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
