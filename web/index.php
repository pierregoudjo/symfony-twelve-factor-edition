<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
use Symfony\Component\VarDumper\VarDumper;
use Dotenv\Dotenv;

/**
 * @var Composer\Autoload\ClassLoader
 */
$loader = require __DIR__.'/../app/autoload.php';
include_once __DIR__.'/../var/bootstrap.php.cache';

// Enable APC for autoloading to improve performance.
// You should change the ApcClassLoader first argument to a unique prefix
// in order to prevent cache key conflicts with other applications
// also using APC.
/*
$apcLoader = new Symfony\Component\ClassLoader\ApcClassLoader(sha1(__FILE__), $loader);
$loader->unregister();
$apcLoader->register(true);
*/

require_once __DIR__.'/../app/AppKernel.php';
//require_once __DIR__.'/../app/AppCache.php';


$dotenv = new Dotenv(__DIR__ . '/../');
$dotenv->overLoad();

if ((bool)$_SERVER['SYMFONY_DEBUG']) {
	Debug::enable();
}

$kernel = new AppKernel($_SERVER['SYMFONY_ENV'], (bool)$_SERVER['SYMFONY_DEBUG']);
$kernel->loadClassCache();
// //$kernel = new AppCache($kernel);

// // When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
// //Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);