<?php
/**
 * Template part for displaying features section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<section class="features-section crb-section">
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
    <div class="grid-container">
<?php endif; ?>
    <?php if ( $section['features_headline'] ) : ?>
        <h2 class="section-headline h1 text-center"><?php echo $section['features_headline']; ?></h2>
    <?php endif; ?>
        <div class="section-content grid-x grid-padding-x" data-equalizer data-equalize-on="medium">
            <?php
            $feature_items = $section['feature_items'];
            foreach ( $feature_items as $feature ) :
            ?>
                <div class="large-4 medium-6 cell">
                    <div class="feature-item" data-equalizer-watch>
                        <?php echo wp_get_attachment_image( $feature['feature_item_image'], 'medium', '', array( 'class' => 'feature-item-image' ) ); ?>
                        <?php if ( $feature['feature_item_headline'] ) : ?>
                            <h3 class="feature-item-headline h4"><?php echo $feature['feature_item_headline']; ?></h3>
                        <?php endif; ?>
                        <?php echo wpautop( $feature['feature_item_content'] ); ?>
                    </div><!-- .features -->
                </div><!-- .large-4.medium-6 -->
            <?php endforeach; ?>
        </div><!-- .grid-x.section-content -->
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
    </div><!-- .grid-container -->
<?php endif; ?>
</section><!-- .features-section -->
