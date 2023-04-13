<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
$allowed = array( 
	'strong' => array(),
	'em'     => array(),
	'b'      => array(),
	'i'      => array(),
	'span'      => array(),
	'meta'      => array(),
	'bdi'      => array(),
	'del'      => array(),
	'ins'      => array(),
	'small'      => array(),
	'div'      => array(),
	'a' => array(
		'href' => array(),
		'title' => array()
	),
);
?>

<?php if ( $price_html = $product->get_price_html() ) : ?>
	<span class="product-price"><?php echo wp_kses($price_html, $allowed); ?></span>
<?php endif; ?>
