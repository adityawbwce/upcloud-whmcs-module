<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78f636baacb29d9dbf4ccf2032d74292
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'ModulesGarden\\upCloudVm\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ModulesGarden\\upCloudVm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'Httpful' => 
            array (
                0 => __DIR__ . '/..' . '/nategood/httpful/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78f636baacb29d9dbf4ccf2032d74292::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78f636baacb29d9dbf4ccf2032d74292::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit78f636baacb29d9dbf4ccf2032d74292::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}