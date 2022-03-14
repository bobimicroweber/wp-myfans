<?php

namespace WP_PluginFramework;

trait WP_PluginActivationTrait
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