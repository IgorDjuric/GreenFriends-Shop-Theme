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

//theme setup
require (__DIR__ . "/inc/classes/GeneralSettingsSetup.php");
require (__DIR__ . "/inc/classes/GeneralSettings.php");
$theme_setup = new GreenFriendsTheme\GeneralSettingsSetup();

////image slider
require (__DIR__ . "/inc/classes/ImageSliderSetup.php");
require (__DIR__ . "/inc/classes/ImageSlider.php");
require (__DIR__ . "/inc/classes/ImageSliderWidget.php");
$image_slider_setup = new GreenFriendsTheme\ImageSliderSetup();

require (__DIR__ . "/inc/classes/ImageBannersSetup.php");
require (__DIR__ . "/inc/classes/ImageBanners.php");
require (__DIR__ . "/inc/classes/ImageBannersWidget.php");
$image_banners_setup = new GreenFriendsTheme\ImageBannersSetup();



//function mytheme_add_woocommerce_support() {
//    add_theme_support( 'woocommerce' );
//}
//add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );