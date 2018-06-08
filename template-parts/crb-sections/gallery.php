<?php
/**
 * Template part for displaying gallery section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<section class="gallery-section crb-section">
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
    <div class="grid-container">
    <?php if ( $section['gallery_headline'] ) : ?>
        <h2 class="section-headline h1 text-center"><?php echo $section['gallery_headline']; ?></h2>
    <?php endif; ?>
    </div>
    <div class="orbit grid-container" role="region" data-orbit>
<?php else : ?>
    <?php if ( $section['gallery_headline'] ) : ?>
        <h2 class="section-headline h1 text-center"><?php echo $section['gallery_headline']; ?></h2>
    <?php endif; ?>
    <div class="orbit" role="region" data-orbit>
<?php endif; ?>
        <div class="orbit-wrapper">
            <div class="orbit-controls">
                <button class="orbit-previous">
                    <span class="show-for-sr"><?php echo __( 'Previous' ); ?></span><i class="fa fa-2x fa-chevron-left"></i>
                </button><!-- .orbit-previous -->
                <button class="orbit-next">
                    <span class="show-for-sr"><?php echo __( 'Next' ); ?></span><i class="fa fa-2x fa-chevron-right"></i>
                </button><!-- .orbit-next -->
            </div><!-- .orbit-controls -->
            <ul class="orbit-container">
                <?php
                $gallery = $section['gallery_items'];
                $gallery_item_count = 0;
                foreach ( $gallery as $gallery_item ) :
                ?>
                    <li class="orbit-slide<?php if ( $gallery_item_count == 0 ) { echo ' is-active'; } ?>">
                        <figure class="orbit-figure">
                            <?php echo wp_get_attachment_image( $gallery_item, 'full' ); ?>
                            <?php if ( wp_get_attachment_caption( $gallery_item ) ) : ?>
                                <figcaption class="orbit-caption"><?php echo wp_get_attachment_caption( $gallery_item ); ?></figcaption>
                            <?php endif; ?>
                        </figure><!-- .orbit-figure -->
                    </li><!-- .orbit-slide -->
                <?php
                endforeach;
                ?>
            </ul><!-- .orbit-container -->
        </div><!-- .orbit-wrapper -->
        <nav class="orbit-bullets">
            <?php
            $gallery_item_count = 0;
            foreach ( $gallery as $gallery_item ) :
            ?>
                <button <?php if ( $gallery_item_count == 0 ) { ?> class="is-active" <?php } ?> data-slide="<?php echo $gallery_item_count; ?>">
                    <span class="show-for-sr"><?php echo __( 'Image' ); ?> <?php echo  $gallery_item_count + 1; ?></span>
                </button>
            <?php
            $gallery_item_count++;
            endforeach;
            ?>
        </nav><!-- .orbit-bullets -->
    </div><!-- .orbit -->
</section><!-- .gallery-section -->
