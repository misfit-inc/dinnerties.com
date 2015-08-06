<?php
/**
 * Template Name: Business
 *
 * The business page template displays your posts with a "business"-style
 * content slider at the top.
 *
 * @package WooFramework
 * @subpackage Template
 */
global $woo_options, $wp_query;
get_header();

$page_template = woo_get_page_template();
?>
<!-- #content Starts -->
<?php woo_content_before(); ?>
<div id="content" class="col-full business">

	<div id="main-sidebar-container">

		<?php
		if ($woo_options['woo_slider_biz'] == 'true') {
			$saved = $wp_query;
			woo_slider_biz();
			$wp_query = $saved;
		}
		?>
		<!-- #main Starts -->
		<?php woo_main_before(); ?>
		<section id="main">
			<?php
			woo_loop_before();

			if (have_posts()) {
				$count = 0;
				while (have_posts()) {
					the_post();
					$count++;
					woo_get_template_part('content', 'page-template-business'); // Get the page content template file, contextually.
					?>
					<!-- Home -->

					<div>
						<div>
							<img src="<?php the_field('text_header_image') ?>" alt="header_img" style="width: 100%"/>
						</div>

						<div class="bizz_content" style=" margin:0px; position: absolute; top: 2%; ">
							<div class="cover1" id="attend_btn_div" style="position: relative; min-height: 80px; ">
								<input type="button" class="attnd"  value="<?php the_field('Text_ATTEND'); ?>" style="cursor: pointer; opacity: 1; position: absolute;left: 25%; background: none !important; min-height: 55px;" />
								<a href="#attend_btn"><div  class="bg1" style="cursor: pointer; position:absolute; left: 25%; padding-bottom: 5px; min-height: 56px; background: white; opacity: 0.5; width: 50%;">&nbsp;</div></a>
							</div>
							<div class="or"> 						
								<img src="<?php the_field('Text_OR'); ?>" alt="image" />
							</div>
							<div class="cover2" id="host_btn_div" style="position: relative; min-height: 80px; ">
								<input type="button" class="attnd"  value="<?php the_field('Text_HOST'); ?>" style="cursor: pointer; opacity: 1; position: absolute;left: 25%; background: none !important; min-height: 55px;">
								<a href="#host_btn"><div class="bg2" style="cursor: pointer; position:absolute; left: 25%; padding-bottom: 5px; min-height: 56px; background: white; opacity: 0.5; width: 50%;">&nbsp;</div></a>
							</div>						
						</div>
					</div>



					<div class="footer_custom" style="margin-top:5%;">
						<img class="footer_custom_img" src="<?php echo get_template_directory_uri(); ?>/images/BARS.png">
						<?php the_field('Text_Footer'); ?>
						<img class="footer_custom_img" src="<?php echo get_template_directory_uri(); ?>/images/BARS.png">
					</div>	

					<div id="footer_nav" class="footerMenu" style="margin-top:2%;">
						<?php //wp_nav_menu(array('menu' => 'footer_menu', 'theme_location' => 'footer')); ?>  
						<nav id="navbar">
							<ul id="nav">
								<li><a href="#about_us">ABOUT</a></li>
								<li><a href="#faq_us">FAQ</a></li>
								<li><a href="#">GALLERY</a></li>
								<li><a href="#">CONTACT</a></li>
							</ul>
						</nav>


					</div>

					<!-- End Home -->


					<!-- I Want To Attend -->

					<div id="attend_btn" class="attend" style="margin-top:10%">
						<div id="attend_header">
							<img src="<?php the_field('attend_header_image'); ?>" alt="image" style="width: 100%;" />
						</div>
						<div class="attend_content" style="width: 100%; text-align: center;margin-top:3%">

							<div id="attend_title_line">
								<img  style="width:55%" src="<?php the_field('attend_title_line_image'); ?>" alt="image" />
							</div>
							<div id="attend_title">
								<h1 style="font-family: 'Conv_Gotham-Book' !important;font-size: 40px;font-weight: bold;letter-spacing: 12px;word-spacing: 8px;">
									<?php the_field('attend_title'); ?>
								</h1>
							</div>
							<div id="attend_title_line">
								<img style="width:55%" src="<?php the_field('attend_title_line_image'); ?>" alt="image" />
							</div>
							<div id="attend_tag" style="margin-top:3%">
								<h3 style="font-family: 'Conv_Gotham-Book' !important;font-weight:bold;letter-spacing: 1px;word-spacing: 2px;">
									<?php the_field('attend_title_tag_line'); ?>
								</h3>
							</div>
						</div>
						<div id="attend_form" style="margin-top:2%; margin-left: 22%; width: 55%">
							<?php
							//$field = get_field_object('contact_form_7');
							//print_r($field);
							//$label = $field['label'];
							?>

							<?php // echo $label; ?>								
							<?php the_field('attend_form'); ?>			

						</div>

						<div id="attend_footer_image" style="width: 100%; text-align: center">
							<img src="<?php the_field('attend_footer_image'); ?>" alt="image" />
						</div>


					</div>

					<!-- End I Want To Attend -->



					<!-- I Want To Host -->
					<div id="host_btn" class="host" style="margin-top:10%">
						<div id="host_header">
							<img src="<?php the_field('host_header_image'); ?>" alt="image" style="width: 100%;" />
						</div>
						<div class="host_content" style="width: 100%; text-align: center; margin-top:3%">

							<div id="host_title_line">
								<img  style="width:55%" src="<?php the_field('host_title_image'); ?>" alt="image" />
							</div>
							<div id="host_title">
								<h1 style="font-family: 'Conv_Gotham-Book' !important;font-size: 40px;font-weight: bold;letter-spacing: 12px;word-spacing: 8px;">
									<?php the_field('host_title'); ?>
								</h1>
							</div>
							<div id="host_title_line">
								<img style="width:55%" src="<?php the_field('host_title_image'); ?>" alt="image" />
							</div>
							<div id="host_tag" style="margin-top:3%">
								<h3 style="font-family: 'Conv_Gotham-Book' !important;font-weight:bold;letter-spacing: 1px;word-spacing: 2px;">
									<?php the_field('host_title_tag_line'); ?>
								</h3>
							</div>
						</div>
						<div id="host_form" style="margin-top:2%; margin-left: 22%; width: 55%">
							<?php
							//$field = get_field_object('contact_form_7');
							//print_r($field);
							//$label = $field['label'];
							?>

							<?php // echo $label; ?>								
							<?php the_field('contact_form_7'); ?>			

						</div>

						<div id="footer_image" style="width: 100%; text-align: center">
							<img src="<?php the_field('host_footer_image'); ?>" alt="image" />
						</div>


					</div>
					<!-- End I Want To Host -->


					<!-- About Us -->
					<div id="about_us" style="margin-top:10%">
						<div id="about_header">
							<img src="<?php the_field('about_header_image'); ?>" alt="image" style="width: 100%;" />
						</div>
						<div style="width:100%; text-align:center;margin-top:5%">
							<img width="300.5px" class="" src="<?php the_field('about_image_line'); ?>" />
							<img class="" src="<?php the_field('about_image_logo'); ?>" />
							<img width="300.5px" class="" src="<?php the_field('about_image_line'); ?>" />
						</div>
						<div>
							<h2 style="margin:3% 0 3% 0; letter-spacing:0px; word-spacing:0px;text-align: center ;text-transform:uppercase;font-family: 'Conv_Gotham-Book' !important;">
								<?php the_field('about_title'); ?>
							</h2>
							<div style="width: 58%; margin-left: 22%">
								<?php the_field('about_content'); ?>
							</div>							
						</div>
						<div style="width:100%; margin-top:5%;">
							<img class="footer_custom_img" src="<?php the_field('about_footer_image'); ?>" />
						</div>
					</div>

					<!-- End About Us -->


					<!-- FAQ -->
					<div id="faq_us" style="margin-top:10%">
						<div id="faq_header">
							<img src="<?php the_field('faq_header_image'); ?>" alt="image" style="width: 100%;" />
						</div>
						<div style="width:100%; text-align:center; margin-top:5%">
							<img width="300.5px" class="" src="<?php the_field('faq_image_line'); ?>" />
							<img class="" src="<?php the_field('faq_image_logo'); ?>" />
							<img width="300.5px" class="" src="<?php the_field('faq_image_line'); ?>" />
						</div>
						<div>
							<h2 style="margin:3% 0 3% 0; letter-spacing:0px; word-spacing:0px;text-align: center ;text-transform:uppercase;font-family: 'Conv_Gotham-Book' !important;">
								<?php the_field('faq_title'); ?>
							</h2>
							<div style="width: 58%; margin-left: 22%">
								<?php the_field('faq_content'); ?>
							</div>
							<div style="width:100%; text-align:center;">
								<img style="margin:5% 0 2% 0; width:70%;"  src="<?php the_field('faq_footer_image'); ?>" />
							</div>
						</div>
					</div>

					<!-- End FAQ -->


					<!-- Contact -->



					<!-- End Contact -->

					<?php
				}
			}

			woo_loop_after();
			?>
		</section><!-- /#main -->
		<script>
			
			jQuery('.bg1').hover(
			function () {
				jQuery(this).css('background', 'none');
			},
			function () {
				jQuery(this).css('background', 'white');
			}
		);
			jQuery('.bg2').hover(
			function () {
				jQuery(this).css('background', 'none');
			},
			function () {
				jQuery(this).css('background', 'white');
			}
		);
			
			jQuery('#attend_btn_div a,#host_btn_div a,#nav a').click(function(){			
				var target = jQuery(this).attr('href');
				var targetLoc = jQuery(target).offset().top;
				jQuery('html,body').stop().animate({scrollTop : targetLoc}, 'slow');
				return false;
			});
			jQuery(document).ready(function () {
				jQuery('#nav a, #attend_btn_div a, #host_btn_div a').click(function(){
					jQuery('#nav').css({'backgroundColor':'#none', 'opacity':'0.8','line-height':'40px'});
					jQuery('#nav').css({'backgroundColor':'none'});
								
					//					jQuery(window).on('scroll',function() {
					//					var scrolltop = jQuery(this).scrollTop();
					// 
					//					if(scrolltop >= 215) {
					//						jQuery('#nav').fadeIn(250);
					//					}
					//     
					//					else if(scrolltop <= 210) {
					//						jQuery('#nav').fadeOut(250);
					//					}
					//				});
				}); 
				//				
				
				//			});
				jQuery(function() {
					// Stick the #nav to the top of the window
					var nav = jQuery('#nav');
					var navHomeY = nav.offset().top;
					var isFixed = false;
					var jQueryw = jQuery(window);
					jQueryw.scroll(function() {
						jQuery('#nav').css({'backgroundColor':'none', 'opacity':'0.8','line-height':'40px'});
						var scrollTop = jQueryw.scrollTop();
						var shouldBeFixed = scrollTop > navHomeY;
						if (shouldBeFixed && !isFixed) {
							nav.css({
								position: 'fixed',
								top: 0,
								left: nav.offset().left,
								width: nav.width()
							});
							isFixed = true;
						}
						else if (!shouldBeFixed && isFixed) {
							nav.css({
								position: 'static'
								
							});
							isFixed = false;
						}
					});
				});
			});
			//jQuery('#nav').
		</script>

		<?php woo_main_after(); ?>

		<?php get_sidebar(); ?>

	</div><!-- /#main-sidebar-container -->

	<?php get_sidebar('alt'); ?>

</div><!-- /#content -->


<?php woo_content_after(); ?>


<?php get_footer(); ?>

