<?php
namespace WP_MyFans\Framework;

use WP_MyFans\Framework\Interfaces\WP_PluginInterface;

abstract class WP_Plugin implements WP_PluginInterface
{
    public function run()
    {

    }

    public function addMetaBox($id, $title, $callback, $screen = null, $context = 'advanced', $priority = 'default', $callback_args = null)
    {
        add_action("add_meta_boxes", function () use ($id, $title, $callback, $screen, $context, $priority, $callback_args) {
            add_meta_box($id, $title, $callback, $screen, $context, $priority, $callback_args);
        });
    }

    public function registerPostType($postType, $args = array())
    {
        add_action('init', function () use ($postType, $args) {
            register_post_type($postType, $args);
        });
    }

    public static function activatePlugin()
    {
        return true;
    }

    public static function deactivatePlugin()
    {
        return true;
    }

    public static function uninstallPlugin()
    {
        return true;
    }

}