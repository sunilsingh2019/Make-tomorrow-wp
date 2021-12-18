<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Macadamia_Digital
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/./css/style.min.css" />

  <!-- Icon -->
  <!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" /> -->
  <!-- Icon -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="sitewrapper">

    <div class="full-nav-toggle full-nav-open"></div>

    <div class="full-nav" id="fullNav">
      <div class="full-nav-toggle full-nav-close"></div>
	  <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'        => 'full-nav-list',
				)
			);
		?>
    </div>

    <div class="sitecontent">
<!-- Hero section start  -->


<?php $background_image = get_field('background_image'); 
      $video = get_field('video');
      $heading = get_field('heading');
    ?>
<?php if(!empty($video)): ?>
    <section class="section section-landingbanner bg-dark">
        <div class="container">
            <div class="landingbanner">
            <video autoplay muted loop>
                <source src="<?php echo $video['url']; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            </div>
            <div class="scroll-down"><img src="<?php echo get_template_directory_uri(); ?>/./images/icons/arrow-scrolldown.svg" alt=""></div>
        </div>
    </section>
<?php endif; ?>

<?php if(!empty($background_image)): ?>
    <section class="section section-landingbanner">
          <div class="container">
              <div class="landingbanner">
                  <div class="overlay">
                      <div class="overlay-img">
                          <img src="<?php echo $background_image['url'] ?>" alt="<?php echo $background_image['title'] ?>">
                      </div>
                      <div class="overlay-text">
                          <h2><?php echo $heading; ?></h2>
                      </div>
                  </div>
              </div>
              <div class="scroll-down"><img src="<?php echo get_template_directory_uri(); ?>/./images/icons/arrow-scrolldown.svg" alt=""></div>
          </div>
      </section>
  <?php endif; ?>