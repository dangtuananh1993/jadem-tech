<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jadem-tech
 */

?>
		<footer id="colophon" class="site-footer">
			<div class="site-info">
				<!-- Footer -->
				<div class="footer">
				<!-- Footer top -->
				<div class="footer-top">
					<div class="container">
						<div class="footer-top-logo-name">
							<div class="logo">
								<img class="img-logo" src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="">
							</div>
							<div class="company-name">
								<a href=""><p>Jade M-Tech Co., Ltd</p></a>
							</div>
						</div>
						<div class="footer-top-inner">
							<div class="row">
								<div class="col-1 col">
									<p class="title">VỀ JADEM-TECH</p>
									<ul class="info">
										<li class="info-item">
											<i class="fas fa-envelope"></i>
											<a href="mailto:service@jadem-tech.com">service@jadem-tech.com</a>
										</li>
										<li class="info-item">
											<i class="fas fa-phone"></i>
											<a href="tell:024.22.600.605">024.22.600.605</a>
										</li>
										<li class="info-item">
											<a href="https://www.google.com/maps?ll=21.086154,105.753636&z=16&t=m&hl=vi&gl=US&mapclient=embed&cid=13822509147251951438">
												<i class="fas fa-map-marker-alt"></i>
												<p>Trụ sở Hà Nội: LÔ TT3-9,KHU ĐẤT KẸT THÔN YÊN NỘI, PHƯỜNG LIÊN MẠC , QUẬN BẮC TỪ LIÊM , THÀNH PHỐ HÀ NỘI ( GẦN NHÀ VĂN HÓA THÔN YÊN NỘI ).</p>
											</a>
										</li>
										<li class="info-item">
											<a href="https://www.google.com/maps/place/163,+50+An+D.+V%C6%B0%C6%A1ng,+An+L%E1%BA%A1c,+Qu%E1%BA%ADn+8,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7176565,106.6184916,19z/data=!4m5!3m4!1s0x31752de5372a9ad1:0x4a8729d330dbd9c8!8m2!3d10.7177562!4d106.6191616?hl=vi">
												<i class="fas fa-map-marker-alt"></i>
												<p>VP HCM: 163/50 AN DƯƠNG VƯƠNG, P. AN LẠC, Q. BÌNH TÂN. TP. HỒ CHÍ MINH</p>
											</a>
										</li>
										<li class="info-item-x">
											<a href="#"><i class="fab fa-facebook-square"></i></i></a>
											<a href="#"><i class="fab fa-youtube"></i></a>
											<a href="#"><i class="fab fa-linkedin-in"></i></a>
										</li>
									</ul>
								</div>
								<div class="col-2 col">
									<div class="title">CATEGORY</div>
									<ul class="main-menu">
										<?php  
										if( !isset( $product_category_bot ) ) {
											$product_category_bot = get_field('menu', 'options')['category_grid_module'];
										}
										if( !empty( $product_category_bot) && is_array( $product_category_bot ) ) {
											foreach( $product_category_bot as $pc ) {
											?>
											<li class="menu-item"><a href="<?php echo get_term_link( $pc['product_category_info'] ); ?>"> <?php echo get_term( $pc['product_category_info'] )->name; ?> </a></li>
										<?php
											} //End foreach
										} //End if
										?>
									</ul>
								</div>
								<div class="col-3">
									<div class="gooogle-map">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.6619781374334!2d105.75144761533276!3d21.08615869119126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134552d2be571d3%3A0xbfd36ad5aa8a474e!2sC%C3%94NG%20TY%20TNHH%20JADE%20M%20-%20TECH!5e0!3m2!1svi!2s!4v1641262656729!5m2!1svi!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Footer top -->
				<!-- Footer bot -->
				<div class="footer-bot">
					<div class="container">
						<p>Coppyright @ 2017 <span>Jadem-Tech</span>. All Rights Reserved. Powered by <span><a href="#">Anhdt</a></span>.</p>
					</div>
				</div>
				<!-- End footer bot -->
			</div>
			<!-- End Footer -->
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
    </div>
    <!-- End Wrapper -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
