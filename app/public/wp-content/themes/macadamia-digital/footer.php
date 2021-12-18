<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Macadamia_Digital
 */

?>

</div>

<footer class="footer">
  <div class="container">
	<div class="row">
	  <div class="col-lg-4">
		<h3>Let's Make Tomorrow now.</h3>
		<ul class="footer-links">
		  <li>T <a href="tel:+61 0404 070 410">+61 0404 070 410</a></li>
		  <li>E <a href="mailto:kelly@maketomorrow.design" class="text-underline">kelly@maketomorrow.design</a></li>
		</ul>
	  </div>
	  <div class="col-lg-5 ml-lg-auto">
		<h3>Sign up for occasional carefully curated content here.</h3>
		<ul class="footer-links">
		  <li><a href="#" class="text-underline">Enter your email address</a></li>
		  <li><a href="#" class="text-underline">Subscribe</a></li>
		</ul>
		<ul class="social-links">
		  <li><a href="https://www.linkedin.com/company/make-tomorrow" title="LinkedIn" target="_blank"><img
				src="<?php echo get_template_directory_uri(); ?>/./images/icons/icon-linkedin.svg" alt=""></a></li>
		  <li><a href="https://www.instagram.com/wemaketomorrow/" title="Instagram" target="_blank"><img
				src="<?php echo get_template_directory_uri(); ?>/./images/icons/icon-instagram.svg" alt=""></a></li>
		</ul>
		<div class="copyright">&copy;2021 Make Tomorrow. All rights reserved.</div>
	  </div>
	</div>
  </div>
</footer>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/./js/jquery-3.3.1.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/./js/custom.js" defer></script>
<?php wp_footer(); ?>
</body>

</html>

	
