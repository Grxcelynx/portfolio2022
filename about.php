<?php
/**
* Template Name: About
*
* @package grxcelyn-p2022
*
*/
?>
<div class="" id="topBtn"></div>

<?php get_header(); ?>

<div class="strips">
    <div class="strip hoverin">
        <div class="content drips">
        <img class="logo-about" src="http://grxcelyn2022.local/wp-content/uploads/2022/07/glitter-logo.png" alt="">

        <div class="drip"></div>
        <div class="drip"></div>
        <div class="drip"></div>
        <div class="drip"></div>
        <div class="drip"></div>
        <div class="drip"></div>
        <div class="drip"></div>
        <div class="drip"></div>
        <div class="drip"></div>
        <div class="drip"></div>

        </div>
        
    </div>
   
    <div class="strip">
        <h4>grxcelyn</h4>
        <div class="content">
            <h1 class="about-h1">Grace Birnam</h1>
            <h3>Artist & Developer</h3>
            <h3>Bay Area, CA</h3>
            <img src="http://grxcelyn2022.local/wp-content/uploads/2022/06/IMG_9628.jpg" alt="">
        </div>
    </div>
    <div class="strip">
        <h4>What I do</h4>
        <div class="content">
            <p> <?php echo the_field('what_i_do'); ?></p>
        </div>
    </div>
    <div class="strip">
        <h4>Who I Am</h4>
        <div class="content">
        <p> <?php echo the_field('who_i_am'); ?></p>
        </div>
    </div>
    <div class="strip">
          
            <h4>skills</h4>
        <div class="content">        
            <ul>
                <li>
                    <img class="icon-img" src="<?php the_field('wordpress'); ?>" alt="">
                    <img class="icon-img" src="<?php the_field('github'); ?>" alt="">
                </li>
                <li>
                <img class="icon-img" src="<?php the_field('javascript'); ?>" alt="">
                <img class="icon-img" src="<?php the_field('html'); ?>" alt="">

                </li>
                <li>
                    <img class="icon-img" src="<?php the_field('css'); ?>" alt="">
                    <img class="icon-img" src="<?php the_field('sass'); ?>" alt="">
                </li>  
                <li>
                    <img class="icon-img" src="<?php the_field('git'); ?>" alt="">
                    <img class="icon-img" src="<?php the_field('bootstrap'); ?>" alt="">
                </li>
                <li>
                <img class="icon-img" src="<?php the_field('python'); ?>" alt="">
                <img class="icon-img" src="<?php the_field('postgresql'); ?>" alt="">

                </li>
                <li>
                    <img class="icon-img" src="<?php the_field('sql'); ?>" alt="">
                </li>                 
            </ul>
        </div>
    </div>
    <div class="strip">
        <h4>wisdom</h4>
        <div class="content">
            <h3>
            "Failure Is Only The Opportunity To Try Again, Only More Wisely This Time" 
            <br>
            - Iroh
            </h3>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/calendly')?> 

<?php get_template_part('template-parts/top-btn')?> 

<?php get_footer(); ?>