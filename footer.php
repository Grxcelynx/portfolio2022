<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grxcelyn-p2022
 */

?>

	<footer id="colophon" class="site-footer">
		
			<div class="container">
				<div class="footer-menu1">
					<?php 
						wp_nav_menu(array(
							'menu' => 'Nav Menu',
							'theme_location' => 'footer-side1',
							'menu_class' => 'footer-side1',
							'menu_id' => 'footer-id'
						))
					?>
				</div>

				<div class="footer-menu2">
					<?php 
						wp_nav_menu(array(
							'menu' => 'Nav Menu',
							'theme_location' => 'footer-side2',
							'menu_class' => 'footer-side2',
							'menu_id' => 'footer-id'
						))
					?>
				</div>
			</div>
	

		
			<div class="footerBox">
				<p>&copy; Grxcelyn Development</p>
			</div>
			<div class="footerBox">
				<div class="socialMedia">
					<a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa-brands fa-instagram fa-2x"></i></a>
					<a href="https://twitter.com/i/flow/login" target="_blank"><i class="fa-brands fa-twitter-square fa-2x"></i></a>
					<a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-square fa-2x"></i></a>
				</div>
			</div>
		
	</footer><!-- #colophon -->
</body>
</html>

<?php wp_footer(); ?>
