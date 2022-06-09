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
		
					<div class="footer-menu2">
						<?php 
							     wp_nav_menu(array(
									'menu' => 'Nav Menu',
									'theme_location' => 'footer-menu2',
									'menu_class' => 'footer-menu',
									'menu_id' => 'footer-id'
								))
						?>
					</div>

					<div class="footer-menu3">
						<?php 
						     wp_nav_menu(array(
								'menu' => 'Nav Menu',
								'theme_location' => 'footer-menu3',
								'menu_class' => 'footer-menu',
								'menu_id' => 'footer-id'
							))
						?>
					</div>
		
					<div class="footerBox">
						<p>&copy; Grxcelyn Development</p>

						<div class="socialMedia">
							<a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa-brands fa-instagram fa-2x"></i></a>
							<a href="https://twitter.com/i/flow/login" target="_blank"><i class="fa-brands fa-twitter-square fa-2x"></i></a>
							<a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-square fa-2x"></i></a>
						</div>
					</div>
			</div>
  
		
	</footer><!-- #colophon -->
</body>
</html>

<?php wp_footer(); ?>
