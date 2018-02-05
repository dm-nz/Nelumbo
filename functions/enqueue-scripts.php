<?php
/**
 * Register scripts and stylesheets
 *
 * @link https://codex.wordpress.org/Function_Reference/wp_enqueue_script
 * @link https://codex.wordpress.org/Function_Reference/wp_enqueue_style
 *
 * @package nelumbo
 */

function nelumbo_scripts() {
	wp_register_style( 'foundation-style', get_template_directory_uri() . '/css/app.min.css', array(), '20160710', 'all' );
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
	wp_enqueue_script( 'foundation-scripts', get_template_directory_uri() . '/js/app.min.js', array(), '20160720', true );
}
add_action( 'wp_enqueue_scripts', 'nelumbo_scripts' );
