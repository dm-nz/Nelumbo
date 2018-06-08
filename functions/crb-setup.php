<?php
/**
 * Setup Carbon Fields
 *
 * @package nelumbo
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options', 'nelumbo' ) )
        ->add_fields( array(
            Field::make( 'header_scripts', 'crb_header_script' ),
            Field::make( 'footer_scripts', 'crb_footer_script' ),
            Field::make( 'text', 'google_maps_api_key', __( 'Google Maps API key', 'nelumbo' ) ),
        ) );
}

require_once( get_template_directory() . '/functions/crb-sections-setup.php' );
