<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php echo esc_attr(get_bloginfo('charset')); ?>" />
		<title><?php woo_title(); ?></title>
		<?php woo_meta(); ?>
		<link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>" />
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" >
		<?php woo_head(); ?>

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:800' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/spoon-fork-favicon.png" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="/wp-content/themes/dinnerties/includes/js/jquery.backstretch.min.js" type="text/javascript"></script>
		<script src="/wp-content/themes/dinnerties/includes/js/jquery.sticky.js" type="text/javascript"></script>
		
		<script>
			$(".parallax").backstretch("<?php the_field('text_header_image', 'options') ?>");
		</script>
		
		<script>
			$(document).ready(function(){
				$("#nav").sticky({topSpacing:0});
			});
		</script>
		
		<script src="/wp-content/themes/dinnerties/includes/js/smoothscroll.js" type="text/javascript"></script>
		<script>
			jQuery(function($){
				$.localScroll({filter:'#nav li a', offset: 0,});
				$.localScroll({filter:'.bizz_content a', offset: 0,});
			});
		</script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-30708813-32', 'auto');
		  ga('send', 'pageview');

		</script>
		
	</head>
	<body <?php body_class(); ?>>
		<?php woo_top(); ?>
		<div id="wrapper">

			<div id="inner-wrapper">

				<?php woo_header_before(); ?>

				<header id="header" class="col-full" class="col-full">
					<?php woo_header_inside(); if (!is_front_page()) { ?><?php } ?>
				</header>
				<?php
				//woo_header_after(); ?>