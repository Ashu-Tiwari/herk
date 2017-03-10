<?php
/*
Template Name: Stockists
*/
?>

<?php get_header(); ?>

<script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyBTlOwsAa_ymgAGr4wd7-Z6hdIrVFKKmXc&sensor=false&libraries=places'></script>
<script src="<?php echo get_template_directory_uri();?>/js/location-picker/locationpicker.jquery.min.js"></script>

    <div class="default-container1">
        <h1 class="stockists-head">stockists in australia</h1>
    
        <div class="stockists-search">
            <input type="text" placeholder="search by postcode" id="us3-address" autocomplete="off"/><input class="search-stock" type="submit" value=""/>
        </div>
        <div class="clearfix"></div>
		
        <div class="stockists-map">
            <p>STOCKISTS IN '2000'</p>
            <!--img src="<?php echo get_template_directory_uri();?>/images/stockists-map.jpg" class="img-responsive grey-scale"/-->
			<div id="us3" style="height:370px;"></div>
        </div>

        <div class="clearfix"></div>
		<style>
			.stockists-details .stock-details
			{
				opacity:0;
				display:none;
			}
			.show-stock
			{
				cursor: pointer;
			}
		</style>
		<script>
			$(document).ready(function(){
				var gmap;
				var glat, glng;
				glat = $(".stockists-details .stockists-list .row:eq(0) .show-stock").attr("data-map-lat");
				glng = $(".stockists-details .stockists-list .row:eq(0) .show-stock").attr("data-map-lng");
				gmap = new google.maps.Map(document.getElementById("us3"), {
						center: new google.maps.LatLng(glat, glng),
						zoom: 14
					});
				
				
				$(".stockists-details .stockists-list .row:eq(0)").addClass("active");
				$(".stockists-details .stock-details:eq(0)").show().css({"opacity":"1"});
				var image = 'http://www.franhaines.co.uk/thebellinn/wp-content/themes/starkers-master/images/marker.png';
				$(".show-stock").click(function(){
					var data_stock = $(this).attr("data-stock");
					$(".stockists-details .stock-details").css({"opacity":"0", "display":"none"});
					$("."+data_stock).css({"display":"block"});
					$("."+data_stock).animate({"opacity":"1"}, 300);
					$(".stockists-details .stockists-list .row").removeClass("active");
					$(this).parent().parent().parent().addClass("active");
					//alert(data_stock);
					
					glat = $(this).attr("data-map-lat");
					glng = $(this).attr("data-map-lng");
					gmap = new google.maps.Map(document.getElementById("us3"), {
						center: new google.maps.LatLng(glat, glng),
						zoom: 14
					});
					var marker = new google.maps.Marker({
						position: myLatLng,
						title: "We are here",
						map: map,
						icon: image
					});
					
					
				});
			});
		</script>
		
		
        <div class="stockists-details">
            <div class="row">
                <div class="col-sm-8 stockists-list col pd-0">
			
<?php $args = array( 'post_type' => 'stockists');
$the_query = new WP_Query( $args );
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php $post_count = 1; ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php $location = get_field('map'); ?>
                    <div class="row mrg-0">
                    <div class="col-sm-12 pd-0">
                        <div class="list-count col"><?php echo $post_count; ?>.</div>
                        <div class="shop-name col"><?php echo get_field("shop_name"); ?><br><span><?php echo get_field("category"); ?></span></div>
                        <div class="city col"><?php echo get_field("city"); ?></div>
                        <div class="details col"><span class="show-stock" data-stock="stock_<?php echo $post_count; ?>" data-map-lat="<?php echo $location['lat']; ?>" data-map-lng="<?php echo $location['lng']; ?>">DETAILS ></span></div>
                    </div>
                    </div>
<?php $post_count++; endwhile;?>
                </div>
				
<?php $post_count = 1; ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<?php $location = get_field('map'); ?>

                <div class="col-sm-4 stock-details col pd-0 stock_<?php echo $post_count; ?>">
                    <div class="col-sm-6 col pd-0">
                        <div class="shop-name"><?php echo get_field("shop_name"); ?><br><br>
                        <span><?php echo get_field("address"); ?><br><br><?php echo get_field("contact"); ?></span><br>
                        <span class="url"><a target="_blank" href="<?php echo get_field("website"); ?>"><?php echo get_field("website"); ?></a></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col pd-0">
                        <div class="category-details">Stocking:<br>
                            <span>CATEGORY</span>
                        </div>
                    </div>
                </div>
				
<?php $post_count++; endwhile; endif; ?>
            </div>
        </div>
    </div>
	
	<script>
			var	glat1 = $(".stockists-details .stockists-list .row:eq(0) .show-stock").attr("data-map-lat");
			var	glng1 = $(".stockists-details .stockists-list .row:eq(0) .show-stock").attr("data-map-lng");
	
            $('#us3').locationpicker({
                location: {
                    latitude: glat1,
                    longitude: glng1
                },
                radius: 0,
                inputBinding: {
                    latitudeInput: $('#us3-lat'),
                    longitudeInput: $('#us3-lon'),
                    radiusInput: $('#us3-radius'),
                    locationNameInput: $('#us3-address')
                },
                enableAutocomplete: true,
                onchanged: function (currentLocation, radius, isMarkerDropped) {
                    // Uncomment line below to show alert on each Location Changed event
                    //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
                }
            });
			
        </script>
		
<?php get_footer(); ?>
