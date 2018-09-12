<?php
/**
 * Template part for displaying embed section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<section class="embed-section crb-section">
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
	<div class="grid-container">
<?php endif; ?>
	<?php if ( $section['embed_headline'] ) : ?>
		<h2 class="section-headline h1 text-center"><?php echo $section['embed_headline']; ?></h2>
	<?php endif; ?>
		<div class="responsive-embed widescreen">
			<?php echo wp_oembed_get($section["embed_url"]); ?>
		</div><!-- .responsive-embed -->
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
	</div><!-- .grid-container -->
<?php endif; ?>
</section><!-- .embed-section -->
