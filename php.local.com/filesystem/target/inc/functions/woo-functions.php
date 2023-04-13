<?php

function karx_woo_product_thumbnail() {
    ?>
    <!-- list -->
    <div class="karx-our-products-img">
        <a href="<?php echo get_permalink(get_the_ID()); ?>">
            <?php woocommerce_template_loop_product_thumbnail(); ?>
        </a>
        <div class="karx-our-product-new new-active">
            <?php woocommerce_show_product_loop_sale_flash(); ?>
        </div>
        <div class="karx-our-products-hover-wrapper">
            <?php
            if(class_exists( 'YITH_WCWL' )) {
                echo do_shortcode('[yith_wcwl_add_to_wishlist]');
            }
            ?>
            <?php
            if(class_exists('YITH_Woocompare')) {
                echo do_shortcode('[yith_compare_button]');
            }
            ?>
            <?php
                if(class_exists( 'YITH_WCQV' )) {
                    $yith = new YITH_WCQV_Frontend();
                    $yith->yith_add_quick_view_button();
                }
            ?>
        </div>
    </div>
    <!-- grid -->
<?php }



if (!function_exists('karx_shop_loop_columns')) {
	function karx_shop_loop_columns() {
        if(is_active_sidebar('shop')) {
            return 2; // 2 products per row
        } else {
            return 3;
        }
	}
}


if ( ! function_exists( 'karx_woocommerce_template_loop_product_content' ) ) {
	/**
	 * Show the product title in the product loop. By default this is an H2.
	 */
	function karx_woocommerce_template_loop_product_content() {?>
        <div class="karx-shop-loop-content">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="karx-our-products-title-wrapper">
                        <h4 class="karx-our-products-title <?php esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ); ?>"><a href="<?php echo get_permalink(get_the_ID()); ?>"><?php echo get_the_title() ?></a></h4>
                            <?php woocommerce_template_loop_price(); ?>
                            <?php woocommerce_template_loop_rating(); ?>
                    </div>
                </div>
                <div
                    class="col-12">
                    <div class="karx-our-products-buy-button">
                        <?php woocommerce_template_loop_add_to_cart(); ?>
                    </div>
                </div>
            </div>
        </div>
	<?php }
}
if ( ! function_exists( 'karx_woocommerce_template_loop_product_content_list' ) ) {
	/**
	 * Show the product title in the product loop. By default this is an H2.
	 */
	function karx_woocommerce_template_loop_product_content_list() {?>
        <div class="karx-product-list-content pl-15">
            <h4 class="karx-product-list-title mb-25"><a href="<?php echo get_permalink(get_the_ID()); ?>"><?php echo get_the_title() ?></a></h4>
            <div class="karx-product-rating d-block">
                <?php woocommerce_template_loop_rating(); ?>
            </div>
            <div class="product-price-wrapper mb-20">
                <?php woocommerce_template_loop_price(); ?>
            </div>
            <p><?php echo esc_html(wp_trim_words(get_the_excerpt(get_the_ID()), 12)); ?></p>
            <div class="karx-our-products-buy-list-button mt-30">
                <?php woocommerce_template_loop_add_to_cart(); ?>
            </div>
        </div>
	<?php }
}
function karx_woocommerce_review_gravatar_size($comment) {
    echo get_avatar( $comment, apply_filters( 'woocommerce_review_gravatar_size', '70' ), '' );
}
function karx_related_products_args( $args ) {
	$args['columns'] = 3; // arranged in 3 columns
    $args['posts_per_page'] = 3; // total product
	return $args;
}