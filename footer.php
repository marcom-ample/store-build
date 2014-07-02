<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
</div><!-- #page -->
<footer id="colophon" role="contentinfo">
	<div class="menus">
		<?php wp_nav_menu( array( 'theme_location' => 'footer-one', 'menu_class' => 'footer-one' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'footer-two', 'menu_class' => 'footer-two' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'footer-three', 'menu_class' => 'footer-three' ) ); ?>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>