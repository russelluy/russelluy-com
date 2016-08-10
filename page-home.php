<?php
/**
 * Template Name: Home Page
 * 
 * @package BeOnePage
 */

get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="slider" class="slider<?php echo Kirki::get_option( 'front_page_text_slider_parallax' ) == '1' ? ' slider-parallax' : ''; ?> nopadding clearfix">
				<div class="full-screen">
					<div class="container slider-caption text-left clearfix">
						<div class="row">
							<div class="col-md-offset-1 col-md-6">
								<h3 class="h3-slider wow slideInLeft" data-wow-delay=".1s"> A Clean and Modern Template</h3>
								<h1 class="wow slideInLeft" data-wow-delay=".3s">Designed for <strong style="font-weight: 500;color: #F73B56;">you.</strong></h1>
								<span class="span-slider wow bounceInUp" data-wow-delay=".3s">CREATIVE AGENCY - PROFESSIONAL </span>
							</div>
						</div>
						
					</div><!-- .container -->
				</div><!-- .full-screen -->

				<?php if ( Kirki::get_option( 'front_page_text_slider_scroll_down' ) == '1' ) : ?>
					<div class="scroll-down"></div>
				<?php endif; ?>
			</section><!-- #slider -->


			<!-- **************************** ABOUT ME ********************************************************** -->
			<section id="services" class="module icon-service-module clearfix">
				<div class="container border-bottom" >
				<div class="row">
						
			
						<div class="content-box col-sm-6 wow bounceInLeft" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInLeft;">
							<h1 class="h1-title">ABOUT ME</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>		
							<div class="promo-btn wow bounceInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
								<a href="http://betheme.me" class="btn btn-light">MORE DETAILS</a>
							</div>	
						</div><!-- .content-box -->

						<div class="content-box col-sm-6 wow bounceInLeft" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInLeft;">
							<blockquote ><h1 class="h1-title">RECOMMENDATION</h1>- Kevin Suen</blockquote>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>			
						</div><!-- .content-box -->

					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #about-me -->


			<!-- ***************************** PROFICIENCY **************************************** -->
			
			<section id="blog" class="module portfolio-module no-background clearfix _mPS2id-t mPS2id-target mPS2id-target-first mPS2id-target-last">
			    <div class="container-fluid">
			        <div class="row">
			                
			                <div class="module-caption col-md-12 text-center wow swing"  data-wow-delay=".2s" >
								<h2><span>My</span> PROFICIENCY</h2>

			                    <p>An eye for detail makes our works excellent</p>
			                    
			                    <div class="separator">
			                        <span style="color:antiquewhite;"> <i class="fa fa-circle" style="color:#FFABB7;"></i></span>
			                    </div><!-- .separator -->

								<div class="spacer"></div>
							</div>

			            
			            
			                <div class="container">
			                	<div class="row row-nopadding">
			                		<div class="col-md-6">
		                				<img src="<?php bloginfo('template_url'); ?>/images/1.jpg">
			                		</div>
			                		<div class="col-md-6">
			                			<div class="icon-service-box wow slideInRight" data-wow-delay=".5s">
												<div class="service-icon text-center">
													<img src="<?php bloginfo('template_url'); ?>/images/ico-1.png">
												</div><!-- .service-icon -->

												<h3 class="service-title">PROFICIENCY TITLE 1</h3>
				
												<p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
													<br><br>
													Ipsum nostrud aute sunt amet quis ex esse in nostrud sit ex, amet <a href="" class="link-style">this is a link</a>, occaecat mollit, veniam magna sint. Eiusmod anim do dolore eu cillum velit qui tempor enim ut sed eiusmod sunt culpa dolore eiusmod nisi dolore. Enim pariatur commodo, anim.

												</p>
												<div class="spacer"></div>
											</div>
			                		</div>
			                	</div>


			                	<div class="row row-nopadding">
			                		<div class="col-md-6">
		                				<div class="icon-service-box wow slideInLeft" data-wow-delay=".5s" >
											<div class="service-icon text-center">
												<img src="<?php bloginfo('template_url'); ?>/images/ico-2.png">
											</div><!-- .service-icon -->
											<h3 class="service-title">PROFICIENCY TITLE 2</h3>
											<p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
											<div class="spacer"></div>
										</div>
			                		</div>
			                		<div class="col-md-6">
			                			<img src="<?php bloginfo('template_url'); ?>/images/2.jpg">
			                		</div>
			                	</div>


			                	<div class="row row-nopadding">
			                		<div class="col-md-6">
		                				<img src="<?php bloginfo('template_url'); ?>/images/3.jpg">
			                		</div>
			                		<div class="col-md-6">
			                			<div class="icon-service-box wow slideInRight" data-wow-delay=".5s" >
												<div class="service-icon text-center">
													<img src="<?php bloginfo('template_url'); ?>/images/ico-33.png">
												</div><!-- .service-icon -->

												<h3 class="service-title">PROFICIENCY TITLE 3</h3>
				
												<p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
												<div class="spacer"></div>
											</div>
			                		</div>
			                	</div>

				                <!-- #portfolio-filter -->
				            
					            <div id="portfolio-container" class="col-md-10 col-md-offset-1"></div>
					            <div id="portfolio-loader">
					                <i class="fa fa-spinner fa-pulse"></i>
					            </div><!-- .portfolio-loader -->

			            	</div><!-- #container -->
			        </div><!-- .row -->
			    </div><!-- .container-fluid -->
			</section>
			<!--end of PROFICICENCY -->
			
			<!-- ****************************** CONTACT US ******************************** -->
			<section id="contact" class="module contact-module no-background clearfix">
			<div class="container">
				<div class="row">	
							<div class="module-caption col-md-12 text-center wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
								<h2><span>Contact</span> Us</h2>

								<p>We'd love to hear your feedback.</p>
								
								<div class="separator">
									<span><i class="fa fa-circle"></i></span>
								</div><!-- .separator -->

								<div class="spacer"></div>
							</div><!-- .module-caption -->
			
			
						<div class="contact-info col-md-4 clearfix">

							<div class="contact-item wow bounceInLeft" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInLeft;">
								<div class="ci-icon"><i class="fa fa-phone"></i></div>
								<div class="ci-title">Call us</div>
								<div class="ci-content">0123-456-789</div>
							</div><!-- .contact-info -->
							<div class="contact-item wow bounceInLeft" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInLeft;">
								<div class="ci-icon"><i class="fa fa-map-marker"></i></div>
								<div class="ci-title">Address</div>
								<div class="ci-content">345 Spear Street, San Francisco, CA</div>
							</div><!-- .contact-info -->
							<div class="contact-item wow bounceInLeft" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInLeft;">
								<div class="ci-icon"><i class="fa fa-envelope"></i></div>
								<div class="ci-title">Say hello</div>
								<div class="ci-content"><a href="mailto:hi@betheme.me">hi@betheme.me</a></div>
							</div><!-- .contact-info -->
							
						</div><!-- .contact-item  -->
			
			
						<div class="contact-form col-md-7 col-md-offset-1 clearfix wow swing" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: swing;">
							
							<form id="contact-form" class="contact-form clearfix" novalidate="novalidate">
								<div class="contact-form-process">
									<i class="fa fa-spinner fa-pulse"></i>
								</div><!-- .contact-form-process -->

								<div id="contact-form-result"><span></span></div>

								<fieldset class="col-sm-4">
									<input type="text" id="contact-form-name" name="name" placeholder="Name" value="" class="cf-form-control required" data-msg-required="This field is required." aria-required="true">
								</fieldset>

								<fieldset class="col-sm-4">
									<input type="email" id="contact-form-email" name="email" placeholder="Email" value="" class="required email cf-form-control" data-msg-required="This field is required." data-msg-email="Invalid email address." aria-required="true">
								</fieldset>

								<fieldset class="col-sm-4">
									<input type="text" id="contact-form-phone" name="phone" placeholder="Phone" value="" class="cf-form-control">
								</fieldset>

								<fieldset class="col-sm-12">
									<input type="text" id="contact-form-subject" name="subject" placeholder="Subject" value="" class="required cf-form-control" data-msg-required="This field is required." aria-required="true">
								</fieldset>

								<fieldset class="col-sm-12">
									<textarea rows="3" id="contact-form-message" name="message" placeholder="Message" class="required cf-form-control" data-msg-required="This field is required." aria-required="true" tabindex="0" style="overflow-y: hidden; outline: none;"></textarea>
								</fieldset>

								<fieldset class="captcha col-sm-6">
									<input type="text" id="contact-form-captcha" name="captcha" placeholder="0 + 4 = ?" class="required cf-form-control" data-msg-required="This field is required." data-rule-equalto="#captcha-value" data-msg-equalto="Please check your math." aria-required="true">
									<input type="hidden" id="captcha-value" value="4">
								</fieldset><!-- .captcha -->

								<fieldset class="submit col-sm-6">
									<input type="hidden" name="action" value="contact_form">

									<input type="hidden" id="ajax_contact_form_nonce" name="ajax_contact_form_nonce" value="aa41c18e2c"><input type="hidden" name="_wp_http_referer" value="/">
									<button class="btn btn-light" type="submit" id="contact-form-submit" name="submit" value="submit">Send</button>
								</fieldset><!-- .submit -->
							</form>
						</div><!-- .contact-form -->


				</div><!-- .row -->
			</div><!-- .container -->
		</section>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
