<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nelumbo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('margin-bottom-xlarge'); ?>>
	<header class="entry-header margin-bottom-base">
		<?php the_title( sprintf( '<h2 class="entry-title margin-bottom-small"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php nelumbo_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php nelumbo_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
