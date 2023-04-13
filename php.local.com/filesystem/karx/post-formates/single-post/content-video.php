<?php $tp_toolkit_blog_date_switch = get_theme_mod('tp_toolkit_blog_date_switch', false); ?>
<?php $karx_video_url = function_exists( 'get_field' ) ? get_field( 'fromate_style' ) : NULL; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-blog mb-80 format-video'); ?>>
	<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) :?>
		<div class="karx-service-details-img mb-45">
			<div class="blog-thumb img-effect-white">
				<?php  
					$att=get_post_thumbnail_id();
					$image_src = wp_get_attachment_image_src( $att, 'full' );
					$image_src = $image_src[0]; 
				?>
				<img src="<?php echo esc_url($image_src); ?>" alt="<?php the_title_attribute(); ?>">
				<?php if(!empty($tp_toolkit_blog_date_switch)) : ?>
				<div class="karx-blog-caption-date">
					<?php print get_the_date('d M', get_the_ID()); ?>
				</div>
				<?php endif; ?>
				<?php if(!empty($karx_video_url)) : ?>
					<div class="blog-video video-abs">
						<a href="<?php echo esc_url($karx_video_url); ?>" class="video-icon popup-video"><i class="fal fa-play"></i></a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?> 

	<div class="karx-single-blog-txt">
		<div class="services-details-meta-box mb-10">
			<div class="services-details-admin-link">
				<span class="has-karx-date-span"><i class="fal fa-calendar"></i><?php echo get_the_date(); ?></span>
				<a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><i class="fal fa-user"></i><?php print get_the_author();?></a>
				<a href="<?php comments_link();?>"><i class="fal fa-comments"></i><?php comments_number();?></a>
			</div>
		</div>
		<h4 class="service-details-title mb-20"><?php echo get_the_title(); ?></h4>
		<div class="karx-post-content-single">
			<?php the_content(); ?>
				<?php
					wp_link_pages( [
						'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'karx' ),
						'after'       => '</div>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					] );
				?>
		</div>
	</div>
	<?php if(!empty(karx_get_tag())) : ?>
	<div class="karx-blog-details-tag mb-60 pt-15">
		<div class="row align-items-center">
			<div class="col-12">
				<?php print karx_get_tag();?>
			</div>
		</div>
	</div>
	<?php endif; ?>
</article>