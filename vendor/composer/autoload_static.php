<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc5e93e1b7005672a6ceda504ec31cea
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc5e93e1b7005672a6ceda504ec31cea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc5e93e1b7005672a6ceda504ec31cea::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
