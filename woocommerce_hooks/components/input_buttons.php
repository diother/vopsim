<?php

add_action( 'woocommerce_after_quantity_input_field', 'display_quantity_plus' );
  
function display_quantity_plus() {
   echo '<div class="plus"><i></i></div>';
}
  
add_action( 'woocommerce_before_quantity_input_field', 'display_quantity_minus' );
  
function display_quantity_minus() {
   echo '<div class="minus"><i></i></div>';
}

?>