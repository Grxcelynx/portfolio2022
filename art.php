<?php
/**
* Template Name: Art
*
* @package grxcelyn-p2022
*
*/
?>
<div class="" id="topBtn"></div>
<?php get_header(); ?>

    <div class="art-title">
        <h1>Ar<span class="red-t">t</span>work<span class="art-dot">.</span></h1>
    </div>

    <div class="inquiry-ex">
                <h2>Gr<span class="redx">x</span>celyn<span class="ydot">.</span> Arts</h2>
                
                <h3><?php the_field('art_info_text') ?></h3>
                <button class="fancy">
                    <a href="http://grxcelyn2022.local/contact">Book Now</a>
                </button>
                <button class="fancy">
                    <a href="https://www.etsy.com/shop/GracelynArts?ref=profile_header" target="_blank">Buy art now</a>
                </button>  
    </div>
        <div class="artwork-grid">
        <div>

        </div>

            <div class="art-main">
            <div class="title-spot">
            <h3 class="info-smaller-screen"><?php the_field('art_info_text') ?></h3>
            <h1 class="artHeader" data-text= "Feautred Work">
            Feautred Work
            </h1>
            </div>
                <div class="gallery-preview">
                        <div class="thumbnail-wrapper image-container">
                            <a href="#img1" aria-label="Click to enlarge image">
                            <img id="close1" class="border radial-repeating"src="<?php the_field('featured_1'); ?>" alt="<?php the_field('art_alt_1') ?>"/>
                            <div class="image-caption">
                                <h1 class="cap-head"><?php the_field('art_piece_header') ?></h1>
                                <h2 class="cap-subhead"><?php the_field('art_piece_sub_1') ?></h2>
                                <h3 class="cap-infohead"><?php the_field('art_piece_info_1') ?></h3>
                            </div>
                        </div>

                        <div class="thumbnail-wrapper image-container">
                            <a href="#img2" aria-label="Click to enlarge image">
                            <img id="close2" class="border radial-repeating" src="<?php the_field('featured_2_vertical'); ?>"  alt="<?php the_field('art_alt_2') ?>"/>
                            <div class="image-caption">
                                <h1 class="cap-head"><?php the_field('art_piece_header_2') ?></h1>
                                <h2 class="cap-subhead"><?php the_field('art_piece_sub_2') ?></h2>
                                <h3 class="cap-infohead"><?php the_field('art_piece_info_2') ?></h3>
                            </div>
                        </div>

                        <div class="thumbnail-wrapper image-container">
                            <a href="#img3" aria-label="Click to enlarge image">
                            <img id="close3" class="border radial-repeating" src="<?php the_field('featured_3_horizontal'); ?>"  alt="<?php the_field('art_alt_3') ?>"/>
                            <div class="image-caption">
                                <h1 class="cap-head"><?php the_field('art_piece_header_3') ?></h1>
                                <h2 class="cap-subhead"><?php the_field('art_piece_sub_3') ?></h2>
                                <h3 class="cap-infohead"><?php the_field('art_piece_info_3') ?></h3>
                            </div>
                        </div>

                        <div class="thumbnail-wrapper image-container">
                            <a href="#img4" aria-label="Click to enlarge image">
                            <img id="close4" class="border radial-repeating" src="<?php the_field('featured_4'); ?>"  alt="<?php the_field('art_alt_4') ?>"/>
                            <div class="image-caption">
                                <h1 class="cap-head"><?php the_field('art_piece_header_4') ?></h1>
                                <h2 class="cap-subhead"><?php the_field('art_piece_sub_4') ?></h2>
                                <h3 class="cap-infohead"><?php the_field('art_piece_info_4') ?></h3>
                            </div>
                        </div>

                        <div class="thumbnail-wrapper image-container">
                            <a href="#img5" aria-label="Click to enlarge image">
                            <img id="close5" class="border radial-repeating" src="<?php the_field('featured_5'); ?>"  alt="<?php the_field('art_alt_5') ?>"/>
                            <div class="image-caption">
                                <h1 class="cap-head"><?php the_field('art_piece_header_5') ?></h1>
                                <h2 class="cap-subhead"><?php the_field('art_piece_sub_5') ?></h2>
                                <h3 class="cap-infohead"><?php the_field('art_piece_info_5') ?></h3>
                            </div>
                        </div>

                        <div class="thumbnail-wrapper image-container">
                            <a href="#img6" aria-label="Click to enlarge image">
                            <img id="close6" class="border radial-repeating" src="<?php the_field('featured_6'); ?>"  alt="<?php the_field('art_alt_6') ?>"/>
                            <div class="image-caption">
                                <h1 class="cap-head"><?php the_field('art_piece_header_6') ?></h1>
                                <h2 class="cap-subhead"><?php the_field('art_piece_sub_6') ?></h2>
                                <h3 class="cap-infohead"><?php the_field('art_piece_info_6') ?></h3>
                            </div>
                        </div>

                        <div class="thumbnail-wrapper image-container">
                            <a href="#img7" aria-label="Click to enlarge image">
                            <img id="close7" class="border radial-repeating" src="<?php the_field('featured_7'); ?>"  alt="<?php the_field('art_alt_7') ?>"/>
                            <div class="image-caption">
                                <h1 class="cap-head"><?php the_field('art_piece_header_7') ?></h1>
                                <h2 class="cap-subhead"><?php the_field('art_piece_sub_7') ?></h2>
                                <h3 class="cap-infohead"><?php the_field('art_piece_info_7') ?></h3>
                            </div>
                        </div>

                        <div class="thumbnail-wrapper image-container">
                            <a href="#img8" aria-label="Click to enlarge image">
                            <img id="close8" class="border radial-repeating" src="<?php the_field('featured_8'); ?>"  alt="<?php the_field('art_alt_8') ?>"/>
                            <div class="image-caption">
                                <h1 class="cap-head"><?php the_field('art_piece_header_8') ?></h1>
                                <h2 class="cap-subhead"><?php the_field('art_piece_sub_8') ?></h2>
                                <h3 class="cap-infohead"><?php the_field('art_piece_info_8') ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="lightbox" id="img1">
                    <a href="#close1" class="close" aria-label="close image">&times;</a>
                    <img class="border radial-repeating"src="<?php the_field('featured_1'); ?>" loading="lazy">
                </div>
                <div class="lightbox" id="img2">
                    <a href="#close2" class="close" aria-label="close image">&times;</a>
                    <img class="border radial-repeating" src="<?php the_field('featured_2_vertical'); ?>" loading="lazy">
                </div>
                <div class="lightbox" id="img3">
                    <a href="#close3" class="close" aria-label="close image">&times;</a>
                    <img class="border radial-repeating" src="<?php the_field('featured_3_horizontal'); ?>" loading="lazy">
                </div>
                <div class="lightbox" id="img4">
                    <a href="#close4" class="close" aria-label="close image">&times;</a>
                    <img class="border radial-repeating" src="<?php the_field('featured_4'); ?>" loading="lazy">
                </div>
                <div class="lightbox" id="img5">
                    <a href="#close5" class="close" aria-label="close image">&times;</a>
                    <img class="border radial-repeating" src="<?php the_field('featured_5'); ?>" loading="lazy">
                </div>
                <div class="lightbox" id="img6">
                    <a href="#close6" class="close" aria-label="close image">&times;</a>
                    <img class="border radial-repeating" src="<?php the_field('featured_6'); ?>" loading="lazy">
                </div>
                <div class="lightbox" id="img7">
                    <a href="#close7" class="close" aria-label="close image">&times;</a>
                    <img class="border radial-repeating" src="<?php the_field('featured_7'); ?>" loading="lazy">
                </div>
                <div class="lightbox" id="img8">
                    <a href="#close8" class="close" aria-label="close image">&times;</a>
                    <img class="border radial-repeating" src="<?php the_field('featured_8'); ?>" loading="lazy">
                </div>
  
        </div>
<?php get_template_part('template-parts/top-btn')?> 

<?php get_footer(); ?>