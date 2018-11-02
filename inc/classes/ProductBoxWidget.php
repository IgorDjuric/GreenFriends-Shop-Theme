<?php

class ProductBoxWidget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'ProductBoxWidget', // Base ID
            esc_html__('GF Product Box Widget', 'gf_widgets_domain'), // Name
            array('description' => esc_html__('Product Box widget', 'gf_widgets_domain'),) // Args
        );

    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        require(__DIR__ . "/../html/productBox/productBox.php");
        if (isset($args['after_widget'])) {
            echo $args['after_widget'];
        }
    }

    public function form($instance)
    {
        $product_box_title = !empty($instance['product_box_title']) ? $instance['product_box_title'] : esc_html__('', 'gf_widgets_domain');
        $product_box_title_link = !empty($instance['product_box_title_link']) ? $instance['product_box_title_link'] : esc_html__('', 'gf_widgets_domain');
        $category_select = !empty($instance['category_select']) ? $instance['category_select'] : esc_html__('', 'gf_widgets_domain');
        $columns = !empty($instance['number_of_columns']) ? $instance['number_of_columns'] : esc_html__('', 'gf_product_slider_without_tabs_widget_domain');

        $args = array(
            'orderby' => 'term_group',
            'order' => 'ASC',
            'taxonomy' => 'product_cat',
            'hierarchical' => 1,
//            'parent' => 0
        );
        $categories = get_terms($args);


        require(__DIR__ . "/../html/productBox/productBoxWidgetForm.phtml");
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['product_box_title'] = (!empty($new_instance['product_box_title'])) ? sanitize_text_field($new_instance['product_box_title']) : '';
        $instance['product_box_title_link'] = (!empty($new_instance['product_box_title_link'])) ? sanitize_text_field($new_instance['product_box_title_link']) : '';
        $instance['category_select'] = (!empty($new_instance['category_select'])) ? sanitize_text_field($new_instance['category_select']) : '';
        $instance['number_of_columns'] = (!empty($new_instance['number_of_columns'])) ? sanitize_text_field($new_instance['number_of_columns']) : '';

        return $instance;
    }
}