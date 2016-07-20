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

	<div id="footer-wrapper" class="padding-top-triple padding-bottom-triple">
		<footer id="colophon" class="site-footer row" role="contentinfo">
			<div class="site-info column">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nelumbo' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'nelumbo' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'nelumbo' ), 'nelumbo', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
