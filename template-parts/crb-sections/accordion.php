<?php
/**
 * Template part for displaying accordion section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<section class="accordion-section crb-section">
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
    <div class="grid-container">
<?php endif; ?>
    <?php if ( $section['accordion_headline'] ) : ?>
        <h2 class="section-headline h1 text-center"><?php echo $section['accordion_headline']; ?></h2>
    <?php endif; ?>
        <div class="section-content grid-x grid-padding-x align-center">
            <div class="large-8 cell">
                <ul class="accordion" data-accordion data-allow-all-closed="true">
                    <?php
                    $accordion_items = $section['accordion_items'];
                    foreach ( $accordion_items as $accordion ) :
                    ?>
                        <li class="accordion-item" data-accordion-item>
                            <a href="#" class="accordion-title"><?php echo $accordion['accordion_item_headline']; ?></a>
                            <div class="accordion-content" data-tab-content>
                                <?php echo wpautop( $accordion['accordion_item_content'] ); ?>
                            </div><!-- accordion-content -->
                        </li><!-- .accordion-item -->
                    <?php endforeach; ?>
                </ul><!-- .accordion -->
            </div><!-- .large-8.medium-10 -->
        </div><!-- .section-content -->
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
    </div><!-- .grid-container -->
<?php endif; ?>
</section><!-- .accordion-section -->
