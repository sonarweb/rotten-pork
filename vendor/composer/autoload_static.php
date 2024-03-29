<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac50ccf1a808e4a91ead387abcb6f222
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitac50ccf1a808e4a91ead387abcb6f222::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac50ccf1a808e4a91ead387abcb6f222::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
