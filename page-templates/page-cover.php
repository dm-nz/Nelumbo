<?php
/**
 * Template Name: Cover
 *
 * @package Nelumbo
 */

get_header(); ?>

	<div id="cover" class="inverse margin-bottom-base" style="background-image: url(<?php echo the_post_thumbnail_url('cover'); ?>)">
		<div class="row row-absolute">
			<div class="large-8 medium-10 medium-centered columns">
				<header class="entry-header vertical-middle text-center">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
			</div>
		</div>
		<div class="filter"></div>
	</div>

	<div class="row">
		<?php if ( ! is_active_sidebar( 'sidebar-1' )  ) { ?>
		<div id="primary" class="content-area large-8 medium-10 medium-centered columns">
		<?php } else { ?>
		<div id="primary" class="content-area large-7 large-collapse-right medium-8 columns">
		<?php } ?>
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

		<?php get_sidebar(); ?>
	</div>
<?php get_footer();
