<?php
// Add footer
function add_header() {
    get_template_part('templates/content', 'header');
}
function remove_sidebar() {
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
}
function add_footer() {
    get_template_part('templates/content', 'footer');
}
add_action( 'woocommerce_before_main_content', 'add_header', 5 );
add_action( 'woocommerce_sidebar', 'remove_sidebar', 9 );
add_action( 'woocommerce_after_main_content', 'add_footer', 15 );

?>