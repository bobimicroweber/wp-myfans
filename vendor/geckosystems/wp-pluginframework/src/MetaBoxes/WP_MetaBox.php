<?php
namespace WP_PluginFramework\MetaBoxes;

abstract class WP_MetaBox
{
    public static $id;
    public static $title;
    public static $postType;

    public static function register() {

        $postType = static::$postType;
        $id = static::$id;
        $title = static::$title;

        add_action("add_meta_boxes", function () use($postType, $id, $title) {
            add_meta_box($id, __($title), function ($data) {
                echo static::html($data);
            }, $postType, 'side', 'high');
        });

    }

    public static function html($data)
    {
        return '';
    }


}