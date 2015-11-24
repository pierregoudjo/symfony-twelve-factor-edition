<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

error_reporting(error_reporting() & ~E_USER_DEPRECATED);

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

if (!isset($_SERVER['SYMFONY_ENV'])) {
    $dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
    $dotenv->overLoad();
}
$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->overLoad();

return $loader;
