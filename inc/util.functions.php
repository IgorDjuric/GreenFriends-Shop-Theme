<?php

function check_category_level($category_id){
    $cat = get_term_by('id', $category_id, 'product_cat');
    if ($cat->parent === 0){
        return 1;
    } else {
        if (get_term($cat->parent, 'product_cat')->parent === 0){
            return 2;
        } else{
            return 3;
        }
    }
}