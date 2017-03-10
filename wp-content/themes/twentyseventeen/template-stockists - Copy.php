<?php
/*
Template Name: Stockists
*/
?>

<?php get_header(); ?>

    <div class="default-container1">
        <h1 class="stockists-head">stockists in australia</h1>
    
        <div class="stockists-search">
            <input type="text" placeholder="search by postcode"/><input type="submit" value=""/>
        </div>
        <div class="clearfix"></div>
        <div class="stockists-map">
            <p>STOCKISTS IN '2000'</p>
            <img src="<?php echo get_template_directory_uri();?>/images/stockists-map.jpg" class="img-responsive grey-scale"/>
        </div>
        <div class="clearfix"></div>
        <div class="stockists-details">
            <div class="row">
                <div class="col-sm-8 stockists-list col pd-0">
				
				
<?php $args = array( 'post_type' => 'stockists');
$the_query = new WP_Query( $args );
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php $post_count = 1; ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
				
                    <div class="row mrg-0">
                    <div class="col-sm-12 pd-0">
                        <div class="list-count col"><?php echo $post_count; ?>.</div>
                        <div class="shop-name col"><?php echo get_field("shop_name"); ?><br><span><?php echo get_field("category"); ?></span></div>
                        <div class="city col"><?php echo get_field("city"); ?></div>
                        <div class="details col"><span data-stock="stock_<?php echo $post_count; ?>">DETAILS ></span></div>
                    </div>
                    </div>
					
					
<?php $post_count++; endwhile; endif; ?>
                    <!--div class="row mrg-0">
                    <div class="col-sm-12 pd-0">
                        <div class="list-count col">2.</div>
                        <div class="shop-name col">SHOP NAME<br><span>CATEGORY</span></div>
                        <div class="city col">Sydney</div>
                        <div class="details col">DETAILS ></div>
                    </div>
                    </div>
                    <div class="row mrg-0">
                    <div class="col-sm-12 pd-0">
                        <div class="list-count col">3.</div>
                        <div class="shop-name col">SHOP NAME<br><span>CATEGORY</span></div>
                        <div class="city col">Paddington</div>
                        <div class="details col">DETAILS ></div>
                    </div>
                    </div-->
                </div>
                <div class="col-sm-4 stock-details col pd-0">
                    <div class="col-sm-6 col pd-0">
                        <div class="shop-name">SHOP NAME<br><br>
                        <span>85 DUNNING AVE.<br>ROSEBERY, SYD<br><br>(02) 9280 0999</span><br>
                        <span class="url"><a href="www.website.com.au">www.website.com.au</a></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col pd-0">
                        <div class="category-details">Stocking:<br>
                            <span>CATEGORY</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
		
<?php get_footer(); ?>
