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
    <div class="banner-img-contact">
        <div class="banner-text">
            <h1>Contact Me</h1>
            <h4><strong>General Questions <i>only</i></strong></h4>
            <?php echo apply_shortcodes( '[contact-form-7 id="71" title="General"]' ); ?>

        </div>
    </div>
</section>



<div class="buttons">
        <div class="formButtonArt" id="artBtn">
            <a href="#AformBtn">Art Inquiry</a>
        </div>
        <div class="formButtonWeb" id="webBtn">
            <a href="#WformBtn">Web Development Inquiry</a>
        </div>
</div>

<section class="grid">
<div class="form-grid">
        <div class="art-form" id="AformBtn">
            <label id="art-title" for="">
                <h2>Art Inquiry Form</h2>
            </label>
            <hr>
            <?php echo apply_shortcodes( '[contact-form-7 id="69" title="Contact Form Art"]' ); ?>
        </div>
       
        <section class="test">

        </section>
        
        <div class="web-form" id="WformBtn">
            <label id="web-title" for="">
                <h2>Web Development Inquiry Form</h2>
            </label>
            <hr>
            <?php echo apply_shortcodes( '[contact-form-7 id="70" title="Web Inquiry Form"]' ); ?>
        </div>
</div>
</section>


<div class="reminder">
    <h3>Please allow 3-5 business days for any and all follow up responses upon initial inquiry</h3>
</div>

<?php get_template_part('template-parts/top-btn')?> 

<?php get_footer(); ?>