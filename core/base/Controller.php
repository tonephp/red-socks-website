<?php

namespace core\base;

use core\Tone;
use app\widgets\lang\Lang as LangWidget;

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

      $langs = LangWidget::getLangs();
      $lang = LangWidget::getLang($langs);

      Tone::$app->setProperty('langs', $langs);
      Tone::$app->setProperty('lang', $lang);

      $lang = Tone::$app->getProperty('lang');
      Lang::load($lang['code']);
  }

  public function getView() {
    $viewObj = new View($this->route, $this->layout, $this->view);
    $viewObj->render($this->vars);
  }

  public function set($vars) {
    $this->vars = array_merge($this->vars, $vars);
  }
}