<?php
/**
 * single.php
 * @package WordPress
 * @subpackage karx
 * @since karx 1.0
 * 
 */
$blog_column = is_active_sidebar( 'blog-sidebar' ) ? esc_attr__('col-lg-8 col-md-12 col-sm-12', 'karx') : esc_attr__('col-lg-8 col-md-12 col-sm-12', 'karx');
$tp_blog_layout = get_theme_mod('tp_blog_layout') ? get_theme_mod('tp_blog_layout'): esc_attr__('right-sidebar', 'karx');
$sidebar_space = '';
if($tp_blog_layout == 'right-sidebar') {
	$sidebar_space = is_active_sidebar( 'blog-sidebar' ) ? esc_attr__('mr-20', 'karx'): '';
} else if($tp_blog_layout == 'left-sidebar') {
	$sidebar_space = is_active_sidebar( 'blog-sidebar' ) ? esc_attr__('ml-20', 'karx'): '';
}
 ?>
<?php get_header(); ?>
<div class="karx-service-details-area pt-120 pb-70">
	<div class="container">
		<div class="row justify-content-center">
			<?php if($tp_blog_layout == 'left-sidebar') : ?>
				<?php if(is_active_sidebar('blog-sidebar')) : ?>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="karx-details-sidebar">
							<?php dynamic_sidebar( 'blog-sidebar' ); ?>
						</div>
					</div>
				<?php endif; ?>
			<?php endif; ?>
			<div class="<?php echo esc_attr($blog_column); ?>">
				<div class="karx-service-details-wrapper <?php echo esc_attr($sidebar_space); ?>">
					<div class="karx-service-details-inner pb-50">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php  get_template_part( 'post-formates/single-post/content', get_post_format() ); ?>
						<?php endwhile; ?>
						<?php  get_template_part( 'post-formates/single-post/content', 'biography' ); ?>
						<?php if(comments_open()) : ?>
						<div class="comments-area">
							<?php 
								$comments_number = get_comments_number(get_the_ID());
								if(empty($comments_number)) {
									if (comments_open()) {
										comment_form();
									}
								}
								if ( comments_open() || get_comments_number() ):
									comments_template();
								endif;
							?>
						</div>
						<?php endif; ?>
					</div>
					<?php else : ?>
					<h2><?php esc_html_e('No Posts Found', 'karx') ?></h2>
					<?php endif; ?>
				</div>
			</div>
			<?php if($tp_blog_layout == 'right-sidebar') : ?>
				<?php if(is_active_sidebar('blog-sidebar')) : ?>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="karx-details-sidebar">
							<?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
								<?php dynamic_sidebar( 'blog-sidebar' ); ?>
							<?php } ?>
						</div>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>