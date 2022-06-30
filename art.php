<?php
/**
* Template Name: Art
*
* @package grxcelyn-p2022
*
*/
?>
<div class="" id="topBtn"> hello world</div>
<?php get_header(); ?>

<div class="title-spot">
<h1 data-text= "Feautred Work">
Feautred Work
</h1>
</div>

        <div class="gallery-preview">
                <div ><img class="border radial-repeating"src="http://grxcelyn2022.local/wp-content/uploads/2022/06/IMG_0288-scaled.jpg"/></div>
                <div class=" vertical"><img class="border radial-repeating" src="http://grxcelyn2022.local/wp-content/uploads/2022/06/IMG_2829.jpg"/></div>
                <div class="horizontal"><img class="border radial-repeating" src="http://grxcelyn2022.local/wp-content/uploads/2022/06/634023937.585602-scaled.jpg"/></div>
                <div><img class="border radial-repeating" src="http://grxcelyn2022.local/wp-content/uploads/2022/06/634024181.435563-scaled.jpg"/></div>
                <div><img class="border radial-repeating" src="http://grxcelyn2022.local/wp-content/uploads/2022/06/IMG_0068-2-scaled.jpg"/></div>
                <div><img class="border radial-repeating" src="http://grxcelyn2022.local/wp-content/uploads/2022/06/633768651.546887-2-scaled.jpg"/></div>
                <div><img class="border radial-repeating" src="http://grxcelyn2022.local/wp-content/uploads/2022/06/633768586.188566-2-scaled.jpg"/></div>
        </div>
        
        <div class="artwork-grid">

            <div class="inquiry-ex">
                <h2>Grxcelyn Arts</h2>
                <hr>
                <h3>All potential Murals and Showcases must first submit an inquiry form.  All finished products (canvas/prints) are available on Etsy at Grxcelyn Arts.</h3>
                <button class="fancy">
                    <a href="<?php echo get_permalink(get_page_by_path('contact'))?>">Inquire now</a>
                </button>
                <button class="fancy">
                    <a href="https://www.etsy.com/shop/GracelynArts?ref=profile_header">Buy art now</a>
                </button>     
            </div>

            <div class="shop-prev">
                <a href="https://www.etsy.com/shop/GracelynArts?ref=profile_header" target="_blank">
                <img src="http://grxcelyn2022.local/wp-content/uploads/2022/06/Screen-Shot-2022-06-27-at-2.53.28-PM.png" alt="">
                </a>
            </div>

  
        </div>
<?php get_template_part('template-parts/top-btn')?> 

<?php get_footer(); ?>