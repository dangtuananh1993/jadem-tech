<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package jadem-tech
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="page-404-not-found">
			<div class="page-404-number">
				<P>404</P>
			</div>
			<div class="not-found-text">
				<P>PAGE NOT FOUND</P>
			</div>
			<?php  
			if( !isset( $error_home_url ) ) {
				$error_home_url = get_home_url();
			}
			if( !isset( $EL_error ) ) {
				$EL_error = ( string ) ( substr( $error_home_url, -3, 3 ) );
			}
			if( $EL_error == "/en" ){
			?>
				<a href="<?php echo get_home_url() ?>">GO BACK HOME</a>
			<?php
			} else {
			?>
				<a href="<?php echo get_home_url() ?>">QUAY LẠI TRANG CHỦ</a>
			<?php
			}
			?>
			
			
		</div>

	</main><!-- #main -->

<?php
get_footer();
