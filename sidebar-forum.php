<?php
/**
 * The sidebar containing BBPress widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nelumbo
 */

if ( ! is_active_sidebar( 'sidebar-forum' ) ) :
	return;
endif;
?>

<div class="medium-3 cell">
	<aside id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-forum' ); ?>
	</aside><!-- #secondary -->
</div><!-- .medium-3 -->
