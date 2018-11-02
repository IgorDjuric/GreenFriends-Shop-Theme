<?php
add_action('widgets_init', 'gf_register_sidebars');
function gf_register_sidebars()
{
    $theme = wp_get_theme();
    $gf_sidebars = array(
        array(
            'name' => __('Image Slider Desktop', '' . $theme->get('TextDomain') . ''),
            'id' => 'gf-image-slider-desktop',
            'description' => 'Image slider for homepage (desktop)',
        ),
        array(
            'name' => __('Homepage Desktop', '' . $theme->get('TextDomain') . ''),
            'id' => 'gf-homepage-desktop',
            'description' => 'Homepage for (desktop)',
            'before_widget' => '',
            'after_widget' => '',
        ),
    );


    foreach ($gf_sidebars as $args) {
        register_sidebar($args);
    }
}