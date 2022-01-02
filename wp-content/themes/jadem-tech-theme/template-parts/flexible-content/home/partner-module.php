<!-- Partner -->
<div class="partner" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)), url('<?php echo get_template_directory_uri()?>./img/partner-logo/partner-bg-modified.jpg');">
    <h2>ĐỐI TÁC</h2>
    <div class="container">
        <div class="partner-slider">

        <?php
            if( !isset( $home_partner_module ) ) {
                $home_partner_module = get_sub_field('home_partner_module');
                foreach( $home_partner_module as $item ) {
                        $partner_image_url = wp_get_attachment_url( $item['partner_logo'], 'thumbnail' );
                        
                ?>    
                    <div class="partner-slider-inner">
                        <img src="<?php echo $partner_image_url ?>" alt="">
                    </div>
                <?php
                }
            }
            
            
        ?>
            
        </div>
    </div>
</div>
<!-- End Partner -->