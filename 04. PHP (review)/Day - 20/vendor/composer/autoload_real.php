<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit0f763326a42d6e142d8a4e8bb303574f
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

        spl_autoload_register(array('ComposerAutoloaderInit0f763326a42d6e142d8a4e8bb303574f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit0f763326a42d6e142d8a4e8bb303574f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit0f763326a42d6e142d8a4e8bb303574f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
