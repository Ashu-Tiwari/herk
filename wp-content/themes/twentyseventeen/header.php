<!DOCTYPE HTML>
<html>
<head>
<title>HERK</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css"/>
<script src="<?php echo get_template_directory_uri();?>/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/scrolling-slider-data.css">
<link rel='stylesheet' id='woocommerce-twenty-seventeen-css'  href='<?php echo get_template_directory_uri();?>/assets/css/twenty-seventeen.css' type='text/css' media='all' />

<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/responsive.css"/>
    <script>
        $(document).ready(function(){
            var slider_width = $(".slider-list").width();
            var slider_length = $(".slider-list li").length;
            var slider_cur_width = 33.33 * slider_length;
			$(".slider-list").css({"width": slider_cur_width+"%"});
			/* menu active script */
			
			var tmp_class = "page-template-template-";
                        if($("body").hasClass("post-type-archive-product")){$("#top-menu li:eq(0)").addClass("active");}
			if($("body").hasClass(tmp_class+"about")){$("#top-menu li:eq(1)").addClass("active");}
			if($("body").hasClass(tmp_class+"contact")){$("#top-menu li:eq(2)").addClass("active");}
			if($("body").hasClass(tmp_class+"stockists")){$("#top-menu li:eq(3)").addClass("active");}

            /*redefining attributes of inputs on shop page*/

            $(".widget_product_search .search-field").attr("placeholder", "");
            $(".widget_product_search input[type='submit']").attr("value", "");
            $(".screen-reader-text").text("Search");
			
			/* Become a retailer script*/
            $(".retailer-container").css({"width":"50px"});
            $(".show-retailer").hover(function(){
                $(".retailer-container").animate({
                    "width":"790"
                }, 200);
                $(".retailer-container form").show();
                $("#btn-close").show();
            });
            $("#btn-close").click(function(){
                $(".retailer-container form").hide();
                $(".retailer-container").animate({
                    "width":"50px"
                }, 200);
                $(this).hide();
            });
			/* popup script */
            $("#popup-close").click(function(){
                $(".popup-parent").animate({"opacity":"0"},500, function(){
                    $(".popup-parent").hide();
                });
            });
            $(".search-top a").click(function(event){
                    event.preventDefault();
                    $("#search-box").toggle();
                });
            $(".menu-toggler").click(function(){
                $(".menu-main-menu-container").stop().slideToggle("fast");
                $(this).children(".fa").toggleClass("fa-bars fa-close");
            });
		});
    </script>
<style type="text/css">
        .widget_product_search input[type="submit"]
        {
            background: url(<?php echo get_template_directory_uri();?>/images/search-icon-small.png) no-repeat;
        }
    </style>
    
</head>
<body <?php body_class(); ?>>
    
<div class="page-container">
    
    <div class="retailer-container page-home">
        <h5 class="show-retailer">BECOME A RETAILER</h5>
        <div id="btn-close">X</div>
        <form>
            <ul>
                <li><input type="text" placeholder="* Name" /></li>
                <li><input type="email" placeholder="* Email" /></li>
                <li><input type="text" placeholder="* Company Name" /></li>
                <li><input class="col-sm-6" type="email" placeholder="* Phone" />
                <input class="col-sm-6" type="email" placeholder="* Location" /></li>
                
                <li><textarea placeholder="* Comments" ></textarea></li>
                <li><div class="default-button text-right"><input value="SUBMIT" type="submit"></div></li>
            </ul>
        </form>
    </div>
  
<!--start header-->
    <div class="container-fluid pd-0">
        
        <ul class="pull-right top-nav">
            <li>
            <form action="<?php echo site_url(); ?>" method="get" role='search' class='top-search-bar'>
            <input id="search-box" name='s' value="<?php the_search_query(); ?>" type="text"/>
            <input type='hidden' name='post_type' value='product'/>
            </form>
            </li>
            <li class="search-top"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/search-icon-small.png"/></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/mail-icon-small.png"/></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/user-icon-small.png"/></li>
           
            <li>
           <a href="<?php echo wc_get_cart_url(); ?>" class="cart-contents" title="<?php _e( 'View your shopping cart' ); ?>">
               
             <img src="<?php echo get_template_directory_uri();?>/images/basket-icon-small.png"/>
           </a>
         <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
               
        <?php echo sprintf ( _n( '%d ', '%d ', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> 
    
    </a>


            </li>
           </ul>
        
    </div>
<div class="container-fluid pd-0 menu-container">
	<div class="logo"><!--a href="index.php"><img src="<?php //echo get_template_directory_uri();?>/images/logo-black.png"/--><?php the_custom_logo(); ?></a></div>
	<div class="menu-toggler"><i class="fa fa-bars"></i></div>
	<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Top Menu', 'twentyseventeen' ); ?>">
	<!--button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) ); echo twentyseventeen_get_svg( array( 'icon' => 'close' ) ); _e( 'Menu', 'twentyseventeen' ); ?></button-->
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>
</nav><!-- #site-navigation -->
</div>
<div class="clearfix"></div>