<?php
/**
 * The template for displaying archive pages in grid style.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

get_header(); ?>

<div id="primary" class="content-area grid-container archive-grid-template">
	<main id="main" class="site-main grid-x grid-padding-x" data-equalizer data-equalize-by-row="true" role="main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header cell">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header.cell -->
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('large-4 medium-6 cell'); ?>>
				<a class="card" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" data-equalizer-watch>
					<?php
					if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail('entry-featured-img'); ?>
					<?php endif; ?>
					<div class="card-section">
						<?php the_title( '<h2 class="h4 entry-title">', '</h2>' ); ?>
						<div class="entry-excerpt">
							<?php the_excerpt(); ?>
						</div>
					</div>
				</a>
			</article><!-- #post-##.large-4.medium-6 -->
			<?php
			endwhile;
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</main><!-- #main.grid-x -->
</div><!-- #primary.grid-container -->
<?php
if ( get_the_posts_navigation() ) :
	get_template_part( 'template-parts/post-navigation' );
endif;
?>

<?php get_footer(); ?>
