<?php

namespace GreenFriendsTheme;
class ImageSliderSetup
{
    /**
     * ImageSliderSetup constructor.
     */

    private $imageSlider;

    public function __construct()
    {
        $this->imageSlider = new ImageSlider();
        $this->init();
    }


    private function init()
    {
        add_action('admin_menu', array($this, 'optionPageRegister'));
        add_action('widgets_init', array($this, 'registerWidget'));
    }


    public function optionPageRegister()
    {

        add_submenu_page('gf_theme_settings','Image Sliders', 'Image slider', 'administrator', 'image_slider_options', array($this, 'optionPage'));

        add_action('admin_init', array($this, 'registerOptions'));
    }

    public function registerOptions()
    {
        register_setting('gf-image-slider-settings-group', 'gf-image-slider-values');

    }

    public function optionPage()
    {
        require(__DIR__ . "/../html/imageSlider/optionPageImageSlider.phtml");
    }

    public function registerWidget()
    {
        register_widget('ImageSliderWidget');
    }

}