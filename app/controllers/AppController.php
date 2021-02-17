<?php

namespace app\controllers;

use core\Tone;
use core\base\Controller;
use core\base\Lang;
use app\widgets\lang\Lang as LangWidget;

class AppController extends Controller {
  
  public function __construct($route) {
    parent::__construct($route);

    $langs = LangWidget::getLangs();
    $lang = LangWidget::getLang($langs);

    Tone::$app->setProperty('langs', $langs);
    Tone::$app->setProperty('lang', $lang);

    $lang = Tone::$app->getProperty('lang');
    Lang::load($lang['code']);
  }
}