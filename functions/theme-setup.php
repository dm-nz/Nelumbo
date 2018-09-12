<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @package nelumbo
 */

if ( ! function_exists( 'nelumbo_setup' ) ) :
// Note that this function is hooked into the after_setup_theme hook, which runs before the init hook.
// The init hook is too late for some features, such as indicating support for post thumbnails.
function nelumbo_setup() {

	// Make theme available for translation. Translations can be filed in the /languages/ directory.
	// If you're building a theme based on Nelumbo, use a find and replace to change 'nelumbo' to the name of your theme in all the template files.
	load_theme_textdomain( 'nelumbo', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title. By adding theme support, we declare that this theme
	// does not use a hard-coded <title> tag in the document head, and expect WordPress to provide it for us.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	// @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'nelumbo' ),
	) );

	// Add active class to menu
	function active_menu_item ($classes, $item) {
		if (in_array('current-menu-item', $classes) ){
			$classes[] = 'active ';
		}
		return $classes;
	}
	add_filter('nav_menu_css_class' , 'active_menu_item' , 10 , 2);

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Enable support for Post Formats.
	// @link https://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
		'status',
		'chat'
	) );
}
endif;
add_action( 'after_setup_theme', 'nelumbo_setup' );

// Set the content width in pixels, based on the theme's design and stylesheet.
// Priority 0 to make it available to lower priority callbacks.
// @global int $content_width
function nelumbo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nelumbo_content_width', 680 );
}
add_action( 'after_setup_theme', 'nelumbo_content_width', 0 );

// Query WooCommerce activation
function is_woocommerce_activated() {
	return class_exists( 'woocommerce' ) ? true : false;
}
