<?php
/**
 * Template Name: Full-width and cover
 * Template Post Type: post, page
 *
 * @package Nelumbo
 */

get_header(); ?>

	<div id="cover" class="inverse margin-bottom-base" style="background-image: url(<?php echo the_post_thumbnail_url('cover'); ?>)">
		<div class="row row-absolute">
			<div class="column">
				<header class="entry-header vertical-middle text-center">
					<?php the_title( '<h1 class="entry-title">', '</h1>' );
					if ( is_single() ) : ?>
						<div class="entry-meta margin-bottom-none semi-transparent">
						<?php echo get_the_date(); ?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->
			</div>
		</div>
		<div class="filter"></div>
	</div>

	<div class="row">
		<div id="primary" class="content-area column">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'cover' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>

	<?php
	if ( get_the_post_navigation() ) : ?>
	<div id="post-nav-wrapper" class="grey section-padding">
		<div class="row">
			<div class="column">
				<?php the_post_navigation(); ?>
			</div>
		</div>
	</div>
	<?php
	endif ?>

<?php get_footer();
