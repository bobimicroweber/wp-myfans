<?php

class WP_MyFansPostType
{

    public function register()
    {
        $supports = array('title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'page-attributes', 'post-formats');

        $labels = array(
            'name' => _x('MyFans Posts', 'plural'),
            'singular_name' => _x('Posts', 'singular'),
            'menu_name' => _x('MyFans', 'admin menu'),
            'name_admin_bar' => _x('Posts', 'admin bar'),
            'add_new' => _x('Add New', 'add new'),
            'add_new_item' => __('Add New Post'),
            'new_item' => __('New Post'),
            'edit_item' => __('Edit Post'),
            'view_item' => __('View Post'),
            'all_items' => __('All Posts'),
            'search_items' => __('Search Posts'),
            'not_found' => __('No Posts found.')
        );

        $this->registerPostType($this->postType, array(
            'supports' => $supports,
            'labels' => $labels,
            'public' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'posts'),
            // 'taxonomies'    => [],
            'has_archive' => true,
            'hierarchical' => false
        ));
    }

}