<?php
/**
 * The template for displaying WooCommerce pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

get_header(); ?>

<div class="grid-container">
	<div class="grid-x grid-padding-x">
	<?php if ( ! is_active_sidebar( 'sidebar-shop' ) || is_product() ) : ?>
		<div id="primary" class="content-area cell">
	<?php else : ?>
		<div id="primary" class="content-area medium-9 cell with-sidebar">
	<?php endif; ?>
			<main id="main" class="site-main" role="main">
				<?php woocommerce_breadcrumb(); ?>
				<?php woocommerce_content(); ?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php if ( is_active_sidebar( 'sidebar-shop' ) && ! is_product() ) :
			get_sidebar('shop');
		endif; ?>
	</div><!-- .grid-x -->
</div><!-- .grid-container -->

<?php get_footer(); ?>
