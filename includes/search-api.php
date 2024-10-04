<?php 
    add_action('rest_api_init', 'vopsim_register_search');

    function vopsim_register_search() {
        register_rest_route('vopsim/v1', 'search', array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'vopsim_search_results'
        ));
    }
    function vopsim_search_results($data) {
        $results = array(
            'products' => array(),
            'pages' => array()
        );
        $related_array = array();
        $placeholder_array = array();

        $main_query = new WP_Query(array(
            'post_type' => array('product', 'page'),
            's' => sanitize_text_field($data['term']),
            'posts_per_page' => -1
        ));
        $main_count = $main_query->found_posts;

        while ($main_query->have_posts()) {
            $main_query->the_post();

            if (get_post_type() == 'product') {
                global $product;
                $id = get_the_ID();

                array_push($results['products'], array(
                    'title' => get_the_title(),
                    'permalink' => get_the_permalink(),
                    'thumbnail' => woocommerce_get_product_thumbnail(),
                    'price' =>  wc_get_product($id)->get_price_html()
                ));
                // related products array
                if (count($related_array) < 10 - $main_count) { 
                    $related = wc_get_related_products($id);

                    foreach ($related as $value) {
                        if (count($related_array) >= 10 - $main_count) {
                            break;
                        }
                        global $product;
                        $product = wc_get_product($value);

                        array_push($related_array, array(
                            'title' => $product->get_title(),
                            'permalink' => $product->get_permalink(),
                            'thumbnail' => woocommerce_get_product_thumbnail(),
                            'price' =>  $product->get_price_html()
                        ));
                    }
                }
                wp_reset_postdata();
            }
            if (get_post_type() == 'page') {
                array_push($results['pages'], array(
                    'title' => get_the_title(),
                    'permalink' => get_the_permalink()
                ));
            }
        }
        $results['products'] = array_merge($results['products'], $related_array); 
        $results['products'] = array_values(array_unique($results['products'], SORT_REGULAR));
        $results['products'] = array_slice($results['products'], 0, 6);

        // If direct and related results are not enough, call placeholders, most expensive products in shop.
        if (count($results['products']) < 6) {
            $placeholder = wc_get_products(array(
                'limit'  => 10, 
                'status' => 'publish',
                'orderby' => 'meta_value_num',
                'meta_key' => '_price',
                'order' => 'DESC',
                'return' => 'ids'
            ));
            foreach ($placeholder as $value) {
                global $product;
                $product = wc_get_product($value);
    
                array_push($placeholder_array, array(
                    'title' => $product->get_title(),
                    'permalink' => $product->get_permalink(),
                    'thumbnail' => woocommerce_get_product_thumbnail(),
                    'price' =>  $product->get_price_html()
                ));
            }
            $results['products'] = array_merge($results['products'], $placeholder_array);
            $results['products'] = array_values(array_unique($results['products'], SORT_REGULAR));
            $results['products'] = array_slice($results['products'], 0, 6);
        }
        wp_reset_postdata();
        return $results;
    }
?>