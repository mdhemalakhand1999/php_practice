<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package karx
 */


if ( !is_active_sidebar( 'blog-sidebar' ) || !is_active_sidebar('shop') ) {
    return;
}
?>

<?php
    if(is_shop()) {
        dynamic_sidebar( 'shop' );
    } elseif(is_product()) {
        return '';
    }
    
    else {
        dynamic_sidebar( 'blog-sidebar' );
    }
?>