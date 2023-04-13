<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package karx
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function karx_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'karx_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function karx_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'karx_pingback_header' );

// karx_classes_sidebar
function karx_classes_sidebar_func() {
    if ( is_active_sidebar( 'classes-sidebar' ) ) {

        dynamic_sidebar( 'classes-sidebar' );
    }
}
add_action( 'karx_classes_sidebar', 'karx_classes_sidebar_func', 20 );

function karx_get_tag() {
    $html = '';
    if ( has_tag() ) {
		$html .= '<div class="karx-custom-post-tag">';
        $html .= get_the_tag_list( '', ' ', '' );
		$html .= '</div>';
    }
    return $html;
}