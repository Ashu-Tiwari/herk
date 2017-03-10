<div class="clearfix"></div>
<footer>
        <div class="container-fluid news-letter pd-0">
            <div class="default-container">
            <div class="row mrg-0">
                <p>SIGN UP TO OUR NEWSLETTER</p>
                <form>
                    <div class="col-sm-6">
                        <input type="text" placeholder="* Name"/>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" placeholder="* Email"/>
                    </div>
                    <div class="default-button text-right"><input type="submit" value="SUBMIT"/></div>
                </form>
            </div>
            </div>
        </div>
        <div class="container-fluid footer-logo pd-0">
        <div class="default-container">
            <a href="index.php"><img src="<?php echo get_template_directory_uri();?>/images/logo-lined.png"/></a>
            <!--ul class="footer-nav">
                <li><a href="#">SHOP</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="stockists.php">STOCKISTS</a></li>
                <li><a href="terms-conditions.php">TERMS + CONDITIONS</a></li>
                <li><a href="shipping-policy.php">SHIPPING POLICY</a></li>
            </ul-->
			
			
			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Footer Menu', 'twentyseventeen' ); ?>">
	<!--button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) ); echo twentyseventeen_get_svg( array( 'icon' => 'close' ) ); _e( 'Menu', 'twentyseventeen' ); ?></button-->
	<?php wp_nav_menu( array(
		'theme_location' => 'footer',
		'menu_id'        => 'footer-menu',
	) ); ?>

</nav><!-- #site-navigation -->
			
			
			
        </div>
        </div>
        <div class="container-fluid copyright pd-0">
            <div class="row pd-0">
            <div class="col-sm-12 pd-0 copyright-content">
                <span>Copyright 2017 Herk Accessories</span>
                <span>Website design by Smack Bang Designs</span>
            </div>
            </div>
        </div>
        
    </footer>
    
    
</div>



<?php wp_footer(); ?>
</body>
</html>