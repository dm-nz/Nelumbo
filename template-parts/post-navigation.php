<?php
/**
 * Template part for displaying post navigation
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<div id="post-nav-wrapper">
    <div class="row">
        <div class="column">
            <?php
            if ( is_singular() ) :
                the_post_navigation();
            else :
                the_posts_navigation();
            endif;
            ?>
        </div><!-- .column -->
    </div><!-- .row -->
</div><!-- #post-nav-wrapper -->
