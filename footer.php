<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Bulmascores
*/

?>

<footer class="footer" style="background-color:#7fc33a;">
	<div class="container">
		<div class="columns">
			<div class="column">
				<?php
				if(is_active_sidebar('footer-sidebar-1')){
				dynamic_sidebar('footer-sidebar-1');
				}
				?>
			</div>
			<div class="column">
				<?php
				if(is_active_sidebar('footer-sidebar-2')){
				dynamic_sidebar('footer-sidebar-2');
				}
				?>
			</div>
			<div class="column">
				<?php
				if(is_active_sidebar('footer-sidebar-3')){
				dynamic_sidebar('footer-sidebar-3');
				}
				?>
			</div>
		</div>
	</div><!-- .container -->
</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
</html>
