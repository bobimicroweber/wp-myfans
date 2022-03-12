<?php

namespace WP_MyFans;

use WP_MyFans\Abstracts\WP_Plugin;

class WP_MyFansPlugin extends WP_Plugin
{


    public function run()
    {
        $this->registerPostType();
    }

    function registerPostType()
    {
        register_post_type( 'wp-myfans', [
            'label'  => null,
            'labels' => [
                'name'               => 'MyFans',
                'menu_name'          => 'MyFans',
                'all_items'          => __('All posts', 'wp-myfans'),
                'singular_name'      => 'wp-myfans',
                'add_new'            => __('Add new post', 'wp-myfans'),
                'add_new_item'       => 'Add new item',
                'edit_item'          => 'Edit post',
                'new_item'           => 'New item',
                'view_item'          => 'View Item',
                'search_items'       => 'Search items',
                'not_found'          => 'Not found',
                'not_found_in_trash' => 'Not found in trash',
                'parent_item_colon'  => '',
            ],
            'description'         => '',
            'public'              => true,
            'publicly_queryable'  => true,
            // 'exclude_from_search' => null,
             'show_ui'             => true,
            // 'show_in_nav_menus'   => null,
            'show_in_menu'        => true,
            'show_in_admin_bar'   => true,
            'show_in_rest'        => null,
            'rest_base'           => null,
            'menu_position'       => null,
            'menu_icon'           => null,
            //'capability_type'   => 'post',
        //    'capabilities'      => ['post'],
            //'map_meta_cap'      => null,

            'public'        => true,
            'query_var'     => true,
            'rewrite'       => array('slug' => 'myfans'),
            'has_archive'   => true,
            'hierarchical'  => false,
            'supports'            => ['title','editor','author','thumbnail','comments','revisions','page-attributes','post-formats'],
            'taxonomies'          => [],
            'has_archive'         => true,
            'rewrite'             => false,
            'query_var'           => true,
        ] );
    }


}