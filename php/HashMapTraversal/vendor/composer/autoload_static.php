<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13acb5534ece47640eddf4b3500f81c2
{
    public static $files = array (
        'a16312f9300fed4a097923eacb0ba814' => __DIR__ . '/..' . '/igorw/get-in/src/get_in.php',
    );

    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'idema\\utils\\arr\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'idema\\utils\\arr\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13acb5534ece47640eddf4b3500f81c2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13acb5534ece47640eddf4b3500f81c2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}