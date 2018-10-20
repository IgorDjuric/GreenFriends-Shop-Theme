<?php
require (__DIR__ . "/inc/classes/ThemeSetup.php");
$theme_setup = new GreenFriendsTheme\ThemeSetup();

add_action('after_setup_theme', 'require_on_init');
function require_on_init()
{
    foreach (glob(get_stylesheet_directory() . "/inc/*.php") as $file) {
        require $file;
    }
}


