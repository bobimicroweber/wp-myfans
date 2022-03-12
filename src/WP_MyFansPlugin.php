<?php

namespace WP_MyFans;

use WP_MyFans\Abstracts\WP_Plugin;

class WP_MyFansPlugin extends WP_Plugin
{


    public function run()
    {
        register_post_type("wp-myfans", array(
            'labels' => array(
                'name' => 'MyFans',
                'all_items' => __('All posts', 'wp-myfans'),
                'add_new' => __('Add new post', 'wp-myfans'),
            ),
            'public' => true,
            'publicly_queriable' => true,
            'show_ui' => true,
            'menu_position' => 25,
            'menu_icon' => '',
           // 'supports' => array('custom-fields'), 
            'has_archive' => true,
            'rewrite' => false,
            'capability_type' => 'post'
        ));
    }


}