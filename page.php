<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nelumbo
 */

get_header(); ?>

	<div class="row">
		<?php if ( ! is_active_sidebar( 'sidebar-1' )  ) { ?>
		<div id="primary" class="content-area large-7 medium-10 medium-centered columns">
		<?php } else if ( is_woocommerce_activated() ) {
			if ( is_cart() || is_checkout() ) { ?>
				<div id="primary" class="content-area column">
			<?php }
		} else { ?>
		<div id="primary" class="content-area large-7 large-collapse-right medium-8 columns">
		<?php } ?>
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

		<?php if ( is_woocommerce_activated() ) {
			if ( is_cart() || is_checkout() ) {
			}
		} else {
			get_sidebar();
		} ?>
	</div>
<?php get_footer();
