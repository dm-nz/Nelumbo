<?php
/**
 * Template part for displaying testimonials section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<section class="testimonials-section crb-section">
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
    <div class="grid-container">
<?php endif; ?>
    <?php if ( $section['testimonials_headline'] ) : ?>
        <h2 class="section-headline h1 text-center"><?php echo $section['testimonials_headline']; ?></h2>
    <?php endif; ?>
        <div class="section-content grid-x grid-padding-x align-center">
            <div class="orbit large-10 cell" role="region" data-orbit>
                <div class="orbit-wrapper">
                    <div class="orbit-controls hide-for-small-only">
                        <button class="orbit-previous">
                            <span class="show-for-sr"><?php echo __( 'Previous' ); ?></span><i class="fa fa-2x fa-chevron-left"></i>
                        </button>
                        <button class="orbit-next">
                            <span class="show-for-sr"><?php echo __( 'Next' ); ?></span><i class="fa fa-2x fa-chevron-right"></i>
                        </button>
                    </div><!-- .orbit-controls -->
                    <div class="grid-x grid-padding-x align-center">
                        <div class="large-10 medium-11 cell">
                            <ul class="orbit-container">
                                <?php
                                $testimonial_items = $section['testimonial_items'];
                                foreach ( $testimonial_items as $testimonial ) :
                                    ?>
                                    <li class="orbit-slide">
                                        <div class="grid-x grid-padding-x">
                                            <div class="medium-2 medium-offset-0 small-4 small-offset-4 cell">
                                                <?php echo wp_get_attachment_image( $testimonial['testimonial_item_image'], 'thumbnail', '', array( 'class' => 'testimonial-item-image' ) ); ?>
                                            </div><!-- .medium-2.small-4 -->
                                            <div class="medium-10 cell">
                                                <blockquote>
                                                    <?php echo wpautop( $testimonial['testimonial_item_quote'] ); ?>
                                                    <p><strong><?php echo $testimonial['testimonial_item_name']; ?></strong></p>
                                                </blockquote>
                                            </div><!-- .medium-10 -->
                                        </div><!-- .grid-x -->
                                    </li><!-- .orbit-slide -->
                                <?php endforeach; ?>
                            </ul><!-- .orbit-container -->
                        </div><!-- .large-10.medium-11 -->
                    </div><!-- .grid-x -->
                </div><!-- .orbit-wrapper -->
                <nav class="orbit-bullets">
                    <?php
                    $testimonial_count = 1;
                    foreach ( $testimonial_items as $testimonial ) :
                        ?>
                        <button <?php if ( $testimonial_count == 1 ) { ?> class="is-active" <?php } ?> data-slide="<?php echo $testimonial_count; ?>">
                            <span class="show-for-sr"><?php echo __( 'Testimonial', 'nelumbo' ); ?> <?php echo $testimonial_count; ?></span>
                        </button>
                        <?php
                        $testimonial_count++;
                    endforeach; ?>
                </nav><!-- .orbit-bullets -->
            </div><!-- .orbit -->
        </div><!-- .grid-x.section-content -->
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
    </div><!-- .grid-container -->
<?php endif; ?>
</section><!-- .testimonials-section -->
