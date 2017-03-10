<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<div class="innerpage-container">
        <h1 class="home-heading pull-left text-left">WHO IS<br><img src="<?php echo get_template_directory_uri();?>/images/logo-lined-grey.png"/></i>ERK</h1>
        
        <div class="about-content">
            <!--p class="head"><strong>Herk Accessories began in 2013 when David Sampaklis and David Zacharia, the owners of 4 Telstra Stores and 3 Telstra Business Centre's across the Newcastle/Hunter region, felt that there needed to be a new variety in mobile accessories.</strong></p>
            <p>The names in the industry at the time were focused 'Type A' accessories, but the Dave's felt there needed to be more variety, a new name that provided lifestyle products, not just Cases and Car Charges. The idea of Herk was born out of this desire. Since then, we have teamed up with a broad variety of names to provide a unique range of tech accessories including bluetooth speakers, headphones, tracking devices as well as high quality cases, cables and chargers.</p>
            <p>With six Telstra stores now, the products we range have been tested in the market to ensure they are what customers are looking for.</p-->
			
			<?php
			while ( have_posts() ) : the_post();

				the_content();

			endwhile; // End of the loop.
			?>
			
        </div>
    
    
    </div>
    
    <div class="col-sm-12 pd-0 home-slider">
    <div class="outer-container pull-right" data-scslider="container">
            <div class="direction-control direction-control-left" data-scslider="control" data-scslider-control="left">
                <!--span class="text">Left</span-->
            </div>
            <div class="direction-control direction-control-right" data-scslider="control" data-scslider-control="right">
                <!--span class="text">Right</span-->
            </div>
            <div class="slider" tabindex="0" data-scslider="slider">
                <ul class="slider-list" data-scslider="list">
                    <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/slider/p1.jpg"/></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/slider/p2.jpg"/></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/slider/p3.jpg"/></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/slider/p1.jpg"/></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/slider/p2.jpg"/></a></li>
                </ul>
            </div>
        <div class="heading-rotate">
            FEATURED
        </div>
        
        </div>
        
    </div>
    <script src="<?php echo get_template_directory_uri();?>/js/vendor/jquery-1.7.0.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.scrolling.slider.js"></script>
	
<?php get_footer(); ?>