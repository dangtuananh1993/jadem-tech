<!-- Address -->
<div class="address">
    <div class="container">
        <p class="p-title" ><?php esc_html_e( 'PLEASE LEAVE US YOUR INFORMATION CONTACT'); ?></p>
        <div class="row">
            <div class="address-col">
                <div class="address-outer">
                    <div class="address-inner">
                        <div class="address-title"><?php esc_html_e( 'HA NOI HEAD OFFICE' ) ?></div>
                        <P><?php esc_html_e( 'LOT TT3-9, YEN NOI, LIEN MAC WARD, NORTH TU LIEM DISTRICT, HA NOI CITY (NEAR YEN NOI CULTURE).' ) ?></P>
                    </div>
                    <a href="<?php echo esc_url( 'https://www.google.com/maps?ll=21.086154,105.753636&z=16&t=m&hl=vi&gl=US&mapclient=embed&cid=13822509147251951438' ) ?>"><i class="fas fa-map-marker-alt"></i><?php esc_html_e( ' See Google Map' ) ?></a>
                </div>
                <div class="address-outer">
                    <div class="address-inner">
                        <div class="address-title"><?php esc_html_e( 'HO CHI MINH OFFICE' ); ?></div>
                        <P><?php esc_html_e( '163/50 AN DUONG VUONG, AN LAC WARD, BINH TAN DISTRICT, HO CHI MINH CITY' ); ?></P>
                    </div>
                    <a href="<?php echo esc_url( 'https://www.google.com/maps/place/163,+50+An+D.+V%C6%B0%C6%A1ng,+An+L%E1%BA%A1c,+Qu%E1%BA%ADn+8,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7176565,106.6184916,19z/data=!4m5!3m4!1s0x31752de5372a9ad1:0x4a8729d330dbd9c8!8m2!3d10.7177562!4d106.6191616?hl=vi' ); ?>"><i class="fas fa-map-marker-alt"></i><?php esc_html_e( ' See Google Map' ); ?></a>
                </div>
            </div>
            
            <div class="address-col">
                <?php
                if( !isset($contact_form_x) ) {
                    $contact_form_x = get_sub_field('contact_form');
                }
                echo do_shortcode( $contact_form_x );
                ?>
            </div>
        </div>
    </div>
</div>
<!-- End Address -->