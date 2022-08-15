<?php
/**
* Template Name: Homepage
*
* @package grxcelyn-p2022
*
*/
?>
<div class="" id="topBtn"></div>

<?php get_header(); ?>
<?php get_template_part('template-parts/banner')?> 

<div class="klays-art">
	<p>Image Designed & Illustrated <span>&copy;</span><a href="https://instagram.com/paracosmparty?igshid=YmMyMTA2M2Y=" target="_blank">Klay Simmons</a></p>
</div>

<div class="previews">
	<div class="preview">
		<img src="<?php the_field('work_preview_1') ?> " alt="<?php the_field('work_preview_alt_1') ?>">
		<button class="see-more">
			<a href="http://grxcelyn2022.local/work">
			<?php the_field('work_prev_more') ?>
			</a>
		</button>
	</div>

	<div class="preview">
	<img src="<?php the_field('art_preview_1') ?> " alt="<?php the_field('art_preview_alt_1') ?>">
		<button class="see-more">
			<a href="http://grxcelyn2022.local/art">
			<?php the_field('art_prev_more') ?>
			</a>
		</button>
	</div>
	
	<div class="preview">
	<img src="<?php the_field('work_preview_2') ?> " alt="<?php the_field('work_preview_alt_2') ?>">
		<button class="see-more">
			<a href="http://grxcelyn2022.local/work">
			<?php the_field('work_prev_more') ?>
			</a>
		</button>
	</div>

</div>
<?php get_template_part('template-parts/top-btn')?> 

<?php get_footer(); ?>