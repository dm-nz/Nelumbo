<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
			<?php if ( have_posts() ) : ?>
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
				endif;
				?>
			</main><!-- #main -->
		</div><!-- #primary.large-7 -->
		<?php get_sidebar(); ?>
	</div><!-- .grid-x -->
</div><!-- .grid-container -->
<?php
if ( get_the_posts_navigation() ) :
	get_template_part( 'template-parts/post-navigation' );
endif;
?>

<?php get_footer(); ?>
