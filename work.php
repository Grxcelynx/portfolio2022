<?php
/**
* Template Name: Work
*
* @package grxcelyn-p2022
*
*/
?>
<?php get_header(); ?>

<div>
    <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="http://grxcelyn2022.local/wp-content/uploads/2022/06/IMG_0288-scaled.jpg" style="width:100%">
    <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="http://grxcelyn2022.local/wp-content/uploads/2022/06/IMG_2829.jpg" style="width:100%">
    <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="http://grxcelyn2022.local/wp-content/uploads/2022/06/633768651.546887-2-scaled.jpg" style="width:100%">
    <div class="text">Caption Three</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
</div>

<div>
    <button class="more-work">See more work</button>
</div>
<div class="work-info">
    <div class="web-inquiry">
        <h2>Interested in commissioning <br> Grxcelyn Development?</h2>
        <hr>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo itaque consequuntur corrupti inventore dicta, eum quis nostrum a ducimus quam ipsam sed labore iste eveniet perspiciatis quia quas enim eaque!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo itaque consequuntur corrupti inventore dicta, eum quis nostrum a ducimus quam ipsam sed labore iste eveniet perspiciatis quia quas enim eaque!
        </p>
        <button>Inquire now</button>
    </div>

    <div class="work-about">
        <div class="skills">
            <h2>Skills</h2>
            <hr>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt facilis modi molestiae perspiciatis ab pariatur commodi quo optio, tempora, quod ipsum exercitationem placeat nostrum voluptatibus quibusdam laborum aliquid at odit.
            </p>
        </div>
        <div class="process">
            <h2>Process</h2>
            <hr>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt facilis modi molestiae perspiciatis ab pariatur commodi quo optio, tempora, quod ipsum exercitationem placeat nostrum voluptatibus quibusdam laborum aliquid at odit.
            </p>      
        </div>
    </div>
</div>


<?php get_footer(); ?>