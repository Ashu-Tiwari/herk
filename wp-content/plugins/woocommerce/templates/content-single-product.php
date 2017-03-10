<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
		/**
		 * woocommerce_before_single_product_summary hook.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		/*showing product image*/
		do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">

		<?php

		/** Function to remove SKU from single product page**/
		function sv_remove_product_page_skus( $enabled ) {
    		if ( ! is_admin() && is_product() ) {
       		 return false;
   			 }

   			 return $enabled;
			}
add_filter( 'wc_product_sku_enabled', 'sv_remove_product_page_skus' );



			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			/*showing title to add-to-cart button*/
			echo "<h1 itemprop='name' class='product_title brand-title' style='text-transform:uppercase;'>".get_post_meta( get_the_ID(), 'brand_name', true )."</h1>";
			
			do_action( 'woocommerce_single_product_summary' );


		$loop = new WP_Query( array( 'post_type' => 'product','post_status' => 'publish') );

			 $loop->the_post();
			    
			
		
/*Adding tabs*/
/*add_filter( 'woocommerce_product_tabs', 'wpb_new_product_tab' );
function wpb_new_product_tab( $tabs ) {
    
    $tabs['test_tab'] = array(
        'title'       => __( 'Product Description', 'woocommerce' ),
        'priority'    => 50,
        'callback'    => 'wpb_new_product_tab_content_desc'
    );
    return $tabs;
} 

function wpb_new_product_tab_content_desc() {
    
    echo the_excerpt();
    echo the_content();
}*/











if ( ! $post->post_excerpt ) return;

			/* Showing Short and full description */
			//echo apply_filters( 'woocommerce_short_description', $post->post_excerpt );
			//the_content(); 

			/* Showing tabs/accordion */
			do_action( 'woocommerce_after_single_product_summary' );
		?>
		

	</div><!-- .summary -->

	<?php
		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		/*showing discription*/
		//do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
