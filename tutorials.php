<?php
/**
* Template Name: Tutorials
*
* @package grxcelyn-p2022
*
*/
?>
<?php get_header(); ?>

<?php get_template_part('template-parts/banner')?> 

<div class="tut-grid">

    <div class="github">
        <h2>GitHub</h2>
        <hr>
        <ul>
            <h4>Learn the basics of GitHub</h4>
            <li>Creating an account</li>
            <li>SSH Keys</li>
            <li>Cloning</li>
            <li>Branches</li>
            <li>Errors</li>
        </ul>
        <hr>
        <button>
            <a href="https://www.youtube.com/playlist?list=PLTdtY7KAwkuc7cWvWSv0ArvnYOHsYjTf_" target="_blank">Watch now</a>
        </button>
    </div>

    <div class="html-t">
        <h2>HTML</h2>
        <hr>
        <ul>
            <h4>Learn the basics of HTML</h4>
            <li>Tags</li>
            <li>Grids</li>
            <li>Forms</li>
            <li>Navbar</li>
            <li>And More!</li>
        </ul>
        <hr>
        <button>
            <a href="">Coming Soon</a>
        </button>
    </div>

    <div class="css-t">
        <h2>CSS</h2>
        <hr>
        <ul>
            <h4>Learn the basics of CSS</h4>
            <li>Classes & IDs</li>
            <li>Colors</li>
            <li>Fonts</li>
            <li>Sizing</li>
            <li>And more!</li>
        </ul>
        <hr>
        <button>
            <a href="">Coming Soon</a>
        </button>
    </div>
    
</div>

<div class="about-tut">
    <h2>About</h2>
    <p>
    Grxcelyn Tutorials was created to provide building block tutorials for beginners
    interested in coding. While there is a plethora of resources out there, we all learn
    differently and absorb knowledge at our own pace. Tutorials can be long, boring, and
    confusing at times. Which then causes intimidation and impostor syndrome to those trying
    to learn. By creating short, to the point, and straight forward content with a sprinkle
    of sass, the mission behind Grxcelyn Tutorials is to help others in creating a better
    understanding of the fundamentals to further not just your knowledge but your 
    confidence in code. Remembering that anyone can code!
    </p>
    <button>
        <a href="https://www.youtube.com/channel/UCQ0uVps2WIkXbMINDw7x7iA" target="_blank">Visit Channel</a>
    </button>
</div>
<?php get_footer(); ?>