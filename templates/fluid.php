<?php
/**
 * Template Name: Fluid
 * Template Post Type: post, page
 *
 * @package nelumbo
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header hide">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
				<div class="entry-content">
					<?php if ( get_the_content() ) : ?>
						<div class="grid-container">
							<div class="fluid-content-wrapper">
								<?php the_content(); ?>
							</div><!-- .fluid-content-wrapper -->
						</div><!-- .grid-container -->
					<?php
					endif;
					get_template_part( 'template-parts/crb-sections/switch-crb-sections' );
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nelumbo' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
