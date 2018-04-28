<?php
/**
 * Setup WooCommerce
 *
 * @package nelumbo
 */

// WooCommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Gallery
add_action( 'after_setup_theme', 'woocommerce_gallery' );

function woocommerce_gallery() {
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}

// Cart link in header
if ( ! function_exists( 'nelumbo_cart_link' ) ) {
	function nelumbo_cart_link() {
		?>
		<a class="cart-content" title="<?php esc_attr_e( 'View your shopping cart', 'nelumbo' ); ?>">
			<i class="fa fa-shopping-cart"></i>
			<span>
				<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span>
				<span class="count hide-for-small-only"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'woocommerce' ), WC()->cart->get_cart_contents_count() ) );?></span>
			</span>
		</a>
		<?php
	}
}

// Change number of products per row to 3
if ( is_active_sidebar( 'sidebar-shop' ) ) {
	add_filter( 'loop_shop_columns', 'loop_columns' );
}
if ( !function_exists( 'loop_columns' ) && is_active_sidebar( 'sidebar-shop' ) && function_exists( 'is_shop' ) ) {
	function loop_columns() {
		return 3;
	}
}

// Remove add to cart button from product within loops
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
