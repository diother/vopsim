<?php 
// Remove the woocommerce default stylesheets
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// Include components hooks
include 'components/base.php';
include 'components/product.php';
include 'components/input_buttons.php';
include 'components/breadcrumbs.php';

// Include pages hooks
include 'pages/single-product.php';
include 'pages/archive-product.php';
include 'pages/cart.php';
include 'pages/checkout.php';

?>