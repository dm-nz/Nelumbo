<?php
/**
 * Template part for displaying cards sections.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<section class="cards-section crb-section">
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
	<div class="grid-container">
<?php endif; ?>
	<?php if ( $section['cards_headline'] ) : ?>
		<h2 class="section-headline h1 text-center"><?php echo $section['cards_headline']; ?></h2>
	<?php endif; ?>
		<div class="section-content grid-x grid-padding-x" data-equalizer data-equalize-on="medium">
			<?php
			$card_items = $section['card_items'];
			foreach ( $card_items as $card ) :
			?>
				<div class="large-4 medium-6 cell">
					<div class="card" data-equalizer-watch>
						<?php echo wp_get_attachment_image( $card['card_item_image'], 'large' ); ?>
						<div class="card-section">
							<?php if ( $card['card_item_headline'] ) : ?>
								<h3 class="h4"><?php echo $card['card_item_headline']; ?></h3>
							<?php endif; ?>
							<?php echo wpautop( $card['card_item_content'] ); ?>
							<?php if ( $card['card_item_button_text'] ) : ?>
								<div class="card-button-wrapper">
									<a class="button expanded floor" href="<?php echo $card['card_item_button_url']; ?>"><?php echo $card['card_item_button_text']; ?></a>
								</div><!-- .card-button-wrapper -->
							<?php endif; ?>
						</div><!-- .card-section -->
					</div><!-- .card -->
				</div><!-- .large-4.medium-6 -->
			<?php endforeach; ?>
		</div><!-- .grid-x.section-content -->
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
	</div><!-- .grid-container -->
<?php endif; ?>
</section><!-- .cards-section -->
