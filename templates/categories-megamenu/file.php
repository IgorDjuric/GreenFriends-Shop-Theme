<ul class="gf-category-mega-menu-mobile__first_level">
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
        <li class="">
            <a href="<?= $first_level_category_link ?>" class="pl-2"><?= $first_level_category->name ?></a>
            <div class="arrow-next__first_level  mega-menu-mobile__icons">
                <i class="fas fa-arrow-circle-right"></i>
            </div>

            <!--second level categories start-->
            <ul class="gf-category-mega-menu-mobile__second_level">
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
                    <li class="">
                        <div class="arrow-back__second_level  mega-menu-mobile__icons">
                            <i class="fas fa-arrow-circle-left"></i>
                        </div>
                        <a href="<?=$first_level_category_link?>" class="pl-2"><?=$first_level_category->name?></a>
                    </li>
                    <li class="">
                        <a href="<?=$second_level_category_link?>"
                           class="pl-2"><?=$second_level_category->name?></a>
                        <div class="arrow-next__second_level mega-menu-mobile__icons">
                            <i class="fas fa-arrow-circle-right"></i>
                        </div>
                        <!--third level categories-->
                        <ul class="gf-category-mega-menu-mobile__third_level ">
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
                                <li class="">
                                    <div class="arrow-back__third_level  mega-menu-mobile__icons">
                                        <i class="fas fa-arrow-circle-left"></i>
                                    </div>
                                    <a href="<?=$second_level_category_link?>" class="pl-2"><?=$second_level_category->name?></a>
                                </li>
                                <li class="">
                                    <a href="<?=$third_level_category_link?>" class="pl-2"><?=$third_level_category->name?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endforeach; ?>
</ul>
