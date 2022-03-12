<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb267449a4c90c1b1c1e8d3e0117cb96
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WP_MyFans\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WP_MyFans\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb267449a4c90c1b1c1e8d3e0117cb96::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb267449a4c90c1b1c1e8d3e0117cb96::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb267449a4c90c1b1c1e8d3e0117cb96::$classMap;

        }, null, ClassLoader::class);
    }
}