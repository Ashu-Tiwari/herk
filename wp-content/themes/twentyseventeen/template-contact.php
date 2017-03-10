<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

        <div class="default-container1 rel">
            <h1 class="contact-rotate">CONTACT US</h1>
            <div class="contact">
                <p class="head">LET'S CHAT</p>
                <p class="desc">Whether you want to talk about our products or wanting to become a retailer, we would love for you to get in touch with us.</p>
                
                <!--div class="chat-form-contaienr">
                    <form>
                        <ul class="chat-form">
                            <li><input type="text" placeholder="* Full Name"/></li>
                            <li><input type="text" placeholder="* Retailer Enquiry"/></li>
                            <li><input type="text" placeholder="* Company"/></li>
                            <li><input type="email" placeholder="* Email"/></li>
                            <li><input type="text" placeholder="* Subject"/></li>
                            <li><textarea placeholder="* Message"></textarea></li>
                        </ul>
                        <div class="default-button text-right"><input value="SUBMIT" type="submit"></div>
                    </form>
                
                </div-->
				
		<?php echo do_shortcode( '[ninja_form id=3]' ); ?>
                
                
            </div>
        </div>
		
<?php get_footer(); ?>
