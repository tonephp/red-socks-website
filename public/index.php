<?php

use core\Router;
use core\Tone;

$query = $_SERVER['QUERY_STRING'];
$query = rtrim($query, '/');

define("DEBUG", 1);
define('WWW', __DIR__);
define('ROOT', dirname(__DIR__));
define('CORE', ROOT . '/core');
define('APP', ROOT . '/app');
define('CACHE', ROOT . '/tmp/cache');
define('LAYOUT', 'default');

require '../core/functions.php';

spl_autoload_register(function($class) {
  $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
  
  if (is_file($file)) {
    require_once $file;
  }
});

new Tone;

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);