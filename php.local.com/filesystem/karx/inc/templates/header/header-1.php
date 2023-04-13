<?php 
    /*
    cmt_section_header_topbar_1: start section topbar 1
    */
    $logo_size = get_theme_mod( 'logo_size', __('144px', 'karx') );
    $tp_toolkit_topbar_switch = get_theme_mod( 'tp_toolkit_topbar_switch', false );
    $tp_toolkit_header_main_right_switch = get_theme_mod( 'tp_toolkit_header_main_right_switch', false );
    $tp_toolkit_header_top_welcome_text_switch = get_theme_mod( 'tp_toolkit_header_top_welcome_text_switch',true );
    $tp_toolkit_header_top_number_switch = get_theme_mod( 'tp_toolkit_header_top_number_switch', true );
    $tp_toolkit_header_top_mail_switch = get_theme_mod( 'tp_toolkit_header_top_mail_switch', true );
    $tp_toolkit_header_lang_switch = get_theme_mod( 'tp_toolkit_header_lang_switch', true );
    $tp_toolkit_header_cart_switch = get_theme_mod( 'tp_toolkit_header_cart_switch', true );
    $tp_toolkit_header_bar_switch = get_theme_mod( 'tp_toolkit_header_bar_switch', true );
    $tp_toolkit_header_btn_switch = get_theme_mod( 'tp_toolkit_header_btn_switch', true );
    $tp_toolkit_header_top_number = get_theme_mod( 'tp_toolkit_header_top_number', __( '+800-123-4567 6587', 'karx' ) );
    $tp_toolkit_header_top_number_link = get_theme_mod( 'tp_toolkit_header_top_number_link', __( '123345789', 'karx' ) );
    $tp_toolkit_header_top_welcome_text = get_theme_mod( 'tp_toolkit_header_top_welcome_text', __( 'Wellcome Our Karox Cleaning Company', 'karx' ) );
    $tp_toolkit_header_top_mail = get_theme_mod( 'tp_toolkit_header_top_mail', __( 'Info@Example.Com', 'karx' ) );
    $tp_toolkit_header_top_mail_link = get_theme_mod( 'tp_toolkit_header_top_mail_link', __( 'Info@Example.Com', 'karx' ) );
    $tp_toolkit_header_top_btn_text = get_theme_mod( 'tp_toolkit_header_top_btn_text', __( 'Lats Talk', 'karx' ) );
    $tp_toolkit_header_top_btn_link = get_theme_mod( 'tp_toolkit_header_top_btn_link', __( '#', 'karx' ) );
    $tp_toolkit_menu_col = $tp_toolkit_header_main_right_switch ? 'col-xxl-7 col-xl-6 col-lg-7 d-none d-lg-block text-lg-center' : 'col-xxl-10 col-xl-10 col-lg-9 d-none d-lg-block text-end';
    $tp_toolkit_header_main_button_text = get_theme_mod( 'tp_toolkit_header_main_button_text', __('Get A Quote', 'karx') );
    $tp_toolkit_header_main_button_link = get_theme_mod( 'tp_toolkit_header_main_button_link', __('#', 'karx') );
