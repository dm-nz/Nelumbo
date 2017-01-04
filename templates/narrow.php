<?php
/**
 * Template Name: Narrow
 * Template Post Type: post, page
 *
 * @package Nelumbo
 */

get_header(); ?>

	<div class="row">
		<div id="primary" class="content-area large-8 medium-10 medium-centered columns">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					if ( is_page() ) {
						get_template_part( 'template-parts/content', 'page' );
					} else {
						get_template_part( 'template-parts/content', get_post_format() );
					}

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->

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
