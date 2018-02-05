<?php
/**
 * Template Name: Full-width and cover
 * Template Post Type: post, page
 *
 * @package nelumbo
 */

get_header(); ?>

<?php get_template_part( 'template-parts/entry-cover' ); ?>
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
	</div><!-- #primary.column -->
</div><!-- .row -->
<?php
if ( is_single() && get_the_post_navigation() ) :
	get_template_part( 'template-parts/post-navigation' );
endif;
?>

<?php get_footer();
