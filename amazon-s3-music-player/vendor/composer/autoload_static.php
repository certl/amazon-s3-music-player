<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d81d3951296c1cb62b8f048b6922486
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Stdlib\\' => 12,
            'Zend\\Session\\' => 13,
            'Zend\\Permissions\\Acl\\' => 21,
            'Zend\\Hydrator\\' => 14,
            'Zend\\EventManager\\' => 18,
            'Zend\\Authentication\\' => 20,
        ),
        'S' => 
        array (
            'Slim\\Views\\' => 11,
            'Slim\\PDO\\' => 9,
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\Session\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-session/src',
        ),
        'Zend\\Permissions\\Acl\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-permissions-acl/src',
        ),
        'Zend\\Hydrator\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-hydrator/src',
        ),
        'Zend\\EventManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-eventmanager/src',
        ),
        'Zend\\Authentication\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-authentication/src',
        ),
        'Slim\\Views\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/php-view/src',
        ),
        'Slim\\PDO\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/pdo/src/PDO',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
        'J' => 
        array (
            'JeremyKendall\\Slim\\Auth\\' => 
            array (
                0 => __DIR__ . '/..' . '/jeremykendall/slim-auth/src',
            ),
            'JeremyKendall\\Password\\' => 
            array (
                0 => __DIR__ . '/..' . '/jeremykendall/password-validator/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d81d3951296c1cb62b8f048b6922486::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d81d3951296c1cb62b8f048b6922486::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8d81d3951296c1cb62b8f048b6922486::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
