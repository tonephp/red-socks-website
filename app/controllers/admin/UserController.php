<?php

namespace app\controllers\admin;

use core\base\View;
use app\models\User;

class UserController extends AdminController {

  public $public = true;

  public function loginAction() {

    if (!empty($_POST)) {
      $user = new User();
      
      if ($user->login()) {
        
        if (User::isAdmin()) {
          $_SESSION['success'] = "Вы успешно авторизированы!";

          redirect('/admin');
        } else {
          $_SESSION['errors'] = "Вы не являетесь администратором! Используйте другие доступы";
          
          redirect('/logout');
        }
      } else {
        $_SESSION['errors'] = "Login/Password вверены неправильно!";
      }
    }
    
    View::setMeta(
      "Login"
    );
  }
}