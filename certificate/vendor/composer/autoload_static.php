<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb1834fe8e88e36891312cf8d81dd966
{
    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'ConvertApi\\' => 
            array (
                0 => __DIR__ . '/..' . '/convertapi/convertapi-php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitfb1834fe8e88e36891312cf8d81dd966::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
