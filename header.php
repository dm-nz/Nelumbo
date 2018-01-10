<?php
/**
 * The header for our theme.
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
		<header id="masthead" role="banner" data-sticky-container>
			<div class="small-12" data-sticky data-options="marginTop:0;">
			<?php
			if ( is_woocommerce_activated() ) :
				get_template_part( 'template-parts/top-stripe' );
			endif;
			?>
				<div class="top-bar <?php if ( has_custom_logo() ) : echo 'with-logo'; endif; ?>">
					<div class="grid-container">
						<div class="grid-x">
							<div class="auto cell">
								<div class="top-bar-title">
									<ul class="site-branding menu">
									<?php if ( has_custom_logo() ) : ?>
										<li class="site-logo"><?php nelumbo_the_custom_logo(); ?></li>
									<?php endif; ?>
										<li class="site-title">
											<?php if ( is_front_page() && is_home() ) : ?>
												<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
											<?php else : ?>
												<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
											<?php endif; ?>
										</li><!-- .site-title -->
										<?php
										$description = get_bloginfo( 'description', 'display' );
										if ( $description || is_customize_preview() ) : ?>
											<li class="site-description show-for-medium"><span><?php echo $description; /* WPCS: xss ok. */ ?></span></li>
										<?php
										endif; ?>
									</ul><!-- .site-branding -->
								</div><!-- .top-bar-title -->
								<div class="menu-hamburger hide-for-large">
									<ul class="menu">
									<?php if ( is_woocommerce_activated() ) : ?>
										<li class="search-toggle show-for-small-only"><a><i class="fa fa-search"></i></a></li>
									<?php endif; ?>
										<li><a data-toggle="the-off-canvas"><i class="fa fa-bars"></i></a></li>
									</ul><!-- .menu -->
								</div><!-- .menu-hamburger -->
								<div id="responsive-menu" class="show-for-large">
									<div class="top-bar-right">
										<nav id="site-navigation" role="navigation">
											<?php
											if ( has_nav_menu( 'primary' )) :
												wp_nav_menu( array(
													'theme_location' => 'primary',
													'menu_id' => 'primary-menu',
													'walker' => new Foundation_Top_Bar,
													'items_wrap' => '<ul class="menu" data-responsive-menu="drilldown medium-dropdown" data-close-on-click-inside="false" data-back-button="<li class=\'js-drilldown-back\'><a>Back</a></li>">%3$s</ul>',
												) );
											else :
												wp_nav_menu( array(
													'depth' => 1,
													'container' => 'ul',
													'menu_class' => 'dropdown menu',
													'items_wrap' => '<ul class="menu" data-responsive-menu="drilldown medium-dropdown" data-close-on-click-inside="false" data-back-button="<li class=\'js-drilldown-back\'><a>Back</a></li>">%3$s</ul>',
												) );
											endif;
											?>
										</nav><!-- #site-navigation -->
									</div><!-- .top-bar-right -->
								</div><!-- #responsive-menu -->
							</div><!-- .auto.cell -->
						</div><!-- .grid-x -->
					</div><!-- .grid-container -->
				</div><!-- .top-bar -->
			</div><!-- .small-12 -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
