<?php
/**
 * Template part for displaying page content in page-cover.php and page-cover-full-width.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nelumbo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
			<?php nelumbo_entry_footer(); ?>
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'nelumbo' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="divider"></span><span class="edit-link"><i class="fa fa-pencil"></i>',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
