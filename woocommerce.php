<?php
/**
 * The template for displaying WooCommerce pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nelumbo
 */

get_header(); ?>

<div class="row">
<?php if ( ! is_active_sidebar( 'sidebar-shop' ) || is_product() ) : ?>
	<div id="primary" class="content-area column">
<?php else : ?>
	<div id="primary" class="content-area medium-9 columns with-sidebar">
<?php endif; ?>
		<main id="main" class="site-main" role="main">
			<?php woocommerce_breadcrumb(); ?>
			<?php woocommerce_content(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php if ( is_active_sidebar( 'sidebar-shop' ) && ! is_product() ) :
		get_sidebar();
	endif; ?>
</div><!-- .row -->

<?php get_footer(); ?>