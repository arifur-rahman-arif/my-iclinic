<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8bcec06546d1ce13cc73f8c1df0671f2
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DigitalTechnologia\\MyIclinic\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DigitalTechnologia\\MyIclinic\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8bcec06546d1ce13cc73f8c1df0671f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8bcec06546d1ce13cc73f8c1df0671f2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8bcec06546d1ce13cc73f8c1df0671f2::$classMap;

        }, null, ClassLoader::class);
    }
}
