<?php

namespace MyFans\PostTypes;

use WP_PluginFramework\PostTypes\WP_PostType;

class MyFansPostType extends WP_PostType
{
    public static $postSlug = 'posts';
    public static $postType = 'myfans';
    public static $postLabelMenuName = 'MyFans';
    public static $postLabelName = 'Posts';
    public static $postLabelSingularName = 'MyFans Post';

    public static $supports = array(
        'title',
        'editor',
        'author',
        'thumbnail',
        'comments',
        'revisions',
        'page-attributes',
        'post-formats'
    );

}