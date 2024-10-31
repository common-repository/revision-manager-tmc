<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4035297197d46063178eb892d9ff94d9
{
    public static $files = array (
        'a51ab3661bf8dceef68d3125823c3e2c' => __DIR__ . '/..' . '/tmc/shellpress/src/Shared/Utility/RequirementChecker.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tmc\\revisionmanager\\' => 20,
        ),
        's' => 
        array (
            'shellpress\\v1_4_0\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tmc\\revisionmanager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'shellpress\\v1_4_0\\' => 
        array (
            0 => __DIR__ . '/..' . '/tmc/shellpress',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mustache' => 
            array (
                0 => __DIR__ . '/..' . '/tmc/shellpress/lib/Mustache',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4035297197d46063178eb892d9ff94d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4035297197d46063178eb892d9ff94d9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4035297197d46063178eb892d9ff94d9::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4035297197d46063178eb892d9ff94d9::$classMap;

        }, null, ClassLoader::class);
    }
}
