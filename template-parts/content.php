<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nelumbo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else { ?>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-featured-img margin-bottom-large padding-top-small">
				    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				        <?php the_post_thumbnail('entry-featured-img'); ?>
					</a>
				</div>
			<?php endif; ?>

			<?php
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			} ?>

		<div class="entry-meta">
			<?php nelumbo_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'nelumbo' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nelumbo' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

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
	<div class="clear"></div>
</article><!-- #post-## -->
