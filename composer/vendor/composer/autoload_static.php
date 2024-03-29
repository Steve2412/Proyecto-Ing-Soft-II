<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85452bcf8c9fa9cb6c6a0d683cb0848e
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Ifsnop\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ifsnop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ifsnop/mysqldump-php/src/Ifsnop',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85452bcf8c9fa9cb6c6a0d683cb0848e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85452bcf8c9fa9cb6c6a0d683cb0848e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit85452bcf8c9fa9cb6c6a0d683cb0848e::$classMap;

        }, null, ClassLoader::class);
    }
}
