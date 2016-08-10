<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BeOnePage
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer clearfix" role="contentinfo">
		
		<div class="site-info col-md-offset-5 col-md-12">
			<img src="<?php bloginfo('template_url') ?>/images/logo.png" class="logo-bottom">
		</div>
		
		<div class="site-info col-md-12">
			<div class="social-link col-md-12 wow zoomInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomInUp;">
				<ul id="menu-social-menu" class="menu">
					<li  class="menu"><a href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li  class="menu"><a href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li  class="menu"><a href="" data-original-title="Google"><i class="fa fa-google-plus"></i></a></li>
					<li  class="menu"><a href="" data-original-title="Youtube"><i class="fa fa-youtube-play"></i></a></li>
					<li  class="menu"><a href="" data-original-title="Dribble"><i class="fa fa-dribbble"></i></a></li>
				</ul>			
			</div>
		</div>

		<div class="site-info col-md-12">
			Copyrights © 2016. All Rights Reserved.	
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php if ( Kirki::get_option( 'general_go_to_top' ) == '1' ) : ?>
		<div id="go-to-top" class="go-to-top btn btn-light"><i class="fa fa-angle-up"></i></div>
	<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
  new WOW().init();
</script>

</body>
</html>
