<?php get_header(); ?>
  <div class="popup-parent">
    <div class="popup-container">
        <h5 class="">SIGN UP TO OUR NEWSLETTER</h5>
        <div id="popup-close">X</div>
        <form>
            <ul>
                <li><input type="text" placeholder="* Name" /></li>
                <li><input type="email" placeholder="* Email" /></li>
                <li><div class="default-button text-right"><input value="SUBMIT" type="submit"></div></li>
            </ul>
        </form>
    </div>
</div>
   <h1 class="home-heading pull-right text-right">MADE FOR<br>THE MIG<img src="<?php echo get_template_directory_uri();?>/images/logo-lined-grey.png"/></i>TY</h1>
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
                   <?php       
             
                        $meta_query   = WC()->query->get_meta_query();
                        $meta_query[] = array(
                            'key'   => '_featured',
                            'value' => 'yes'
                        );
                        $args = array(
                            'post_type'   =>  'product',
                            'stock'       =>  1,
                            'showposts'   =>  5,
                            'orderby'     =>  'date',
                            'order'       =>  'DESC',
                            'meta_query'  =>  $meta_query
                        );
                      $loop = new WP_Query( $args );

                        while ( $loop->have_posts() ) : 
                            $loop->the_post();
                             global $product; 

                     ?>
                        
                        <li> <a href="<?php the_permalink(); ?>">   
                            <?php 
                                if ( has_post_thumbnail( $loop->post->ID ) ) 
                                    echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' ); 
                                else 
                                    echo '<img src="' . woocommerce_placeholder_img_src() . '" />'; 
                            ?> 
                      </a></li>

                    <?php 
                        endwhile;
                        wp_reset_query(); 
                      
                    ?>

                   <!--  <li><a href="#"><img src="<?php //echo get_template_directory_uri();?>/images/slider/p1.jpg"/></a></li>
                    <li><a href="#"><img src="<?php //echo get_template_directory_uri();?>/images/slider/p2.jpg"/></a></li>
                    <li><a href="#"><img src="<?php //echo get_template_directory_uri();?>/images/slider/p3.jpg"/></a></li>
                    <li><a href="#"><img src="<?php //echo get_template_directory_uri();?>/images/slider/p1.jpg"/></a></li>
                    <li><a href="#"><img src="<?php //echo get_template_directory_uri();?>/images/slider/p2.jpg"/></a></li>
                -->  
                 </ul>
            </div>
        <div class="heading-rotate">
            FEATURED
        </div>
        
        
        </div>
    
        
</div>
        <script src="<?php echo get_template_directory_uri();?>/js/vendor/jquery-1.7.0.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/jquery.scrolling.slider.js"></script>

    
    <div class="heading-full">
        

            ACCESSORIES TO SUIT EVERY LIFESTYLE
        
    </div>
    <div class="container home-products default-container pd-0">
	
<?php
    $taxonomyName = "product_cat";
    //This gets top layer terms only.  This is done by setting parent to 0.
    $parent_terms = get_terms($taxonomyName, array('parent' => 0, 'orderby' => 'ID', 'order' => 'ASC', 'hide_empty' => false));

    
    foreach ($parent_terms as $pterm) {

        //show parent categories
        //echo '<li><a href="' . get_term_link($pterm->name, $taxonomyName) . '">' . $pterm->name . '</a></li>';
		$category_link = get_term_link($pterm->name, $taxonomyName);
        $thumbnail_id = get_woocommerce_term_meta($pterm->term_id, 'thumbnail_id', true);
        
        $image = wp_get_attachment_url($thumbnail_id);
        
        //echo "<img src='{$image}' alt='' width='400' height='400' />";
			echo"<div class='col-sm-4 product'>
					<img src='{$image}' class='product-img'/>
					<div class='abs'><div class='desc'><span>".$pterm->name."</span><br><a href='".$category_link."'>SHOP NOW</a></div></div>
				</div>";

        
    }
    
	
?>
	
        <!--home products row -->
		<!--div class="row product-row">
            <div class="col-sm-4 product">
                <img src="<?php //echo get_template_directory_uri();?>/images/products/p2f.jpg" class="product-img"/>
                <div class="abs"><div class="desc"><span>HEADPHONES</span><br><a href="#">SHOP NOW</a></div></div>
            </div>
            
            <div class="col-sm-4 product">
                <img src="<?php //echo get_template_directory_uri();?>/images/products/p1.jpg" class="product-img"/>
                <div class="abs"><div class="desc"><span>HEADPHONES</span><br><a href="#">SHOP NOW</a></div></div>
            </div>
        </div>
        <div class="row mrg-0">
            <div class="col-sm-4 product">
                <img src="<?php //echo get_template_directory_uri();?>/images/products/p5f.jpg" class="product-img"/>
                <div class="abs"><div class="desc"><span>HEADPHONES</span><br><a href="#">SHOP NOW</a></div></div>
            </div>
            <div class="col-sm-4 product">
                <img src="<?php //echo get_template_directory_uri();?>/images/products/p4f.jpg" class="product-img"/>
                <div class="abs"><div class="desc"><span>HEADPHONES</span><br><a href="#">SHOP NOW</a></div></div>
            </div>
            <div class="col-sm-4 product">
                <img src="<?php //echo get_template_directory_uri();?>/images/products/p3f.jpg" class="product-img"/>
                <div class="abs"><div class="desc"><span>HEADPHONES</span><br><a href="#">SHOP NOW</a></div></div>
            </div>
        </div-->
		<!--end home product-row-->
		
        <div class="default-button view-all text-right"><a class="button">VIEW ALL</a></div>
        <div class="rotate-head">
            SHOP OUR RANGE
        </div>
    </div>
	
	<?php get_footer(); ?>