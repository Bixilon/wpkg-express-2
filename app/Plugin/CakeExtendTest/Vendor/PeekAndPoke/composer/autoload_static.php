<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite91ddabe58fe4ffa3d4c3489c4d980c0
{
    public static $classMap = array (
        'SebastianBergmann\\PeekAndPoke\\BadAttributeAccessException' => __DIR__ . '/..' . '/sebastian/peek-and-poke/src/BadAttributeAccessException.php',
        'SebastianBergmann\\PeekAndPoke\\BadMethodCallException' => __DIR__ . '/..' . '/sebastian/peek-and-poke/src/BadMethodCallException.php',
        'SebastianBergmann\\PeekAndPoke\\Exception' => __DIR__ . '/..' . '/sebastian/peek-and-poke/src/Exception.php',
        'SebastianBergmann\\PeekAndPoke\\InvalidArgumentException' => __DIR__ . '/..' . '/sebastian/peek-and-poke/src/InvalidArgumentException.php',
        'SebastianBergmann\\PeekAndPoke\\Proxy' => __DIR__ . '/..' . '/sebastian/peek-and-poke/src/Proxy.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite91ddabe58fe4ffa3d4c3489c4d980c0::$classMap;

        }, null, ClassLoader::class);
    }
}