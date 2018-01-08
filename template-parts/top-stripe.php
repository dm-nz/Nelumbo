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
    <div class="row inverse">
        <div class="column">
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
        </div><!-- .column -->
    </div><!-- .row -->
    <div class="dropdown-pane" id="cart-dropdown" data-dropdown data-dropdown data-hover="true" data-hover-pane="true">
        <?php the_widget( 'WC_Widget_Cart' ); ?>
    </div><!-- #cart-dropdown -->
    <div class="dropdown-pane" id="account-dropdown" data-dropdown data-dropdown data-hover="true" data-hover-pane="true">
        <ul class="vertical menu">
            <li><a href="/my-account/orders"><i class="fa fa-th-list"></i> <span><?php echo __( 'Orders', 'woocommerce' ); ?></span></a></li>
            <li><a href="/my-account/edit-address/"><i class="fa fa-address-book"></i> <span><?php echo __( 'Addresses', 'woocommerce' ); ?></span></a></li>
            <li><a href="/my-account/edit-account"><i class="fa fa-cogs"></i> <span><?php echo __( 'Settings' ); ?></span></a></li>
            <li><a href="/my-account/customer-logout"><i class="fa fa-sign-out"></i> <span><?php echo __( 'Log out' ); ?></span></a></li>
        </ul><!-- .menu.dropdown -->
    </div>
    <div class="product-search inverse">
        <div class="row">
            <div class="large-11 columns">
                <?php get_product_search_form(); ?>
            </div><!-- .large-11 -->
            <div class="close large-1 columns inverse text-right">
                <div class="column">
                    <a><i class="fa fa-times"></i></a>
                </div><!-- .column -->
            </div><!-- .close.large-1 -->
        </div><!-- .row -->
    </div><!-- .product-search -->
</div><!-- .top-stripe -->
