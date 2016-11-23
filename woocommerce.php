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
		<?php if ( ! is_active_sidebar( 'sidebar-1' ) || is_product() ) { ?>
		<div id="primary" class="content-area column">
		<?php } else if ( is_shop() || is_product_category() || is_product_tag() ) { ?>
		<div id="primary" class="content-area medium-9 columns with-sidebar">
		<?php } else { ?>
		<div id="primary" class="content-area medium-7 large-collapse-right columns">
		<?php } ?>
			<main id="main" class="site-main" role="main">

				<?php woocommerce_breadcrumb(); ?>
				<?php woocommerce_content(); ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php if ( ! is_product() ) {
			get_sidebar();
		} ?>
	</div>
<?php get_footer();
