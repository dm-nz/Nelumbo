<?php
/**
 * Template part for displaying text section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<section class="text-section crb-section">
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
    <div class="grid-container">
<?php endif; ?>
        <div class="grid-x grid-padding-x align-center">
            <div class="large-8 cell">
            <?php if ( $section['text_note'] ) : ?>
                <p class="section-note text-center"><?php echo $section['text_note']; ?></p>
            <?php endif; ?>
            <?php if ( $section['text_headline'] ) : ?>
                <h2 class="section-headline h1 text-center"><?php echo $section['text_headline']; ?></h2>
            <?php endif; ?>
            <?php if ( $section['text_subheadline'] ) : ?>
                <h3 class="section-subheadline subheader text-center"><?php echo $section['text_subheadline']; ?></h3>
            <?php endif; ?>
            <?php if ( $section['text_content'] ) : ?>
                <div class="section-content">
                    <?php echo wpautop( $section['text_content'] ); ?>
                </div><!-- .section-description -->
            <?php endif; ?>
            <?php if ( $section['text_button_text'] ) : ?>
                <div class="text-center">
                    <a class="button" href="<?php echo $section['text_button_url'] ?>"><?php echo $section['text_button_text']; ?></a>
                </div><!-- .text-center -->
            <?php endif; ?>
            </div><!-- .large-8.medium-10 -->
        </div><!-- .grid-x -->
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
    </div><!-- .grid-container -->
<?php endif; ?>
</section><!-- .about-section -->
