<?php
/**
 * Template part for displaying entry cover
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<div class="entry-cover inverse" style="background-image: url(<?php echo the_post_thumbnail_url('cover'); ?>)">
	<div class="dark-filter"></div>
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<div class="cell">
				<header class="entry-header text-center">
					<?php
					the_title( '<h1 class="entry-title">', '</h1>' );
					if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php nelumbo_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->
			</div><!-- .cell -->
		</div><!-- .grid-x -->
	</div><!-- .grid-container -->
</div><!-- .entry-cover -->
