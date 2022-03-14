<?php

namespace WP_MyFans;

class WP_MyFansContentFilter {

    public function apply() {
        add_filter('the_content', function ($content) {

            global $wp_query;

            // Check if we're inside the main loop in a single Post.
            if (is_singular() && in_the_loop() && is_main_query()) {
                var_dump(get_post());
            }

            return $content;
        }, 5);
    }
}