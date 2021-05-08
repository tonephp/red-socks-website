<?php

namespace app\controllers\admin;

use core\Tone;
use core\base\Controller;
use app\models\User;
use app\widgets\lang\Lang;

class AdminController extends Controller {
  public $layout = 'admin';
  public $isAdmin = false;

  public function __construct($route) {
    parent::__construct($route);
    $isAdmin = $this->isAdmin = User::isAdmin();

    $this->set(compact('isAdmin'));

    $this->loadLangs();

    if (
      isset($this->public) && !$this->public ||
      !isset($this->public)
    ) {
      
      if (!$this->isAdmin) {
        if (isAjax()) {
          debug('errorsfdsfsf');
        } else {
          redirect('/admin/user/login');
        }
      }
    }
  }

  public function loadLangs() {
    $langs = Lang::getLangs();
    $lang = Lang::getLang($langs);

    Tone::$app->setProperty('langs', $langs);
    Tone::$app->setProperty('lang', $lang);
  }
}