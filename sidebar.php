<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nelumbo
 */

if ( ! is_woocommerce_activated() && ! is_active_sidebar( 'sidebar-1' ) ) :
	return;
elseif ( is_woocommerce_activated() && ! is_active_sidebar( 'sidebar-1' ) ) :
	if ( ! is_woocommerce() ) :
		return;
	endif;
endif;
?>

<?php if ( is_woocommerce_activated() ) :
	if ( is_woocommerce() ) : ?>
		<div class="medium-3 columns">
			<aside id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-shop' ); ?>
			</aside><!-- #secondary -->
		</div><!-- .medium-3 -->
	<?php else : ?>
		<div class="medium-4 large-collapse-left columns">
			<aside id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</aside><!-- #secondary -->
		</div><!-- .medium-4 -->
	<?php endif; ?>
<?php else : ?>
	<div class="medium-4 large-collapse-left columns">
		<aside id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside><!-- #secondary -->
	</div><!-- .medium-4 -->
<?php endif; ?>