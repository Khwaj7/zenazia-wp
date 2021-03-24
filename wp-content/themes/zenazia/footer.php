<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zenazia
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		    <p><?php echo the_field("footer_copyright") . ' ' . current_time('Y'); ?></p>
   		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
