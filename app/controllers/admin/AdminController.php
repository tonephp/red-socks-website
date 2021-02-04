<?php

namespace app\controllers\admin;

use core\base\Controller;

class AdminController extends Controller {
  public $layout = 'admin';

  public function __construct($route) {
    parent::__construct($route);

    if (!isset($is_admin) || $is_admin !== 1) {
      header('Location: /');
    }
  }
}