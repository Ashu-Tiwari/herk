<?php
/*
Template Name: Terms & Conditions
*/
?>

<?php get_header(); ?>

		<div class="default-container1 rel">
            <h1 class="terms-rotate">TERMS + CONDITIONS</h1>
            <div class="shipping-policy terms">
                <!--p class="head">Our goods come with guarantees that cannot be excluded under the australian consumer law.</p>
                
                <ul class="policy-list">
                    <li>You are entitled to a replacement or refund for a major failure and compensation for any other reasonably forseeable loss or damage.</li>
                    <li>You are also entitled to have the goods repaired or replaced if the goods fail to be of acceptable quality and the failure does not amount to major failure.</li>
                    <li>This warranty will be for a period of 3 months from the date of purchase of the item.</li>
                    <li>This warranty is only only against a defect on the item. It does not cover damage caused by fair wear and tear, incorrect usage, deliberate damage or accident or modification.</li>
                    <li>To claim against this warrranty, you must return the item purchased to us with a valid receipt or other proof of purchase.</li>
                    <li>The item and receipt must be returned to:</li>
                    <li>Herk Accessories Pty Ltd<br>Suite 2, Level 3, 426 King Street<br>Newcastle West, 2302 NSW.</li>
                </ul-->
			<?php
			while ( have_posts() ) : the_post();

				the_content();

			endwhile; // End of the loop.
			?>
            </div>
        </div>
		
<?php get_footer(); ?>
