<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3402131e995f091515940e564768598b
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hello\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hello\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/wcs',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3402131e995f091515940e564768598b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3402131e995f091515940e564768598b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3402131e995f091515940e564768598b::$classMap;

        }, null, ClassLoader::class);
    }
}
