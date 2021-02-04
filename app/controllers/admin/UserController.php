<?php

namespace app\controllers\admin;

use core\base\View;

class UserController extends AdminController {

  public function indexAction() {
    
    View::setMeta(
      "Admin panel | TonePHP Framework",
      "TonePHP Framework admin panel - main page",
      "TonePHP, Tone PHP, tone php, tonephp framework, admin page"
    );
  }
}