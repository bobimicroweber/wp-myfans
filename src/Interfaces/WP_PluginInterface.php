<?php
namespace WP_MyFans\Interfaces;

interface WP_PluginInterface
{
    public static function activatePlugin();

    public static function deactivatePlugin();

    public static function uninstallPlugin();
}