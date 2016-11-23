<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nelumbo
 */

get_header(); ?>

	<div class="row">
		<?php if ( ! is_active_sidebar( 'sidebar-1' )  ) { ?>
		<div id="primary" class="content-area large-8 medium-10 medium-centered columns">
		<?php } else { ?>
		<div id="primary" class="content-area large-7 large-collapse-right medium-8 columns">
		<?php } ?>
			<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div>
	<div id="post-nav-wrapper" class="grey section-padding">
		<div class="row">
			<div class="column">
				<?php the_posts_navigation(); ?>
			</div>
		</div>
	</div>
<?php get_footer();
