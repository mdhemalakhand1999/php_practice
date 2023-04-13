<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>

	<div class="woocommerce-tabs wc-tabs-wrapper karx-shop-details-info-tabs">
        <div class="karx-shop-details-info-tab-controls mb-20">
            <nav>
                <div class="nav" id="nav-tab" role="tablist">
                    <?php foreach ( $product_tabs as $key => $product_tab ) :
                        $count = isset($count) ? $count: 1;
                        $active_class = $count == 1 ? 'active': '';
                    ?>
                    <button class="<?php echo esc_attr($active_class); ?>" id="nav-<?php echo esc_attr($key); ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?php echo esc_attr($key); ?>" type="button" role="tab" aria-controls="nav-<?php echo esc_attr($key); ?>" aria-selected="true"><?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?></button>
                    <?php $count++;endforeach; unset($count); unset($active_class); ?>
                </div>
            </nav>
        </div> 
        <div class="karx-shop-details-info-tab-content">
            <div class="tab-content" id="nav-tabContent">
                <?php foreach ( $product_tabs as $key => $product_tab ) :
                    $count = isset($count) ? $count: 1;
                    $active_class = $count == 1 ? 'show active': '';
                ?>
                <div class="tab-pane fade <?php echo esc_attr($active_class); ?>" id="nav-<?php echo esc_attr($key); ?>" role="tabpanel" aria-labelledby="nav-<?php echo esc_attr($key); ?>-tab">
                    <?php
                    if ( isset( $product_tab['callback'] ) ) {
                        call_user_func( $product_tab['callback'], $key, $product_tab );
                    }
                    ?>
                </div>
                <?php $count++;endforeach; unset($count); unset($active_class);?>
            </div>
        </div>

		<?php do_action( 'woocommerce_product_after_tabs' ); ?>
	</div>

<?php endif; ?>
