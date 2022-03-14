<?php

namespace MyFans\Filters;

use WP_PluginFramework\Filters\WP_ContentFilter;

class MyFansContentFilter extends WP_ContentFilter {

    public static function filter($data) {

        global $wp_query;

        // Check if we're inside the main loop in a single Post.
        if (is_singular() && in_the_loop() && is_main_query()) {
          //  var_dump(get_post());
        }

        return $data;
    }
}