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
						<div class="socialMedia">
							<a href="https://www.instagram.com/gracelyn.__/" target="_blank"><i class="fa-brands fa-instagram fa-2x"></i></a>
							<a href="https://www.etsy.com/shop/GracelynArts?ref=profile_header" target="_blank"><i class='fa fa-etsy fa-2x'></i></a>
							<a href="https://www.linkedin.com/in/grace-birnam-74a761163/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
							<a href="https://www.youtube.com/channel/UCQ0uVps2WIkXbMINDw7x7iA" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
							<a href="https://github.com/Grxcelynx" target="_blank"><i class="fab fa-github fa-2x"></i></a>
						</div>
						
					</div>
		</div>
		<div class="credits">
			<div class="copyright">
			<p> <span>&copy;</span>Grxcelyn Development</p>
			</div>
			<div class="klays-copyright">
				<p>Hompage Image | Site Logo Designed & Illustrated <span>&copy;</span><a href="https://instagram.com/paracosmparty?igshid=YmMyMTA2M2Y=" target="_blank">Klay Simmons</a></p>
			</div>
		</div>
	
	</footer><!-- #colophon -->
</body>
</html>

<?php wp_footer(); ?>
