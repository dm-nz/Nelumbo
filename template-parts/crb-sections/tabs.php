<?php
/**
 * Template part for displaying tabs section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<section class="tabs-section crb-section">
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
	<div class="grid-container">
<?php endif; ?>
	<?php if ( $section['tabs_headline'] ) : ?>
		<h2 class="section-headline h1 text-center"><?php echo $section['tabs_headline']; ?></h2>
	<?php endif; ?>
		<div class="section-content grid-x grid-padding-x align-center">
			<div class="cell">
				<?php $tabs_id = rand(0, 9999); ?>
				<ul class="tabs" data-responsive-accordion-tabs="tabs small-accordion large-tabs" id="tabs-<?php echo $tabs_id; ?>">
					<?php
					$tab_count = 1;
					$tab_items = $section['tab_items'];
					foreach ( $tab_items as $tab ) :
					?>
						<li class="tabs-title<?php if ( $tab_count == 1) { echo ' is-active'; } ?>">
							<a href="#panel<?php echo $tab_count; ?>" <?php if ( $tab_count == 1) { ?>aria-selected="true"<?php } ?>><?php echo $tab['tab_item_headline']; ?></a>
						</li><!-- .tabs-title -->
					<?php
					$tab_count++;
					endforeach;
					?>
				</ul><!-- .tabs -->
				<div class="tabs-content" data-tabs-content="tabs-<?php echo $tabs_id; ?>">
					<?php
					$tab_count = 1;
					foreach ( $tab_items as $tab ) :
					?>
						<div class="tabs-panel<?php if ( $tab_count == 1) { echo ' is-active'; } ?>" id="panel<?php echo $tab_count; ?>">
							<?php echo wpautop( $tab['tab_item_content'] ); ?>
						</div><!-- tabs-panel# -->
					<?php
					$tab_count++;
					endforeach;
					?>
				</div><!-- .tabs-content -->
			</div><!-- .cell -->
		</div><!-- .section-content -->
<?php if ( is_page_template( 'templates/fluid.php' ) ) : ?>
	</div><!-- .grid-container -->
<?php endif; ?>
</section><!-- .tabs-section -->
