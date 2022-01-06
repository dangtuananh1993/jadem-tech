<div class="sale-card" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)), url('<?php echo get_template_directory_uri()?>./img/slider-2.jpg');">
    <div class="container">
        <div class="row">
        <?php
        if(!isset($args_sale)) {
            $args_sale = array(
                'role'    => 'sale',
                'orderby' => 'user_nicename',
                'order'   => 'ASC'
            );
        }
        if(!isset($users_sale)){
            $users_sale = get_users( $args_sale );
        }
        if(!empty($users_sale) && is_array($users_sale)){
            foreach ( $users_sale as $user ) {
                $sale_img = get_field('product_sale_person_image', 'user_' . $user->ID);
                $sale_phone = get_field('phone_number', 'user_' . $user->ID);
                ?>
                <div class="sale-card-col">
                    <div class="sale-card-col-outer">
                        <div class="img-frame">
                            <img src="<?php echo $sale_img ?>" alt="">
                        </div>
                        <p class="name">MR: <?php echo $user->display_name ?></p>
                        <div class="sale-icon">
                            <div class="sale-icon-inner">
                                <i class="fas fa-phone sale-person"></i></i>
                                <a class="phone" href="tell:<?php echo $sale_phone ?>"><?php echo $sale_phone ?></a>
                            </div>
                            <div class="sale-icon-inner">
                                <i class="fas fa-envelope sale-person"></i></i>
                                <a class="phone" href="mailto:<?php echo $user->user_email ?>"><?php echo $user->user_email ?></a> 
                            </div>   
                        </div>
                    </div>
                </div>
            <?php    
            } //End foreach users_sale
        } //End If users_sale
        ?>
            
        </div>
    </div>
</div>