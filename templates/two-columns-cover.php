<?php
/**
 * Template Name: Two columns and cover
 * Template Post Type: post, page
 *
 * @package nelumbo
 */

get_header(); ?>

<div id="cover" class="inverse" style="background-image: url(<?php echo the_post_thumbnail_url('cover'); ?>)">
	<div class="row row-absolute">
		<div class="column">
			<header class="entry-header text-center">
				<?php
				the_title( '<h1 class="entry-title">', '</h1>' );
				if ( is_single() ) :
				?>
					<div class="entry-meta">
						<?php echo get_the_date(); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
		</div><!-- .column -->
	</div><!-- .row -->
	<div class="filter"></div>
</div><!-- #cover -->
<div class="row">
	<div id="primary" class="content-area column">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
				if ( is_page() ) :
					get_template_part( 'template-parts/content', 'cover' );
				else :
					get_template_part( 'template-parts/content', get_post_format() );
				endif;
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .row -->

<?php if ( is_single() && get_the_post_navigation() ) : ?>
<div id="post-nav-wrapper">
	<div class="row">
		<div class="column">
			<?php the_post_navigation(); ?>
		</div><!-- .column -->
	</div><!-- .row -->
</div><!-- #post-nav-wrapper -->
<?php endif; ?>

<?php get_footer();
