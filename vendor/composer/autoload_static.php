<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit478bf062ac0dd59c364358f6d987a163
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit478bf062ac0dd59c364358f6d987a163::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit478bf062ac0dd59c364358f6d987a163::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
