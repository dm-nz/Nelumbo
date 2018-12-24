<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

/**
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) :
	return;
endif;
?>

<div id="comments" class="comments-area">
<?php
// You can start editing here -- including this comment!
if ( have_comments() ) : ?>
	<h2 class="comments-title">
		<?php
		printf( // WPCS: XSS OK.
			esc_html( _nx( 'One comment', 'Comments', get_comments_number(), 'comments title', 'nelumbo' ) ),
			number_format_i18n( get_comments_number() ),
			'<span>' . get_the_title() . '</span>'
		);
		?>
	</h2><!-- .comments-title -->
	<ol class="comment-list">
		<?php
		wp_list_comments( array(
			'style'      => 'ol',
			'short_ping' => true,
			'avatar_size'=> 48,
		) );
		?>
	</ol><!-- .comment-list -->
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'nelumbo' ); ?></h2>
		<div class="nav-links">
			<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'nelumbo' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'nelumbo' ) ); ?></div>
		</div><!-- .nav-links -->
	</nav><!-- #comment-nav-below -->
	<?php
	endif; // Check for comment navigation.
endif; // Check for have_comments().
// If comments are closed and there are comments, let's leave a little note, shall we?
if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'nelumbo' ); ?></p>
<?php
endif;
comment_form();
?>
</div><!-- #comments -->
