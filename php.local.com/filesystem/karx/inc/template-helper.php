<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package karx
 */

/** 
 *
 * karx header
 */

function karx_check_header() {
    $karx_header_style = function_exists( 'get_field' ) ? get_field( 'header_style' ) : NULL;
    $karx_default_header_style = get_theme_mod( 'choose_default_header', 'header-style-1' );

    if ( $karx_header_style == 'header-style-1' && empty($_GET['s']) ) {
        karx_header_style_1();
    } 
    elseif ( $karx_header_style == 'header-style-2' && empty($_GET['s']) ) {
        karx_header_style_2();
    } 
    else {
        /** default header style **/
        if ( $karx_default_header_style == 'header-style-2' ) {
            karx_header_style_2();
        } 
        else {
            karx_header_style_1();
        }
    }

}
add_action( 'karx_header_style', 'karx_check_header', 10 );


// Header deafult
function karx_header_style_1() {
   get_template_part( '/inc/templates/header/header', '1' ); ?>
   <div class="offwrap"></div>
   <!-- sidebar area end -->

<?php
}



/**
 * header style 2
 */
 function karx_header_style_2() { ?>

   <?php get_template_part( '/inc/templates/header/header', '2' );  ?>
   <!-- side info end -->     
   <div class="offwrap"></div>
   <!-- sidebar area end -->

<?php
}

