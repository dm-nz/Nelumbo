<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nelumbo' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php nelumbo_entry_footer();
		if ( get_edit_post_link() ) :
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'nelumbo' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="divider tags-post-edit"></span><span class="edit-link item">',
				'</span>'
			);
		endif;
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
