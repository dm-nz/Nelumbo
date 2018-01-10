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
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <?php the_post_navigation(); ?>
            </div><!-- .cell -->
        </div><!-- .grid-x -->
    </div><!-- .grid-containter -->
</div><!-- #post-nav-wrapper -->
