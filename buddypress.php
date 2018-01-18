<?php
/**
 * The template for displaying Buddypress pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

get_header(); ?>

<?php if ( ! bp_is_user() && ! bp_is_group() ) : ?>
	<div class="grid-container">
<?php endif; ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header <?php if ( bp_is_user() || bp_is_group() ) { ?>hide<?php } ?>">
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
						<?php if ( get_edit_post_link() ) : ?>
							<footer class="entry-footer">
								<?php
								edit_post_link(
									sprintf(
										/* translators: %s: Name of current post */
										esc_html__( 'Edit %s', 'nelumbo' ),
										the_title( '<span class="screen-reader-text">"', '"</span>', false )
									),
									'<span class="edit-link item">',
									'</span>'
								);
								?>
							</footer><!-- .entry-footer -->
						<?php endif; ?>
					</article><!-- #post-## -->
				<?php endwhile; // End of the loop. ?>
			</main><!-- #main -->
		</div><!-- #primary -->
<?php if ( ! bp_is_user() && ! bp_is_group() ) : ?>
	</div><!-- .grid-container -->
<?php endif; ?>

<?php get_footer();
