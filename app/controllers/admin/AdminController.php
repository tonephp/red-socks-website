<?php

namespace app\controllers\admin;

use core\base\Controller;
use app\models\User;

class AdminController extends Controller {
  public $layout = 'admin';
  public $isAdmin = false;

  public function __construct($route) {
    parent::__construct($route);
    $isAdmin = $this->isAdmin = User::isAdmin();

    $this->set(compact('isAdmin'));

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
}