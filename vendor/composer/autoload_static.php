<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27933e6912824dd3040647e7252037eb
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Edilson\\Data\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Edilson\\Data\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit27933e6912824dd3040647e7252037eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27933e6912824dd3040647e7252037eb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit27933e6912824dd3040647e7252037eb::$classMap;

        }, null, ClassLoader::class);
    }
}
