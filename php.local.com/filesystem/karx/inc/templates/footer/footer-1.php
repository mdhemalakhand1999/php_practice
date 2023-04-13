<?php 
$tp_toolkit_footer_logo = get_theme_mod( 'tp_toolkit_footer_logo' );

/*
cmt_section_footer_1: start section Footer 1
*/
$footer_bg_image_custom_field = function_exists('get_field') ? get_field('karx_footer_bg') : '';
$footer_bg_image_customizer = get_theme_mod('footer_bg_image');
$footer_bg_image = $footer_bg_image_custom_field ? $footer_bg_image_custom_field['url'] : $footer_bg_image_customizer;
$footer_bg_color_custom_field = function_exists('get_field') ? get_field('karx_footer_bg_color') : '';
$footer_bg_color_customizer = get_theme_mod('footer_bg_color', __('#1a213e', 'karx') );
$footer_bg_color = $footer_bg_color_custom_field ? $footer_bg_color_custom_field: $footer_bg_color_customizer;
$tp_toolkit_copyright = get_theme_mod('tp_toolkit_copyright', esc_html__( '© 2022 Designed by ThemePhi', 'karx' ));
 // footer_columns
 $footer_columns = 0;
 $footer_widget_limit = get_theme_mod( 'footer_widget_limit', 4 );
 $footer_widget_column = get_theme_mod( 'footer_widget_column', 4 );

 for ( $num = 1; $num <= $footer_widget_limit; $num++ ) {
     if ( is_active_sidebar( 'footer-' . $num ) ) {
         $footer_columns++;
     }
 }

 switch ( $footer_widget_limit ) {
     case 2:
        switch($footer_widget_column) {
            case 2:
                $footer_class[1] = 'col-lg-6 col-md-6';
                $footer_class[2] = 'col-lg-6 col-md-6';
                $footer_class[3] = 'col-lg-6 col-md-6';
                $footer_class[4] = 'col-lg-6 col-md-6';
                break;
            default:
                $footer_class[1] = 'col-lg-6 col-md-6';
                $footer_class[2] = 'col-lg-6 col-md-6';
                $footer_class[3] = 'col-lg-6 col-md-6';
                $footer_class[4] = 'col-lg-6 col-md-6';
            break;
        }
        break;
    case 3:
        switch($footer_widget_column) {
            case 2:
                $footer_class[1] = 'col-lg-6 col-md-6';
                $footer_class[2] = 'col-lg-6 col-md-6';
                $footer_class[3] = 'col-lg-6 col-md-6';
                $footer_class[4] = 'col-lg-6 col-md-6';
                break;
            case 3:
                $footer_class[1] = 'col-xl-4 col-md-6 col-sm-12 col-12';
                $footer_class[2] = 'col-xl-4 col-md-6 col-sm-12 col-12';
                $footer_class[3] = 'col-xl-4 col-md-6 col-sm-12 col-12';
                $footer_class[4] = 'col-xl-4 col-md-6 col-sm-12 col-12';
                break;
            default:
                $footer_class[1] = 'col-xl-4 col-md-6 col-sm-12 col-12';
                $footer_class[2] = 'col-xl-4 col-md-6 col-sm-12 col-12';
                $footer_class[3] = 'col-xl-4 col-md-6 col-sm-12 col-12';
                $footer_class[4] = 'col-xl-4 col-md-6 col-sm-12 col-12';
            break;
        }
        break;
    case 4:
        switch($footer_widget_column) {
            case 2:
                $footer_class[1] = 'col-lg-6 col-md-6';
                $footer_class[2] = 'col-lg-6 col-md-6';
                $footer_class[3] = 'col-lg-6 col-md-6';
                $footer_class[4] = 'col-lg-6 col-md-6';
                break;
            case 3:
                $footer_class[1] = 'col-xl-4 col-md-6 col-sm-12 col-12';
                $footer_class[2] = 'col-xl-4 col-md-6 col-sm-12 col-12';
                $footer_class[3] = 'col-xl-4 col-md-6 col-sm-12 col-12';
                $footer_class[4] = 'col-xl-4 col-md-6 col-sm-12 col-12';
                break;
            case 4:
                $footer_class[1] = 'col-xl-3 col-md-6 col-sm-12 col-12';
                $footer_class[2] = 'col-xl-3 col-md-6 col-sm-12 col-12';
                $footer_class[3] = 'col-xl-3 col-md-6 col-sm-12 col-12';
                $footer_class[4] = 'col-xl-3 col-md-6 col-sm-12 col-12';
                break;
            default:
                $footer_class[1] = 'col-xl-3 col-md-6 col-sm-12 col-12';
                $footer_class[2] = 'col-xl-3 col-md-6 col-sm-12 col-12';
                $footer_class[3] = 'col-xl-3 col-md-6 col-sm-12 col-12';
                $footer_class[4] = 'col-xl-3 col-md-6 col-sm-12 col-12';
            break;
        }
        break;
     default:
         $footer_class = 'col-xl-3 col-md-6 col-sm-12 col-12';
         break;
 } 
 
 ?>
 <!-- footer-area-start -->
 <footer class="karx-footer-area karx-foter-1" data-background="<?php echo esc_url($footer_bg_image); ?>" data-bg-color="<?php echo esc_attr($footer_bg_color); ?>">
    <?php if ( is_active_sidebar('footer-1') OR is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') ): ?>
    <div class="container-fluid heaer-costum-container pb-60 pt-120">
        <div class="karx-footer-content ">
        <div class="main-footer">
            <div class="row">
                <?php
                for ( $num = 1; $num <= $footer_columns; $num++ ) {
                    if ( !is_active_sidebar( 'footer-' . $num ) ) {
                        continue;
                    }
                    print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                    dynamic_sidebar( 'footer-' . $num );
                    print '</div>';
                }
                ?>

            </div>
        </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="container-fluid heaer-costum-container">
        <?php if(!empty($tp_toolkit_copyright)) :
            $has_copyright_menu = has_nav_menu('copyright_menu');
            $has_copyright_center = $has_copyright_menu ? __('text-lg-start text-sm-center', 'karx'): __('text-center', 'karx');
            $copyright_center = $has_copyright_menu ? __('col-xl-6 col-lg-6 col-md-12', 'karx'): __('col-12 ', 'karx');    
        ?>
        <div class="footer-copyright-border pt-25 pb-25">
            <div class="row align-items-center">
                <div class="<?php echo esc_attr($copyright_center); ?>">
                    <div class="karx-copyright-text <?php echo esc_attr($has_copyright_center); ?>">
                        <p><?php echo esc_html($tp_toolkit_copyright); ?></p>
                    </div>
                </div>
                <?php if(!empty($has_copyright_menu)) : ?>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="karx-copyright-menu text-lg-end text-sm-center ">
                        <?php karx_copyright_menu(); ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</footer>
<!-- footer-area-end -->