<?php

namespace app\controllers\admin;

use core\base\View;

class MainController extends AdminController {

  public function indexAction() {

    $this->setMeta(
      "Admin panel | TonePHP Framework",
      "TonePHP Framework admin panel - main page",
      "TonePHP, Tone PHP, tone php, tonephp framework, admin page"
    );
  }
}