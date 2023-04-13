<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="product_meta">
	<?php do_action( 'woocommerce_product_meta_start' ); ?>
    <ul>
        <?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
            <li><b><?php echo esc_html__('SKU :', 'karx'); ?></b> <span><?php echo esc_html($product->get_sku()) ? esc_html($product->get_sku()) : esc_html__( 'N/A', 'karx' ); ?></span></li>
        <?php endif; ?>
        <li>
            <?php echo str_replace(',', '', wc_get_product_category_list( $product->get_id(), ', ', '<b class="posted_in karx-woo-single-shop-cat-list">' . _n( 'Category : </b>', 'Category : </b>', count( $product->get_category_ids() ), 'karx' ) . ' ', '' )); ?>
        </li>
        <li>
            <?php echo str_replace(',', '', wc_get_product_tag_list( $product->get_id(), ', ', '<b class="tagged_as">' . _n( 'Tag:</b>', 'Tags:</b>', count( $product->get_tag_ids() ), 'karx' ) . ' ', '' )); ?>
        </li>
    </ul>
    <?php do_action( 'woocommerce_product_meta_end' ); ?>
</div>
