<?php
/**
* Template Name: Art
*
* @package grxcelyn-p2022
*
*/
?>
<?php get_header(); ?>

<div class="artwork-grid">
        <div class="gallery-preview">
            <h1>Feautred Work </h1>
                <div><img src="http://grxcelyn2022.local/wp-content/uploads/2022/06/IMG_0288-scaled.jpg"/></div>
                <div class="vertical"><img src="http://grxcelyn2022.local/wp-content/uploads/2022/06/IMG_2829.jpg"/></div>
                <div class="horizontal"><img src="http://grxcelyn2022.local/wp-content/uploads/2022/06/634023937.585602-scaled.jpg"/></div>
                <div><img src="http://grxcelyn2022.local/wp-content/uploads/2022/06/634024181.435563-scaled.jpg"/></div>
                <div><img src="http://grxcelyn2022.local/wp-content/uploads/2022/06/IMG_0068-2-scaled.jpg"/></div>
                <div><img src="http://grxcelyn2022.local/wp-content/uploads/2022/06/633768651.546887-2-scaled.jpg"/></div>
                <div class="vertical"><img src="http://grxcelyn2022.local/wp-content/uploads/2022/06/633768586.188566-2-scaled.jpg"/></div>
        </div>

        <div class="reviews">
            <h2>Reviews</h2>
            <hr>
            <div class="one">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem distinctio corporis quo architecto eligendi magnam fugit numquam labore dolorem necessitatibus dolore nostrum voluptatem facere beatae deserunt, rerum alias non pariatur!
                </p>
            </div>
            <div class="two">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem distinctio corporis quo architecto eligendi magnam fugit numquam labore dolorem necessitatibus dolore nostrum voluptatem facere beatae deserunt, rerum alias non pariatur!
                </p>
            </div>
            <button>
                <a href="https://www.etsy.com/shop/GracelynArts?ref=l2-about-shopname" target="_blank"id="shop_home_reviews_section">Read more</a>
            </button>
        </div>



        <div class="inquiry-ex">
            <h2>Interested in commissioning Grxcelyn Arts?</h2>
            <hr>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo itaque consequuntur corrupti inventore dicta, eum quis nostrum a ducimus quam ipsam sed labore iste eveniet perspiciatis quia quas enim eaque!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo itaque consequuntur corrupti inventore dicta, eum quis nostrum a ducimus quam ipsam sed labore iste eveniet perspiciatis quia quas enim eaque!
            </p>
            <button>
                <a href="<?php echo get_permalink(get_page_by_path('contact'))?>">Book now</a>
            </button>
        </div>

        <div class="shop-prev">
            <a href="https://www.etsy.com/shop/GracelynArts?ref=profile_header" target="_blank">
            <img src="http://grxcelyn2022.local/wp-content/uploads/2022/06/etsy-prev-2.png" alt="">
            </a>
        </div>

  
</div>

<?php get_footer(); ?>