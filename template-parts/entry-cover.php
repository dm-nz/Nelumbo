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
	<div class="filter"></div>
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<div class="cell">
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
			</div><!-- .cell -->
		</div><!-- .grid-x -->
	</div><!-- .grid-container -->
</div><!-- .cover -->
