<?php

namespace MyFans\Menus;

class MyFansAdminMenu
{
    public static function fawfawfawfwa()
    {
        echo 9999;
    }

    /**
     * Register submenu
     * @return void
     */
    public static function register_sub_menu()
    {
        add_menu_page(
            'My Fans',
            'My Fans',
            'manage_options',
            'myfans', array(static::class, 'fawfawfawfwa'),
            'dashicons-unlock'
        );

        add_submenu_page(
            'myfans',
            'Submenu title',
            'Submenu title',
            'manage_options',
            'myfans-submenu',
            array(static::class, 'submenu_page_callback')
        );

    }

    /**
     * Render submenu
     * @return void
     */
    public static function submenu_page_callback()
    {
        echo '<div class="wrap">';
        echo '<h2>Submenu title</h2>';
        echo '</div>';
    }

    public static function register()
    {
        add_action('admin_menu', array(static::class, 'register_sub_menu'));
    }
}