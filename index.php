<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nelumbo
 */

get_header(); ?>

<div class="row">
<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary" class="content-area large-7 medium-10 medium-centered columns">
<?php else : ?>
	<div id="primary" class="content-area large-7 large-collapse-right medium-8 columns">
<?php endif; ?>
		<main id="main" class="site-main" role="main">
		<?php
		if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) : ?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
			<?php endif; ?>
			<?php /* Start the Loop */
			while ( have_posts() ) : the_post();
				/**
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .row -->
<?php if ( get_the_posts_navigation() ) : ?>
<div id="post-nav-wrapper">
	<div class="row">
		<div class="column">
			<?php the_posts_navigation(); ?>
		</div><!-- .column -->
	</div><!-- .row -->
</div><!-- #post-nav-wrapper -->
<?php endif; ?>

<?php get_footer(); ?>