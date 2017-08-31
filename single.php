<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nelumbo
 */

get_header(); ?>

<div class="row">
<?php if ( ! is_active_sidebar( 'sidebar-1' )  ) : ?>
	<div id="primary" class="content-area large-7 medium-10 medium-centered columns">
<?php else : ?>
	<div id="primary" class="content-area large-7 large-collapse-right medium-8 columns">
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
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .row -->

<?php if ( get_the_post_navigation() ) : ?>
	<div id="post-nav-wrapper">
		<div class="row">
			<div class="column">
				<?php the_post_navigation(); ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>