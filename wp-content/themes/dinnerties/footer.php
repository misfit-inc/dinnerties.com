<?php
/**
* Footer Template *
* Here we setup all logic and XHTML that is required for the footer section of all screens.
*
* @package WooFramework
* @subpackage Template
*/

global $woo_options;
woo_footer_top();
woo_footer_before();
?>

<footer id="footer" class="col-full">
	<?php woo_footer_inside(); ?>
	
	<div id="copyright" class="col-left">
		<?php //woo_footer_left(); ?>
	</div>
	
	<div id="credit" class="col-right">
		<?php //woo_footer_right(); ?>
	</div>
	
	<?php //woo_header_after(); ?>
	<?php //wp_nav_menu( array('menu' => 'main' )); ?>
	<?php //wp_nav_menu( array( 'menu' => 'main', 'theme_location' => 'secondary' ) ); ?>
	
	<!--<div class="footerMenu">
		<?php //wp_nav_menu(array('menu' => 'footer_menu','theme_location' => 'footer')); ?>
	</div> -->
	
	<?php //wp_nav_menu(array('menu' => 'footer_menu')); ?>
	
</footer>

<?php woo_footer_after(); ?>

</div><!-- /#inner-wrapper -->
</div><!-- /#wrapper -->
<div class="fix"></div><!--/.fix-->

<?php wp_footer(); ?>
<?php woo_foot(); ?>

</body>
</html>