<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8220111dcb269efe2ea897f75c6b3cac
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TypeIt\\' => 7,
            'Tests\\' => 6,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TypeIt\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8220111dcb269efe2ea897f75c6b3cac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8220111dcb269efe2ea897f75c6b3cac::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
