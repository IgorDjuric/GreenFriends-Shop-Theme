<?php

add_action('after_setup_theme', 'require_on_init');
function require_on_init()
{
    foreach (glob(get_stylesheet_directory() . "/inc/*.php") as $file) {
        require $file;
    }
}

//theme setup
require (__DIR__ . "/inc/classes/ThemeSetup.php");
$theme_setup = new GreenFriendsTheme\ThemeSetup();

////image slider
require (__DIR__ . "/inc/classes/ImageSliderSetup.php");
require (__DIR__ . "/inc/classes/ImageSlider.php");
require (__DIR__ . "/inc/classes/ImageSliderWidget.php");
$ImageSliderSetup = new GreenFriendsTheme\ImageSliderSetup();




