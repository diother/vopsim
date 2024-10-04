<?php
// Remove everything
function remove_sale_flash() {
    remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
}
function remove_single_product_summary() {
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
    remove_action( 'woocommerce_single_product_summary', 'WC_Structured_Data::generate_product_data()', 60 );
}
function remove_tabs() {
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
}
add_action( 'woocommerce_before_single_product_summary', 'remove_sale_flash', 9 );
add_action( 'woocommerce_single_product_summary', 'remove_single_product_summary', 4 );
add_action( 'woocommerce_after_single_product_summary', 'remove_tabs', 9 );

// Remove product image link
function remove_product_link( $html ) {
    return strip_tags( $html, '<div><img>' );
}
add_filter( 'woocommerce_single_product_image_thumbnail_html', 'remove_product_link' ); 

// Add grid wrapper
function grid_wrapper_before() {
    echo '<div class="grid-container">';
}
function grid_wrapper_after() {
    echo '</div>';
}
add_action( 'woocommerce_before_single_product_summary', 'grid_wrapper_before', 10 );
add_action( 'woocommerce_after_single_product_summary', 'grid_wrapper_after', 5 );

// Readd title and price
function add_title_price() {
    global $product;
    $title = $product->get_name();
    $price = $product->get_price_html();

    echo    '<section class="title-container">
                <h1>'.$title.'</h1>
                <span class="price">'.$price.'</span>
            </section>';
}
add_action( 'woocommerce_before_single_product_summary', 'add_title_price', 15 );

// Readd variations and add to cart
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 5 );

// Change the "Choose an option" thing
function custom_dropdown_choice( $args ){
    $args['show_option_none'] = "Alege";
    return $args;
}
add_filter('woocommerce_dropdown_variation_attribute_options_args', 'custom_dropdown_choice', 10);


function add_field($field, $name) {
    echo '<div class="element">
            <div class="title"><i></i><span>'.$name.'</span></div>
            <div class="content">'
                .$field.
            '</div>
        </div>';
}
// Readd description
function add_description() {
    global $product;
    $description = $product->get_description();

    echo '<div class="description">'.$description.'</div>';

    echo '<div class="accordion prevent-select">';

    $objects = get_field_objects();
    
    if(!empty($objects)) {
        foreach($objects as $obj) {
            if (!$obj['value']) continue;

            add_field($obj['value'], $obj['label']);
        }
    }
    echo '</div>';
}
add_action( 'woocommerce_single_product_summary', 'add_description', 10 );

// Remove uncategorized
function your_prefix_wc_remove_uncategorized_from_breadcrumb( $crumbs ) {
	$category 	= get_option( 'default_product_cat' );
	$caregory_link 	= get_category_link( $category );

	foreach ( $crumbs as $key => $crumb ) {
		if ( in_array( $caregory_link, $crumb ) ) {
			unset( $crumbs[ $key ] );
		}
	}

	return array_values( $crumbs );
}
add_filter( 'woocommerce_get_breadcrumb', 'your_prefix_wc_remove_uncategorized_from_breadcrumb' );

?>