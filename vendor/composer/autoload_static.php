<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ae63d8d01f21c621eadc5a40d1cd0ca
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MailboxValidator\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MailboxValidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/mailboxvalidator/mailboxvalidator-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ae63d8d01f21c621eadc5a40d1cd0ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ae63d8d01f21c621eadc5a40d1cd0ca::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
