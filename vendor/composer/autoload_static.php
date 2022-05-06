<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit692b02631cbc214d937ad2471a10e49b
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Renaldy\\PhpFPGrowth\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Renaldy\\PhpFPGrowth\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit692b02631cbc214d937ad2471a10e49b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit692b02631cbc214d937ad2471a10e49b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit692b02631cbc214d937ad2471a10e49b::$classMap;

        }, null, ClassLoader::class);
    }
}