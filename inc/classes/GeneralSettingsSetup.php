<?php
namespace GreenFriendsTheme;

class GeneralSettingsSetup
{
    private $generalSettings;

    public function __construct()
    {
        $this->generalSettings = new GeneralSettings();
        $this->init();
    }

    private function init()
    {
        add_action('admin_init', array($this, 'registerOptions'));
        add_action('admin_menu', array($this, 'gfThemeSettingsCreateMenu'));
    }

    public function registerOptions()
    {
        register_setting('gf-general-settings-group', 'gf-general-logo-value');
        register_setting('gf-general-settings-group', 'gf-general-phone-value');
    }

    public function gfThemeSettingsCreateMenu()
    {
        //create new top-level menu
        add_menu_page('GreenFriends Theme Settings', 'GreenFriends Theme Settings', 'administrator', 'gf_theme_settings', array($this, 'gfThemeSettingsOptionsPage'), null, 99);
        add_submenu_page('gf_theme_settings', 'GreenFriends Theme Settings', 'General', 'administrator', 'gf_theme_settings', array($this, 'gfThemeSettingsOptionsPage'));
    }

    public function gfThemeSettingsOptionsPage()
    {
        require(__DIR__ . "/../html/admin/optionPageGeneral.phtml");

    }



}
