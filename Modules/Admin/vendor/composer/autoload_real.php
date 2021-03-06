<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit721222c3f4892fec2bb706e8b15fc67f
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

        spl_autoload_register(
            [
                'ComposerAutoloaderInit721222c3f4892fec2bb706e8b15fc67f',
                'loadClassLoader',
            ],
            true,
            true
        );
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister([
            'ComposerAutoloaderInit721222c3f4892fec2bb706e8b15fc67f',
            'loadClassLoader',
        ]);

        $useStaticLoader =
            PHP_VERSION_ID >= 50600 &&
            !defined('HHVM_VERSION') &&
            (!function_exists('zend_loader_file_encoded') ||
                !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

            call_user_func(
                \Composer\Autoload\ComposerStaticInit721222c3f4892fec2bb706e8b15fc67f::getInitializer(
                    $loader
                )
            );
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        return $loader;
    }
}
