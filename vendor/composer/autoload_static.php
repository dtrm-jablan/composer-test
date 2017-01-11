<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32457725e6aa3f97eaeb1bb79f5cf85a
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DocuSign\\eSign\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DocuSign\\eSign\\' => 
        array (
            0 => __DIR__ . '/..' . '/docusign/esign-client/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit32457725e6aa3f97eaeb1bb79f5cf85a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32457725e6aa3f97eaeb1bb79f5cf85a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
