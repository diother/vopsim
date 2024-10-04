<?php
// Display Cart Totals
function cart_totals() {
    $total = WC()->cart->get_cart_subtotal();
    echo '<div class="cart_totals">
            <div class="order-review">
                <div class="subtotal">Sub-total<span class="result">'.$total.'</span></div>
                <div class="shipping">Livrare<span class="result">Se va calcula</span></div>
                <div class="total">Total<span class="result">'.$total.'</span></div>
            </div>
            <div class="mobile-button">
                <div class="center-container">
                <a href="'.site_url('/checkout').'"><button class="full-width">Continuă la Plată</button></a>
                </div>
            </div>
            <a class="desktop-button" href="'.site_url('/checkout').'"><button class="full-width">Continuă la Plată</button></a>
        </div>';
}
add_action( 'woocommerce_before_cart_collaterals' , 'cart_totals', 5 );
add_action( 'woocommerce_before_cart_collaterals', 'woocommerce_cross_sell_display', 10 );

// Renamve woocommerce product cross sells heading
function woocommerce_product_cross_sells_products_heading( $string ) {
    $string = __( 'Oferte', 'woocommerce' );

    return $string;
}
add_filter( 'woocommerce_product_cross_sells_products_heading', 'woocommerce_product_cross_sells_products_heading', 10, 1 );

function empty_cart_class( $classes ) {
    global $woocommerce;
    if( is_cart() && WC()->cart->cart_contents_count == 0){
        $classes[]='empty-cart';
    }
    return $classes;
}
add_filter( 'body_class', 'empty_cart_class' );
?>