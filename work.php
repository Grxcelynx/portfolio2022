<?php
/**
* Template Name: Work
*
* @package grxcelyn-p2022
*
*/
?>
<div class="" id="topBtn"></div>

<?php get_header(); ?>


<div class="work-title">
    <h1>De<span class="red-v">v</span>elopment<span class="work-dot">.</span></h1>
</div>



<div class="load-more-container">
  <!-- <input type="" id="load-more"/> -->
  <ul>
    <li>
        <figure>
            <video playsinline autoplay muted loop src="<?php the_field('site_1'); ?>"></video>
            <!-- <img src="<?php the_field('site_1'); ?>" alt=""> -->
            <figcaption>
                Travel Site Template
                <button class="view">
                    <a class="viewbtn" href="https://github.com/Grxcelynx/travel-site" target="_blank">view</a>
                </button>
            </figcaption>
        </figure>
    </li>   
    <li>
        <figure>
        <video playsinline autoplay muted loop src="<?php the_field('site_2'); ?>"></video>
            <!-- <img src="<?php the_field('site_2'); ?>" alt=""> -->
            <figcaption>
                Fashion Blog Site Template
                <button class="view">
                <a href="https://github.com/Grxcelynx/fashion-beauty-clonesite" target="_blank">view</a>
                </button>
            </figcaption>
        </figure>
    </li> 
    <li>
        <figure>
        <video playsinline autoplay muted loop src="<?php the_field('site_3'); ?>"></video>
            <!-- <img src="<?php the_field('site_3'); ?>" alt=""> -->
            <figcaption>
                Education Blog/Info Site Template
                <button class="view">
                <a href="https://github.com/Grxcelynx/edu-site-clone" target="_blank">view</a>
                </button>
            </figcaption>
        </figure>
    </li>   
    <li>
        <figure>
        <video playsinline autoplay muted loop src="<?php the_field('site_4'); ?>"></video>
            <!-- <img src="<?php the_field('site_4'); ?>" alt=""> -->
            <figcaption>
                Magic 8 Ball | JavaScript Project 2021
                <button class="view">
                    <a href="https://github.com/Grxcelynx/magic8ball" target="_blank">view</a>
                </button>
            </figcaption>
        </figure>
    </li>  
   
</div>

<div class="work-info">
    <div class="web-inquiry">
    <h2>Gr<span class="redx">x</span>celyn<span class="ydot">.</span> Development</h2>
        <hr>
            <h4 class="text-start">Want to create a portfolio?</h4>
            <h4 class="text-middle">Have an idea for your website?</h4> 
            <h4 class="text-end">Expand your small business to an online store?</h4> 
            <h3 class="text-center">
            Get connected with Grxcelyn Development and set up your first Discovery Meeting <span class="today">TODAY</span>
            </h3>
        <button class="fancy">
        <a href="/contact">Inquire Now</a>
        </button>
    </div>

    <div class="work-about">
        <div class="skills">
            <h2>Skills</h2>
            <hr>
            <h4>
            Wordpress<span>&#42;</span> | Javascript<span>&#42;</span> | PHP<span>&#42;</span> | HTML<span>&#42;</span> | CSS/SASS<span>&#42;</span> | Bootstrap<span>&#42;</span> | GitHub<span>&#42;</span> | Python | PostgreSQL | SQLAlchemy | Flask | Heroku | Jinja2 | Ajax | Jquery | AWS | React
            </h4>
            <h5><span>&#42;</span> Proficient</h5>
        </div>
 
    </div>

</div>
<?php get_template_part('template-parts/top-btn')?> 


<?php get_footer(); ?>