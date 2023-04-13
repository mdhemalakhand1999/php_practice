<?php
/**
 * karx functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package karx
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function karx_setup() {
	load_theme_textdomain( 'karx', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'editor-styles' );
	add_theme_support( "wp-block-styles" );
	add_theme_support( "responsive-embeds" );
	add_theme_support( "align-wide" );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	$defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
    $args = array(
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
	 add_theme_support( 'custom-background' );
    add_theme_support( 'custom-logo', $defaults );
	if ( function_exists( 'register_block_style' ) ) {
	    register_block_style(
	        'core/quote',
	        array(
	            'name'         => 'blue-quote',
	            'label'        => __( 'Blue Quote', 'karx' ),
	            'is_default'   => true,
	            'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
	        )
	    );
	}
	register_block_pattern(
    'karx-pattern',
	    array(
	        'title'       => __( 'Karx Pattern', 'karx' ),
	        'description' => __( 'Karx Pattern', 'karx' ),
	        'content'     => __('Karx Pattern Content', 'karx')
	    )
	);
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Main Menu', 'karx' ),
			'copyright_menu' => esc_html__( 'Copyright Menu', 'karx' ),
		),
	);
	register_nav_menus(
		array(
			'footer-menu' => esc_html__( 'Footer Menu', 'karx' ),
		),
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-background',
		apply_filters(
			'karx_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	add_theme_support( 'post-formats', [
        'image',
        'audio',
        'video',
        'gallery',
        'quote',
    ] );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 30,
			'width'       => 130,
			'flex-width'  => true,
			'flex-height' => true,
			'unlink-homepage-logo' => true,
		)
	);
}
add_action( 'after_setup_theme', 'karx_setup' );

function karx_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'karx_content_width', 640 );
}
add_action( 'after_setup_theme', 'karx_content_width', 0 );

/*
 * Register widget area.
 */
function karx_widgets_init() {
    $footer_style_2_switch = get_theme_mod( 'footer_style_2_switch', true );
    $footer_style_3_switch = get_theme_mod( 'footer_style_3_switch', false );

	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'karx' ),
			'id'            => 'blog-sidebar',
			'description'   => esc_html__( 'Add Blog Sidebar.', 'karx' ),
			'before_widget' => '<section id="%1$s" class="karx-blog-sidebar tp-toolkit-blog-sidebar mb-50 %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 class="karx-sidebar-title">',
			'after_title'   => '</h5>',
		)
	);
	//Footer widgets
	$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    // footer default
    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
		$widget_class = $num == 2? 'mb-50 pl-70': '';
        register_sidebar( [
            'name'          => sprintf( esc_html__( 'Footer %1$s', 'karx' ), $num ),
            'id'            => 'footer-' . $num,
            'description'   => sprintf( esc_html__( 'Footer %1$s', 'karx' ), $num ),
            'before_widget' => '<div id="%1$s" class="karx-footer-widget tp-toolkit-footer-widget mb-50 '.esc_attr($widget_class).' footer-col-'.$num.' mb-40 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="karx-footer-widget-title">',
            'after_title'   => '</h4>',
        ] );
    }
	// shop sidebar
	if(class_exists('WooCommerce')) {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Shop Sidebar', 'karx' ),
				'id'            => 'shop',
				'description'   => esc_html__( 'Add Shop Sidebar.', 'karx' ),
				'before_widget' => '<section id="%1$s" class="karx-blog-sidebar mb-50 %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h4 class="karx-sidebar-title">',
				'after_title'   => '</h4>',
			)
		);
	}
	// Service sidebar
	register_sidebar(
		array(
			'name'          => esc_html__( 'Service Sidebar', 'karx' ),
			'id'            => 'service-sidebar',
			'description'   => esc_html__( 'Add Service Sidebar.', 'karx' ),
			'before_widget' => '<section id="%1$s" class="karx-blog-sidebar mb-50 %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 class="karx-sidebar-title">',
			'after_title'   => '</h5>',
		)
	);
}
add_action( 'widgets_init', 'karx_widgets_init' );



define( 'KARX_THEME_DIR', get_template_directory() );
define( 'KARX_THEME_URI', get_template_directory_uri() );
define( 'KARX_THEME_CSS_DIR', KARX_THEME_URI . '/assets/css/' );
define( 'KARX_THEME_JS_DIR', KARX_THEME_URI . '/assets/js/' );
define( 'KARX_THEME_INC', KARX_THEME_DIR . '/inc/' );
define( 'KARX_THEME_HOOK', KARX_THEME_INC . 'hooks/' );
define( 'KARX_THEME_CLASS', KARX_THEME_INC . 'classes/' );

/*
 * Enqueue Admin scripts and styles.
 */
