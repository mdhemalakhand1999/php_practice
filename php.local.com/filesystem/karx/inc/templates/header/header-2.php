<?php 
    /*
    cmt_section_header_2: start header 2 section
    */
    
    $tp_toolkit_topbar_switch_2 = get_theme_mod( 'tp_toolkit_topbar_switch_2', false );
    $tp_toolkit_header_social_switch_2 = get_theme_mod( 'tp_toolkit_header_social_switch_2', true );
    $tp_toolkit_header_search_switch_2 = get_theme_mod( 'tp_toolkit_header_search_switch_2', true );
    $tp_toolkit_header_main_cart_switch_2 = get_theme_mod( 'tp_toolkit_header_main_cart_switch_2', true );
    $tp_toolkit_header_main_lang_switch_2 = get_theme_mod( 'tp_toolkit_header_main_lang_switch_2', true );
    $tp_toolkit_header_top_social_label_2 = get_theme_mod( 'tp_toolkit_header_top_social_label_2', esc_html__('Social Label', 'karx') );
    $tp_toolkit_header_top_fb_link_2 = get_theme_mod( 'tp_toolkit_header_top_fb_link_2', esc_url_raw('#') );
    $tp_toolkit_header_top_twitter_link_2 = get_theme_mod( 'tp_toolkit_header_top_twitter_link_2', esc_url_raw('#') );
    $tp_toolkit_header_top_linkedin_link_2 = get_theme_mod( 'tp_toolkit_header_top_linkedin_link_2', esc_url_raw('#') );
    $tp_toolkit_header_top_youtube_link_2 = get_theme_mod( 'tp_toolkit_header_top_youtube_link_2', esc_url_raw('#') );
    $tp_toolkit_header_main_btn_text_2 = get_theme_mod( 'tp_toolkit_header_main_btn_text_2', esc_html__('Get Quote', 'karx') );
    $tp_toolkit_header_main_btn_url_2 = get_theme_mod( 'tp_toolkit_header_main_btn_url_2',  esc_url_raw('#') );

?>
<!-- header-area-start -->
<header>
    <div class="karx-header-area karx-hader-1">
        <div class="container-fluid heaer-costum-container">
            <div class="row g-0">
                <div class="col-xxl-2 col-xl-6 col-lg-6 col-md-4 col-6 order-1 order-xxl-0">
                    <div class="karx-logo-area">
                        <a class="karx-logo" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php karx_header2_logo(); ?>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-8 order-0 order-xxl-1">
                    <?php if(!empty($tp_toolkit_topbar_switch_2)) : ?>
                    <div class="karx-top-header-area pr-30 pl-30">
                        <div class="row align-items-center">
                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7 col-sm-6">
                                <?php if(!empty($tp_toolkit_header_social_switch_2)) : ?>
                                <div class="karx-top-header-social-link text-center text-sm-start">
                                    <?php if(!empty($tp_toolkit_header_top_social_label_2)) : ?>
                                        <div class="karx-social-link-label d-inline-block">
                                            <p><?php echo esc_html($tp_toolkit_header_top_social_label_2); ?></p>
                                        </div>
                                    <?php endif; ?>
                                    <div class="karx-social-link">
                                        <?php if(!empty($tp_toolkit_header_top_fb_link_2)) : ?>
                                            <a href="<?php echo esc_url($tp_toolkit_header_top_fb_link_2); ?>"><i class="fab fa-facebook-f"></i></a>
                                        <?php endif; ?>
                                        <?php if(!empty($tp_toolkit_header_top_twitter_link_2)) : ?>
                                            <a href="<?php echo esc_url($tp_toolkit_header_top_twitter_link_2); ?>"><i class="fab fa-twitter"></i></a>
                                        <?php endif; ?>
                                        <?php if(!empty($tp_toolkit_header_top_linkedin_link_2)) : ?>
                                            <a href="<?php echo esc_url($tp_toolkit_header_top_linkedin_link_2); ?>"><i class="fab fa-linkedin-in"></i></a>
                                        <?php endif; ?>
                                        <?php if(!empty($tp_toolkit_header_top_youtube_link_2)) : ?>
                                        <a href="<?php echo esc_url($tp_toolkit_header_top_youtube_link_2); ?>"><i class="fab fa-youtube"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-6 text-end">
                                <?php if(!empty($tp_toolkit_header_search_switch_2)) : ?>
                                <div class="top-header-search-box">
                                    <div class="search-box">
                                        <input class="search-bar" type="search" placeholder="<?php echo esc_attr__('search', 'karx'); ?>">
                                        <a href="<?php echo esc_url('#'); ?>">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="karx-main-header d-none d-lg-block">
                        <div class="row">
                            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9">
                                <div class="karx-main-menu">
                                    <nav id="main-menu" class="mobile-menu">
                                        <?php karx_header_menu_2(); ?>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                                <?php if(!empty($tp_toolkit_header_main_btn_text_2)) : ?>
                                <div class="karx-quote">
                                    <a class="quote-dropdown" href="<?php echo esc_url($tp_toolkit_header_main_btn_url_2); ?>"><?php echo esc_html($tp_toolkit_header_main_btn_text_2); ?> <i
                                            class="fal fa-long-arrow-right"></i></a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-xxl-2 col-xl-6 col-lg-6 col-md-5 col-6 d-flex  order-2 order-xxl-2 justify-content-end d-none d-md-block">
                    <div class="karx-lan-area">
                        <div class="karx-lan">
                            <?php if(!empty($tp_toolkit_header_main_cart_switch_2)) : ?>
                            <a class="karx-shopping-icon" href="<?php echo esc_url('#'); ?>"><i class="fal fa-shopping-cart"></i>
                                <span class="shopping-count"><?php echo esc_html__('0', 'karx'); ?></span>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($tp_toolkit_header_main_lang_switch_2)) : ?>
                            <select class="karx-lan-select ml-15">
                                <option value="<?php echo esc_attr__('language', 'karx'); ?>"><?php echo esc_html__('Language', 'karx'); ?></option>
                                <option value="<?php echo esc_attr__('bangla', 'karx'); ?>"><?php echo esc_html__('Bangla', 'karx'); ?></option>
                                <option value="<?php echo esc_attr__('english', 'karx'); ?>"><?php echo esc_html__('English', 'karx'); ?></option>
                            </select>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 d-lg-none order-3">
                    <div class="menu_bars ">
                        <button class="side-toggle"><i class="far fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->
<?php karx_side_info(); ?>