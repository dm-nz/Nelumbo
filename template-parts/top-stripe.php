<?php
/**
 * Template part for displaying WooCommerce bar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<div class="top-stripe">
    <div class="grid-container inverse">
        <div class="grid-x">
            <div class="auto cell">
                <ul class="account-menu menu dropdown text-right" data-dropdown-menu>
                    <li class="search-toggle hide-for-small-only">
                        <a><i class="fa fa-search"></i><span><?php echo __( 'Search' ); ?></span></a>
                    </li><!-- .search-toggle -->
                    <li class="cart dropdown-toggle" data-toggle="cart-dropdown">
                        <?php nelumbo_cart_link(); ?>
                    </li><!-- .cart -->
                <?php if ( ! is_user_logged_in() ) : ?>
                    <li class="last">
                        <a href="/my-account"><i class="fa fa-sign-in"></i><span><?php echo __( 'Log in' ); ?></span></a>
                    </li><!-- .last -->
                <?php else : ?>
                    <li class="dropdown-toggle">
                        <a data-toggle="account-dropdown"><i class="fa fa-user-circle"></i><span><?php echo __( 'My account', 'woocommerce' ); ?></span></a>
                    </li><!-- .dropdown-toggle -->
                <?php endif; ?>
                </ul><!-- .account-menu -->
            </div><!-- .auto.cell -->
        </div><!-- .grid-x -->
    </div><!-- .grid-container -->
    <div id="cart-dropdown" class="dropdown-pane" data-dropdown data-hover="true" data-hover-pane="true">
        <?php the_widget( 'WC_Widget_Cart' ); ?>
    </div><!-- #cart-dropdown.dropdown-pane -->
    <div id="account-dropdown" class="dropdown-pane" data-dropdown data-hover="true" data-hover-pane="true">
        <ul class="vertical menu">
            <li><a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>/orders"><i class="fa fa-th-list"></i> <span><?php echo __( 'Orders', 'woocommerce' ); ?></span></a></li>
            <li><a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>/edit-address/"><i class="fa fa-address-book"></i> <span><?php echo __( 'Addresses', 'woocommerce' ); ?></span></a></li>
            <li><a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>/edit-account"><i class="fa fa-cogs"></i> <span><?php echo __( 'Settings' ); ?></span></a></li>
            <li><a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>/customer-logout"><i class="fa fa-sign-out"></i> <span><?php echo __( 'Log out' ); ?></span></a></li>
        </ul><!-- .vertical.menu -->
    </div><!-- #account-dropdown.dropdown-pane -->
    <div class="product-search inverse">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="small-11 cell">
                    <?php get_product_search_form(); ?>
                </div><!-- .large-11 -->
                <div class="close small-1 cell inverse">
                    <a><i class="fa fa-times"></i></a>
                </div><!-- .close.large-1 -->
            </div><!-- .grid-x -->
        </div><!-- .grid-container -->
    </div><!-- .product-search -->
</div><!-- .top-stripe -->
