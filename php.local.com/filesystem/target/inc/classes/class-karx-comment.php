<?php
/**
 * Custom comment walker for this theme.
 *
 * @package WordPress
 * @subpackage karx
 * @since Karx 1.0
 */
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

if ( ! class_exists( 'Karx_Walker_Comment' ) ) {
	class Karx_Walker_Comment extends Walker_Comment {
		protected function html5_comment( $comment, $depth, $args ) {
			$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
			?>
			<<?php echo esc_attr($tag);?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $this->has_children ? 'parent' : '', $comment ); ?>>
				<div id="div-comment-<?php comment_ID(); ?>" class="comment-list-item d-flex">
                    <?php
                    $comment_author_url = get_comment_author_url( $comment );
                    $comment_author     = get_comment_author( $comment );
                    $avatar             = get_avatar( $comment, $args['avatar_size'] );
                    if ( 0 !== $args['avatar_size'] ) {
                        if ( empty( $comment_author_url ) ) {
                            echo wp_kses_post( $avatar );
                        } else {
                            echo "<div class='comment-list-img mr-20'><div class='comment-avater-img'>";
                            printf( '<a href="%s" rel="external nofollow" class="url">', $comment_author_url );
                            echo wp_kses_post( $avatar );
                            echo "</a></div></div>";
                        }
                    }
                    echo "<div class='comment-list-content'>";
                        echo "<div class='comment-contenet'>";
                            echo "<h6 class='comment-title'>";
                                printf(
                                    '<span class="fn">%1$s</span>',
                                    esc_html( $comment_author ),
                                    __( 'says:', 'karx' )
                                );
                            echo "</h6>";
                            echo '<p class="comment-text">';
                                echo get_comment_text();
                                if ( '0' === $comment->comment_approved ) {
                                    ?>
                                    <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'karx' ); ?></p>
                                    <?php
                                }
                            echo '</p>';
                        echo "</div>";
                        echo '<div class="comment-btn-wrapper">';
                            /* translators: 1: Comment date, 2: Comment time. */
                            $comment_timestamp = sprintf( __( '%1$s at %2$s', 'karx' ), get_comment_date( '', $comment ), get_comment_time() );
                            printf(
                                '<a href="%s"><time class="karx-comment-time" datetime="%s" title="%s">%s</time></a>',
                                esc_url( get_comment_link( $comment, $args ) ),
                                get_comment_time( 'c' ),
                                esc_attr( $comment_timestamp ),
                                esc_html( $comment_timestamp )
                            );
                            $comment_reply_link = get_comment_reply_link(
                                array_merge(
                                    $args,
                                    array(
                                        'add_below' => 'div-comment',
                                        'depth'     => $depth,
                                        'max_depth' => $args['max_depth'],
                                        'before'    => '<span class="comment-reply">',
                                        'after'     => '</span>',
                                    )
                                )
                            );
                            $by_post_author = karx_is_comment_by_post_author( $comment );
                            if ( $comment_reply_link || $by_post_author ) {
                                ?>
                                    <?php
                                    if ( $comment_reply_link ) {
                                        echo wp_kses($comment_reply_link, $allowed);
                                    }
                                    ?>
                                <?php
                            }
                        echo "</div>";
                    echo "</div>";
                    ?>
                <?php
                $comment_reply_link = get_comment_reply_link(
                    array_merge(
                        $args,
                        array(
                            'add_below' => 'div-comment',
                            'depth'     => $depth,
                            'max_depth' => $args['max_depth'],
                            'before'    => '<span class="comment-reply">',
                            'after'     => '</span>',
                        )
                    )
                );?>
				</div><!-- .comment-body -->
			<?php
		}
	}
}
