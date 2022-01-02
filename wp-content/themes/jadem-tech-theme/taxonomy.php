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
        // Get current product category
        $current_term_product = get_queried_object();
        ?>
        <!-- Banner -->
        <div class="banner-taxonomy" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('<?php echo get_template_directory_uri() ?>./img/banner/tinTucBanner.png');">
            <h1><?php echo $current_term_product->name; ?></h1>
        </div>
        <!-- End Banner -->
        <!-- Bread Crumb -->
        <div class="bread-crumb">
            <ul class="bread-crumb-inner container">
                <li>
                    <a href="<?php echo get_home_url(); ?>">HOME</a>
                    <p>/</p>
                </li>
                <?php if($current_term_product->parent !== 0) { ?>
                <li>
                    <a href="<?php echo get_category_link($current_term_product->parent); ?>"><?php echo get_the_category_by_ID($current_term_product->parent); ?></a>
                    <p>/</p>
                </li>
                <?php
                } 
                ?>
                <li>
                    <p> <?php echo $current_term_product->name; ?></p>
                </li>
            </ul>
        </div>
        <!-- End Bread Crumb -->
		<?php
		// Get Child Category
        $child_product_categories = get_term_children( $current_term_product->term_id , $current_term_product->taxonomy );
        ?>
		<!-- Category Product -->
        <div class="category-product">
            <div class="container"> <!-- Container -->
                <div class="category-tab">
                    <div class="tab-name">
                        <div class="tab-content tab-content-active" data-tab="#tab-1"><?php echo $current_term_product->name ?> </div>
                        <?php 
                        foreach($child_product_categories as $child_pc) {

                         ?>
                        <a href="<?php echo get_term_link( get_term($child_pc)->term_id ); ?>" class="tab-content" data-tab="#tab-2"><?php echo get_term($child_pc)->name; ?> </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                
                <?php
                $paged_product = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                $tax_product_args = array(
                    // 'post_type' => 'product',
                    // 'posts_per_page' => 2,
                    'order' => 'ASC',
                    'paged' => $paged_product,
                    'tax_query' => array(
                          array(
                               'taxonomy' => 'product_category',
                               'field' => 'slug',
                               'terms' => $current_term_product->slug,
                          )
                     )
                );
                $tax_product_qry = new WP_Query($tax_product_args);
                if($tax_product_qry->have_posts()) :
                ?>
                    <!-- Row outer -->
                    <div class="row-outer">
                        <!-- row -->
                        <div class="row" id="tab-1">
                            <?php
                            while($tax_product_qry->have_posts()) : $tax_product_qry->the_post();
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
                        </div>
                        <!-- End Row -->
                        <!-- Pagination -->
                        <div class="pagination">
                            <?php
                            $big_product = 999999999; // need an unlikely integer=
                            echo paginate_links( array(
                                'base' => str_replace( $big_product, '%#%', esc_url( get_pagenum_link( $big_product ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $tax_product_qry->max_num_pages
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
            </div> <!-- End Container -->
        </div>
        <!-- End Category Product -->
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
