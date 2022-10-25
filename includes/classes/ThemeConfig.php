<?php
namespace DigitalTechnologia\MyIclinic;

/**
 *
 */
trait ThemeConfig
{
    /**
     * Method setupThemeConfig
     * Setup the theme configuration for the my-iclinic theme. ex: menus, title-tag, html5, custom-logo, registering nav menus etc.
     * @return void
     */
    public function setupThemeConfig()
    {
        $this->themeSupport();
        $this->registerMenus();
    }

    /**
     * Method themeSupport
     * Add theme support for the my-iclinic theme
     * @return void
     */
    public function themeSupport()
    {
        add_theme_support('menus');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-background');
        add_theme_support('custom-header');
        add_theme_support('custom-logo');
        add_theme_support('automatic-feed-links');
        add_theme_support('html5', [
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script',
        ]);
        add_theme_support('customize-selective-refresh-widgets');
    }

    /**
     * Method registerMenus
     * Register navigation menu for the my-iclinic theme
     * @return void
     */
    public static function registerMenus()
    {
        register_nav_menus([
            'headerMenu' => __('Header Menu'),
            'footerMenu' => __('Footer Menu'),
        ]);
    }
}
