<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd093924bc6e73a856b7808057cd1d900
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd093924bc6e73a856b7808057cd1d900::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd093924bc6e73a856b7808057cd1d900::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd093924bc6e73a856b7808057cd1d900::$classMap;

        }, null, ClassLoader::class);
    }
}