// karx_side_info
function karx_side_info() {

    $tp_toolkit_side_contact_switcher = get_theme_mod('tp_toolkit_side_contact_switcher', true);
    $tp_toolkit_side_social_switcher = get_theme_mod('tp_toolkit_side_social_switcher', true);
    $tp_toolkit_side_lang_switcher = get_theme_mod('tp_toolkit_side_lang_switcher', true);
    $tp_toolkit_side_cart_switcher = get_theme_mod('tp_toolkit_side_cart_switcher', true);
    $tp_toolkit_side_logo = get_theme_mod('tp_toolkit_side_logo', get_template_directory_uri() . '/assets/img/logo/logo.png');
    $tp_toolkit_side_logo_id = attachment_url_to_postid( $tp_toolkit_side_logo );
    if(!empty($tp_toolkit_side_logo_id)) {
        $tp_toolkit_side_logo_alt = get_post_meta($tp_toolkit_side_logo_id , '_wp_attachment_image_alt', true);
    } else {
        $tp_toolkit_side_logo_alt = esc_attr__('image', 'karx');
    }
    $tp_toolkit_side_contact_title = get_theme_mod( 'tp_toolkit_side_contact_title', __( 'Contact Info', 'karx' ) );
    $tp_toolkit_side_contact_address = get_theme_mod( 'tp_toolkit_side_contact_address', __( '12/A, Mirnada City Tower, NYC', 'karx' ) );
    $tp_toolkit_side_contact_phone = get_theme_mod( 'tp_toolkit_side_contact_phone', __( '088889797697', 'karx' ) );
    $tp_toolkit_side_contact_phone_link = get_theme_mod( 'tp_toolkit_side_contact_phone_link', __( '088889797697', 'karx' ) );
    $tp_toolkit_side_mail = get_theme_mod( 'tp_toolkit_side_mail', __( 'info@karx.com', 'karx' ) );
    $tp_toolkit_side_mail_link = get_theme_mod( 'tp_toolkit_side_mail_link',esc_url( 'info@karx.com', 'karx' ) );
    $tp_toolkit_side_social_fb_link = get_theme_mod('tp_toolkit_side_social_fb_link',esc_url('#', 'karx'));
    $tp_toolkit_side_social_twitter_link = get_theme_mod('tp_toolkit_side_social_twitter_link', esc_url('#', 'karx'));
    $tp_toolkit_side_social_linkedin_link = get_theme_mod('tp_toolkit_side_social_linkedin_link', esc_url('#', 'karx'));
    $tp_toolkit_side_social_youtube_link = get_theme_mod('tp_toolkit_side_social_youtube_link', esc_url('#', 'karx'));
    $tp_toolkit_side_btn_text = get_theme_mod('tp_toolkit_side_btn_text',  esc_html__('Get Quote', 'karx'));
    $tp_toolkit_side_btn_url = get_theme_mod('tp_toolkit_side_btn_url',  esc_html__('#', 'karx'));

?>
    
    <!-- sidebar-expand-start -->
    <div class="side-info">
    <div class="offset-widget offset-logo mb-30 pb-20">
        <div class="row align-items-center">
            <div class="col-8">
                <?php if( !empty($tp_toolkit_side_logo) ) : ?>
                <a href="<?php print esc_url( home_url( '/' ) );?>" class="side_logo">
                    <img src="<?php echo esc_url($tp_toolkit_side_logo); ?>" alt="<?php echo esc_attr($tp_toolkit_side_logo_alt); ?>">
                </a>
                <?php endif; ?>
            </div>
            <div class="col-4 text-end"><button id="nav-close" class="side-info-close"><i
                class="fal fa-times"></i></button></div>
        </div>
    </div>
    <div class="mobile-menu fix"></div>
    <div class="contact-infos mt-40">
        <div class="contact-list mobile_contact mb-40">
            <?php if(!empty($tp_toolkit_side_contact_title)) : ?>
                <h4><?php echo esc_html($tp_toolkit_side_contact_title); ?></h4>
            <?php endif; ?>
            <?php if(!empty($tp_toolkit_side_contact_address)) : ?>
                <span class="sidebar-address"><i class="fal fa-map-marker-alt"></i><span><?php echo esc_html($tp_toolkit_side_contact_address); ?></span> </span>
            <?php endif; ?>
            <?php if(!empty($tp_toolkit_side_contact_phone)) : ?>
            <a class="karx-contact-link" href="tel:<?php echo esc_attr($tp_toolkit_side_contact_phone_link); ?>"><i class="fal fa-phone"></i><span><?php echo esc_html($tp_toolkit_side_contact_phone); ?></span></a>
            <?php endif; ?>
            <?php if(!empty($tp_toolkit_side_mail)) : ?>
            <a href="mailto:<?php echo esc_url($tp_toolkit_side_mail_link); ?>" class="theme-3 karx-side-mail"><i
                class="far fa-envelope"></i><span><span><?php echo esc_html($tp_toolkit_side_mail); ?></span></span></a>
            <?php endif; ?>
        </div>
        <?php if(!empty($tp_toolkit_side_social_switcher)) : ?>
        <div class="top_social footer_social offset_social mt-40 mb-30">
            <?php if(!empty($tp_toolkit_side_social_fb_link)) : ?>
                <a href="<?php echo esc_url($tp_toolkit_side_social_fb_link); ?>" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
            <?php endif; ?>
            <?php if(!empty($tp_toolkit_side_social_twitter_link)) : ?>
            <a href="<?php echo esc_url($tp_toolkit_side_social_fb_link); ?>" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
            <?php endif; ?>
            <?php if(!empty($tp_toolkit_side_social_linkedin_link)) : ?>
            <a href="<?php echo esc_url($tp_toolkit_side_social_linkedin_link); ?>" target="_blank" class="linkedin"><i class="fab fa-linkedin"></i></a>
            <?php endif; ?>
            <?php if(!empty($tp_toolkit_side_social_youtube_link)) : ?>
            <a href="<?php echo esc_url($tp_toolkit_side_social_youtube_link); ?>" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
    <div class="side-extra-addition">
        <div class="karx-lan-area mb-30">
            <div class="karx-lan">
                <?php if(!empty($tp_toolkit_side_cart_switcher)) : ?>
                <a class="karx-shopping-icon" href="<?php echo esc_url('#'); ?>"><i class="fal fa-shopping-cart"></i>
                    <span class="shopping-count"><?php echo esc_html__('0', 'karx'); ?></span>
                </a>
                <?php endif; ?>
                <?php if(!empty($tp_toolkit_side_lang_switcher)) : ?>
                <select class="karx-lan-select ml-15">
                    <option value="<?php echo esc_attr__('language', 'karx'); ?>"><?php echo esc_html__('Language', 'karx'); ?></option>
                    <option value="<?php echo esc_attr__('bangla', 'karx'); ?>"><?php echo esc_html__('Bangla', 'karx'); ?></option>
                    <option value="<?php echo esc_attr__('english', 'karx'); ?>"><?php echo esc_html__('English', 'karx'); ?></option>
                </select>
                <?php endif; ?>
            </div>
        </div>
        <?php if(!empty($tp_toolkit_side_btn_text)) : ?>
        <div class="karx-quote">
            <a class="quote-dropdown pt-20 pb-20" href="<?php echo esc_url($tp_toolkit_side_btn_url); ?>"><?php echo esc_html($tp_toolkit_side_btn_text); ?> <i
                class="fal fa-long-arrow-right"></i></a>
        </div>
        <?php endif; ?>
    </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <!-- sidebar-expand-end -->
<?php }


