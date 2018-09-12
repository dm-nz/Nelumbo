<?php
/**
 * Template part for displaying Carbon Fields sections in template-parts/content-fluid.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'carbon-fields/carbon-fields-plugin.php' ) ) :

	$sections = carbon_get_the_post_meta( 'crb_sections' );
	foreach ( $sections as $section ) :
		switch ( $section['_type'] ) :
			case 'accordion_section' :
				include( get_template_directory() . '/template-parts/crb-sections/accordion.php' );
				break;
			case 'callout_section' :
				include( get_template_directory() . '/template-parts/crb-sections/callout.php' );
				break;
			case 'cards_section' :
				include( get_template_directory() . '/template-parts/crb-sections/cards.php' );
				break;
			case 'cover_section' :
				include( get_template_directory() . '/template-parts/crb-sections/cover.php' );
				break;
			case 'embed_section' :
				include( get_template_directory() . '/template-parts/crb-sections/embed.php' );
				break;
			case 'features_section' :
				include( get_template_directory() . '/template-parts/crb-sections/features.php' );
				break;
			case 'full_width_image_section' :
				include( get_template_directory() . '/template-parts/crb-sections/full-width-image.php' );
				break;
			case 'gallery_section' :
				include( get_template_directory() . '/template-parts/crb-sections/gallery.php' );
				break;
			case 'map_section' :
				include( get_template_directory() . '/template-parts/crb-sections/map.php' );
				break;
			case 'tabs_section' :
				include( get_template_directory() . '/template-parts/crb-sections/tabs.php' );
				break;
			case 'testimonials_section' :
				include( get_template_directory() . '/template-parts/crb-sections/testimonials.php' );
				break;
			case 'text_section' :
				include( get_template_directory() . '/template-parts/crb-sections/text.php' );
				break;
		endswitch;
	endforeach;
endif;
?>
