<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5efe911191ea838d9569e4db71d59b81
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5efe911191ea838d9569e4db71d59b81::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5efe911191ea838d9569e4db71d59b81::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5efe911191ea838d9569e4db71d59b81::$classMap;

        }, null, ClassLoader::class);
    }
}
