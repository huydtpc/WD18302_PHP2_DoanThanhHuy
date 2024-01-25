<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27edc7ccb599239b4b09cdd35e173a45
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit27edc7ccb599239b4b09cdd35e173a45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27edc7ccb599239b4b09cdd35e173a45::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit27edc7ccb599239b4b09cdd35e173a45::$classMap;

        }, null, ClassLoader::class);
    }
}