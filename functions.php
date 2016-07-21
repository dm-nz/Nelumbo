<?php
/**
 * Nelumbo functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nelumbo
 */

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
	$GLOBALS['content_width'] = apply_filters( 'nelumbo_content_width', 640 );
}
add_action( 'after_setup_theme', 'nelumbo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nelumbo_widgets_init() {
	register_sidebar( array(
		'name'					=> esc_html__( 'Sidebar', 'nelumbo' ),
		'id'						=> 'sidebar-1',
		'description'	 => esc_html__( 'Add widgets here.', 'nelumbo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	 => '</h2>',
	) );
}
add_action( 'widgets_init', 'nelumbo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nelumbo_scripts() {
	wp_register_style( 'foundation-style', get_template_directory_uri() . '/css/app.css', array(), '20160710', 'all' );

	wp_enqueue_style( 'nelumbo-style', get_stylesheet_uri() );

	wp_enqueue_style( 'foundation-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'foundation-jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array(), '20160710', true );

	wp_enqueue_script( 'foundation-scripts', get_template_directory_uri() . '/scripts/app.min.js', array(), '20160720', true );
}
add_action( 'wp_enqueue_scripts', 'nelumbo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

define( 'AUTOSAVE_INTERVAL', 9000 ); // Seconds

define( 'WP_POST_REVISIONS', false );

class Foundation_Top_Bar extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = array() ) {
 		$indent = str_repeat("\t", $depth);
    	$output .= "\n$indent<ul class=\"dropdown menu vertical\" data-toggle>\n";
 	}
}

function as_adapt_search_form( $form ) {
    // $forms contains the rendered HTML output of the standard search form
    // the exact output is changed if your theme has declared HTML5 support
    // with the following minimum settings:
    //
    // add_theme_support( 'html5', array( 'search-form' ) );
    //
    // see http://codex.wordpress.org/Function_Reference/add_theme_support
    // add Foundation classes to the button class
    //
    // we do a string replace and search for 'search-submit', which is the one
    // class that is already defined for the HTML5 search form
    //
    // if HTML5 search-form support has not been defined, this will leave the
    // HTML output unchanged
    $form = str_replace(
        'search-submit',
        'search-submit small radius button',
        $form
    );
    // return the modified string
    return $form;
}
// run the search form HTML output through the newly defined filter
add_filter( 'get_search_form', 'as_adapt_search_form' );