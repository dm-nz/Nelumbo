<?php
/**
 * The template for displaying WooCommerce account page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

get_header(); ?>

<div class="row">
	<div id="primary" class="content-area column">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary.column -->
</div><!-- .row -->

<?php get_footer();
