<?php
/**
 * The template for displaying BBPress forum.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

get_header(); ?>

<div class="grid-container">
	<div class="grid-x grid-padding-x">
	<?php if ( is_active_sidebar( 'sidebar-forum' ) ) : ?>
		<div id="primary" class="content-area medium-9 cell">
	<?php else : ?>
		<div id="primary" class="content-area cell">
	<?php endif; ?>
			<main id="main" class="site-main" role="main">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile; // End of the loop.
				?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
		if ( is_active_sidebar( 'sidebar-forum' ) ) :
			get_sidebar('forum');
		endif;
		?>
	</div><!-- .grid-x -->
</div><!-- .grid-container -->

<?php get_footer();
