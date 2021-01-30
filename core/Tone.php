<?php

namespace core;

use core\ErrorHandler;

class Tone {

  public static $app;

  public function __construct() {
    self::$app = Registry::instance();
    new ErrorHandler;
  }
}