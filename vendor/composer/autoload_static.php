<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb09c5211bf07bffd0b9fa3e3f66e5e3
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vishnu\\Gymsystem\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vishnu\\Gymsystem\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb09c5211bf07bffd0b9fa3e3f66e5e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb09c5211bf07bffd0b9fa3e3f66e5e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfb09c5211bf07bffd0b9fa3e3f66e5e3::$classMap;

        }, null, ClassLoader::class);
    }
}
