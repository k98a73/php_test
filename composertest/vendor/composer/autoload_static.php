<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite442f294a8f329b4bcae80205b58b451
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite442f294a8f329b4bcae80205b58b451::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite442f294a8f329b4bcae80205b58b451::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite442f294a8f329b4bcae80205b58b451::$classMap;

        }, null, ClassLoader::class);
    }
}
