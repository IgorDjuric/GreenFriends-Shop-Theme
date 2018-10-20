<?php
namespace GreenFriendsTheme;
class ThemeSetup
{
    /**
     * ThemeSetup constructor.
     */
    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        load_theme_textdomain('greenfriends-theme', '', get_template_directory_uri() . '/greenfriends-theme/languages');

        add_action('after_theme_setup', array($this, 'gfThemeSetup'));

        //frontend scripts & styles
        add_action('wp_enqueue_scripts', array($this, 'enqueueFrontendStyleAndScripts'));

        //admin scripts & styles
        add_action('admin_enqueue_scripts', array($this, 'enqueueAdminStyleAndScripts'));

        add_action('after_theme_setup', array($this, 'wcSupport'));


        add_action('admin_menu', array($this, 'gfThemeSettingsCreateMenu'));
    }

    public function gfThemeSetup()
    {
        /*
        * Load Localisation files.
        *
        * Note: the first-loaded translation file overrides any following ones if the same translation is present.
        */

        load_theme_textdomain( 'greenfriends-shop', get_template_directory() . '/languages' );

        /**
         * Add default posts and comments RSS feed links to head.
         */
        add_theme_support( 'automatic-feed-links' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/reference/functions/add_theme_support/#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );

        /**
         * Enable support for site logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 110,
            'width'       => 470,
            'flex-width'  => true,
        ) ) ;

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'primary'   => __( 'Header Menus'),
            'secondary' => __( 'Footer Menus'),
            'handheld'  => __( 'Other Menus'),
        ) );

        /*
         * Switch default core markup for search form, comment form, comments, galleries, captions and widgets
         * to output valid HTML5.
         */
        add_theme_support( 'html5',array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'widgets',
        ) ) ;

        // Setup the WordPress core custom background feature.
        add_theme_support( 'custom-background', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) );



        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'custom-header',array(
            'default-image' => '',
            'header-text'   => false,
            'width'         => 1950,
            'height'        => 500,
            'flex-width'    => true,
            'flex-height'   => true,
        ) );
    }

    /**
     * frontend scripts & styles
     */
    public function enqueueFrontendStyleAndScripts()
    {
        // @TODO for development only
        $version = time();
        wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.1.1/css/all.css');
        wp_enqueue_style('bootstrap 4.1', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css');

//        wp_enqueue_script('jquery', '', [], false, true);
//        wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js', array(), '', 'true');
//        wp_enqueue_script('bootstrap-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), '', 'true');

        //greenfirends styles & scripts
        wp_enqueue_style('gf-style', get_stylesheet_directory_uri() . '/assets/css/admin.css', [], $version);

        wp_enqueue_style('gf-style', get_stylesheet_directory_uri() . '/assets/css/style.css', [], $version);
        wp_enqueue_script('gf-front-js', get_stylesheet_directory_uri() . '/assets/js/front.js', ['jquery'], '', false);
    }

    /**
     * admin scripts & styles
     */
    public function enqueueAdminStyleAndScripts()
    {
        wp_enqueue_script('gf-admin-js', get_stylesheet_directory_uri() . '/assets/js/admin.js', ['jquery']);
        wp_enqueue_style('gf-admin-style', get_stylesheet_directory_uri() . '/assets/css/admin.css');
    }


    /**
     * Woocommerce support
     */
    public function wcSupport()
    {
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
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