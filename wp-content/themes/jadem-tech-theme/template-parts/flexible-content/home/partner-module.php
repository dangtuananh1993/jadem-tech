<!-- Partner -->
<?php
    if( !isset( $home_partner_module_bg ) ) {
        $home_partner_module_bg = get_sub_field('back_ground');
    }
    if( !isset( $home_partner_module_title ) ) {
        $home_partner_module_title = get_sub_field('title');
    }
?>
<div class="partner" style="background-image: linear-gradient(rgba(240, 240, 240, 0.1),rgba(240, 240, 240, 0.1)), url('<?php echo $home_partner_module_bg?>;">
    <h2><?php echo $home_partner_module_title?></h2>
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