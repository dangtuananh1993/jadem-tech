<!-- Banner -->
<div class="banner">

    <?php $top_slider = get_sub_field('top_slider'); 
    if( !empty( $top_slider ) ) {
        foreach( $top_slider as $item ) {
            $slider_image_url = wp_get_attachment_url( $item['top_slider_image'], 'thumbnail' ); 
        ?>    
            <!-- Slider 1 -->
            <div class="banner-inner" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('<?php echo $slider_image_url;?>');">
                <!-- <img src="img/slider-1.jpg" alt=""> -->
                <div class="banner-content container">
                    <div class="banner-content-inner">
                        <div class="banner-title"><?php echo $item['top_slider_title']; ?></div>
                        <div class="banner-description"><?php echo $item['top_slider_content']; ?></div>
                    </div>
                </div>
            </div>
            <!-- End Slider 1 -->
        <?php }
    }
    ?>



    
    
</div>
<!-- End Banner -->