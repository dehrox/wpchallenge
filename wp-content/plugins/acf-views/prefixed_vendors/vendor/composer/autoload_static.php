<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45002ffd231fb0e9ae9e63f6dc5f218d
{
    public static $files = array (
        '7166494aeff09009178f278afd86c83f' => __DIR__ . '/..' . '/yahnis-elsts/plugin-update-checker/load-v4p13.php',
    );

    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'org\\wplake\\acf_views\\vendors\\LightSource\\AcfGroups\\' => 51,
            'org\\wplake\\acf_views\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'org\\wplake\\acf_views\\vendors\\LightSource\\AcfGroups\\' => 
        array (
            0 => __DIR__ . '/..' . '/lightsource/acf-groups/src',
        ),
        'org\\wplake\\acf_views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45002ffd231fb0e9ae9e63f6dc5f218d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45002ffd231fb0e9ae9e63f6dc5f218d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit45002ffd231fb0e9ae9e63f6dc5f218d::$classMap;

        }, null, ClassLoader::class);
    }
}
