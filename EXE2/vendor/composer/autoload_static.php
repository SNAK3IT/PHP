<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25eddb564bb504506d2232ba87a6e350
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Main\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Main\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25eddb564bb504506d2232ba87a6e350::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25eddb564bb504506d2232ba87a6e350::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}