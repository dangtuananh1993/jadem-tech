<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package jadem-tech
 */

get_header();
?>

	<main id="primary" class="site-main">
		<!-- Bread Crumb -->
        <div class="bread-crumb">
            <ul class="bread-crumb-inner container">
                <li>
                    <a href="<?php echo get_home_url(); ?>">HOME</a>
                    <p>/</p>
                </li>
                <li>
                    <p>SEARCH</p>
                </li>
            </ul>
        </div>
        <!-- End Bread Crumb -->
		<div class="container">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php
						$search_home_url = get_home_url();
						$EL_search = (string) substr( $search_home_url, -3, 3 );
						if( $EL_search == '/en' ) {
							echo "Result for search key: " . "<span>" . $_GET['s'] . "<span>";
						} else {
							echo "Kết quả tìm kiếm cho từ khóa: " . "<span>" . $_GET['s'] . "<span>";
						}
						?>
					</h1>
				</header><!-- .page-header -->

				
				<div class="category-product">
					<!-- Row outer -->
                    <div class="row-outer">
						<div class="row" id="tab-1">
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								// get_template_part( 'template-parts/content', 'search' );
							?>
								<div class="category-product-col">
									<a href="<?php echo get_post_permalink() ?>">
										<div class="cp-item cp-background">
											<div class="cp-img-frame-outer">
												<div class="cp-img-frame">
													<img class="cp-img-frame-inner" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
												</div>
											</div>
											<h3><?php echo get_the_title() ?></h3>
										</div>
									</a>
								</div> 
							<?php
							endwhile;
							?>
						</div><!-- End row -->
						<!-- Pagination -->
						<div class="pagination">
                            <?php
                            $big_product = 999999999; // need an unlikely integer=
                            echo paginate_links( array(
                                'base' => str_replace( $big_product, '%#%', esc_url( get_pagenum_link( $big_product ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                // 'total' => $this->max_num_pages
                            ) );
                            wp_reset_postdata();
                            wp_reset_query();
                            ?>
                        </div>
                        <!-- End Pagination -->
						</div><!-- End row outer -->			
				</div><!-- End category-product -->
					<?php

				// the_posts_navigation();

			else :
			?>
			<?php
			if( !isset( $search_home_url ) ){
				$search_home_url = get_home_url();
			}
			if( !isset( $EL_search ) ) {
				$EL_search = (string) substr( $search_home_url, -3, 3 );
			}
			if( $EL_search == '/en' ) {
			?>
			<p class="result-not-found">
				<?php  echo "No results found for keywords: " . "<span>" . $_GET['s'] . "</span>" .". Please try another request or return to our homepage to see our latest information." . "<br>" . " Thanks you! " ; ?>
			</p>
			<?php
			} else {
			?>
			<p class="result-not-found">
				<?php  echo "Không tìm thấy kết quả theo từ khóa: " . "<span>" . $_GET['s'] . "</span>" .". Vui lòng thử với yêu cầu khác hoặc trở lại trang chủ để xem các thông tin mới nhất của chúng tôi." . "<br>" . " Xin cảm ơn! " ; ?>
			</p>
			<?php
			}
			?>
			<?php
				// get_template_part( 'template-parts/content', 'none' );
				

			endif;
			?>
		</div><!-- End container -->
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
