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
        <div class="content">
            <img class="logo-about" src="http://grxcelyn2022.local/wp-content/uploads/2022/07/G_Logo-Copy.svg" alt="">
        </div>
    </div>
    <div class="strip">
        <h4>grxcelyn</h4>
        <div class="content">
            <h1 class="about-h1">Grace Birnam</h1>
            <h3>Artist & Developer</h3>
            <img src="http://grxcelyn2022.local/wp-content/uploads/2022/06/IMG_9628.jpg" alt="">
        </div>
    </div>
    <div class="strip">
        <h4>Who I Am</h4>
        <div class="content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda obcaecati unde excepturi vero facilis pariatur libero recusandae sed distinctio magni quia iusto accusantium reprehenderit, odio ipsum fuga saepe. Consequuntur, nostrum!
            </p>
        </div>
    </div>
    <div class="strip">
        <h4>What I do</h4>
        <div class="content">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto dolor ratione fuga voluptate! Saepe mollitia, facilis dolorem ullam quos voluptatum repudiandae pariatur ducimus eligendi, recusandae obcaecati itaque voluptates officiis magni!
            </p>
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
<?php get_template_part('template-parts/top-btn')?> 

<?php get_footer(); ?>