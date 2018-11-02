<?php
namespace GreenFriendsTheme;
class ProductBoxSetup
{
    /**
     * ProductBoxSetup constructor.
     */

    public function __construct()
    {
        $this->init();
    }


    private function init()
    {
        add_action('admin_menu', array($this, 'optionPageRegister'));
        add_action('widgets_init', array($this, 'registerWidget'));
    }


    public function optionPageRegister()
    {

        add_submenu_page('gf_theme_settings','Product Box', 'Product Box', 'administrator', 'product_box_options', array($this, 'optionPage'));

        add_action('admin_init', array($this, 'registerOptions'));
    }

    public function registerOptions()
    {
        register_setting('gf-product-box-settings-group', 'gf-product-box-values');

    }

    public function optionPage()
    {
        require(__DIR__ . "/../html/productBox/optionPageProductBox.phtml");
    }
    public function registerWidget()
    {
        register_widget('ProductBoxWidget');
    }

}