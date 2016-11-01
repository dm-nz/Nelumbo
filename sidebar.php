<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nelumbo
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php if ( is_woocommerce_activated()) {
	if ( is_shop() || is_product_category() || is_product_tag() ) { ?>
<div class="medium-3 columns">
	<?php } else { ?>
<div class="medium-4 large-collapse-left columns">
	<?php } ?>
	<aside id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- #secondary -->
</div>
<?php } else { ?>
<div class="medium-4 large-collapse-left columns">
	<aside id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- #secondary -->
</div>
<?php } ?>
