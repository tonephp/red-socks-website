<?php

namespace core\base;

class Lang {

  public static $data = [];
  public static $layout = [];
  public static $view = [];

  public static function load($code, $route) {
    $layout = APP . "/langs/{$code}.php";
    $view = APP . "/langs/{$code}/{$route['controller']}/{$route['action']}.php";

    if (file_exists($layout)) {
        self::$layout = require $layout;
    }

    if (file_exists($view)) {
        self::$view = require $view;
    }

    self::$data = array_merge(self::$layout, self::$view);
  }

  public static function get($key = 'default') {
    return isset(self::$data[$key]) ? self::$data[$key] : $key;
  }
}