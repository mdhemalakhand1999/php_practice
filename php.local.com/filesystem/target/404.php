<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package karx
 */

get_header();
?>
<section class="error__area pt-120 pb-120">
   <div class="container">
      <div class="row">
         <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="error__item text-center">
               <div class="error__thumb mb-45">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/error.png" alt="<?php echo esc_attr__('Error 404', 'karx'); ?>">
               </div>
               <div class="error__content">
                  <h3 class="error__title"><?php echo esc_html__('Page not found', 'karx'); ?></h3>
                  <p><?php echo esc_html__('Oops! The page you are looking for does not exist. It might have been moved or deleted.', 'karx'); ?></p>
                  <a href="<?php echo esc_url(home_url('/')); ?>" class="def-btn border-0"><?php echo esc_html__('Back To Home', 'karx'); ?></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php
get_footer();
