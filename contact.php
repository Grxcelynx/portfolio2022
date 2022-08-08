<?php
/**
* Template Name: Contact
*
* @package grxcelyn-p2022
*
*/
?>
<div class="" id="topBtn"></div>

<?php get_header(); ?>

<section class="main-contact">
        <div class="banner-text">
        <h1>C<span class="red-o">o</span>ntact<span class="contact-dot">.</span></h1>
         <?php echo apply_shortcodes( '[contact-form-7 id="71" title="General"]' ); ?>
        </div>
</section>



<div class="reminder">
    <h3>Please allow 3-5 business days for any and all follow up responses upon initial inquiry</h3>
</div>

<?php get_template_part('template-parts/calendly')?> 


<?php get_template_part('template-parts/top-btn')?> 

<?php get_footer(); ?>