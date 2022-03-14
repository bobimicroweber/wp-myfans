<?php

namespace WP_MyFans;

use WP_PluginFramework\WP_Plugin;

use WP_MyFans\Filters\WP_MyFansContentFilter;
use WP_MyFans\PostTypes\WP_MyFansPostType;
use WP_MyFans\MetaBoxes\WP_MyFansMetaBox;

class WP_MyFansPlugin extends WP_Plugin
{
    public function run()
    {
        // Filters
        WP_MyFansContentFilter::register();

        // Post Types
        WP_MyFansPostType::register();

        // MetaBoxes
        WP_MyFansMetaBox::register();
    }

}