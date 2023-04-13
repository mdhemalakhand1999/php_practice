<?php $tp_toolkit_blog_date_switch = get_theme_mod('tp_toolkit_blog_date_switch', false); ?>
<?php $karx_audio_url = function_exists( 'get_field' ) ? get_field( 'fromate_style' ) : NULL; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-blog mb-80'); ?>>
	<div class="karx-service-details-img mb-45">
		<?php if ( !empty( $karx_audio_url ) ): ?>
			<div class="postbox__audio embed-responsive embed-responsive-16by9 ">
				<?php echo wp_oembed_get( $karx_audio_url ); ?>
					<?php if ( !empty($tp_toolkit_blog_date_switch) ): ?>
					<div class="top_date">
						<span><?php print get_the_date('d M', get_the_ID()); ?></span>
					</div>
				<?php endif; ?>
			</div>
		<?php endif;?>
		<?php if(!empty($tp_toolkit_blog_date_switch)) : ?>
		<div class="karx-blog-caption-date">
			<?php print get_the_date('d M', get_the_ID()); ?>
		</div>
		<?php endif; ?>
	</div>
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