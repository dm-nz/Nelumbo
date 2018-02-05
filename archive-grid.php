<?php
/**
 * The template for displaying archive pages in grid style.
 * Rename to archive.php to enable this template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

get_header(); ?>

<div class="row archive-grid-template" data-equalizer data-equalize-by-row="true">
	<div id="primary" class="content-area column">
		<main id="main" class="site-main row" role="main">
			<?php if ( have_posts() ) : ?>
				<header class="page-header column">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header.column -->
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();
				?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('large-4 medium-6 columns'); ?>>
						<header class="entry-header">
							<?php
							if ( has_post_thumbnail() ) : ?>
								<div class="entry-featured-img">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
										<?php the_post_thumbnail('entry-featured-img'); ?>
									</a>
								</div><!-- .entry-featured-img -->
							<?php
							endif;
							the_title( '<h2 class="entry-title h3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
							?>
							<div class="entry-meta">
								<?php nelumbo_posted_on(); ?>
							</div><!-- .entry-meta -->
						</header><!-- .entry-header -->
						<div class="entry-content">
							<?php the_excerpt(); ?>
							<p><a class="more-link"><?php echo __( 'Continue reading' ); ?> <span class="meta-nav">→</span></a></p>
						</div><!-- .entry-content -->
						<footer class="entry-footer">
							<?php nelumbo_entry_footer();
							edit_post_link(
								sprintf(
									/* translators: %s: Name of current post */
									esc_html__( 'Edit %s', 'nelumbo' ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								),
								'<span class="divider tags-post-edit"></span><span class="edit-link item">',
								'</span>'
							);
							?>
						</footer><!-- .entry-footer -->
						<div class="clear"></div>
					</article><!-- #post-##.large-4.medium-6 -->
				<?php
				endwhile;
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</main><!-- #main.row -->
	</div><!-- #primary.column -->
</div><!-- .row -->
<?php
if ( get_the_post_navigation() ) :
	get_template_part( 'template-parts/post-navigation' );
endif;
?>

<?php get_footer();
