<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nelumbo
 */

?>
		</div><!-- #content -->

		<div id="footer-wrapper" class="inverse">
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			<div id="footer-widgets">
				<div class="grid-container">
					<div class="grid-x grid-padding-x" data-equalizer data-options="equalizeOnStack: false">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div><!-- .grid-x -->
				</div><!-- .grid-container -->
			</div><!-- #footer-widgets -->
		<?php endif; ?>
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
						<div class="site-copyright medium-6 cell">
							<i class="far fa-copyright"></i> <?php echo date('Y') . " "; bloginfo('name'); ?>
						</div><!-- .site-copyright.medium-6 -->
						<div class="site-developer medium-6 cell medium-text-right">
							<i class="fab fa-wordpress"></i> <?php printf( esc_html__( 'Theme: %1$s by %2$s', 'nelumbo' ), 'Nelumbo', '<a href="https://lotus.kg/" rel="designer">Lotus</a>' ); ?>
						</div><!-- .site-developer.medium-6 -->
					</div><!-- .grid-x -->
				</div><!-- .grid-container -->
			</footer><!-- #colophon -->
		</div><!-- #footer-wrapper -->
		<div id="up">
			<a><i class="fa fa-lg fa-angle-up"></i></a>
		</div><!-- #up -->
	</div><!-- .off-canvas-content -->
</div><!-- #page.off-canvas-wrapper -->

<?php wp_footer(); ?>

<script>
	$(document).foundation();
</script>

</body>
</html>
