<?php
namespace WP_MyFans\Framework;

use WP_MyFans\Framework\Interfaces\WP_PluginInterface;

abstract class WP_Plugin implements WP_PluginInterface
{
    public function run()
    {

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