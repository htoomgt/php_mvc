<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25670fbef85239fe8b70acbf421b2e83
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'L' => 
        array (
            'Lib\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controller\\' => 11,
            'Config\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
        'Lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25670fbef85239fe8b70acbf421b2e83::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25670fbef85239fe8b70acbf421b2e83::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
