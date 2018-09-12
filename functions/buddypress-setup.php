<?php
/**
 * Setup BuddyPress
 *
 * @package nelumbo
 */

// Cover size
function nelumbo_xprofile_cover_image( $settings = array() ) {
	$settings['width']  = 1280;
	$settings['height'] = 400;

	return $settings;
}
add_filter( 'bp_before_xprofile_cover_image_settings_parse_args', 'nelumbo_xprofile_cover_image', 10, 1 );
add_filter( 'bp_before_groups_cover_image_settings_parse_args', 'nelumbo_xprofile_cover_image', 10, 1 );
