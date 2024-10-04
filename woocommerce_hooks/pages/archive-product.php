<?php
// Add title container
function header_wrapper_before() {
    if(is_archive())
        echo '<div class="title-container">';
}
function header_wrapper_after() {
    echo '</div>';
}
add_action( 'woocommerce_before_main_content', 'header_wrapper_before', 30 );
add_action( 'woocommerce_before_shop_loop', 'header_wrapper_after', 25 );

// Remove the notices wrapper
function remove_notices() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );
}
add_action( 'woocommerce_before_shop_loop', 'remove_notices', 9 );

// Add filters html
function filters_before() {
    echo '<div class="product-filters">
            <div class="filters">
                <svg width="15" height="13"><use href="'.get_theme_file_uri('./media/sprite.svg#filters').'"></use></svg>
                <span>Filtre</span>
            </div>
            <div class="sort">';
}
function filters_after() {
    echo '</div></div>';
}
add_action( 'woocommerce_before_shop_loop', 'filters_before', 25 );
add_action( 'woocommerce_before_shop_loop', 'filters_after', 35 );
?>