<?php
/**
 * Template part for displaying full-width image section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<section class="full-width-image-section">
	<?php
	echo wp_get_attachment_image( $section['full_width_image'], 'full' );
	$full_width_image_caption = wp_get_attachment_caption( $section['full_width_image'] );
	if ( $full_width_image_caption ) :
	?>
		<div class="full-width-image-caption inverse">
			<?php echo $full_width_image_caption; ?>
		</div><!-- .full-width-image-caption -->
	<?php endif; ?>
</section><!-- .full-width-image-section -->
