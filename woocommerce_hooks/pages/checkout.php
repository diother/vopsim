<?php

function checkout_fields( $fields ) {
    unset( $fields['billing']['billing_company'] );
    unset( $fields['billing']['billing_address_2'] );
    unset( $fields['billing']['billing_postcode'] );
    unset( $fields['shipping']['shipping_company'] );
    unset( $fields['shipping']['shipping_address_2'] );
    unset( $fields['shipping']['shipping_postcode'] );
    unset( $fields['order']['order_comments'] );

    $fields['billing']['billing_email']['priority'] = 5;
    $fields['billing']['billing_first_name']['priority'] = 25;
    $fields['billing']['billing_state']['priority'] = 35;
    $fields['billing']['billing_address_1']['priority'] = 75;
    $fields['shipping']['shipping_last_name']['priority'] = 5;
    $fields['shipping']['shipping_state']['priority'] = 35;
    $fields['shipping']['shipping_address_1']['priority'] = 75;
    
    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'checkout_fields', 20, 1 );

function override_address_fields( $fields ) {
    $fields['address_1']['placeholder'] = ' ';
    $fields['state']['placeholder'] = ' ';

    return $fields;
}
add_filter('woocommerce_default_address_fields', 'override_address_fields');

function only_free_shipping( $rates, $package ) {
    $all_free_rates = array();
    foreach ( $rates as $rate_id => $rate ) {
        if ( 'free_shipping' === $rate->method_id ) {
            $all_free_rates[ $rate_id ] = $rate;
            break;
        }
    }
    if ( empty( $all_free_rates )) {
        return $rates;
    } else {
        return $all_free_rates;
    } 
}
add_filter( 'woocommerce_package_rates', 'only_free_shipping', 9999, 2 );

function product_image_review_order_checkout( $name, $cart_item, $cart_item_key ) {
    if ( ! is_checkout() ) return $name;
    $product = $cart_item['data'];
    $thumbnail = $product->get_image( array( '50', '50' ), array( 'class' => 'alignleft' ) );
    return $thumbnail . $name;
}
add_filter( 'woocommerce_cart_item_name', 'product_image_review_order_checkout', 9999, 3 );

function add_payment_heading() {
    echo '<h3>Plată</h3>';
}
add_action( 'woocommerce_checkout_order_review', 'add_payment_heading', 15 );

function custom_button_text( $button_text ) {
    $cart_total = WC()->cart->total.'lei';

	return 'Trimite comanda&nbsp;&nbsp;&nbsp;&nbsp;'.$cart_total;
}
add_filter( 'woocommerce_order_button_text', 'custom_button_text' );

?>