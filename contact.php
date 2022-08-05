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
        <h4><strong>General Questions <i>only</i></strong></h4>
            <?php echo apply_shortcodes( '[contact-form-7 id="71" title="General"]' ); ?>

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

<!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/grxcelyn?hide_gdpr_banner=1&primary_color=8a0808" style="min-width:320px;height:auto;padding:0px;margin:2%;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Calendly inline widget end -->

<section class="grid">
<div class="form-grid" id="linked" name="linkedForms">
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

<?php get_template_part('template-parts/calendly')?> 


<?php get_template_part('template-parts/top-btn')?> 

<?php get_footer(); ?>