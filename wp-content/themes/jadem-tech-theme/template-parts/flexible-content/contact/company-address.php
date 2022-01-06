<!-- Address -->
<div class="address">
    <div class="container">
        <div class="row">
            <div class="address-col">
                <div class="address-outer">
                    <div class="address-inner">
                        <div class="address-title">TRỤ SỞ CHÍNH HÀ NỘI</div>
                        <P>LÔ TT3-9,KHU ĐẤT KẸT THÔN YÊN NỘI, PHƯỜNG LIÊN MẠC , QUẬN BẮC TỪ LIÊM , THÀNH PHỐ HÀ NỘI ( GẦN NHÀ VĂN HÓA THÔN YÊN NỘI ).</P>
                    </div>
                    <a href="https://www.google.com/maps?ll=21.086154,105.753636&z=16&t=m&hl=vi&gl=US&mapclient=embed&cid=13822509147251951438"><i class="fas fa-map-marker-alt"></i> Xem Google Map</a>
                </div>
                <div class="address-outer">
                    <div class="address-inner">
                        <div class="address-title">VĂN PHÒNG HỒ CHÍ MINH</div>
                        <P>163/50 AN DƯƠNG VƯƠNG, P. AN LẠC, Q. BÌNH TÂN. TP. HỒ CHÍ MINH</P>
                    </div>
                    <a href="https://www.google.com/maps/place/163,+50+An+D.+V%C6%B0%C6%A1ng,+An+L%E1%BA%A1c,+Qu%E1%BA%ADn+8,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7176565,106.6184916,19z/data=!4m5!3m4!1s0x31752de5372a9ad1:0x4a8729d330dbd9c8!8m2!3d10.7177562!4d106.6191616?hl=vi"><i class="fas fa-map-marker-alt"></i> Xem Google Map</a>
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