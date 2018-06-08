<?php
/**
 * Template part for displaying callout section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<section class="callout-section crb-section">
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
    <div class="grid-container">
<?php endif; ?>
        <div class="grid-x grid-padding-x align-center">
            <div class="large-8 cell">
                <div class="callout large <?php echo $section['callout_type'] ?>">
                    <?php echo $section['callout_content']; ?>
                </div><!-- .callout -->
            </div><!-- .large-8.medium-10 -->
        </div><!-- .grid-x -->
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
    </div><!-- .grid-container -->
<?php endif; ?>
</section><!-- .callout-section -->
