<?php

//var_dump($first_level_categories);
?>
<div class="gf-category-mega-menu-desktop__main_cats">
    <ul>
        <?php
        //level 1 categories
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

            <div class="gf-category-mega-menu-desktop__second_cats">
            <ul>
            <?php
            //level 2 cateogires
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

                <div class="gf-category-mega-menu-desktop__second_cats">
                    <ul>
                        <?php
                        //level 3 cateogires
                        $args = array(
                            'taxonomy' => 'product_cat',
                            'parent' => $second_level_category_id
                        );
                        $third_level_categories = get_terms($args);
                        foreach ($third_level_categories as $third_level_category) {
                            $third_level_category_id = $third_level_category->term_id;
                            $third_level_category_link = get_category_link($third_level_category_id);
                            echo '<li class="cool-link"><a href="' . $third_level_category_link . '">' . $third_level_category->name . '</a></li>';
                        }
                        ?>
                    </ul><!--third level categories ul-->
                </div><!--third level categories div-->

                </li> <!--second level categories li-->
                </ul><!--second level categories ul-->
                </div><!--second level categories div-->
                <?php
            }
            ?>
            </li> <!--first level categories li end-->
        <?php } ?>
    </ul> <!--first level categories ul end-->
</div><!--first level categories div end-->

<!--<div class=" gf-category-mega-menu-desktop__best_selling text-center mt-3">-->
<!--    <img src="https://via.placeholder.com/200x200" alt="">-->
<!--    <h5>Lorem Ispum Product</h5>-->
<!--    <h6>Price: $200</h6>-->
<!--</div>-->