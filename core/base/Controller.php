<?php

namespace core\base;

use core\Tone;

abstract class Controller {

  public $route = [];
  public $view;
  public $layout;
  public $getMeta = null;
  public $vars = [];
  public $tone;

  public function __construct($route) {
      $this->route = $route;
      $this->view = $route['action'];
      $this->tone = Tone::$app;
  }

  public function getView() {
    $viewObj = new View($this->route, $this->layout, $this->view);
    $viewObj->render($this->vars);
  }

  public function set($vars) {
    $this->vars = $vars;
  }
}