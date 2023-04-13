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
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;


/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'karx-shop-details', $product ); ?>>
    <div class="karx-shop-details mb-50">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="karx-images-wrapper mr-40 mb-40">
                    <?php woocommerce_show_product_images(); ?>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="karx-shop-details-content mb-40">
                    <?php
                    woocommerce_template_single_title();
                    echo '<div class="karx-shop-details-content-price-rating-wrap mb-20">';
                        woocommerce_template_single_price();
                        woocommerce_template_single_rating();
                    echo '</div>';
                    echo '<div class="karx-shop-details-content-text mb-35">';
                    woocommerce_template_single_excerpt();
                    echo '</div>';
                    echo '<div class="karx-shop-details-content-bottom-wrap">';
                        woocommerce_template_single_add_to_cart();
                    echo '</div>';
                    echo '<div class="karx-shop-details-content-widget-action pt-35 pb-35">';
                        echo '<div class="karx-shop-details-content-widget-action-item ">';
                            if(class_exists( 'YITH_WCWL' )) {
                                echo do_shortcode('[yith_wcwl_add_to_wishlist]');
                            }
                        echo '</div>';
                        echo '<div class="karx-shop-details-content-widget-action-item">';
                            if(class_exists('YITH_Woocompare')) {
                                echo do_shortcode('[yith_compare_button]');
                            }
                        echo '</div>';
                    echo '</div>';
                    echo '<div class="karx-shop-details-content-list border-top pt-30">';
                        woocommerce_template_single_meta();
                    echo '</div>';
                    ?>
                    <?php
                    /**
                     * Hook: woocommerce_single_product_summary.
                     *
                     * @hooked woocommerce_template_single_title - 5
                     * @hooked woocommerce_template_single_rating - 10
                     * @hooked woocommerce_template_single_price - 10
                     * @hooked woocommerce_template_single_excerpt - 20
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     * @hooked woocommerce_template_single_meta - 40
                     * @hooked woocommerce_template_single_sharing - 50
                     * @hooked WC_Structured_Data::generate_product_data() - 60
                     */
                    ?>
                </div>
            </div>
        </div>
    </div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
