<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5454be775471f81b876e2ff96fc7aaa
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wheredidgogogo\\Avanser\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wheredidgogogo\\Avanser\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5454be775471f81b876e2ff96fc7aaa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5454be775471f81b876e2ff96fc7aaa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
