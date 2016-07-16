<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nelumbo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'nelumbo' ); ?></a>

	<header id="masthead" class="top-bar" role="banner">
		<div class="row">
			<div class="column">
				<div class="top-bar-title">
				<ul class="menu">
					<?php
					if ( is_front_page() && is_home() ) : ?>
						<li class="site-name"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1></li>
					<?php else : ?>
						<li class="site-name><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
					<?php
					endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<li class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></li>
					<?php
					endif; ?>
				</ul><!-- .site-branding -->
				</div>

				<nav id="site-navigation" class="responsive-menu" role="navigation">
					<div class="top-bar-right">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'nelumbo' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'dropdown menu', 'walker' => new Foundation_Top_Bar, 'items_wrap' => '<ul class="menu" data-responsive-menu="drilldown medium-dropdown">%3$s</ul>', 'container' => '' ) ); ?>
					</div>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
