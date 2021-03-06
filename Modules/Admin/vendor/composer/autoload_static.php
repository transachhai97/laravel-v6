<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit721222c3f4892fec2bb706e8b15fc67f
{
    public static $prefixLengthsPsr4 = [
        'M' => [
            'Modules\\Admin\\' => 14,
        ],
    ];

    public static $prefixDirsPsr4 = [
        'Modules\\Admin\\' => [
            0 => __DIR__ . '/../..' . '/',
        ],
    ];

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(
            function () use ($loader) {
                $loader->prefixLengthsPsr4 =
                    ComposerStaticInit721222c3f4892fec2bb706e8b15fc67f::$prefixLengthsPsr4;
                $loader->prefixDirsPsr4 =
                    ComposerStaticInit721222c3f4892fec2bb706e8b15fc67f::$prefixDirsPsr4;
            },
            null,
            ClassLoader::class
        );
    }
}
