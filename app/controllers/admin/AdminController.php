<?php

namespace app\controllers\admin;

use core\base\Controller;
use app\models\User;

class AdminController extends Controller {
  public $layout = 'admin';

  public function __construct($route) {
    parent::__construct($route);

    if (
      isset($this::$public) && !$this::$public || 
      !isset($this::$public)
    ) {

      if (!User::isAdmin()) {
        redirect('/admin/user/login');
      }
    }
  }
}