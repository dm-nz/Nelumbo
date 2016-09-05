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

	<!-- Checking if thumbnail size is big enough for cover -->
	<?php if ( has_post_thumbnail() )  {
		$imgdata = wp_get_attachment_image_src( get_post_thumbnail_id(), 'cover' );
		$imgwidth = $imgdata[1]; // thumbnail's width
		if ($imgwidth >= 1920) {
			$cover = true;
		} else $cover = false;
	} ?>

	<?php if ($cover == true) { ?>
		<div id="cover" class="inverse margin-bottom-normal" style="background-image: url(<?php echo the_post_thumbnail_url('cover'); ?>)">
			<div class="row row-absolute">
				<div class="large-8 medium-10 medium-centered columns">
					<header class="entry-header vertical-middle text-center">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->
				</div>
			</div>
			<div class="filter"></div>
		</div>
	<?php } ?>

	<div class="row">
		<?php if ( ! is_active_sidebar( 'sidebar-1' )  ) { ?>
		<div id="primary" class="content-area large-8 medium-10 medium-centered columns">
		<?php } else { ?>
		<div id="primary" class="content-area medium-8 columns">
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

		<?php get_sidebar(); ?>
	</div>
<?php get_footer();
