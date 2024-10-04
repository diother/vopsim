<?php 
// Connect to the stylesheets
function vopsim_files() {
    wp_enqueue_script('vopsim-js', get_theme_file_uri('./build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('vopsim-css', get_theme_file_uri('./build/style-index.css'));
    wp_localize_script('vopsim-js', 'vopsimData', array('rootUrl' => get_site_url()));
}
add_action( 'wp_enqueue_scripts', 'vopsim_files' );

// Add woocommerce support to the theme
function woocommerce_support() {
    register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );

// Include all the changes made woocommerce hooks
include 'woocommerce_hooks/main.php';

// Disable global styles from WordPress
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );

// Connect includes files
include 'includes/search-api.php';
 
?>