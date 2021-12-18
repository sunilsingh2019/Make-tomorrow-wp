<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Macadamia_Digital
 */

get_header();
?>
   <section class="section section-landingbanner">
        <div class="container">
          <div class="landingbanner">
            <div class="overlay">
              <div class="overlay-img">
                <img src="<?php echo get_template_directory_uri(); ?>/./images/about-banner.jpg" alt="">
              </div>
              <div class="overlay-text">
                <h2><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'macadamia-digital' ); ?></h2>
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'macadamia-digital' ); ?></p>
              </div>
            </div>
          </div>
          <div class="scroll-down"><img src="<?php echo get_template_directory_uri(); ?>/./images/icons/arrow-scrolldown.svg" alt="">Home</div>
        </div>
      </section>


<?php
get_footer();
