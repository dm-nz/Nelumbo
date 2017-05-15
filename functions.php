<?php
/**
 * Nelumbo functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nelumbo
 */

// Table of contents
// -----------------
// 1. Setup
// 2. Widgets
// 3. Scripts and styles
// 4. Includes
// 5. Images
// 6. Walkers
// 7. WooCommerce

// 1. Setup
// --------

if ( ! function_exists( 'nelumbo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nelumbo_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Nelumbo, use a find and replace
	 * to change 'nelumbo' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'nelumbo', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'nelumbo' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'nelumbo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	/*
	 * Enable support for Post Formats.
	 *
	 * @link https://codex.wordpress.org/Post_Formats
	 */
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

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nelumbo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nelumbo_content_width', 680 );
}
add_action( 'after_setup_theme', 'nelumbo_content_width', 0 );

// 2. Widgets
// ----------

// Register widget area
// @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
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
		'name'			=> esc_html__( 'Shop sidebar', 'nelumbo' ),
		'id'			=> 'sidebar-shop',
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
		'before_widget' => '<section id="%1$s" class="widget %2$s large-3 medium-6 columns" data-equalizer-watch>',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	 => '</h2>',
	) );
}
add_action( 'widgets_init', 'nelumbo_widgets_init' );

// 3. Scripts and styles
// ---------------------

// Enqueue scripts and styles
function nelumbo_scripts() {
	wp_register_style( 'foundation-style', get_template_directory_uri() . '/css/app.css', array(), '20160710', 'all' );
	wp_register_style( 'icons-style', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css', array(), '20160721', 'all' );
	wp_register_style( 'font-style', get_template_directory_uri() . '/fonts/lato/lato.css', array(), '20170104', 'all' );

	wp_enqueue_style( 'nelumbo-style', get_stylesheet_uri() );
	wp_enqueue_style( 'foundation-style', get_stylesheet_uri() );
	wp_enqueue_style( 'icons-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-style', get_stylesheet_uri() );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'foundation-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '20160726', true );
	wp_enqueue_script( 'foundation-scripts', get_template_directory_uri() . '/js/app.js', array(), '20160720', true );
}
add_action( 'wp_enqueue_scripts', 'nelumbo_scripts' );

// 4. Includes
// -----------

// Implement the Custom Header feature
require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme
require get_template_directory() . '/inc/template-tags.php';

// Custom functions that act independently of the theme templates
require get_template_directory() . '/inc/extras.php';

// Customizer additions
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file
require get_template_directory() . '/inc/jetpack.php';

// 5. Images
// ------

// Cover thumbnail
add_image_size( 'cover', 1920, 450, true );

// Entry featured image
add_image_size( 'entry-featured-img', 680, 680, false );

// Logo
add_theme_support('custom-logo', array(
	'width'			=> 88,
	'height'		=> 88,
	'flex-height'	=> true
));

// 6. Walkers
// ----------

// Foundation top bar walker
class Foundation_Top_Bar extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"dropdown menu vertical\" data-toggle>\n";
	}
}

// 7. WooCommerce
// --------------

// WooCommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Query WooCommerce activation
function is_woocommerce_activated() {
	return class_exists( 'woocommerce' ) ? true : false;
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
		<a class="cart-content" href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'nelumbo' ); ?>">
			<i class="fa fa-shopping-cart"></i>
			<span>
				<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span>
				<span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'nelumbo' ), WC()->cart->get_cart_contents_count() ) );?></span>
				<i class="fa fa-caret-down"></i>
			</span>
		</a>
		<?php
	}
}

// Change number of products per row to 3
if ( is_active_sidebar( 'sidebar-shop' ) ) {
	add_filter('loop_shop_columns', 'loop_columns');
}
if ( !function_exists('loop_columns') && is_active_sidebar( 'sidebar-shop' ) && function_exists('is_shop') ) {
	function loop_columns() {
		return 3;
	}
}