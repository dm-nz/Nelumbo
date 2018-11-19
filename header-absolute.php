<?php
/**
 * The header for templates with cover.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nelumbo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site off-canvas-wrapper">
	<div class="off-canvas position-right inverse" id="the-off-canvas" data-off-canvas>
		<?php
		if ( has_nav_menu( 'primary' )) :
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id' => 'off-canvas-menu',
				'menu_class' => 'vertical menu',
				'walker' => new Foundation_Off_Canvas,
				'container' => ''
			) );
		else :
			wp_nav_menu( array(
				'depth' => 1,
				'container' => 'ul',
				'menu_class' => 'vertical menu',
			) );
		endif;
		?>
		<button class="close-button" aria-label="Close menu" type="button" data-close>
			<span aria-hidden="true">&times;</span>
		</button><!-- .close-button -->
	</div><!-- #the-off-canvas.off-canvas -->
	<div class="off-canvas-content" data-off-canvas-content>
		<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'nelumbo' ); ?></a>
		<div class="header-absolute">
			<div class="sticky-header" data-sticky-container>
				<div data-sticky data-options="marginTop:0;">
					<header id="masthead" role="banner">
						<?php
						if ( is_woocommerce_activated() ) :
							get_template_part( 'template-parts/top-stripe' );
						endif;
						?>
						<div class="grid-container">
							<?php get_template_part( 'template-parts/top-bar' ); ?>
						</div><!-- .grid-container -->
					</header><!-- #masthead -->
				</div><!-- data-sticky -->
			</div><!-- .sticky-header data-sticky-container -->
		</div>

		<div id="content" class="site-content">
