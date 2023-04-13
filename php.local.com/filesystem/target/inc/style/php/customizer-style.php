<?php 
/*************************************************
## karx Typography
*************************************************/
function karx_customizer_styling() { ?>
<style type="text/css">

/* Header_1 Top Style */
<?php if(get_theme_mod('choose_default_header') == 'header-style-1') : ?>
	<?php if (get_theme_mod( 'header_menu_color' )) { ?>
		.karx-header-area-2 .karx-main-menu ul li a {
			color: <?php echo esc_attr(get_theme_mod( 'header_menu_color' ) ); ?>;
		}
	<?php } ?>
	<?php if (get_theme_mod( 'header_menu_hover_color' )) { ?>
		.karx-header-area-2 .karx-main-menu ul li a:hover, .karx-header-area-2 .karx-main-menu ul li a:hover {
			color: <?php echo esc_attr(get_theme_mod( 'header_menu_hover_color' ) ); ?>;
		}
	<?php } ?>
	<?php if (get_theme_mod( 'header_submenumenu_border_color' )) { ?>
		.karx-header-area-2  .karx-main-menu ul:is(.sub-menu) {
			border-color: <?php echo esc_attr(get_theme_mod( 'header_submenumenu_border_color' ) ); ?>;
		}
	<?php } ?>
	<?php if (get_theme_mod( 'tp_toolkit_header_top_background_color' )) { ?>
	.karx-header-area-2 .karx-top-header-area {
		background: <?php echo esc_attr(get_theme_mod( 'tp_toolkit_header_top_background_color' ) ); ?>;
	}
	<?php } ?>
	<?php if (get_theme_mod( 'karx_header_top_icon_color' )) { ?>
	.header-style-1 .top-left .header-txt i {
		color: <?php echo esc_attr(get_theme_mod( 'karx_header_top_icon_color' ) ); ?>;
	}
	<?php } ?>
	<?php if (get_theme_mod( 'tp_toolkit_header_top_button_text_color' )) { ?>
	.karx-header-area-2 .karx-top-header-area .karx-top-btn {
		color: <?php echo esc_attr(get_theme_mod( 'tp_toolkit_header_top_button_text_color' ) ); ?>;
	}
	<?php } ?>
	<?php if (get_theme_mod( 'tp_toolkit_header_top_button_text_hover_color' )) { ?>
	.karx-header-area-2 .karx-top-header-area .karx-top-btn:hover {
		color: <?php echo esc_attr(get_theme_mod( 'tp_toolkit_header_top_button_text_hover_color' ) ); ?>;
	}
	<?php } ?>
	<?php if (get_theme_mod( 'tp_toolkit_header_top_button_bg_color' )) { ?>
	.karx-header-area-2 .karx-top-header-area .karx-top-btn {
		background-color: <?php echo esc_attr(get_theme_mod( 'tp_toolkit_header_top_button_bg_color' ) ); ?>;
	}
	<?php } ?>
	<?php if (get_theme_mod( 'tp_toolkit_header_top_button_bg_hover_color' )) { ?>
	.karx-header-area-2 .karx-top-header-area .karx-top-btn:hover {
		background-color: <?php echo esc_attr(get_theme_mod( 'tp_toolkit_header_top_button_bg_hover_color' ) ); ?>;
	}
	<?php } ?>
	<?php if (get_theme_mod( 'logo_size' )) { ?>
	.karx-header-area-2 .karx-logo-area-2 .karx-logo img {
		width: <?php echo esc_attr(get_theme_mod( 'logo_size' ) ); ?>px;
	}
	<?php } ?>
	<?php if (get_theme_mod( 'header_logo_bg_color' ) && get_theme_mod('tp_toolkit_header_main_logoset') == 'text' && !empty(get_theme_mod('tp_toolkit_header_main_logoset_style'))) { ?>
		.karx-header-area-2 .karx-logo-area-2 a.karx-logo span {
		background-color: <?php echo esc_attr(get_theme_mod( 'header_logo_bg_color' ) ); ?>;
	}
	<?php } ?>
<?php  endif; ?>
/* Header_1 Right Style */
<?php if(get_theme_mod('choose_default_header') == 'header-style-1') : ?>
	<?php if (get_theme_mod( 'tp_toolkit_header_main_right_button_bg_color' )) { ?>
	.karx-header-area-2 .karx-quote-2 .quote-dropdown {
		background: <?php echo esc_attr(get_theme_mod( 'tp_toolkit_header_main_right_button_bg_color' ) ); ?>;
	}
	<?php } ?>
	<?php if (get_theme_mod( 'tp_toolkit_header_main_right_button_bg_hover_color' )) { ?>
	.karx-header-area-2 .karx-quote-2 .quote-dropdown:hover {
		background: <?php echo esc_attr(get_theme_mod( 'tp_toolkit_header_main_right_button_bg_hover_color' ) ); ?>;
	}
	<?php } ?>
	<?php if (get_theme_mod( 'tp_toolkit_header_main_right_button_text_color' )) { ?>
	.karx-header-area-2 .karx-quote-2 .quote-dropdown {
		color: <?php echo esc_attr(get_theme_mod( 'tp_toolkit_header_main_right_button_text_color' ) ); ?>;
	}
	<?php } ?>

	<?php if (get_theme_mod( 'tp_toolkit_header_main_right_button_text_hover_color' )) { ?>
	.karx-header-area-2 .karx-quote-2 .quote-dropdown:hover {
		color: <?php echo esc_attr(get_theme_mod( 'tp_toolkit_header_main_right_button_text_hover_color' ) ); ?>;
	}
	<?php } ?>
<?php endif; ?>









/* Header_2 Style */
<?php if(get_theme_mod('choose_default_header') == 'header-style-2') : ?>
	<?php if (get_theme_mod( 'logo_size2' )) { ?>
		.karx-header-area.karx-hader-1 .karx-logo-area a.karx-logo img {
			width: <?php echo esc_attr(get_theme_mod( 'logo_size2' ) ); ?>px;
		}
	<?php } ?>
	<?php if (get_theme_mod( 'tp_toolkit_header_top_background_color_2' )) { ?>
		.karx-header-area.karx-hader-1 .karx-top-header-area {
			background-color: <?php echo esc_attr(get_theme_mod( 'tp_toolkit_header_top_background_color_2' ) ); ?>;
		}
	<?php } ?>
	<?php if (get_theme_mod( 'header_menu_color_2' )) { ?>
		.navbar-nav li a {
			color: <?php echo esc_attr(get_theme_mod( 'header_menu_color_2' ) ); ?>;
		}
	<?php } ?>
	<?php if (get_theme_mod( 'header_menu_hover_color_2' )) { ?>
		.karx-header-area.karx-hader-1 .karx-main-menu ul li a:hover {
			color: <?php echo esc_attr(get_theme_mod( 'header_menu_hover_color_2' ) ); ?>;
		}
	<?php } ?>
	<?php if (get_theme_mod( 'header_submenumenu_border_color_2' )) { ?>
		.karx-main-menu ul:is(.sub-menu) {
			border-color: <?php echo esc_attr(get_theme_mod( 'header_submenumenu_border_color_2' ) ); ?>;
		}
	<?php } ?>
	<?php if (get_theme_mod( 'header_logo_bg_color_2' )) { ?>
		.karx-header-area.karx-hader-1 .karx-logo-area .karx-logo span {
			background-color: <?php echo esc_attr(get_theme_mod( 'header_logo_bg_color_2' ) ); ?>;
		}
	<?php } ?>
	/* right side */
	<?php if (get_theme_mod( 'karx_header_main_right_button_bg_color_2' )) { ?>
	.def-btn {
		background: <?php echo esc_attr(get_theme_mod( 'karx_header_main_right_button_bg_color_2' ) ); ?>;
	}
	<?php } ?>
	<?php if (get_theme_mod( 'karx_header_main_right_button_bg_hover_color_2' )) { ?>
	.def-btn:after {
		background: <?php echo esc_attr(get_theme_mod( 'karx_header_main_right_button_bg_hover_color_2' ) ); ?>;
	}
	<?php } ?>
	<?php if (get_theme_mod( 'karx_header_main_right_button_text_color_2' )) { ?>
	.def-btn {
		color: <?php echo esc_attr(get_theme_mod( 'karx_header_main_right_button_text_color_2' ) ); ?>;
	}
	<?php } ?>

	<?php if (get_theme_mod( 'karx_header_main_right_button_text_hover_color_2' )) { ?>
	.def-btn:hover {
		color: <?php echo esc_attr(get_theme_mod( 'karx_header_main_right_button_text_hover_color_2' ) ); ?>;
	}
	<?php } ?>
<?php endif; ?>

/* Breadcrum Style */
<?php if (get_theme_mod( 'breadcrumb_text_color' )) { ?>
.karx_breadcrumb_title, nav.breadcrumb-trail.breadcrumbs > span, .breadcrumb-trail.breadcrumbs > span a, nav.breadcrumb-trail.breadcrumbs {
	color: <?php echo esc_attr(get_theme_mod( 'breadcrumb_text_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'breadcrumb_text_hover_color' )) { ?>
.breadcrumb-trail.breadcrumbs > span a:hover {
	color: <?php echo esc_attr(get_theme_mod( 'breadcrumb_text_hover_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'breadcrumb_bg_img_ovelay_color' )) { ?>
.karx-breadcrumb-area.breadcrumb_overlay::after {
	background-color: <?php echo esc_attr(get_theme_mod( 'breadcrumb_bg_img_ovelay_color' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'breadcrumb_bg_img_ovelay_color_opacity' )) { ?>
	.karx-breadcrumb-area.breadcrumb_overlay::after {
		opacity: <?php echo esc_attr(get_theme_mod( 'breadcrumb_bg_img_ovelay_color_opacity' ) ); ?>;
	}
<?php } else {?>
	.karx-breadcrumb-area.breadcrumb_overlay::after {
		opacity: 0;
	}
<?php } ?>
<?php if (get_theme_mod( 'breadcrumb_background_position_select' )) { ?>
.karx-breadcrumb-area.breadcrumb_overlay {
	background-position: <?php echo esc_attr(get_theme_mod( 'breadcrumb_background_position_select' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'breadcrumb_background_size_select' )) { ?>
.karx-breadcrumb-area.breadcrumb_overlay {
	background-size: <?php echo esc_attr(get_theme_mod( 'breadcrumb_background_size_select' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'breadcrumb_background_blendmode_select' )) { ?>
.karx-breadcrumb-area.breadcrumb_overlay {
	background-blend-mode: <?php echo esc_attr(get_theme_mod( 'breadcrumb_background_blendmode_select' ) ); ?>;
}
<?php } ?>

/***
* Footer Style 01
*/
<?php if (get_theme_mod( 'footer_background_size' )) { ?>
footer.karx-footer-area.karx-foter-1 {
	background-size: <?php echo esc_attr(get_theme_mod( 'footer_background_size' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'footer_background_position_select' )) { ?>
footer.karx-footer-area.karx-foter-1 {
	background-position: <?php echo esc_attr(get_theme_mod( 'footer_background_position_select' ) ); ?>;
}
<?php } ?>
<?php if (get_theme_mod( 'footer_background_blendmode_select' )) { ?>
footer.karx-footer-area.karx-foter-1 {
	background-blend-mode: <?php echo esc_attr(get_theme_mod( 'footer_background_blendmode_select' ) ); ?>;
}
<?php } ?>
<?php 

	if(class_exists('WooCommerce')) {
		if(is_shop()) {?>
			.woocommerce-page ul.products li.product {
				margin-bottom: 0;
			}
			@media (min-width: 576px) and (max-width: 767px) {
				.woocommerce-page ul.products[class*=columns-] li.product {
					margin-bottom: 0;
				}
			}
			@media (max-width: 767px) {
				.karx-product-list-wrapper .karx-product-list-content {
					text-align: center;
				}
			}
		<?php } ?>
		<?php
		if(is_product()) {?>
			ul.products.columns-3 {
				justify-content: center;
				grid-gap: 0;
				margin: 0 -15px;
			}
			.woocommerce section.related.products ul.products li {
				width: calc(33.33% - 30px);
				margin: 0 15px;
			}
			@media (max-width: 767px) {
				.woocommerce section.related.products ul.products li {
					width: 100%;
					margin: 0 15px;
				}
			}
			@media (min-width: 576px) and (max-width: 767px) {
				.woocommerce section.related.products ul.products li {
					width: calc(50% - 30px);
					margin: 0 15px;
				}
				.karx-our-products-hover-wrapper {
					padding: 30px 25px;
					margin: 0;
				}
			}
		<?php }
	}

?>
</style>
<?php }

add_action('wp_head','karx_customizer_styling');

?>