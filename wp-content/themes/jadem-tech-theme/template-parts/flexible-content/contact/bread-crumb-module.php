<!-- Bread Crumb -->
<div class="bread-crumb">
	<?php
    if ( !isset($page_name_b) ) {
        // If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object
        $post = $wp_query->get_queried_object();
        $page_name_b = $post->post_title;
    }
    ?>	
	<ul class="bread-crumb-inner container">
		<li>
			<a href="<?php echo get_home_url(); ?>">HOME</a>
			<p>/</p>
		</li>
		<li>
			<p ><?php echo $page_name_b ?></p>
		</li>
	</ul>
</div>
	<!-- End Bread Crumb -->