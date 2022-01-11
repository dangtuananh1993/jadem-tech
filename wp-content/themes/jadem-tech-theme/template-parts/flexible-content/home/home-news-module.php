<!-- News -->
<div class="news">
    <div class="container">
        <?php
        if(!isset( $home_news_module_title ) ) {
            $home_news_module_title = get_sub_field( 'home_news_module_title' );
        }
        ?>
        <h2><?php esc_html_e( $home_news_module_title ) ?></h2>
        <div class="row">
        <?php 
        if( !isset( $home_news_module ) ) {
            $home_news_module = get_sub_field('home_news_module');
        }
        if( !empty( $home_news_module ) && is_array( $home_news_module ) ) {
            foreach( $home_news_module as $item ) { 
                if (has_post_thumbnail( $item ) ){
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $item ), 'single-post-thumbnail' )[0];
                ?>
                <!-- News 1 -->
                <div class="news-col">
                    <a href="<?php echo esc_url( get_permalink( $item ) ); ?>">
                        <div class="news-col-1">
                            <div class="img-frame-outer">
                                <div class="img-frame">
                                    <img class="img-frame-inner" src="<?php echo $image?>" alt="">
                                </div>
                            </div>
                            <div class="news-content">
                                <h3><?php esc_html_e( get_the_title($item) );?></h3>
                                <p><?php esc_html_e( get_the_excerpt( $item ) ); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End News1 -->
                <?php 
                }
            }
        }
        ?>  
        </div>
    </div>
</div>

<!-- End News -->