/**
 * [karx_language_list description]
 * @return [type] [description]
 */
function _karx_language( $mar ) {
    return $mar;
}
function karx_language_list() {

    $mar = '';
    $languages = apply_filters( 'wpml_active_languages', NULL, 'orderby=id&order=desc' );
    if ( !empty( $languages ) ) {
        $mar = '<ul>';
        foreach ( $languages as $lan ) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<ul>';
        $mar .= '<li><a href="#">' . esc_html__( 'USA', 'karx' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'UK', 'karx' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'CA', 'karx' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'AU', 'karx' ) . '</a></li>';
        $mar .= ' </ul>';
    }
    print _karx_language( $mar );
}
add_action( 'karx_language', 'karx_language_list' );

/*
header_logo
*/
function karx_header_logo() {
    ?>
    <?php
    $logo_image = get_theme_mod( 'logo_image', get_template_directory_uri() . '/assets/images/logo/logo.png');
    $logo_text = get_theme_mod( 'logo_text', __('KARX', 'karx') );
    $tp_toolkit_header_main_logoset = get_theme_mod( 'tp_toolkit_header_main_logoset', __('image', 'karx') );
    ?>

      <?php
          if ( has_custom_logo() ) {
              the_custom_logo();
          } else {
            if($tp_toolkit_header_main_logoset == 'image') {
                if(!empty($logo_image)) : ?>
                    <img src="<?php echo esc_url($logo_image) ?>" alt="<?php echo esc_attr__('KARX', 'karx'); ?>">
                <?php endif;
            } else { ?>
                <?php if(!empty($logo_text)) : ?>
                    <span><?php echo esc_html($logo_text); ?></span>
                <?php endif; ?>
              <?php
            }
          } 
      ?>
    <?php
}
function karx_header2_logo() {
    ?>
    <?php
        $logo_image2 = get_theme_mod( 'logo_image2', get_template_directory_uri() . '/assets/images/logo/logo.png');
        $logo_text2 = get_theme_mod( 'logo_text2', __('karx', 'karx') );
        $tp_toolkit_header2_main_logoset = get_theme_mod( 'tp_toolkit_header2_main_logoset', __('image', 'karx') );
    ?>

      <?php
          if ( has_custom_logo() ) {
              the_custom_logo();
          } else {
            if($tp_toolkit_header2_main_logoset == 'image') {
                if(!empty($logo_image2)) : ?>
                    <img src="<?php echo esc_url($logo_image2) ?>" alt="<?php echo esc_attr__('KARX', 'karx'); ?>">
                <?php endif;
            } else { ?>
                <?php if(!empty($logo_text2)) : ?>
                    <span><?php echo esc_html($logo_text2); ?></span>
                <?php endif; ?>
              <?php
            }
          } 
      ?>
    <?php
}

// header logo
function karx_header_sticky_logo() {?>
    <?php
        $karx_logo_black = get_template_directory_uri() . '/assets/img/logo/logo-black.png';
        $karx_secondary_logo = get_theme_mod( 'seconday_logo', $karx_logo_black );
    ?>
      <a class="sticky-logo" href="<?php print esc_url( home_url( '/' ) );?>">
          <img src="<?php print esc_url( $karx_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'karx' );?>" />
      </a>
    <?php
}

function karx_mobile_logo() {
    // side info
    $karx_mobile_logo_hide = get_theme_mod( 'karx_mobile_logo_hide', false );

    $karx_site_logo = get_theme_mod( 'logo', get_template_directory_uri() . '/assets/img/logo/logo.png' );

    ?>

    <?php if ( !empty( $karx_mobile_logo_hide ) ): ?>
    <div class="side__logo mb-25">
        <a class="sideinfo-logo" href="<?php print esc_url( home_url( '/' ) );?>">
            <img src="<?php print esc_url( $karx_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'karx' );?>" />
        </a>
    </div>
    <?php endif;?>



<?php }


