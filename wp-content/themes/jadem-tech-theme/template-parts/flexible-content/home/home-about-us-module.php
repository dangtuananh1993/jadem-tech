<!-- About Us -->
<?php
if( !isset( $home_about_us_module ) ) {
    $home_about_us_module = get_sub_field('home_about_us_module');
    $about_us_background_url = wp_get_attachment_url( $home_about_us_module['back_ground_image'], 'thumbnail' );
?>


    <div class="about-us" style="background-image: linear-gradient(rgba(240, 240, 240, 1),rgba(240, 240, 240, 1)), url('<?php echo $about_us_background_url; ?>');">
        <div class="about-us-inner container">
            <div class="row">
                <div class="left-col">
                    <h2>VỀ CHÚNG TÔI</h2>

                    
                        <p><?php echo $home_about_us_module['content']; ?></p>
                    

                    
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
<!-- End About Us -->