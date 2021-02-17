<?php

namespace app\controllers\admin;

use core\base\View;

class UserController extends AdminController {

  use TPublicController;

  public function loginAction() {
    
    View::setMeta(
      "Login"
    );
  }
}