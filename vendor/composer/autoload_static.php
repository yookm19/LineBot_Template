<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit997cb2490a52a2ec30318308f100f23c
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit997cb2490a52a2ec30318308f100f23c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit997cb2490a52a2ec30318308f100f23c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
