<?php

namespace app\controllers;

use core\Tone;
use core\base\Controller;
use app\widgets\lang\Lang;
use app\widgets\translate\Translate;

class AppController extends Controller {
  
  public function __construct($route) {
    parent::__construct($route);

    $this->loadLangs();
  }

  public function loadLangs() {
    $langs = Lang::getLangs();
    $lang = Lang::getLang($langs);

    Tone::$app->setProperty('langs', $langs);
    Tone::$app->setProperty('lang', $lang);

    $lang = Tone::$app->getProperty('lang');
    Translate::load($lang['code']);
  }
}