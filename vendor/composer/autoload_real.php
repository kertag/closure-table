<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit300bcec0cc2ce7ff93b5042d4d2875ad
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

        spl_autoload_register(array('ComposerAutoloaderInit300bcec0cc2ce7ff93b5042d4d2875ad', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit300bcec0cc2ce7ff93b5042d4d2875ad', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit300bcec0cc2ce7ff93b5042d4d2875ad::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
