<!-- Banner -->
<?php
if( !isset($contact_banner) )  {
    $contact_banner = get_sub_field('banner_module');
    // echo "<pre>";
    // print_r($contact_banner);
    // echo "</pre>";
}
?>
<div class="banner-news" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('<?php echo $contact_banner['banner_image']; ?>;">
    <p>LIÊN HỆ</p>
</div>
<!-- End Banner -->