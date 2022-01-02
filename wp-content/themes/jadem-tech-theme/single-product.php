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
        ?>
        <!-- Banner -->
        <!-- End Banner -->

        <div class="container">
         <?php
            // echo "<pre>";
            // // print_r( get_post_custom ()['_product_gallery_'][0] );
            // // echo "<br>";
            // // print_r( get_post_custom ()['product_gallery'][0] );
            // // print_r( get_post_custom ());
            // // print_r( get_field('product_gallery'));
            // echo "</pre>";
         ?>
        </div>


        <!-- Bread Crumb -->
        <div class="bread-crumb">
            <div class="bread-crumb-inner container">
                <a href="#">MÁY KHOAN - MÁY TARO</a>
                <P>/ Bàn khoan HDT-340, HDT-25, HDT-32</P>
            </div>
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
                                <img class="sps-img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                            </div>
                            <?php 
                            $product_gallery = get_field('product_gallery') ;
                            if(!empty($product_gallery)){
                            foreach($product_gallery as $pg) {
                            ?>
                            <div class="single-product-slider-img">
                                <img class="sps-img" src="<?php echo $pg ?>" alt="">
                            </div>
                            <?php
                            }
                            }
                            ?>
                        </div>
                        <div class="single-product-slider-bot">
                            <div class="single-product-slider-img-bot">
                                <img class="sps-img-bot" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                            </div>
                            <?php 
                            $product_gallery = get_field('product_gallery') ;
                            if(!empty($product_gallery)){
                            foreach($product_gallery as $pg) {
                            ?>
                            <div class="single-product-slider-img-bot">
                                <img class="sps-img-bot" src="<?php echo $pg ?>" alt="">
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
                            <h2><span>Mã Sản Phẩm:</span> <?php echo get_field('product_code'); ?></h2>
                            <?php
                            $terms = wp_get_post_terms( get_the_ID(), 'product_brand' );
                            ?>
                            <h3><span>Thương Hiệu:</span> <?php  if(!empty($terms)){foreach( $terms as $t) { echo $t->name . ' ';};}; ?></h3>
                            <h3><span>Giá:</span> Liên hệ</h3>
                            <?php
                            // $terms = get_terms( array(
                            //     'taxonomy' => 'product_brand',
                            //     'hide_empty' => false,
                            // ) );
                            // foreach( $terms as $t ) {
                            //     echo 
                            // }
                            echo "<pre>";
                            // echo get_the_ID();
                            //  print_r($terms = wp_get_post_terms( get_the_ID(), 'product_brand' ));
                            echo "</pre>";

                            $args = array(
                                'role'    => 'subscriber',
                                'orderby' => 'user_nicename',
                                'order'   => 'ASC'
                            );
                            $users = get_users( $args );
                            foreach ( $users as $user ) {
                            $author_img = get_field('product_sale_person_image', 'user_' . $user->ID);
                            $author_phone = get_field('phone_number', 'user_' . $user->ID);

                               echo "<pre>";
                            //    print_r($user);
                            //    print_r(get_user_meta($user->data->ID));
                            // //    print_r($user->data->ID);
                            //    echo $author_array_img;
                               echo "</pre>";
                            ?>
                            <div class="contact-person row "> <!-- row -->
                                <div class="cp-img">
                                    <div class="cp-img-inner">
                                        <img src="<?php echo $author_img ?>" alt="">
                                    </div>
                                </div>
                                <div class="cp-info">
                                    <div class="cp-name">
                                        <p><?php echo $user->display_name ?></p>
                                    </div>
                                    <div class="cp-phone">
                                        <i class="fas fa-phone"></i>
                                        <a href="tell:0987654321"><?php echo $author_phone ?></a>
                                    </div>
                                    <div class="cp-email">
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:service@jademtech.com"><?php echo $user->user_email ?></a>
                                    </div>
                                </div>
                            </div> <!-- end row -->
                            <?php    
                            }
                            ?>
                            
                        </div> <!-- End single product-content -->
                    </div>
                </div>
            </div>
            <div class="product-description"><div class="container">
                <div class="product-description-inner">
                    <h2>MÔ TẢ SẢN PHẨM</h2>
                    <div class="product-description-img">
                        <?php echo get_the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Detail -->
        <!-- Relevant Product -->
        <div class="relevant-product">
            <div class="container">
                <h2>SẢN PHẨM LIÊN QUAN</h2>
                <div class="relevant-product-slider">
                    <div class="relevant-product-slider-img">
                        <img class="rps-img" src="./img/product/prd-1.jpg" alt="">
                    </div>
                    <div class="relevant-product-slider-img">
                        <img class="rps-img" src="./img/product/bench-drill.jpg" alt="">
                    </div>
                    <div class="relevant-product-slider-img">
                        <img class="rps-img" src="./img/product/prd-1.jpg" alt="">
                    </div>
                    <div class="relevant-product-slider-img">
                        <img class="rps-img" src="./img/product/bench-drill.jpg" alt="">
                    </div>
                    <div class="relevant-product-slider-img">
                        <img class="rps-img" src="./img/product/bench-drill.jpg" alt="">
                    </div>
                    <div class="relevant-product-slider-img">
                        <img class="rps-img" src="./img/product/bench-drill.jpg" alt="">
                    </div>
                    <div class="relevant-product-slider-img">
                        <img class="rps-img" src="./img/product/prd-1.jpg" alt="">
                    </div>
                </div>
            </div>
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
