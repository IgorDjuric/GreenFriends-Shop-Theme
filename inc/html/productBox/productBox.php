<?php
$product_box_title = (isset($instance['product_box_title'])) ? $instance['product_box_title'] : 'Example title';
$product_box_title_link = $instance['product_box_title_link'];
$category = $instance['category_select'];
$number_of_columns = (isset($instance['number_of_columns'])) ? (int)$instance['number_of_columns'] : 4;

if ($number_of_columns === 0) {
    $number_of_columns = 4;
}

//$category_count_products = get_term_by('slug', $category, 'product_cat')->count;
//$class = '';
//if($number_of_columns > $category_count_products){
//    $class .= 'max-width-25';
//}

?>
<div class="row mt-5 gf-product-box-wrapper">
    <div class="w-100 gf-product-box__header text-center mb-3">
        <h3 class="gf-product-box__header__title ">
            <a class="px-5" href="<?= $product_box_title_link ?>"><?= $product_box_title ?></a>
        </h3>
    </div>
    <div class="row w-100 gf-product-box__body">
        <?php
        $args = array(
            'product_cat' => $category,
            'post_type' => 'product',
            'posts_per_page' => $number_of_columns,
            'orderby' => 'name',
            'meta_query' => array(
                array(
                    'key' => '_stock_status',
                    'value' => 'instock'
                ),
            ));

        if ($category == 'best_selling_products') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => $number_of_columns,
                'meta_key' => 'total_sales',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'meta_query' => array(
                    array(
                        'key' => '_stock_status',
                        'value' => 'instock'
                    ),
                )
            );
        }
        if ($category == 'latest_products') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => $number_of_columns,
                'orderby' => 'date',
                'order' => 'DESC',
                'meta_query' => array(
                    array(
                        'key' => '_stock_status',
                        'value' => 'instock'
                    ),
                )
            );

        }
        if ($category == 'sale_products') {
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => $number_of_columns,
                'meta_query'     => array(
                    'relation' => 'OR',
                    array( // Simple products type
                        'key' => '_sale_price',
                        'value' => 0,
                        'compare' => '>',
                        'type' => 'numeric'
                    ),
                    array( // Variable products type
                        'key'           => '_min_variation_sale_price',
                        'value'         => 0,
                        'compare'       => '>',
                        'type'          => 'numeric'
                    )
                )
            );

        }

        $i = 0;
        $loop = new WP_Query($args);
        while ($loop->have_posts()) :
            $loop->the_post();
            global $product;
            $i++;
            ?>
            <div class="col-lg col-md col-sm-6 col-xs-6 gf-product-box__item py-2 cool-link-product">
                <a href="<?php echo get_permalink($loop->post->ID) ?>"
                   title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                    <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'full_size'); else echo '<img src="' . wc_placeholder_img_src() . '" alt="Placeholder" width="300px" height="300px" />'; ?>
                    <h5><?php the_title(); ?></h5>
                    <span class="price"><?php echo $product->get_price_html(); ?></span>
                </a>
                <?php woocommerce_template_loop_add_to_cart($loop->post, $product); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </div><!--gf-category-body-->
</div>
