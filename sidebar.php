<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nelumbo
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) :
	return;
endif;
?>

<div class="medium-4 large-collapse-left columns">
	<aside id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- #secondary.widget-area -->
</div><!-- .medium-4 -->
