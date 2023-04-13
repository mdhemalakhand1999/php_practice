<?php
    $author_biography = get_user_meta(get_the_author_meta('ID'), 'description')[0];
    $karx_user_facebook = get_user_meta(get_the_author_meta('ID'), 'karx_user_facebook', true);
    $karx_user_twitter = get_user_meta(get_the_author_meta('ID'), 'karx_user_twitter', true);
    $karx_user_linkedin = get_user_meta(get_the_author_meta('ID'), 'karx_user_linkedin', true);
    $karx_user_instagram = get_user_meta(get_the_author_meta('ID'), 'karx_user_instagram', true);
    $karx_user_youtube = get_user_meta(get_the_author_meta('ID'), 'karx_user_youtube', true);
?>
<div class="karx-blog-details-author">
    <div class="blog-details-author">
        <div class="blog-details-author-img w_100">
            <?php echo get_avatar(get_the_author_meta('ID')); ?>
        </div>
        <div class="blog-details-author-info">
            <h5 class="blog-details-author-name"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php echo get_the_author(); ?></a></h5>
            <?php if(!empty($author_biography)) : ?>
                <p><?php echo esc_html($author_biography); ?></p>
            <?php endif; ?>
            <div class="blog-details-author-social">
                <?php if(!empty($karx_user_facebook)) : ?>
                    <a href="<?php echo esc_url($karx_user_facebook); ?>"><i class="fab fa-facebook-f"></i></a>
                <?php endif; ?>
                <?php if(!empty($karx_user_twitter)) : ?>
                    <a href="<?php echo esc_url($karx_user_twitter); ?>"><i class="fab fa-twitter"></i></a>
                <?php endif; ?>
                <?php if(!empty($karx_user_linkedin)) : ?>
                    <a href="<?php echo esc_url($karx_user_linkedin); ?>"><i class="fab fa-linkedin-in"></i></a>
                <?php endif; ?>
                <?php if(!empty($karx_user_instagram)) : ?>
                    <a href="<?php echo esc_url($karx_user_instagram); ?>"><i class="fab fa-instagram"></i></a>
                <?php endif; ?>
                <?php if(!empty($karx_user_youtube)) : ?>
                    <a href="<?php echo esc_url($karx_user_youtube); ?>"><i class="fab fa-youtube"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>