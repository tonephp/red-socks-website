<?php

namespace app\controllers;

use core\base\View;
use app\models\User;

class UserController extends AppController {
    
    public function signupAction() {

        if (!empty($_POST)) {
            $data = $_POST;
            $user = new User();
            $user->load($data);

            $isUserValid = $user->validate($data);
            $isUserUnique = $user->checkUnique();

            if (!$isUserValid || !$isUserUnique) {
                $user->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }

            $user->attributes['password'] = password_hash(
                $user->attributes['password'],
                PASSWORD_DEFAULT
            );
            
            $user->save();
        }

        View::setMeta(
            "Registration | TonePHP Framework"
        );

        $login = isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['login']) : '';
        $email = isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : '';
        $name = isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '';
        
        $this->set(compact('login', 'email', 'name'));

        unset($_SESSION['form_data']);
    }

    public function loginAction() {

    }

    public function logoutAction() {

    }
}