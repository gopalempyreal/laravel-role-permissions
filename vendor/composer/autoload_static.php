<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit908fc1edacad7ca0ff98aa7182c0db4a
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Empyrealinfotech\\RolePermissions\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Empyrealinfotech\\RolePermissions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit908fc1edacad7ca0ff98aa7182c0db4a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit908fc1edacad7ca0ff98aa7182c0db4a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit908fc1edacad7ca0ff98aa7182c0db4a::$classMap;

        }, null, ClassLoader::class);
    }
}
