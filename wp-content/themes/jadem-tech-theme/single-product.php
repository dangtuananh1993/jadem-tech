<?php
/**
 *Show the Home Page
 *
 * @package jadem-tech
 */

get_header();
?>

	<main id="primary" class="site-main">
        <!-- Main Content -->
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
        <!-- End Banner -->
        <div class="container">
        </div>

        <!-- Banner -->
        <?php 
        if( !isset( $terms_category ) ) {
            $terms_category = wp_get_post_terms( get_the_ID(), 'product_category' ); 
        }
        ?>
        <div class="banner-single-p" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('<?php echo get_template_directory_uri() ?>./img/banner/tinTucBanner.png');">
            <?php 
            if( !empty( $terms_category ) && is_array( $terms_category ) ){
            ?>
            <p><?php foreach($terms_category as $t){echo $t->name; echo "  "; echo "  ";} ?></p>
            <?php 
            }
            ?>
        </div>
        <!-- End Banner -->
        <!-- Bread Crumb -->
        <div class="bread-crumb">
            <ul class="bread-crumb-inner container">
                <li>
                    <a href="<?php echo get_home_url() ?>">HOME</a>
                    <p>/</p>
                </li>
                <?php  
                if( !empty( $terms_category ) && is_array( $terms_category ) ){
                ?>
                <li>
                    <?php 
                    foreach( $terms_category as $t) {
                    ?>
                    <a href="<?php echo get_term_link($t->term_id); ?>"><?php echo $t->name; ?></a>
                    <?php
                    }
                    ?>
                    <p>/</p>
                </li>
                <?php
                }
                ?>
                <li>
                <P> <?php echo get_the_title() ?></P>
                </li>
            </ul>
        </div>
        <!-- End Bread Crumb -->
        <!-- Product detail -->
        <div class="single-product-inner">
            <div class="container">
                <div class="row">
                    <div class="single-product-inner-col single-product-inner-col-1 ">
                        <!-- Slider -->
                        <div class="single-product-slider">
                            <div class="single-product-slider-img">
                                <div class="single-product-slider-img-inner">
                                    <img class="sps-img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                                </div>
                            </div>
                            <?php 
                            if(!isset( $product_gallery )) {
                                $product_gallery = get_field('product_gallery') ;
                            }
                            if( !empty( $product_gallery ) && is_array( $product_gallery ) ){
                            foreach($product_gallery as $pg) {
                            ?>
                            <div class="single-product-slider-img">
                                <div class="single-product-slider-img-inner">
                                    <img class="sps-img" src="<?php echo $pg ?>" alt="">
                                </div>
                            </div>
                            <?php
                            }
                            }
                            ?>
                        </div>
                        <div class="single-product-slider-bot">
                            <div class="single-product-slider-img-bot">
                                <div class="single-product-slider-img-bot-inner">
                                    <img class="sps-img-bot" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                                </div>
                            </div>
                            <?php 
                            if(!isset($product_gallery)) {
                                $product_gallery = get_field('product_gallery') ;
                            }
                            if( !empty( $product_gallery ) && is_array( $product_gallery )){
                            foreach($product_gallery as $pg) {
                            ?>
                            <div class="single-product-slider-img-bot">
                                <div class="single-product-slider-img-bot-inner">
                                    <img class="sps-img-bot" src="<?php echo $pg ?>" alt="">
                                </div>
                            </div>
                            <?php
                            }
                            }
                            ?>
                            
                        </div>
                        <!-- End slider -->
                    </div>
                    <div class="single-product-col single-product-inner-col-2">
                        <div class="single-product-content"> <!-- single product-content -->
                            <h1><?php echo get_the_title() ?></h1>
                            <?php
                            if(!isset($terms)) {
                                $terms = wp_get_post_terms( get_the_ID(), 'product_brand' );
                            }
                            if( $EL_single == "/en" ) {
                            ?>  
                                <h2><span>Product Code:</span> <?php echo get_field('product_code'); ?></h2>
                                <h3><span>Brand:</span> <?php  if( !empty($terms ) && is_array( $terms ) ){foreach( $terms as $t) { echo $t->name . ' ';};}; ?></h3> 
                                <h3><span>Price:</span> Contact</h3>
                            <?php
                            } else {
                            ?> 
                                <h2><span>Mã Sản Phẩm:</span> <?php echo get_field('product_code'); ?></h2>
                                <h3><span>Thương Hiệu:</span> <?php  if( !empty($terms ) && is_array( $terms ) ){foreach( $terms as $t) { echo $t->name . ' ';};}; ?></h3>
                                <h3><span>Giá:</span> Liên hệ</h3>
                            <?php  
                            }
                            ?>
                            
                            <?php
                            if(!isset($args)) {
                                $args = array(
                                    'role'    => 'sale',
                                    'orderby' => 'user_nicename',
                                    'order'   => 'ASC'
                                );
                            }
                            if(!isset($users)){
                                $users = get_users( $args );
                            }
                            if(!empty($users) && is_array($users)){
                                foreach ( $users as $user ) {
                                    $sale_img = get_field('product_sale_person_image', 'user_' . $user->ID);
                                    $sale_phone = get_field('phone_number', 'user_' . $user->ID);
                                    ?>
                                    <div class="contact-person row "> <!-- row -->
                                        <div class="cp-img">
                                            <div class="cp-img-inner">
                                                <img src="<?php echo $sale_img ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="cp-info">
                                            <div class="cp-name">
                                                <p><span>MR: </span><?php echo $user->display_name ?></p>
                                            </div>
                                            <div class="cp-phone">
                                                <i class="fas fa-phone"></i>
                                                <a href="tell:<?php echo $sale_phone ?>"><?php echo $sale_phone ?></a>
                                            </div>
                                            <div class="cp-email">
                                                <i class="fas fa-envelope"></i>
                                                <a href="mailto:<?php echo $user->user_email ?>"><?php echo $user->user_email ?></a>
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                <?php    
                                } //End foreach users
                            } //End If users
                            ?>
                            
                        </div> <!-- End single product-content -->
                    </div>
                </div>
            </div>
            <div class="product-description container">
                <div class="product-description-inner">
                    <?php
                    if( $EL_single == "/en" ) {
                    ?>
                        <h2>DESCRIPTION</h2> 
                    <?php
                    } else {
                    ?>   
                        <h2>MÔ TẢ SẢN PHẨM</h2>
                    <?php  
                    }
                    ?>
                    
                    <div class="product-description-img">
                        <?php echo get_the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Detail -->
        <!-- Relevant Product -->
        <div class="relevant-product">
            <div class="container"> <!-- Container -->
            <?php
                if( $EL_single == "/en" ) {
                ?>  
                    <h2>RELATED PRODUCTS</h2>  
                <?php
                } else {
                ?>
                    <h2>SẢN PHẨM LIÊN QUAN</h2>
                <?php  
                }
                ?>

                
                <div class="relevant-product-slider"> <!-- relevant-product-slider -->
                <?php
                    if(!isset($categories)){
                        $categories = get_the_terms( get_the_ID(), 'product_category' );
                        if( !isset( $category_ids ) ) {
                            $category_ids = [];
                        }
                        if( !empty( $categories ) && is_array( $categories ) ) {
                            foreach ( $categories as $category ) {
                                $category_ids[] = $category->term_id;
                            }
                        }
                    }
                    if(!isset($related_args)) {
                        $related_args = array(
                            'post_type'      => array(
                                'product',
                            ),
                            'post_status'    => 'publish',
                            'posts_per_page' => 6, // Get all posts
                            'post__not_in'   => array( get_the_ID() ), // Hide current post in list of related content
                            'tax_query'      => array(
                                // 'relation' => 'AND', // Make sure to mach both category and term
                                array(
                                    'taxonomy' => 'product_category',
                                    'field'    => 'term_id',
                                    'terms'    => $category_ids,
                                ),
                            ),
                        );
                    }
                    if(!isset($related_all)) {
                        $related_all = new WP_Query( $related_args );
                    }
                    
                    if($related_all->have_posts() && !isset($related_all_posts)){
                        $related_all_posts = $related_all->posts;
                    }
                    if( !empty( $related_all_posts ) && is_array( $related_all_posts ) ) {
                        foreach($related_all_posts as $rat) {
                        ?>    
                            <a href="<?php echo get_permalink( $rat->ID ); ?>">
                                <div class="rps-outer">
                                    <div class="relevant-product-slider-img">
                                        <div class="relevant-product-slider-img-inner">
                                            <?php
                                             $rat_image = wp_get_attachment_image_src(  get_post_thumbnail_id($rat->ID), 'single-post-thumbnail' );  
                                            ?>
                                            <img class="rps-img" src="<?php echo $rat_image[0]; ?>" alt="">
                                        </div>
                                        <h3><?php echo $rat->post_title; ?></h3>
                                    </div>
                                </div>
                            </a>
                        <?php
                        }
                    }
                ?>
                
                </div> <!-- relevant-product-slider -->
            </div> <!-- End container -->
        </div>  
        <!-- End Relevant product -->
        <?php
        endwhile; // End of the loop.
        ?>
        <!-- End Main Content -->
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
