<?php
/**
 * Template part for displaying cover section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<section class="cover-section crb-section inverse" <?php if ( $section['cover_bg_image'] ) { ?>style="background-image: url(<?php echo $section['cover_bg_image']; ?>)"<?php } ?>>
    <?php if ( $section['cover_bg_video'] ) : ?>
        <video autoplay loop muted class="show-for-large">
            <source src="<?php echo $section['cover_bg_video']; ?>" />
        </video>
    <?php endif; ?>
    <div class="dark-filter"></div>
    <?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
        <div class="grid-container">
    <?php endif; ?>
            <div class="grid-x grid-padding-x">
                <div class="cell text-center">
                    <?php if ( $section['cover_headline'] ) : ?>
                        <h1 class="section-headline"><?php echo $section['cover_headline']; ?></h2>
                    <?php endif; ?>
                    <?php if ( $section['cover_subheadline'] ) : ?>
                        <h3 class="section-subheadline subheader"><?php echo $section['cover_subheadline']; ?></h2>
                    <?php endif; ?>
                    <?php if ( $section['cover_primary_button_text'] ) : ?>
                        <a class="button" href="<?php echo $section['cover_primary_button_url'] ?>"><?php echo $section['cover_primary_button_text']; ?></a>
                    <?php endif; ?>
                    <?php if ( $section['cover_secondary_button_text'] ) : ?>
                        <a class="hollow button" href="<?php echo $section['cover_secondary_button_url'] ?>"><?php echo $section['cover_secondary_button_text']; ?></a>
                    <?php endif; ?>
                </div><!-- .cell -->
            </div><!-- .grid-x -->
    <?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
        </div><!-- .grid-container -->
    <?php endif; ?>
</section><!-- .cover-section -->