/**
 * [karx_header_menu description]
 * @return [type] [description]
 */
function karx_header_menu() {
    ?>
    <?php
        $karx_menu = wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'menu_id'       => '',
            'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
            'walker'         => new WP_Bootstrap_Navwalker,
            'echo'           => false
        ] );
        echo str_replace('menu-item-has-children', 'menu-item-has-children has-dropdown-menu', $karx_menu);
    ?>
    <?php
}
function karx_copyright_menu() {
    ?>
    <?php
        $karx_copyright_menu = wp_nav_menu( [
            'theme_location' => 'copyright_menu',
        ] );
    ?>
    <?php
}
function karx_header_menu_2() {
    ?>
    <?php
        $karx_menu_2 = wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
            'walker'         => new WP_Bootstrap_Navwalker,
            'echo'           => false
        ] );
        echo str_replace('menu-item-has-children', 'menu-item-has-children dropdown', $karx_menu_2);
    ?>
    <?php
}

/**
 * [karx_footer_menu description]
 * @return [type] [description]
 */
function karx_footer_menu() {
    wp_nav_menu( [
        'theme_location' => 'footer-menu',
        'menu_class'     => '',
        'container'      => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
    ] );
}
function karx_footer_social() {
    $tp_social_list_widget = get_theme_mod('tp_social_list_widget');
    ?>
    <?php if(!empty($tp_social_list_widget)) : ?>
        <?php foreach($tp_social_list_widget as $karx_social) : ?>
            <?php if(!empty($karx_social['social_label'])) : ?>
                <a href="<?php echo esc_attr($karx_social['social_url']) ? esc_url($karx_social['social_url']): ''; ?>" target="_blank" class="bottom-footer-social mr-30"><span  data-bg-color="<?php echo esc_attr($karx_social['social_color']); ?>" class="footer-social-icon mr-10"><i  class="icofont-<?php echo esc_attr($karx_social['social_icon']) ? esc_attr($karx_social['social_icon']): '';?>"></i></span><?php echo esc_html($karx_social['social_label']); ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
<?php }

/**
 *
 * karx footer
 */

function karx_check_footer() {
    $karx_footer_style = function_exists( 'get_field' ) ? get_field( 'footer_style' ) : NULL;
    $karx_default_footer_style = get_theme_mod( 'choose_default_footer', 'footer-style-1' );

    if ( $karx_footer_style == 'footer-style-1' ) {
        karx_footer_style_1();
    } elseif ( $karx_footer_style == 'footer-style-2' ) {
        karx_footer_style_2();
    }else {
        /** default footer style **/
        if ( $karx_default_footer_style == 'footer-style-2' ) {
            karx_footer_style_2();
        }else {
            karx_footer_style_1();
        }

    }
}
add_action( 'karx_footer_style', 'karx_check_footer', 10 );

/**
 * footer  style_defaut
 */
function karx_footer_style_1() { ?>
    <?php get_template_part( '/inc/templates/footer/footer', '1' );
    ?>

<?php
}

/**
 * footer  style 2
 */
function karx_footer_style_2() { ?>
    <?php get_template_part( '/inc/templates/footer/footer', '2' ); ?>
<?php
}

// karx_copyright
function karx_copyright_text() {
    $karx_copyright = get_theme_mod('karx_copyright', __('© 2022 karx Designed by ThemePhi', 'karx'));
    ?>
        <?php if( !empty($karx_copyright) ) : ?>
            <p class="mb-0"><?php print esc_html($karx_copyright); ?></p>
        <?php endif; ?>
<?php }
function karx_copyright_2_text() {
    $karx_copyright_2 = get_theme_mod('karx_copyright_2', __('© 2022 karx Designed by ThemePhi', 'karx'));
    ?>
        <?php if( !empty($karx_copyright_2) ) : ?>
            <p class="mb-0"><?php print esc_html($karx_copyright_2); ?></p>
        <?php endif; ?>
<?php }

