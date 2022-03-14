<?php
namespace WP_MyFans\Framework\Interfaces;

interface WP_PluginInterface
{
    public static function activatePlugin();

    public static function deactivatePlugin();

    public static function uninstallPlugin();
}