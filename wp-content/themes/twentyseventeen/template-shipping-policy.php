<?php
/*
Template Name: Shpping Policy
*/
?>

<?php get_header(); ?>

        <div class="default-container1 rel">
            <h1 class="shipping-rotate">SHIPPING POLICY</h1>
            <div class="shipping-policy bullet-list">
                <!--p class="head">THE FOLLOWING POLICY APPLIES TO SHIPPING:</p>
                
                <ul class="policy-list">
                    <li>&bull;&nbsp; All orders are processed same day (if placed before 2pm) or the following business day.</li>
                    <li>&bull;&nbsp; Orders are not shipped or delivered on weekends or holidays.</li>
                    <li>&bull;&nbsp; If we are experiencing a high volume of orders, shipments may be delayed. Please allow additional days in transit for delivery.</li>
                    <li>&bull;&nbsp; If there will be a significant delay in shipment of your order, we will contact you via email or telephone</li>
                </ul-->
				
			<?php
			while ( have_posts() ) : the_post();

				the_content();

			endwhile; // End of the loop.
			?>
				
            </div>
        </div>
		
<?php get_footer(); ?>
