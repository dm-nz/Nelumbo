<?php
/**
 * Template Name: Gutenberg
 * Template Post Type: post, page
 *
 * @package nelumbo
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		while ( have_posts() ) : the_post();
			if ( is_page() ) :
				get_template_part( 'template-parts/content', 'page' );
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
<?php
if ( is_single() && get_the_post_navigation() ) :
	get_template_part( 'template-parts/post-navigation' );
endif;
?>

<?php get_footer(); ?>
