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

	<header id="masthead" role="banner" data-sticky-container>
		<div class="small-12 sticky" data-sticky data-options="marginTop: 0">
			<div class="top-bar">
				<div class="row">
					<div class="column">
						<div class="top-bar-title">
							<ul class="menu">
								<?php
								if ( is_front_page() && is_home() ) : ?>
									<li class="site-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1><strong><?php bloginfo( 'name' ); ?></strong></h1></a></li>
								<?php else : ?>
									<li class="site-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><strong><?php bloginfo( 'name' ); ?></strong></a></li>
								<?php
								endif;

								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
									<li class="site-description show-for-large"><?php echo $description; /* WPCS: xss ok. */ ?></li>
								<?php
								endif; ?>
							</ul><!-- .site-branding -->
						</div>
						<div class="menu-hamburger hide-for-large" data-responsive-toggle="responsive-menu" data-hide-for="medium">
							<ul class="menu">
							<li><a><i class="fa fa-bars padding-top" data-toggle></i></a></li>
							</ul>
						</div>

						<div id="responsive-menu">
							<div class="top-bar-right">
								<nav id="site-navigation" role="navigation">
									<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'dropdown menu', 'walker' => new Foundation_Top_Bar, 'items_wrap' => '<ul class="menu" data-responsive-menu="drilldown medium-dropdown">%3$s</ul>', 'container' => '' ) ); ?>
								</nav><!-- #site-navigation -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
