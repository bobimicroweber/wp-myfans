<?php
namespace WP_PluginFramework\Filters;

abstract class WP_Filter
{
    public static $filter;

    public static function register()
    {

        add_filter(static::$filter, function ($data) {
            return static::filter($data);
        }, 5);
    }

    public static function filter($data)
    {

    }
}