/**
 * [karx_breadcrumb_func description]
 * @return [type] [description]
 */
function karx_breadcrumb_func() {
    global $post;  
    $breadcrumb_class = '';
    $breadcrumb_show = 1;
    $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image') : '';
    $select_breadcrumb_page = get_theme_mod('select_breadcrumb_page');
    $search_queried_result = get_search_query();
     $args = array(
        'posts_per_page' => -1,
        'post_type'      => 'page',
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    $post_ids = array();
    if($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();
            array_push($post_ids, get_the_ID());
        }
        wp_reset_query();
    }
      function get_breadcrumb_page_by_id_specific2($id)
       {
          $args = array(
              'posts_per_page' => -1,
              'post_type'      => 'page',
              'post_status' => 'publish'
          );
          $query = new WP_Query($args);
          $post_ids = array();
          if($query->have_posts()) {
              while($query->have_posts()) {
                  $query->the_post();
                  array_push($post_ids, get_the_ID());
              }
              wp_reset_query();
          }
          return $post_ids[$id];
      }
      for($i = 0;$i<count($post_ids);$i+=1) {
        $breadcrumb_title_from_page[get_breadcrumb_page_by_id_specific2($i)] = '';
        // fetch title
        $breadcrumb_title_specific  = get_theme_mod('breadcrumb_title_'.get_breadcrumb_page_by_id_specific2($i).'');
        $breadcrumb_title_from_page[get_breadcrumb_page_by_id_specific2($i)] .= get_theme_mod('breadcrumb_title_'.get_breadcrumb_page_by_id_specific2($i).'');
      }
      $title_from_customizer = get_the_title();
      if(!is_home() && !is_archive() && !is_single() && !is_404() && !is_search() && !is_privacy_policy()) {
        $breadcrumb_title_specific = get_theme_mod('breadcrumb_title_'.$select_breadcrumb_page.'');
        $breadcrumb_title = $breadcrumb_title_specific;
        $title_from_customizer = wp_kses_post( $breadcrumb_title_from_page[get_queried_object_id()]);
        $title_from_customizer = $title_from_customizer ? $title_from_customizer : wp_kses_post(get_the_title());
      }
      
      else if(is_single()) {
        $title_from_customizer = wp_kses_post(get_the_title());
      }
      else {

        $title_from_customizer_blog = get_theme_mod('breadcrumb_title_blog',__( 'Blog', 'karx' ));
        $title_from_customizer = __('Blog', 'karx');
        $title_from_customizer = $title_from_customizer_blog ? $title_from_customizer_blog : $title_from_customizer;
      }
      if (is_archive() ) {
          $title_from_customizer = get_the_archive_title();
      }
      $searched_query = array();
      if(is_404()) {
            $searched_query = __('404', 'karx');    
            $title_from_customizer = 'Search Results for : '.$searched_query;
        }
      if(is_search()) {
        $searched_query = get_search_query();
        if(empty($searched_query)) {
            $searched_query = 'All';
        }
        $title_from_customizer = 'Search Results for : '.$searched_query;
      }
      
     

      $_id = get_the_ID();
      $is_breadcrumb = function_exists( 'get_field' ) ? get_field( 'is_it_invisible_breadcrumb', $_id ) : '';
      if( !empty($_GET['s']) ) {
        $is_breadcrumb = null;
      }
      if ( empty( $is_breadcrumb ) && $breadcrumb_show == 1 ) {

      $bg_img_from_page = function_exists('get_field') ? get_field('breadcrumb_background_image',$_id) : '';
      $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image',$_id) : '';

      // get_theme_mod
      $breadcrumb_bg_color = get_theme_mod( 'breadcrumb_bg_color' );
      $bg_img_url = get_template_directory_uri() . '/assets/img/page-title/page-title.jpg';
      $breadcrumb_bg_img = get_theme_mod( 'breadcrumb_bg_img' );

       $breadcrumb_padding_top_field = function_exists('get_field') ? get_field('karx_breadcrumb_padding_top') : '';
       $breadcrumb_padding_bottom_field = function_exists('get_field') ? get_field('karx_breadcrumb_padding_bottom') : '';

        $breadcrumb_padding_top_customizer = get_theme_mod('breadcrumb_padding_top', 190);
        $breadcrumb_padding_bottom_customizer = get_theme_mod('breadcrumb_padding_bottom', 200);

        if($breadcrumb_padding_top_field) {
          $breadcrumb_padding_top = $breadcrumb_padding_top_field;
        } else {
          $breadcrumb_padding_top = $breadcrumb_padding_top_customizer;
        }

        if($breadcrumb_padding_bottom_field) {
          $breadcrumb_padding_bottom = $breadcrumb_padding_bottom_field;
        } else {
          $breadcrumb_padding_bottom = $breadcrumb_padding_bottom_customizer;
        }
      $breadcrumb_overlay_class = '';
      if ( $hide_bg_img && empty($_GET['s']) ) {
          $breadcrumb_bg_img = '';
      } else {
          $breadcrumb_bg_img = !empty( $bg_img_from_page ) ? $bg_img_from_page['url'] : $breadcrumb_bg_img;
          $breadcrumb_overlay_class = 'breadcrumb_overlay';
      }
    ?>
    <!-- karx-breadcrumb-area-start -->
    <div class="karx-breadcrumb-area pt-190 pb-200 <?php print esc_attr( $breadcrumb_overlay_class );?>" data-bg-color="<?php print esc_attr($breadcrumb_bg_color); ?>" data-background="<?php print esc_attr($breadcrumb_bg_img);?>" data-top-space="<?php print esc_attr($breadcrumb_padding_top); ?>px" data-bottom-space="<?php print esc_attr($breadcrumb_padding_bottom); ?>px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-section">
                        <h2 class="karx-breadcrumb-title"><?php echo wp_strip_all_tags($title_from_customizer); ?></h2>
                        <nav class="breadcrumb-txt breadcrumb-trail breadcrumbs">
                            <?php 
                                if(function_exists('bcn_display')) {
                                    $display_text = bcn_display(true);
                                    if($searched_query == 'All') {
                                        $display_text .= $searched_query.'"';
                                    }
                                    $allowed = array( 
                                        'strong' => array(),
                                        'em'     => array(),
                                        'b'      => array(),
                                        'i'      => array(),
                                        'span'      => array(),
                                        'meta'      => array(),
                                        'bdi'      => array(),
                                        'del'      => array(),
                                        'div'      => array(),
                                        'a' => array(
                                            'href' => array(),
                                            'title' => array()
                                        ),
                                    );
                                    echo wp_kses($display_text, $allowed);
                                    unset($display_text);
                                }
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- karx-breadcrumb-area-end -->
    <?php
    }
}

