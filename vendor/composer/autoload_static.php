<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48cead24b552ca4ab85c20898d1587d0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48cead24b552ca4ab85c20898d1587d0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48cead24b552ca4ab85c20898d1587d0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
