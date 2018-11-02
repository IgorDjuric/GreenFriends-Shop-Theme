<?php
//first level categories
echo '<ul class="gf-category-mega-menu-desktop__main_cats">';
$args = array(
    'taxonomy' => 'product_cat',
    'parent' => 0
);
$first_level_categories = get_terms($args);
foreach ($first_level_categories as $first_level_category) {
    $first_level_category_id = $first_level_category->term_id;
    $first_level_category_link = get_category_link($first_level_category_id);
    echo '<li class="cool-link"><a href="' . $first_level_category_link . '">' . $first_level_category->name . '<i class="fas fa-caret-right"></i></a>';
    ?>
<!--second level categories-->
    <ul class="gf-category-mega-menu-desktop__second_cats"><?php
    $args = array(
        'taxonomy' => 'product_cat',
        'parent' => $first_level_category_id
    );
    $second_level_categories = get_terms($args);
    foreach ($second_level_categories as $second_level_category) {
        $second_level_category_id = $second_level_category->term_id;
        $second_level_category_link = get_category_link($second_level_category_id);
        echo '<li class="cool-link"><a href="' . $second_level_category_link . '">' . $second_level_category->name . '<i class="fas fa-caret-right"></i></a>';
        ?>
        <!--third level categories-->
        <ul class="gf-category-mega-menu-desktop__third_cats"><?php
            $args = array(
                'taxonomy' => 'product_cat',
                'parent' => $second_level_category_id
            );
            $third_level_categories = get_terms($args);
               foreach ($third_level_categories as $third_level_category) {
                   $third_level_category_id = $third_level_category->term_id;
                   $third_level_category_link = get_category_link($third_level_category_id);
                   echo '<li class=""><a href="' . $second_level_category_link . '">' . $second_level_category->name . '</a></li>';

               }?>
        </ul>
    </li><?php
    }
echo '</ul></li>'; ?>

<?php
}
echo '</ul>';
