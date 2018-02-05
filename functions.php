<?php
/**
 * Nelumbo functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nelumbo
 */

// Setup theme
require_once( get_template_directory() . '/functions/theme-setup.php' );

// Register widgets
require_once( get_template_directory() . '/functions/widgets.php' );

// Register scripts and stylesheets
require_once( get_template_directory() . '/functions/enqueue-scripts.php' );

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

// Register image sizes
require_once( get_template_directory() . '/functions/images.php' );

// Register walkers
require_once( get_template_directory() . '/functions/walkers.php' );

// WooCommerce
require_once( get_template_directory() . '/functions/woocommerce-setup.php' );
