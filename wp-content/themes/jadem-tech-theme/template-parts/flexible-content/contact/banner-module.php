<!-- Banner -->
<?php
if( !isset($contact_banner) )  {
    $contact_banner = get_sub_field('banner_module');
}
?>
<div class="banner-news" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)), url('<?php echo $contact_banner['banner_image']; ?>;">
    <?php
    if ( !isset($page_name_a) ) {
        // If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object
        $post = $wp_query->get_queried_object();
        $page_name_a = $post->post_title;
    }
    ?>
    <p><?php echo $page_name_a; ?></p>
</div>
<!-- End Banner -->