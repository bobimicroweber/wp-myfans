<?php

namespace WP_MyFans;

use WP_MyFans\Abstracts\WP_Plugin;

class WP_MyFansPlugin extends WP_Plugin
{


    public function run()
    {

        add_filter('the_content', function ($content) {

            global $wp_query;

            // Check if we're inside the main loop in a single Post.
            if ( is_singular() && in_the_loop() && is_main_query() ) {
                var_dump(get_post());
            }

            return $content;
        }, 5);



        $supports = array('title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'page-attributes', 'post-formats');

        $labels = array(
            'name'          => _x('MyFans Posts', 'plural'),
            'singular_name' => _x('Posts', 'singular'),
            'menu_name'     => _x('MyFans', 'admin menu'),
            'name_admin_bar'=> _x('Posts', 'admin bar'),
            'add_new'       => _x('Add New', 'add new'),
            'add_new_item'  => __('Add New Post'),
            'new_item'      => __('New Post'),
            'edit_item'     => __('Edit Post'),
            'view_item'     => __('View Post'),
            'all_items'     => __('All Posts'),
            'search_items'  => __('Search Posts'),
            'not_found'     => __('No Posts found.')
        );

        $args = array(
            'supports'      => $supports,
            'labels'        => $labels,
            'public'        => true,
            'query_var'     => true,
            'rewrite'       => array('slug' => 'posts'),
            // 'taxonomies'    => [],
            'has_archive'   => true,
            'hierarchical'  => false
        );
        $this->registerPostType('my-fans', $args);



        add_action( "add_meta_boxes", function () {
            add_meta_box("newsletter_main_post",
                esc_html("Add article", "newsletter"), array($this, "add_article_html"), "newsletter", 'advanced');
        });
    }


}