function karx_admin_custom_scripts() {
	wp_enqueue_media();
    wp_enqueue_style( 'customizer-style', get_template_directory_uri() . '/inc/style/css/customizer-style.css',array());
    wp_register_script( 'karx-admin-custom', get_template_directory_uri() . '/inc/js/admin_custom.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'karx-admin-custom' );
}
add_action( 'admin_enqueue_scripts', 'karx_admin_custom_scripts' );
/**
 * Registers an editor stylesheet for the theme.
 */
function karx_theme_add_editor_styles() {
	add_editor_style( 'assets/css/custom-editor-style.css' );
}
add_action( 'admin_init', 'karx_theme_add_editor_styles' );

/*
 * Enqueue Theme scripts and styles.
 */

function karx_scripts() {
	// all CSS
	wp_enqueue_style( 'karx-fonts', karx_fonts_url(), array(), '1.0.0' );
	wp_enqueue_style('bootstrap',KARX_THEME_CSS_DIR.'bootstrap.min.css' );
	wp_enqueue_style('fontawesome-all',KARX_THEME_CSS_DIR.'fontawesome-all.min.css' );
	wp_enqueue_style('animate',KARX_THEME_CSS_DIR.'animate.min.css' );
	wp_enqueue_style('magnific-popup',KARX_THEME_CSS_DIR.'magnific-popup.css' );
	wp_enqueue_style('odometer',KARX_THEME_CSS_DIR.'odometer.min.css' );
	wp_enqueue_style('nice-select',KARX_THEME_CSS_DIR.'nice-select.css' );
	wp_enqueue_style('meanmenu',KARX_THEME_CSS_DIR.'meanmenu.css' );
	wp_enqueue_style('swipper',KARX_THEME_CSS_DIR.'swipper.css' );
	wp_enqueue_style('karx-core',KARX_THEME_CSS_DIR.'karx-core.css', null, time() );
	wp_enqueue_style('karx-custom',KARX_THEME_CSS_DIR.'karx-custom.css', null, time() );
	if(class_exists('WooCommerce')) {
		wp_enqueue_style('karx-woo-shop',KARX_THEME_CSS_DIR.'karx-woo-shop.css', null, time() );
	}
	wp_enqueue_style('karx-unit',KARX_THEME_CSS_DIR.'karx-unit.css', null, time() );
	wp_enqueue_style( 'karx-style', get_stylesheet_uri() );

    // all js
    wp_enqueue_script( 'bootstrap-bundle', KARX_THEME_JS_DIR . 'bootstrap.bundle.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'swipper-bundle', KARX_THEME_JS_DIR . 'swipper-bundle.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'knob', KARX_THEME_JS_DIR . 'knob.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-meanmenu', KARX_THEME_JS_DIR . 'jquery.meanmenu.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'wow', KARX_THEME_JS_DIR . 'wow.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-nice-select', KARX_THEME_JS_DIR . 'jquery.nice-select.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-scrollup', KARX_THEME_JS_DIR . 'jquery.scrollup.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'addthis_widget', KARX_THEME_JS_DIR . 'addthis_widget.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-magnific-popup', KARX_THEME_JS_DIR . 'jquery.magnific-popup.min.js', [ 'jquery', 'imagesloaded' ], '', true );
    wp_enqueue_script( 'isotope-pkgd', KARX_THEME_JS_DIR . 'isotope.pkgd.js', [ 'jquery', 'imagesloaded' ], '', true );
    wp_enqueue_script( 'odometer', KARX_THEME_JS_DIR . 'odometer.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'appear', KARX_THEME_JS_DIR . 'appear.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'back-to-top', KARX_THEME_JS_DIR . 'back-to-top.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'karx-main', KARX_THEME_JS_DIR . 'main.js', [ 'jquery' ], time(), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'karx_scripts' );
/*
Register Fonts
 */


function karx_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'karx' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?'. urlencode('family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    }
    return $font_url;
}




require KARX_THEME_INC . 'template-helper.php';
require KARX_THEME_INC . 'custom-header.php';
require KARX_THEME_INC . 'template-tags.php';
require KARX_THEME_INC . 'template-functions.php';
include_once KARX_THEME_INC . '/style/php/customizer-style.php';
include_once KARX_THEME_INC . 'class-wp-bootstrap-navwalker.php';
include_once KARX_THEME_INC . 'class-ocdi-importer.php';
require_once KARX_THEME_INC . 'class-tgm-plugin-activation.php';
require_once KARX_THEME_INC . '/classes/class-karx-comment.php';
if(class_exists('WooCommerce')) {
	require_once KARX_THEME_INC . 'hooks/woocommerce-hooks.php';
	require_once KARX_THEME_INC . 'functions/woo-functions.php';
}
if ( defined( 'JETPACK__VERSION' ) ) {
	require KARX_THEME_INC . 'jetpack.php';
}
/***
 * WooCommerce Support
 */
add_theme_support('woocommerce');
if(class_exists('TGM_Plugin_Activation')) {
	require_once KARX_THEME_INC . 'add_plugin.php';
}
