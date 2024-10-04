<?php
function generate_breadcrumb() {
    $home_link = '<a href="'.home_url().'">Home</a>';  
    $breadcrumbs = array($home_link);

    if (is_category() || is_single()) {  
        array_push($breadcrumbs, get_the_category(' • '));
            if (is_single()) {
                array_push($breadcrumbs, get_the_title());
            }  
    } elseif (is_page()) {  
        array_push($breadcrumbs, get_the_title());
    } elseif (is_search()) {
        array_push($breadcrumbs, "Search Results for...".get_search_query());
    }
    $breadcrumb_response = implode("  /  ", $breadcrumbs);
    echo '<p class="breadcrumbs">'.$breadcrumb_response.'</p>';
}
?>