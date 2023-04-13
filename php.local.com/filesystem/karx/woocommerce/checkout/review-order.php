<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="karx-checkout-order-summery-box mb-60">
    <div class="karx-checkout-order-summery-box-wrap">
    <?php do_action( 'woocommerce_review_order_before_cart_contents' ); ?>
        <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ):
            $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
            $_product_thumbnail_url = get_the_post_thumbnail_url($cart_item['product_id'], 'thumbnail');
            $_product_thumbnail_alt = get_post_meta($cart_item['product_id'], '_wp_attachment_image_alt', TRUE);
        ?>
            <?php
                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ):
            ?>
                <div class="karx-checkout-order-summery-box-product <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
                    <div class="left">
                        <?php if(!empty($_product_thumbnail_url)) : ?>
                        <div class="image">
                            <img src="<?php echo esc_url($_product_thumbnail_url); ?>" alt="<?php echo esc_attr($_product_thumbnail_alt); ?>">
                        </div>
                        <?php endif; ?>
                        <div class="title-wrap">
                            <h4 class="title">
                                <a href="<?php echo get_the_permalink($cart_item['product_id']); ?>">
                                    <?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) ) . '&nbsp;'; ?>
                                </a>
                            </h4> 
                                <?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <span class="product-quantity">' . sprintf( '&times;&nbsp;%s', $cart_item['quantity'] ) . '</span>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </div>
                    </div>
                    <div class="right">
                        <span class="karx-price"><span class="price d-md-none"><?php echo esc_html__('Price:', 'karx'); ?> </span>
                            <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </span>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php do_action( 'woocommerce_review_order_after_cart_contents' ); ?>
    </div>
    <div class="karx-checkout-order-summery-box-pricing-list">
        <ul>
            <li>
                <span class="label"><?php echo esc_html__('Coupon', 'karx'); ?></span>
                <span class="price"><?php wc_cart_totals_subtotal_html(); ?></span>
            </li>
            <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
            <li class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                <span class="label"><?php wc_cart_totals_coupon_label( $coupon ); ?></span>
                <span class="price flat"><?php wc_cart_totals_coupon_html( $coupon ); ?></span>
            </li>
            <?php endforeach; ?>
            <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
            <li>
                <?php do_action( 'woocommerce_review_order_before_shipping' ); ?>
                <?php wc_cart_totals_shipping_html(); ?>
                <?php do_action( 'woocommerce_review_order_after_shipping' ); ?>
            </li>
            <?php endif; ?>
            <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
            <li>
                <span class="label"><?php echo esc_html( $fee->name ); ?></span>
                <span class="price flat"><?php wc_cart_totals_fee_html( $fee ); ?></span>
            </li>
            <?php endforeach; ?>
            <?php if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) : ?>
                <?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
                    <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited ?>
                        <li class="tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                            <span class="label"><?php echo esc_html( $tax->label ); ?></span>
                            <span class="price flat"><?php echo wp_kses_post( $tax->formatted_amount ); ?></span>
                        </li>
                    <?php endforeach; ?>
                <?php else : ?>
                    <li class="tax-total">
                        <span class="label"><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></span>
                        <span class="price flat"><?php wc_cart_totals_taxes_total_html(); ?></span>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
            <li class="karx-review-order-total-price-control">
                <?php do_action( 'woocommerce_review_order_before_order_total' ); ?>
                <span class="label total"><?php echo esc_html__('Total', 'karx'); ?></span>
                <span class="price total"><?php wc_cart_totals_order_total_html(); ?></span>
                <?php do_action( 'woocommerce_review_order_after_order_total' ); ?>
            </li>
        </ul>
    </div>
</div>
<?php echo wc_get_formatted_cart_item_data( $cart_item ); ?>