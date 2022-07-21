<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package grxcelyn-p2022
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">

			<div class="page-content">
				<div class="zuko">
					<img class="zuko-img" src="http://grxcelyn2022.local/wp-content/uploads/2022/07/404-zuko.gif" alt="">
				</div>
				<br>
				<div class="info-404">
					<p class="p-404"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe reload or try again?', 'grxcelyn-p2022' ); ?></p>
					<p class="p-404"><?php esc_html_e( 'contact grxcelyn development below if error persists.', 'grxcelyn-p2022' ); ?></p>
					<?php echo apply_shortcodes( '[contact-form-7 id="228" title="404 Error"]' ); ?>

				</div>
					
				
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
