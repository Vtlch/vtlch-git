<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba55147f04707a12d871599851adf3bb
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vtlch\\TestPhp\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vtlch\\TestPhp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitba55147f04707a12d871599851adf3bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba55147f04707a12d871599851adf3bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitba55147f04707a12d871599851adf3bb::$classMap;

        }, null, ClassLoader::class);
    }
}
