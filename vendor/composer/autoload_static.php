<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99620b02f800a60b7ce00d7df4e71ba4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stati\\Plugin\\Paginate\\Tests\\' => 28,
            'Stati\\Plugin\\Paginate\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stati\\Plugin\\Paginate\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Stati\\Plugin\\Paginate\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit99620b02f800a60b7ce00d7df4e71ba4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99620b02f800a60b7ce00d7df4e71ba4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
