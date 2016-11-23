<?php
/**
 * Template Name: Cover and Full Width
 *
 * @package Nelumbo
 */

get_header(); ?>

	<div id="cover" class="inverse margin-bottom-base" style="background-image: url(<?php echo the_post_thumbnail_url('cover'); ?>)">
		<div class="row row-absolute">
			<div class="column">
				<header class="entry-header vertical-middle text-center">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
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

					get_template_part( 'template-parts/content', 'page-cover' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div>
<?php get_footer();
