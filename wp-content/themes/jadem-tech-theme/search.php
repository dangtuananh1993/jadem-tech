<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package jadem-tech
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					global $wp;
					$current_url = home_url(add_query_arg(array(),$wp->request));
					// echo "<pre>";
					// echo $current_url;
					// echo "<br>";
					// echo substr($current_url, -2, 2);
					// echo "<br>";
					// // echo get_home_url();
					// echo "<br>";
					// echo $_GET['s'];
					// echo "</pre>";
					$lang_sub = substr($current_url, -2, 2);
					if( $lang_sub == 'en' ) {
						echo "EL Result for " . $_GET['s'];
					} else {
						echo "VN Result for " . $_GET['s'];
					}
					echo "<br>";
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
