<?php
namespace WP_MyFans\PostTypes;

use WP_MyFans\Framework\PostTypes\WP_PostType;

class WP_MyFansPostType extends WP_PostType
{
    public static $postSlug = 'posts';
    public static $postType = 'wp-myfans';
    public static $postLabelMenuName = 'MyFans';
    public static $postLabelName = 'Posts';
    public static $postLabelSingularName = 'Post';
    public static $supports = array('title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'page-attributes', 'post-formats');

}