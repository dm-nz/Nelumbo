<?php
/**
 * The sidebar containing WooCommerce widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nelumbo
 */

if ( ! is_active_sidebar( 'sidebar-shop' ) ) :
	return;
endif;
?>

<div class="medium-3 columns">
	<aside id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-shop' ); ?>
	</aside><!-- #secondary -->
</div><!-- .medium-3 -->