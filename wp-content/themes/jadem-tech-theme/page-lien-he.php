<?php
/**
 *Show the Home Page
 *
 * @package jadem-tech
 */

get_header();
?>

	<main id="primary" class="site-main">

		<!-- Main Content-->
        <div class="main-content">

        <?php
        if( have_rows('page_builder') ):

        // Loop through rows.
        while ( have_rows('page_builder') ) : the_row();

            // Case: Slider Top Module.
            if( get_row_layout() == 'top_slider_module' ):
                get_template_part('template-parts/flexible-content/home/top-slider-module');
            
            // Case: Product Category Grid
            elseif( get_row_layout() == 'category_grid_module' ): 
                get_template_part('template-parts/flexible-content/home/category-grid-module');

            // Case: About Us
            elseif( get_row_layout() == 'home_about_us_module' ): 
                get_template_part('template-parts/flexible-content/home/home-about-us-module');

            // Case: News
            elseif( get_row_layout() == 'home_news_module' ): 
                get_template_part('template-parts/flexible-content/home/home-news-module');
            
            // Case: Partner
            elseif( get_row_layout() == 'home_partner_module' ): 
                get_template_part('template-parts/flexible-content/home/partner-module');
                
            // Case: Banner
            elseif( get_row_layout() == 'banner_module' ): 
                get_template_part('template-parts/flexible-content/contact/banner-module');

            
            // Case: Bread Crumb
            elseif( get_row_layout() == 'bread_crumb_module' ): 
                get_template_part('template-parts/flexible-content/contact/bread-crumb-module');

            // Case: sale card
            elseif( get_row_layout() == 'sale_card_module' ): 
                get_template_part('template-parts/flexible-content/contact/sale-card-module');
                
            // Case: Company address
            elseif( get_row_layout() == 'company_address_module' ): 
                get_template_part('template-parts/flexible-content/contact/company-address');

            endif;

        // End loop.
        endwhile;

        // No value.
        else :
        // Do something...
        endif;
        ?>

        </div>
        <!-- End Main Content -->	

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
