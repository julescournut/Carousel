<?php

require __DIR__ . '/vendor/symfony/class-loader/Symfony/Component/ClassLoader/UniversalClassLoader.php';
require __DIR__ . '/lib/Thelia/Autoload/TheliaUniversalClassLoader.php';
require __DIR__ . '/lib/Thelia/Autoload/TheliaApcUniversalClassLoader.php';

use Thelia\Autoload\TheliaUniversalClassLoader;
use Thelia\Autoload\TheliaApcUniversalClassLoader;

if (extension_loaded('apc') && $env == 'prod') {
    $loader = new TheliaApcUniversalClassLoader('Thelia');
} else {
    $loader = new TheliaUniversalClassLoader();
}

$namespaces = require __DIR__ . '/vendor/composer/autoload_namespaces.php';

foreach ($namespaces as $namespace => $directory) {
    $loader->registerNamespace($namespace, $directory);
}

$loader->registerNamespace('Thelia', __DIR__ . '/lib/');

if(file_exists(__DIR__ . '/vendor/composer/autoload_classmap.php'))
{
    $classMap = require __DIR__ . '/vendor/composer/autoload_classmap.php';
        
    $loader->addClassMap($classMap);
}

$loader->register();