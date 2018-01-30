<?php
/**
 * Register image sizes
 *
 * @package nelumbo
 */

// Cover thumbnail
add_image_size( 'cover', 1920, 600, true );

// Entry featured image
add_image_size( 'entry-featured-img', 680, 680, false );

// Logo
add_theme_support('custom-logo', array(
	'height'		=> 80,
	'flex-height'	=> true
));
