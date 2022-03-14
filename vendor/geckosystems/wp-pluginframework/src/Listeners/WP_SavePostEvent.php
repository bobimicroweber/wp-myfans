<?php
namespace WP_PluginFramework\Listeners;

abstract class WP_SavePostEvent
{
    public static function register()
    {
        add_action('save_post', [static::class, 'event']);
    }
}