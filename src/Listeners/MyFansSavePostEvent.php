<?php
namespace MyFans\Filters;

use WP_PluginFramework\Listeners\WP_SavePostEvent;

class MyFansSavePostEvent extends WP_SavePostEvent
{
    public static function event($post_id, $post) {

        dd($post_id);
    }

}