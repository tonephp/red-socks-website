<?php

namespace app\controllers;

use core\base\View;
use app\models\User;

class UserController extends AppController {
    
    public function signupAction() {
        if (!empty($_POST)) {
            $data = $_POST;
            $user = new User();
            
            if ($user->validate($data)) {
                $user->load($data);
                debug('valid');
            } else {
                debug('no');
            }
            
            die;
        }

        View::setMeta(
            "Registration | TonePHP Framework"
        );
    }

    public function loginAction() {

    }

    public function logoutAction() {

    }
}