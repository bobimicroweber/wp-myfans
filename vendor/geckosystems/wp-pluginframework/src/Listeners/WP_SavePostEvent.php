<?php
namespace WP_PluginFramework\Listeners;

abstract class WP_SavePostEvent
{
    public static function register()
    {
        add_action('save_post', function ($post_id, $post) {
            return static::event($post_id, $post);
        });
    }

    public static function event($post_id, $post) {

    }
}