<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
					<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'nelumbo' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

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
<?php get_footer(); ?>
