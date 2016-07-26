<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nelumbo
 */

?>

<!-- Checking if thumbnail size is big enough for cover -->
<?php if ( has_post_thumbnail() )  {
	$imgdata = wp_get_attachment_image_src( get_post_thumbnail_id(), 'cover' );
	$imgwidth = $imgdata[1]; // thumbnail's width
	if ($imgwidth >= 1920) {
		$cover = true;
	} else $cover = false;
} ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( $cover == false ) { ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php } ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nelumbo' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'nelumbo' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
