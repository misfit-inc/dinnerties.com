<?php
/**
 * Template Name: FAQ
 *
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

		<!-- #main Starts -->
		<?php woo_main_before(); ?>

		<section id="main" style="width: 60%; margin:0px auto;">
			<div style="width:100%; text-align:center;">
				<img width="300.5px" class="footer_custom_img" src="<?php the_field('faq_image_line'); ?>" />
				<img class="footer_custom_img" src="<?php the_field('faq_image_logo'); ?>" />
				<img width="300.5px" class="footer_custom_img" src="<?php the_field('faq_image_line'); ?>" />
			</div>
			<?php
			woo_loop_before();

			if (have_posts()) {
				$count = 0;
				while (have_posts()) {
					the_post();
					$count++;
					?>
                    <div style="width:97.5%; margin:0 auto;">
					<h2 style="margin:3% 0 3% 0; letter-spacing:1px; word-spacing:2px; text-transform:uppercase;font-family: 'Conv_Gotham-Book' !important;"><?php the_field('faq_title'); ?></h2>
					<?php
					woo_get_template_part('content', 'page-template-business'); // Get the page content template file, contextually.
				}
			}
			woo_loop_after();
			?>
			</div>
		</section><!-- /#main -->

		<?php woo_main_after(); ?>

		<?php get_sidebar(); ?>

	</div><!-- /#main-sidebar-container -->
<div style="width:100%; text-align:center;"><img style="margin:5% 0 2% 0; width:70%;"  src="<?php the_field('faq_footer_image'); ?>" /></div>
	<?php get_sidebar('alt'); ?>

</div><!-- /#content -->


<?php woo_content_after(); ?>


<?php get_footer(); ?>

