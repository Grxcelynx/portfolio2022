<?php
/**
* Template Name: Contact
*
* @package grxcelyn-p2022
*
*/
?>
<?php get_header(); ?>
<section class="grid">



<div class="form-grid">
        <section class="test">

        </section>
        
        <form class="art-form" action="">
            <label id="art-title" for="">Art Inquiry Form</label>
            <hr>
            <fieldset class="art-input">
                <input id="fname-art" type="text" placeholder="First Name">
            </fieldset>

            <fieldset class="art-input">
                <input id="lname-art" type="text" placeholder="Last Name">
            </fieldset>

            <fieldset class="art-input">
                <input id="company-art" type="text" placeholder="Company (optional)">
            </fieldset>

            <fieldset class="art-input">
                <input id="phone-art" type="text" placeholder="Phone Number">
            </fieldset>

            <fieldset class="art-input">
               <input type="email" name="email-art" id="email-art" placeholder="Email">
            </fieldset>

            <fieldset class="art-input">
                <label for="art-inquiry">Type of Inquiry</label>
                    <select name="art-inquiry-op" id="art-ops" placeholder="Type of Inquiry">
                        <option value="Showcase">Showcase</option>
                        <option value="Mural">Mural</option>
                        <option value="Canvas">Canvas</option>
                        <option value="Digital">Digital</option>
                    </select>
            </fieldset> 

            <fieldset class="art-input">
                <label for="finished">Desired Date of Completion</label>
               <input type="date" name="date-art" id="date-art" placeholder="Date of Completion">
            </fieldset>

            <fieldset class="art-input">
                <input type="text" name="location-art" id="location-art" placeholder="Location">
                <br>
                <label id="art-location-note" for="">(for murals/showcases <strong>only</strong>)</label>
            </fieldset>

            <button id="art-btn" type="submit">Submit</button>

        </form>
    

    
        <form class="web-form" action="">
            <label id="web-title" for="">Web Development Inquiry Form</label>
            <hr>
            <fieldset class="web-input">
                <input id="fname-web" type="text" placeholder="First Name">
            </fieldset>

            <fieldset class="web-input">
                <input id="lname-web" type="text" placeholder="Last Name">
            </fieldset>

            <fieldset class="web-input">
                <input id="company-web" type="text" placeholder="Company (optional)">
            </fieldset>

            <fieldset class="web-input">
                <input id="phone-web" type="text" placeholder="Phone Number">
            </fieldset>

            <fieldset class="web-input">
               <input type="email" name="email-web" id="email-web" placeholder="Email">
            </fieldset>

            <fieldset class="web-input">
                <label for="web-inquiry">Type of Inquiry</label>
                    <select name="web-inquiry-op" id="web-ops" placeholder="Type of Inquiry">
                        <option value="ecommerce">Ecommerce</option>
                        <option value="blog">Blog</option>
                        <option value="portfolio">Portfolio</option>
                        <option value="other">Other</option>
                    </select>
            </fieldset> 

            <fieldset class="web-input">
                <label for="finished">Desired Date of Completion</label>
               <input type="date" name="date-web" id="date-web" placeholder="Date of Completion">
            </fieldset>

            <button id="web-btn" type="submit">Submit</button>
        </form>
   
</div>
</section>

<?php get_footer(); ?>