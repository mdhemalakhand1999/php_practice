<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.3.6
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="row">
	<div class="col-xl-12 col-lg-6">
		<?php do_action( 'woocommerce_cart_contents' ); ?>
		<div class="karx-cart-total-box-2 mb-30">
			<?php if ( wc_coupons_enabled() ) : ?>
				<h4 class="title"><?php echo esc_html__('Apply Coupon', 'karx'); ?></h4>
				<div class="karx-cart-apply-coupon-box karx-contact-form ">
					<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php echo esc_attr__( 'Coupon code', 'karx' ); ?>" />
					<button type="submit" class="button" name="apply_coupon" value="<?php echo esc_attr__( 'Apply coupon', 'karx' ); ?>"><?php echo esc_html__( 'Apply coupon', 'karx' ); ?></button>
					<?php do_action( 'woocommerce_cart_coupon' ); ?>
				</div>
			<?php endif; ?>
			<?php do_action( 'woocommerce_cart_actions' ); ?>
			<?php wp_nonce_field( 'woocommerce-cart', 'karx-cart-nonce' ); ?>
		</div>
		<?php do_action( 'woocommerce_after_cart_contents' ); ?>
	</div>
	<div class="col-xl-12 col-lg-6">
		<div class="karx-cart-total-box-2 cart_totals  <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">
			<?php do_action( 'woocommerce_before_cart_totals' ); ?>
			<h4 class="title"><?php echo esc_html__('Cart Totals', 'karx'); ?></h4>
			<div class="has-karx-ul-list-overflow">
				<ul>
					<li><span class="label"><?php echo esc_html__('Subtotal', 'karx'); ?></span> <span class="price"><?php wc_cart_totals_subtotal_html(); ?></span></li>
					<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
					<li  class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
						<span class="label"><?php wc_cart_totals_coupon_label( $coupon ); ?></span>
						<div class="price d-inline-block" data-title="<?php echo esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ); ?>">
							<?php wc_cart_totals_coupon_html( $coupon ); ?>
						</div>
					</li>
					<?php endforeach; ?>
					<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
					<li>
						<?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>
							<span class="label"><?php echo esc_html__('Shipping', 'karx'); ?></span>
							<div class="nice-select shipping has-nice-select" tabindex="0">
								<?php wc_cart_totals_shipping_html(); ?>
							</div>
						<?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>
					</li>
					<?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>
						<li>
							<span class="label"><?php echo esc_html__( 'Shipping', 'karx' ); ?></span>
							<div class="nice-select shipping has-nice-select" tabindex="1">
								<?php woocommerce_shipping_calculator(); ?>
							</td>
						</li>
					<?php endif; ?>
					<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
						<li>
							<span class="label"><?php echo esc_html( $fee->name ); ?></span>
							<div class="price d-inline-block" data-title="<?php echo esc_attr( $fee->name ); ?>">
								<?php wc_cart_totals_fee_html( $fee ); ?>
							</div>
						</li>
					<?php endforeach; ?>
					<?php
					if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) {
						$taxable_address = WC()->customer->get_taxable_address();
						$estimated_text  = '';

						if ( WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping() ) {
							/* translators: %s location. */
							$estimated_text = sprintf( ' <small>' . esc_html__( '(estimated for %s)', 'karx' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] );
						}

						if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) {
							foreach ( WC()->cart->get_tax_totals() as $code => $tax ) {
								?>
								<li class="tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
								<span class="label"><?php echo esc_html( $tax->label ) . $estimated_text;  ?></span>
									<div class="price d-inline-block" data-title="<?php echo esc_attr( $fee->name ); ?>">
										<span data-title="<?php echo esc_attr( $tax->label ); ?>"><?php echo wp_kses_post( $tax->formatted_amount ); ?></span>
									</div>
								</li>
							<?php
							}
						} else {
							?>
							<li class="tax-total">
								<span class="label"><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; ?></span>
								<div class="price d-inline-block">
									<td data-title="<?php echo esc_attr( WC()->countries->tax_or_vat() ); ?>"><?php wc_cart_totals_taxes_total_html(); ?></td>
								</div>
							</li>
							<?php
						}
					}
					?>
					<li class="karx-cart-total-flex-wrap">
						<?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>
						<span class="label"><?php echo esc_html__('Total', 'karx'); ?></span>
						<span class="price"><?php wc_cart_totals_order_total_html(); ?></span>
						<?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>
					</li>
					<li class="has-cart-checkout-list-form-style">
						<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
					</li>
				</ul>
			</div>
			<?php do_action( 'woocommerce_after_cart_totals' ); ?>
		</div>
	</div>
</div>


