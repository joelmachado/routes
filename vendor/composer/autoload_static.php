<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1850b2a229d581b01abb13b345b64943
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Klein\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1850b2a229d581b01abb13b345b64943::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1850b2a229d581b01abb13b345b64943::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1850b2a229d581b01abb13b345b64943::$classMap;

        }, null, ClassLoader::class);
    }
}
