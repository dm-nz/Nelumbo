<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nelumbo
 */

?>

<!-- Checking if thumbnail size is big enough for cover -->
<?php if ( has_post_thumbnail() )  {
	$imgdata = wp_get_attachment_image_src( get_post_thumbnail_id(), 'cover' );
	$imgwidth = $imgdata[1]; // thumbnail's width
	if ($imgwidth >= 1920) {
		$cover = true;
	} else $cover = false;
} ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( !is_single() || is_single() && $cover == false ) { ?>
	<header class="entry-header margin-bottom-base">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else { ?>

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry-featured-img margin-bottom-large">
			    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			        <?php the_post_thumbnail('entry-featured-img'); ?>
				</a>
			</div>
		<?php endif; ?>

			<?php
				the_title( '<h2 class="entry-title margin-bottom-small"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( !is_single() && $cover == true || $cover == false ) : ?>
		<div class="entry-meta">
			<?php nelumbo_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<?php } ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'nelumbo' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nelumbo' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php nelumbo_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<div class="clear"></div>
</article><!-- #post-## -->
