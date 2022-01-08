<!-- our customer -->
<div class="our-customer">
    <div class="container">
        <P>KHÁCH HÀNG CỦA CHÚNG TÔI</P>
        <div class="row">
            <?php
            if( !isset( $our_customer_module ) ) {
                $our_customer_module = get_sub_field('our_customer_module');
                if( !empty( $our_customer_module ) && is_array( $our_customer_module ) ) {
                    foreach( $our_customer_module as $item ) {
                    ?>
                    <div class="our-customer-col">
                        <div class="oc-img-frame">
                            <img src="<?php echo $item ?>" alt="" class="oc-img">
                        </div>
                    </div>
                    <?php        
                    }
                }
            }
            ?>
            
            
        </div>
    </div>
</div>
<!-- End our customer -->