<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit051b2fde2bacfb538ca1ec52b3cfd5f5
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit051b2fde2bacfb538ca1ec52b3cfd5f5::$classMap;

        }, null, ClassLoader::class);
    }
}
