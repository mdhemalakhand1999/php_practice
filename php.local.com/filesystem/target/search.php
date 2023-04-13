<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package karx
 */

get_header();
$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 8 : 8;
$sidebar_class = is_active_sidebar( 'blog-sidebar' )? __('theme-has-blog-sidebar', 'karx'): __('theme-has-blog-no-sidebar', 'karx');

$tp_blog_layout = get_theme_mod('tp_blog_layout') ? get_theme_mod('tp_blog_layout'): __('right-sidebar', 'karx');
$sidebar_space = '';
if($tp_blog_layout == 'right-sidebar') {
	$sidebar_space = is_active_sidebar( 'blog-sidebar' ) ? __('mr-20', 'karx'): '';
} else if($tp_blog_layout == 'left-sidebar') {
	$sidebar_space = is_active_sidebar( 'blog-sidebar' ) ? __('ml-20', 'karx'): '';
} else {
	$blog_column = 8;
}
?>


<main id="primary" class="karx-blog-page-area pt-120 pb-70 <?php echo esc_attr($sidebar_class); ?>">
		<div class="container">
			<div class="row justify-content-center">
				<?php if($tp_blog_layout == 'left-sidebar') : ?>
					<?php if ( is_active_sidebar( 'blog-sidebar' ) ): ?>
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="karx-details-sidebar">
								<?php dynamic_sidebar('blog-sidebar');?>
							</div>
						</div>
					<?php endif;?>
				<?php endif; ?>
				<div class="col-lg-<?php print esc_attr( $blog_column );?> col-md-12 col-sm-12">
					<div class="blog-wrapper <?php echo is_active_sidebar( 'blog-sidebar' ) ? esc_attr($sidebar_space): ''; ?>">
						<?php
							if ( have_posts() ):
							if ( is_home() && !is_front_page() ):
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title();?></h1>
						</header>
						<?php endif;?>
						<?php
							/* Start the Loop */
							while ( have_posts() ): the_post(); ?>
							<?php
								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								if(is_single()) {
									get_template_part( 'post-formates/single-post/content', get_post_format() );
								} else {
									get_template_part( 'post-formates/content', get_post_format() );
								}
								endwhile;
							?>
								<div class="blog-pagination mt-50">
									<?php karx_pagination( '<i class="fal fa-long-arrow-left"></i>', '<i class="fal fa-long-arrow-right"></i>', '', ['class' => ''] );?>
								</div>
							<?php
							else:
								get_template_part( 'post-formates/content', 'none' );
							endif;
						?>
					</div>
				</div>
				<?php if($tp_blog_layout == 'right-sidebar') : ?>
					<?php if ( is_active_sidebar( 'blog-sidebar' ) ): ?>
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="karx-details-sidebar">
								<?php dynamic_sidebar('blog-sidebar');?>
							</div>
						</div>
					<?php endif;?>
				<?php endif; ?>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
