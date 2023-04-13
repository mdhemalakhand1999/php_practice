<?php
    $post_gallery = function_exists('get_field') ? get_field('post_gallery') : '';
    $categories = get_the_terms( $post->ID, 'category' );
    $tp_toolkit_blog_btn_switch = get_theme_mod('tp_toolkit_blog_btn_switch', true);
    $tp_toolkit_blog_meta_switch = get_theme_mod('tp_toolkit_blog_meta_switch', true);
    $tp_toolkit_blog_author_switch = get_theme_mod('tp_toolkit_blog_author_switch', true);
    $tp_toolkit_blog_date_switch = get_theme_mod('tp_toolkit_blog_date_switch', false);
    $tp_toolkit_blog_comments_switch = get_theme_mod('tp_toolkit_blog_comments_switch', true);
    $tp_toolkit_blog_btn_text = get_theme_mod('tp_toolkit_blog_btn_text', esc_html__('Read More', 'karx'));
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('blog-single-item mb-50 format-gallery'); ?>>
    <?php if ( !empty( $post_gallery ) ): ?>
        <div class="blog-thumb img-effect-white swiper-container karx-blog-box-gallery">
            <div class="swiper-wrapper">
                <?php foreach ( $post_gallery as $image ): ?>
                    <div class="swiper-slide">
                        <a href="<?php echo get_the_permalink(); ?>">
                            <img src="<?php echo esc_url($image['full_image_url']); ?>" alt="<?php echo esc_attr($image['caption']); ?>">
                        </a>
                        <?php if(!empty($tp_toolkit_blog_date_switch)) : ?>
                        <div class="karx-blog-caption-date">
                            <?php print get_the_date('d M', get_the_ID()); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="karx-blog-slider-arrow-wrap">
                <div class="karx-blog-slider-arrow-prev"><i class="fal fa-angle-left"></i></div>
                <div class="karx-blog-slider-arrow-next"><i class="fal fa-angle-right"></i></div>
            </div>
        </div>
    <?php endif;?>
    <div class="blog-content">
        <?php if(!empty($tp_toolkit_blog_meta_switch)) : ?>
        <div class="services-details-meta-box mb-10">
            <div class="services-details-admin-link">
                <?php if(!empty($tp_toolkit_blog_date_switch)) : ?>
                    <span class="has-karx-date-span"><i class="fal fa-calendar"></i><?php echo get_the_date(); ?></span>
                <?php endif; ?>
                <?php if(!empty($tp_toolkit_blog_author_switch)) : ?>
                    <a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><i class="fal fa-user"></i><?php print get_the_author();?></a>
                <?php endif; ?>
                <?php if(!empty($tp_toolkit_blog_comments_switch)) : ?>
                    <a href="<?php comments_link();?>"><i class="fal fa-comments"></i><?php comments_number();?></a>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        <h4 class="blog-title mb-20"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p class="single-blog-p"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
        <?php if(!empty($tp_toolkit_blog_btn_switch)) : ?>
            <?php if(!empty($tp_toolkit_blog_btn_text)) : ?>
                <div class="blog-button mt-30">
                    <a href="<?php the_permalink(); ?>" class="blog-btn"><?php echo esc_html($tp_toolkit_blog_btn_text); ?><i class="fal fa-long-arrow-right"></i></a>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</article>