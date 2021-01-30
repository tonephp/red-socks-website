<?php

namespace core;

class Registry {

  use TSingletone;

  public static $objects = [];

  protected function __construct() {
    require ROOT . '/config/main.php';

    foreach ($config['components'] as $name => $component) {
      self::$objects[$name] = new $component;
    }
  }

  public function __get($name) {
    if (is_object(self::$objects[$name])) {
      return self::$objects[$name];
    }
  }
  
  public function __set($name, $component) {
    if (!isset(self::$objects[$name])) {
      self::$objects[$name] = new $component;
    }
  }

  public function showList() {
    echo '<pre>';
    var_dump(self::$objects);
    echo '</pre>';
  }
}
