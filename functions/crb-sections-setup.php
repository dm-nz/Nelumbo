<?php
/**
 * Setup Carbon Fields Sections
 *
 * @package nelumbo
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_sections' );
function crb_sections() {
	Container::make( 'post_meta', __( 'Section options', 'nelumbo' ) )
		->where( 'post_template', '=', 'templates/fluid.php' )
		->or_where( 'post_template', '=', 'templates/full-width.php' )
		->or_where( 'post_template', '=', 'templates/full-width-cover.php' )
		->or_where( 'post_template', '=', 'templates/two-columns.php' )
		->or_where( 'post_template', '=', 'templates/two-columns-cover.php' )
		->add_fields( array(
			Field::make( 'complex', 'crb_sections', __( 'Sections', 'nelumbo' ) )
				->add_fields( 'accordion_section', __( 'Accordion', 'nelumbo' ), array(
					Field::make( 'text', 'accordion_headline', __( 'Headline', 'nelumbo' ) ),
					Field::make( 'complex', 'accordion_items', __( 'Items', 'nelumbo' ) )
						->add_fields( array(
							Field::make( 'text', 'accordion_item_headline', __( 'Headline', 'nelumbo' ) ),
							Field::make( 'rich_text', 'accordion_item_content', __( 'Content' ) ),
						) )
				) )
				->add_fields( 'callout_section', __( 'Callout', 'nelumbo' ), array(
					Field::make( 'rich_text', 'callout_content', __( 'Content' ) ),
					Field::make( 'select', 'callout_type', __( 'Type', 'nelumbo' ) )
						->add_options( array(
							'default' => __( 'Default' ),
							'primary' => __( 'Primary', 'nelumbo' ),
							'secondary' => __( 'Secondary', 'nelumbo' ),
							'success' => __( 'Success', 'nelumbo' ),
							'warning' => __( 'Warning', 'nelumbo' ),
							'alert' => __( 'Alert', 'nelumbo' ),
						) )
				) )
				->add_fields( 'cards_section', __( 'Cards', 'nelumbo' ), array(
					Field::make( 'text', 'cards_headline', __( 'Headline', 'nelumbo' ) ),
					Field::make( 'complex', 'card_items', __( 'Items', 'nelumbo' ) )
						->add_fields( array(
							Field::make( 'image', 'card_item_image', __( 'Image' ) ),
							Field::make( 'text', 'card_item_headline', __( 'Headline', 'nelumbo' ) ),
							Field::make( 'rich_text', 'card_item_content', __( 'Content' ) ),
							Field::make( 'text', 'card_item_button_text', __( 'Button text', 'nelumbo' ) ),
							Field::make( 'text', 'card_item_button_url', __( 'Button URL', 'nelumbo' ) ),
						) )
				) )
				->add_fields( 'cover_section', __( 'Cover', 'nelumbo' ), array(
					Field::make( 'image', 'cover_bg_image', __( 'Background image', 'nelumbo' ) )
						->set_value_type( 'url' ),
					Field::make( 'image', 'cover_bg_video', __( 'Background video', 'nelumbo' ) )
						->set_type( 'video' )
						->set_value_type( 'url' ),
					Field::make( 'text', 'cover_headline', __( 'Headline', 'nelumbo' ) ),
					Field::make( 'text', 'cover_subheadline', __( 'Subheadline', 'nelumbo' ) ),
					Field::make( 'text', 'cover_primary_button_text', __( 'Primary button text', 'nelumbo' ) ),
					Field::make( 'text', 'cover_primary_button_url', __( 'Primary button URL', 'nelumbo' ) ),
					Field::make( 'text', 'cover_secondary_button_text', __( 'Secondary button text', 'nelumbo' ) ),
					Field::make( 'text', 'cover_secondary_button_url', __( 'Secondary button URL', 'nelumbo' ) )
				) )
				->add_fields( 'embed_section', __( 'Embed' ), array(
					Field::make( 'text', 'embed_headline', __( 'Headline', 'nelumbo' ) ),
					Field::make( 'oembed', 'embed_url', __( 'Embed object URL', 'nelumbo' ) ),
				) )
				->add_fields( 'features_section', __( 'Features', 'nelumbo' ), array(
					Field::make( 'text', 'features_headline', __( 'Headline', 'nelumbo' ) ),
					Field::make( 'complex', 'feature_items', __( 'Items', 'nelumbo' ) )
						->add_fields( array(
							Field::make( 'image', 'feature_item_image', __( 'Image' ) ),
							Field::make( 'text', 'feature_item_headline', __( 'Headline', 'nelumbo' ) ),
							Field::make( 'rich_text', 'feature_item_content', __( 'Content' ) ),
						) )
				) )
				->add_fields( 'full_width_image_section', __( 'Full-width image', 'nelumbo' ), array(
					Field::make( 'image', 'full_width_image', __( 'Image' ) ),
				) )
				->add_fields( 'gallery_section', __( 'Gallery' ), array(
					Field::make( 'text', 'gallery_headline', __( 'Headline', 'nelumbo' ) ),
					Field::make( 'media_gallery', 'gallery_items', __( 'Images' ) )
						->set_type( array( 'image' ) )
				) )
				->add_fields( 'map_section', __( 'Map', 'nelumbo' ), array(
					Field::make( 'map', 'map_location', __( 'Location', 'nelumbo' ) )
				) )
				->add_fields( 'tabs_section', __( 'Tabs', 'nelumbo' ), array(
					Field::make( 'text', 'tabs_headline', __( 'Headline', 'nelumbo' ) ),
					Field::make( 'complex', 'tab_items', __( 'Items', 'nelumbo' ) )
						->add_fields( array(
							Field::make( 'text', 'tab_item_headline', __( 'Headline', 'nelumbo' ) ),
							Field::make( 'rich_text', 'tab_item_content', __( 'Content' ) ),
						) )
				) )
				->add_fields( 'testimonials_section', __( 'Testimonials', 'nelumbo' ), array(
					Field::make( 'text', 'testimonials_headline', __( 'Headline', 'nelumbo' ) ),
					Field::make( 'complex', 'testimonial_items', __( 'Items', 'nelumbo' ) )
						->add_fields( array(
							Field::make( 'image', 'testimonial_item_image', __( 'Image' ) ),
							Field::make( 'textarea', 'testimonial_item_quote', __( 'Quote', 'nelumbo' ) ),
							Field::make( 'text', 'testimonial_item_name', __( 'Name' ) ),
						) )
				) )
				->add_fields( 'text_section', __( 'Text section', 'nelumbo' ), array(
					Field::make( 'text', 'text_note', __( 'Note', 'nelumbo' ) ),
					Field::make( 'text', 'text_headline', __( 'Headline', 'nelumbo' ) ),
					Field::make( 'text', 'text_subheadline', __( 'Subheadline', 'nelumbo' ) ),
					Field::make( 'rich_text', 'text_content', __( 'Content' ) ),
					Field::make( 'text', 'text_button_text', __( 'Button text', 'nelumbo' ) ),
					Field::make( 'text', 'text_button_url', __( 'Button URL', 'nelumbo' ) ),
				) )
		) );
}

add_filter( 'carbon_fields_map_field_api_key', 'crb_get_gmaps_api_key' );
function crb_get_gmaps_api_key() {
	return carbon_get_theme_option( 'google_maps_api_key' );
}