add_action( 'karx_before_main_content', 'karx_breadcrumb_func' );

// karx_search_form
function karx_search_form() {
    ?>
      <!-- modal-search-start -->
      <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
         <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
         </button>
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <form method="get" action="<?php print esc_url( home_url( '/' ) );?>" >
                     <input type="search" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Enter Your Keyword', 'karx' );?>">
                     <button>
                        <i class="fa fa-search"></i>
                     </button>
               </form>
            </div>
         </div>
      </div>
      <!-- modal-search-end -->
   <?php
}

add_action( 'karx_before_main_content', 'karx_search_form' );


/**
 *
 * pagination
 */
if ( !function_exists( 'karx_pagination' ) ) {

    function _karx_pagi_callback( $pagination ) {
        return $pagination;
    }

    //page navegation
    function karx_pagination( $prev, $next, $pages, $args ) {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ( $pages == '' ) {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if ( !$pages ) {
                $pages = 1;
            }

        }

        $pagination = [
            'base'      => add_query_arg( 'paged', '%#%' ),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ( $wp_rewrite->using_permalinks() ) {
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
        }

        if ( !empty( $wp_query->query_vars['s'] ) ) {
            $pagination['add_args'] = ['s' => get_query_var( 's' )];
        }

        $pagi = '';
        if ( paginate_links( $pagination ) != '' ) {
            $paginations = paginate_links( $pagination );
            $pagi .= '<div class="def-pagination d-flex mb-50">';
            foreach ( $paginations as $key => $pg ) {
                $pagi .=$pg ;
            }
            $pagi .= '</div>';
        }

        print _karx_pagi_callback( $pagi );
    }
}



