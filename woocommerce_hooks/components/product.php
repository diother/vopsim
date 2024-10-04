<?php
// Add wrapper to product description
function product_wrapper_before() {
    echo '<div class="product-description">';
}
function product_wrapper_after() {
    echo '</div>';
}
add_action( 'woocommerce_shop_loop_item_title', 'product_wrapper_before', 5 );
add_action( 'woocommerce_after_shop_loop_item_title', 'product_wrapper_after', 15 );

// Add excerpt to product in archive
function show_excerpt() {
	global $product;
    $excerpt = $product->post->post_excerpt;
    // $result = mb_substr($excerpt, 0, 18);
	echo '<span class="product-details">'.$excerpt.'</span>';
}
add_action( 'woocommerce_after_shop_loop_item_title', 'show_excerpt', 5 );

// Remove add to cart button
function remove_add_to_cart() {
    remove_action( 'woocommerce_after_shop_loop_item' , 'woocommerce_template_loop_add_to_cart', 10 );
}
add_action( 'woocommerce_after_shop_loop_item', 'remove_add_to_cart', 9);

// Remove sale flash
function remove_sale() {
    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
}
add_action( 'woocommerce_before_shop_loop_item_title', 'remove_sale', 9 );


?>