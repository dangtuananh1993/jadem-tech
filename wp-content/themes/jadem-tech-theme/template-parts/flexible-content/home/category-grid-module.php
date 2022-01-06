<!-- Category -->
<div class="all-category">
    <div class="container">
        <h2>SẢN PHẨM</h2>
        <!-- row 1 -->
        <div class="row row-1">

        <?php
            $category_grid_module = get_sub_field('category_grid_module');
            if( !empty( $category_grid_module ) ) {
                foreach( $category_grid_module as $item ) {
                $category_name = get_term($item['product_category_info']); //Example term ID
                $category_image_url = wp_get_attachment_url( $item['product_category_image'], 'thumbnail' );
                $term_link = get_term_link( $item['product_category_info'], "product_category");

                ?>
                    <!-- category 1 -->
                    <div class="category-col">
                        <a href="<?php echo $term_link; ?>">
                            <div class="category-1 category-bg">
                                <div class="img-frame-outer">
                                    <div class="img-frame">
                                        <img class="img-frame-inner" src="<?php echo $category_image_url ?>" alt="">
                                    </div>
                                </div>
                                <h3><?php echo $category_name->name; ?></h3>
                            </div>
                        </a>
                    </div>
                    <!-- End category 1 -->
                <?php
                }
            }    
        ?>

  
        </div>
        <!-- End row 1 -->
        
    </div>
</div>
<!-- End Category -->