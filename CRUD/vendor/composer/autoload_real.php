<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit494733a4d57ac568bb89a863b8c77588
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit494733a4d57ac568bb89a863b8c77588', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit494733a4d57ac568bb89a863b8c77588', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit494733a4d57ac568bb89a863b8c77588::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
