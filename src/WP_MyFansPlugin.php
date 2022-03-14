<?php

namespace WP_MyFans;

use WP_MyFans\Framework\WP_Plugin;
use WP_MyFans\PostTypes\WP_MyFansPostType;

class WP_MyFansPlugin extends WP_Plugin
{
    public function run()
    {
        // Register post type
        WP_MyFansPostType::register();
    }

}