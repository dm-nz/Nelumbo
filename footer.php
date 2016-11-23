<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nelumbo
 */

?>

	</div><!-- #content -->

	<div id="footer-wrapper" class="inverse">
	<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
		<div id="footer-widgets" class="section-padding">
			<div class="row padding-top-small" data-equalizer data-options="equalizeOnStack: false">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
		</div>
	<?php } ?>
		<footer id="colophon" class="site-footer section-padding" role="contentinfo">
			<div class="row">
				<div class="site-info column text-right">
					Nelumbo theme by <a href="http://lotus.kg">Lotus</a>.
				</div><!-- .site-info -->
			</div>
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
