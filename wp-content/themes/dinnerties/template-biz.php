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

					<div class="i_want_select">
						<div class="parallax" style="background-image: url('<?php the_field('text_header_image', 'options') ?>');">
							<div class="bizz_content">
								<div class="cover_one" id="attend_btn_div">
									<a href="#attend_tag"><span class="attnd"><?php the_field('Text_ATTEND', 'options'); ?></span></a>
								</div>
								
								<div class="or">
									<img src="<?php the_field('Text_OR', 'options'); ?>" alt="image" />
								</div>
								
								<div class="cover_two" id="host_btn_div">
									<a href="#host_tag"><span class="attnd"><?php the_field('Text_HOST', 'options'); ?></span></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="main_nav_container">
					
						<div class="to_dinner">
							<div class="sides"></div>
							<span class="text"><?php the_field('Text_Footer', 'options'); ?></span>
							<div class="sides"></div>
						</div>

						<div id="menu_nav" class="menu_nav">
							<?php //wp_nav_menu(array('menu' => 'footer_menu', 'theme_location' => 'footer')); ?>  
							<nav id="navbar">
								<ul id="nav">
									<li><a href="#about_us">ABOUT</a></li>
									<li><a href="#faqs">FAQ</a></li>
									<!-- <li><a href="#">GALLERY</a></li> -->
									<li class="menu_last"><a href="#contact">CONTACT</a></li>
								</ul>
							</nav>
						</div>
					</div>
					
					<!-- End Home -->


					<!-- I Want To Attend -->
					
					<div id="attend_tag">
						<div id="attend_header_block">
							<div class="sides"></div>
							<div id="attend_title"><h1><?php the_field('attend_title', 'options'); ?></h1></div>
							<div class="sides"></div>
						</div>
						
						<h1 class="tag_line_form"><?php the_field('attend_title_tag_line', 'options'); ?></h1>
						
						<div class="form-container">
							<?php the_field('attend_podio_form', 'options'); ?>
						</div>
					</div>
					
					<!-- End I Want To Attend -->
					
					<!-- I Want To Host -->
					
					<div class="parallax" style="background-image: url('<?php the_field('host_header_image', 'options') ?>');"></div>
					
					<div id="host_tag">
					
						<div id="host_header_block">
							<div class="sides"></div>
							<div id="host_title"><h1><?php the_field('host_title', 'options'); ?></h1></div>
							<div class="sides"></div>
						</div>
						
						<h1 class="tag_line_form"><?php the_field('host_title_tag_line', 'options'); ?></h1>
						
						<div class="form-container">
							<?php the_field('host_podio_form', 'options'); ?>
						</div>
					</div>
					
					<!-- End I Want To Host -->


					<!-- About Us -->
					
					<div class="parallax" style="background-image: url('<?php the_field('about_header_image', 'options') ?>');"></div>
					
					<div id="about_us">
					
						<div class="about_icon">
							<div class="sides"></div>
							<img src="<?php the_field('about_image_logo', 'options'); ?>" />
							<div class="sides"></div>
						</div>
						
						<div class="about_text">
							<h2><?php the_field('about_title', 'options'); ?></h2>
							<div><?php the_field('about_content', 'options'); ?></div>
						</div>
						
						<div class="train"></div>
					</div>

					<!-- End About Us -->
					
					<!-- FAQ -->
					
					<div class="parallax" style="background-image: url('<?php the_field('faq_header_image', 'options') ?>');"></div>
					
					<div id="faqs">
					
						<div class="faq_icon">
							<div class="sides"></div>
							<img src="<?php the_field('faq_image_logo', 'options'); ?>" />
							<div class="sides"></div>
						</div>
						
						<div class="faq_text">
							<h2><?php the_field('faq_title', 'options'); ?></h2>
							<div class="faq_content"><?php the_field('faq_content', 'options'); ?></div>
							<div class="train"></div>
						</div>
					</div>

					<!-- End FAQ -->


					<!-- Contact -->
					
					<div class="parallax" style="background-image: url('<?php the_field('contact_header_image', 'options') ?>');"></div>
					
					<div id="contact">
						<div class="contact_icon">
							<div class="sides"></div>
							<img src="<?php the_field('contact_image_logo', 'options'); ?>" />
							<div class="sides"></div>
						</div>
						
						<div class="contact_block">
						<div class="contact_text">
							<h2><?php the_field('contact_title', 'options'); ?></h2>
						</div>
						
						<div class="contact_social">
							
							<div class="mail_block">
								<h2><?php the_field('contact_text', 'options'); ?></h2>
								<p><a href="mailto:<?php the_field('contact_email', 'options'); ?>"><?php the_field('contact_email', 'options'); ?></a></p>
							</div>
							
							<div class="social_block">
								<h2><?php the_field('contact_text_two', 'options'); ?></h2>
								
								<?php
								
									$fbtitle = get_field('contact_facebook_share_title', 'options');
									$facebooktitle = urlencode($fbtext);
									
									$fbtext = get_field('contact_facebook_share_summary', 'options');
									$facebooktext = urlencode($fbtext);
								
									$twttext = get_field('contact_twitter_140_characters', 'options');
									$twturl = get_field('contact_twitter_share_link', 'options');
									$twittertext = urlencode($twttext);
									$twitterurl = urlencode($twturl);
									
									$esubj = get_field('contact_share_by_email_subject', 'options');
									$ebody = get_field('contact_share_by_email_body', 'options');
									$emailsubj = urlencode($esubj);
									$emailbody = urlencode($ebody);
								?>
							
								<ul>
									<li class="facebook"><a target="_blank" href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_field('contact_facebook_share_link', 'options'); ?>&p[images][0]=<?php the_field('contact_facebook_thumbnail_image', 'options'); ?>&p[title]=<?php echo $facebooktitle;?>&p[summary]=<?php echo $facebooktext;?>">Facebook</a></li>
									<li class="twitter"><a target="_blank" href="https://twitter.com/intent/tweet?original_referer=https://twitter.com/about/resources/buttons&text=<?php echo $twittertext;?>&tw_p=tweetbutton&url=<?php echo $twitterurl;?>">Twitter</a></li>
									<li class="email"><a href="mailto:?subject=<?php echo $esubj;?>&amp;body=<?php echo $emailbody;?>">Email</a></li>
								</ul>
							</div>
							
						</div>
						</div>
						
						<div class="train"></div>
						
						<div class="see_you">
							<div class="sides"></div>
							<p><?php the_field('contact_see_you', 'options'); ?></p>
							<div class="sides"></div>
						</div>
					</div>
					
					<!-- End Contact -->

					<?php
				}
			}

			woo_loop_after();
			?>
		</section><!-- /#main -->

		<?php woo_main_after(); ?>

		<?php get_sidebar(); ?>

	</div><!-- /#main-sidebar-container -->

	<?php get_sidebar('alt'); ?>

</div><!-- /#content -->


<?php woo_content_after(); ?>


<?php get_footer(); ?>