?>
<!-- karx-header-area-start -->
<header>
    <div class="karx-header-area-2">
        <?php if( !empty($tp_toolkit_topbar_switch) ) : ?>
        <div class="karx-top-header-area">
            <div class="container-fluid heaer-costum-container">
                <div class="row g-0 align-items-center">
                    <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12 col-sm-9">
                        <?php if(!empty($tp_toolkit_header_top_welcome_text && $tp_toolkit_header_top_welcome_text_switch)) : ?>
                        <div class="karx-top-wlc-text lh-30 text-center text-sm-start text-md-center text-xl-start">
                            <p><?php echo esc_html($tp_toolkit_header_top_welcome_text); ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-7 col-sm-9 d-none d-md-inline-block">
                        <div class="karx-top-address-wrapper d-flex justify-content-xl-around justify-content-lg-between">
                            <?php if(!empty($tp_toolkit_header_top_number && $tp_toolkit_header_top_number_switch)) : ?>
                            <div class="karx-top-nember mr-25">
                                <a href="tel:<?php echo esc_attr($tp_toolkit_header_top_number_link); ?>"><i class="fas fa-phone-alt"></i> 
                                <?php echo esc_html($tp_toolkit_header_top_number); ?></a>
                            </div>
                            <?php endif; ?>
                            <?php if(!empty($tp_toolkit_header_top_mail_switch && $tp_toolkit_header_top_mail)) : ?>
                            <div class="karx-top-mail">
                                <a href="mailto:<?php echo esc_url($tp_toolkit_header_top_mail_link) ? esc_url($tp_toolkit_header_top_mail_link):''; ?>"><i class="fas fa-envelope"></i>
                                    <?php echo esc_html($tp_toolkit_header_top_mail); ?></a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-5 col-md-5 col-sm-3 d-flex justify-content-end">
                        <?php if(!empty($tp_toolkit_header_lang_switch)) : ?>
                        <div class="karx-top-lan-wrapper mr-20 d-none d-md-inline-block">
                            <select class="karx-top-lan">
                                <option value="<?php echo esc_attr__('language', 'karx'); ?>"><?php echo esc_html__('Language', 'karx'); ?></option>
                                <option value="<?php echo esc_attr__('bangla', 'karx'); ?>"><?php echo esc_html__('Bangla', 'karx'); ?></option>
                                <option value="<?php echo esc_attr__('english', 'karx'); ?>"><?php echo esc_html__('English', 'karx'); ?></option>
                            </select>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($tp_toolkit_header_btn_switch && $tp_toolkit_header_top_btn_text)) : ?>
                        <div class="karx-top-btn-wrapper">
                            <a class="karx-top-btn" href="<?php echo esc_url($tp_toolkit_header_top_btn_link)? esc_url($tp_toolkit_header_top_btn_link): ''; ?>"><?php echo esc_html($tp_toolkit_header_top_btn_text); ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="karx-main-header-area">
            <div class="container-fluid heaer-costum-container">
                <div class="karx-main-header-wrapper">
                    <div class="row align-items-center g-0">
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-6">
                            <div class="karx-logo-area-2">
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="karx-logo" >
                                    <?php karx_header_logo(); ?>
                                </a>
                            </div>
                        </div>
                        <div class="<?php echo esc_attr($tp_toolkit_menu_col); ?>">
                            <div class="karx-main-menu-wrapper">
                                <div class="karx-main-menu">
                                    <nav id="main-menu">
                                        <?php karx_header_menu(); ?>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <?php if(!empty($tp_toolkit_header_main_right_switch)) : ?>
                        <div class="col-xxl-3 col-xl-4 col-lg-2 col-6  d-none d-lg-block">
                            <div class="karx-main-header-right">
                                <?php if(!empty($tp_toolkit_header_main_button_text)) : ?>
                                <div class="karx-quote karx-quote-2 d-none d-xl-inline-block">
                                    <a class="quote-dropdown" href="<?php echo esc_url($tp_toolkit_header_main_button_link); ?>"><?php echo esc_html($tp_toolkit_header_main_button_text); ?></a>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($tp_toolkit_header_cart_switch)) : ?>
                                <div class="karx-lan-area-2 ml-30">
                                    <a class="karx-shopping-icon" href="<?php echo esc_url('#'); ?>"><i
                                            class="fal fa-shopping-cart"></i>
                                        <span class="shopping-count"><?php echo esc_html__('0', 'karx'); ?></span>
                                    </a>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($tp_toolkit_header_bar_switch)) : ?>
                                <div class="karx-header-bar ml-30">
                                    <a href="<?php echo esc_url('#'); ?>" class="karx-header-bar-btn side-toggle">
                                        <span class="karx-header-bar-line karx-header-bar-line-1"></span>
                                        <span class="karx-header-bar-line karx-header-bar-line-2"></span>
                                        <span class="karx-header-bar-line karx-header-bar-line-3"></span>
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($tp_toolkit_header_bar_switch)) : ?>
                        <div class="col-6 d-lg-none">
                            <div class="karx-header-bar text-end">
                                <div class="d-inline-block">
                                    <a href="<?php echo esc_url('#'); ?>" class="karx-header-bar-btn side-toggle">
                                        <span class="karx-header-bar-line karx-header-bar-line-1"></span>
                                        <span class="karx-header-bar-line karx-header-bar-line-2"></span>
                                        <span class="karx-header-bar-line karx-header-bar-line-3"></span>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php karx_side_info(); ?>