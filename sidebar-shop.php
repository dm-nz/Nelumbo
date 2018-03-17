<?php
/**
 * The sidebar containing WooCommerce widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nelumbo
 */

if ( ! is_active_sidebar( 'sidebar-shop' ) ) :
	return;
endif;
?>

<div class="medium-3 cell">
	<aside id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-shop' ); ?>
	</aside><!-- #secondary.widget-area -->
</div><!-- .medium-3 -->
