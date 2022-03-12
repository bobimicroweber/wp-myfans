<?php
if (!defined('ABSPATH')) {
    exit;
}

class WP_MyFans
{
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