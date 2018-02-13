<?php
/**
 * Register widget area
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @package nelumbo
 */

function nelumbo_widgets_init() {
	register_sidebar( array(
		'name'			=> esc_html__( 'Sidebar', 'nelumbo' ),
		'id'			=> 'sidebar-1',
		'description'	 => esc_html__( 'Add widgets here.', 'nelumbo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	 => '</h2>',
	) );
	register_sidebar( array(
		'name'			=> esc_html__( 'Footer', 'nelumbo' ),
		'id'			=> 'footer-1',
		'description'	 => esc_html__( 'Add widgets here.', 'nelumbo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s large-3 medium-6 cell" data-equalizer-watch>',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	 => '</h2>',
	) );
}
add_action( 'widgets_init', 'nelumbo_widgets_init' );

function nelumbo_woocommerce_widgets_init() {
	register_sidebar( array(
		'name'			=> esc_html__( 'Shop sidebar', 'nelumbo' ),
		'id'			=> 'sidebar-shop',
		'description'	 => esc_html__( 'Add widgets here.', 'nelumbo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	 => '</h2>',
	) );
}

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( is_plugin_active('woocommerce/woocommerce.php') ) {
	add_action( 'widgets_init', 'nelumbo_woocommerce_widgets_init' );
}

function nelumbo_bbpress_widgets_init() {
	register_sidebar( array(
		'name'			=> esc_html__( 'Forum sidebar', 'nelumbo' ),
		'id'			=> 'sidebar-forum',
		'description'	 => esc_html__( 'Add widgets here.', 'nelumbo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	 => '</h2>',
	) );
}

if ( is_plugin_active('bbpress') ) {
	add_action( 'widgets_init', 'nelumbo_bbpress_widgets_init' );
}
