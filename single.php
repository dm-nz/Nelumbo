<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nelumbo
 */

get_header(); ?>

<div class="grid-container">
<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div class="grid-x grid-padding-x align-center">
		<div id="primary" class="content-area large-8 medium-10 align-center cell">
<?php else : ?>
	<div class="grid-x grid-padding-x">
		<div id="primary" class="content-area large-7 large-collapse-right medium-8 cell">
<?php endif; ?>
			<main id="main" class="site-main" role="main">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', get_post_format() );
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile; // End of the loop.
				?>
			</main><!-- #main -->
		</div><!-- #primary.large-7 -->
		<?php get_sidebar(); ?>
	</div><!-- .grid-x -->
</div><!-- .grid-container -->
<?php
if ( get_the_post_navigation() ) :
	get_template_part( 'template-parts/post-navigation' );
endif;
?>

<?php get_footer(); ?>
