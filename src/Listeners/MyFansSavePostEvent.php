<?php

namespace MyFans\Listeners;

use WP_PluginFramework\Listeners\WP_SavePostEvent;

class MyFansSavePostEvent extends WP_SavePostEvent
{
    public static function event($post_id)
    {
        // Check the logged in user has permission to edit this post
        if (!current_user_can('manage_options')) {
            return $post_id;
        }

        if (isset($_POST['smashing_post_class'])) {
            update_post_meta($post_id, 'smashing_post_class', $_POST['smashing_post_class']);
        }

    }
}