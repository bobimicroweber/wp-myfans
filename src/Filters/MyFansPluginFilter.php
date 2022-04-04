<?php

namespace MyFans\Filters;

use WP_PluginFramework\Filters\WP_Filter;

class MyFansPluginFilter extends WP_Filter
{
    public static $filter = 'plugin_action_links';

    public static function filter($links)
    {
        // New links to merge into existing links
        $newLinks = array();
        $newLinks['settings'] = '<a href="' . esc_url(add_query_arg(array('post_type' => 'myfans'), admin_url('edit.php'))) . '">' . esc_html__('Settings') . '</a>';

        return array_merge($links, $newLinks);
    }

}