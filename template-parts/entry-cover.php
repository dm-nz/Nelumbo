<?php
/**
 * Template part for displaying entry cover
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<div class="cover inverse" style="background-image: url(<?php echo the_post_thumbnail_url('cover'); ?>)">
	<div class="row row-absolute">
		<div class="column">
			<header class="entry-header text-center">
				<?php
				the_title( '<h1 class="entry-title">', '</h1>' );
				if ( is_single() ) :
				?>
					<div class="entry-meta">
						<?php echo get_the_date(); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
		</div><!-- .column -->
	</div><!-- .row -->
	<div class="filter"></div>
</div><!-- #cover -->
