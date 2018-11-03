<ul class="mobile_menu">
    <li class="font-weight-bold d-flex mobile_menu__header">All cetegories<i class="fas fa-times ml-auto"></i></li>
    <?php
    $args = array(
        'taxonomy' => 'product_cat',
        'parent' => 0
    );
    $first_level_categories = get_terms($args);
    foreach ($first_level_categories as $first_level_category):
        $first_level_category_id = $first_level_category->term_id;
        $first_level_category_link = get_category_link($first_level_category_id);
        ?>
        <li>
            <a href="<?= $first_level_category_link ?>"><?= $first_level_category->name ?></a>
            <?php if (!empty(get_term_children($first_level_category_id, 'product_cat'))): ?>
                <ul class="submenu">
                    <?php
                    $args = array(
                        'taxonomy' => 'product_cat',
                        'parent' => $first_level_category_id
                    );
                    $second_level_categories = get_terms($args);
                    foreach ($second_level_categories as $second_level_category):
                        $second_level_category_id = $second_level_category->term_id;
                        $second_level_category_link = get_category_link($second_level_category_id);
                        ?>
                        <li>
                            <a href="<?= $second_level_category_link ?>"><?= $second_level_category->name ?></a>
                            <?php if (!empty(get_term_children($second_level_category_id, 'product_cat'))): ?>
                                <ul class="submenu">
                                    <?php
                                    $args = array(
                                        'taxonomy' => 'product_cat',
                                        'parent' => $second_level_category_id
                                    );
                                    $third_level_categories = get_terms($args);
                                    foreach ($third_level_categories as $third_level_category):
                                        $third_level_category_id = $third_level_category->term_id;
                                        $third_level_category_link = get_category_link($third_level_category_id);
                                        ?>
                                        <li>
                                            <a href="<?= $third_level_category_link ?>"><?= $third_level_category->name ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>